using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace IT490.Models
{
    public class ItemDTO
    {
        [HiddenInput(DisplayValue = false)]
        public int ID { get; set; }
        public string Name { get; set; }

        [DisplayName("Quantity Available")]
        public int QuantityAvailable { get; set; }

        [DataType(DataType.Currency)]
        public decimal Price { get; set; }
    }
}