using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace IT490.Models
{
    [Table("Invoice")]
    public class Invoice
    {
        public int ID { get; set; }
        public decimal AmountBillable { get; set; }

        public virtual Customer Customer { get; set; }

        public virtual ICollection<Item> Items { get; set; }
    }
}