using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace IT490.Models
{
    [Table("Customer")]
    public class Customer
    {
        public int ID { get; set; }
        public string Name { get; set; }
        public string Address { get; set; }
    }
}