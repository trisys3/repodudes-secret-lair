using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace IT490.Models
{
    [Table("Item")]
    public class Item
    {
        public int ID { get; set; }
        public string Name { get; set; }
        public int QuantityAvailable { get; set; }
        public decimal Price { get; set; }

        public virtual ICollection<Invoice> Invoices { get; set; }
    }
}