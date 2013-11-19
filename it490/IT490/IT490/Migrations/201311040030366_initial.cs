namespace IT490.Migrations
{
    using System;
    using System.Data.Entity.Migrations;
    
    public partial class initial : DbMigration
    {
        public override void Up()
        {
            CreateTable(
                "Customer",
                c => new
                    {
                        ID = c.Int(nullable: false, identity: true),
                        Name = c.String(unicode: false),
                        Address = c.String(unicode: false),
                    })
                .PrimaryKey(t => t.ID);
            
            CreateTable(
                "Item",
                c => new
                    {
                        ID = c.Int(nullable: false, identity: true),
                        Name = c.String(unicode: false),
                        QuantityAvailable = c.Int(nullable: false),
                        Price = c.Decimal(nullable: false, precision: 18, scale: 2),
                    })
                .PrimaryKey(t => t.ID);
            
            CreateTable(
                "Invoice",
                c => new
                    {
                        ID = c.Int(nullable: false, identity: true),
                        AmountBillable = c.Decimal(nullable: false, precision: 18, scale: 2),
                        Customer_ID = c.Int(),
                    })
                .PrimaryKey(t => t.ID)
                .ForeignKey("Customer", t => t.Customer_ID)
                .Index(t => t.Customer_ID);
            
            CreateTable(
                "InvoiceItems",
                c => new
                    {
                        Invoice_ID = c.Int(nullable: false),
                        Item_ID = c.Int(nullable: false),
                    })
                .PrimaryKey(t => new { t.Invoice_ID, t.Item_ID })
                .ForeignKey("Invoice", t => t.Invoice_ID, cascadeDelete: true)
                .ForeignKey("Item", t => t.Item_ID, cascadeDelete: true)
                .Index(t => t.Invoice_ID)
                .Index(t => t.Item_ID);
            
        }
        
        public override void Down()
        {
            DropIndex("InvoiceItems", new[] { "Item_ID" });
            DropIndex("InvoiceItems", new[] { "Invoice_ID" });
            DropIndex("Invoice", new[] { "Customer_ID" });
            DropForeignKey("InvoiceItems", "Item_ID", "Item");
            DropForeignKey("InvoiceItems", "Invoice_ID", "Invoice");
            DropForeignKey("Invoice", "Customer_ID", "Customer");
            DropTable("InvoiceItems");
            DropTable("Invoice");
            DropTable("Item");
            DropTable("Customer");
        }
    }
}
