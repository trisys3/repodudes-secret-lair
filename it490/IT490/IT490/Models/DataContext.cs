using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace IT490.Models
{
    public class DataContext : DbContext
    {
        public IDbSet<Customer> Customers { get; set; }
        public IDbSet<Item> Items { get; set; }
        public IDbSet<Invoice> Invoices { get; set; }

        public DataContext()
            : base("IT490")
        {

        }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            base.OnModelCreating(modelBuilder);
            modelBuilder.Entity<Customer>().ToTable("Customer", null);
            modelBuilder.Entity<Item>().ToTable("Item", null);
            modelBuilder.Entity<Invoice>().ToTable("Invoice", null);
        }
    }
}