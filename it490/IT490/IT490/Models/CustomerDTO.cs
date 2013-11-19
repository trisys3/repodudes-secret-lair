using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace IT490.Models
{
    public class CustomerDTO
    {
        [HiddenInput(DisplayValue = false)]
        public int ID { get; set; }
        public string Name { get; set; }
        public string Address { get; set; }
    }
}