using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace IT490.Models
{
    public class InvoiceDTO
    {
        [HiddenInput(DisplayValue = false)]
        public int ID { get; set; }

        [DisplayFormat(DataFormatString = "{0:C}")]
        [HiddenInput(DisplayValue = false)]
        public decimal AmountBillable
        {
            get
            {
                return Items != null ? Items.Select(x => x.Price).Sum() : 0;
            }
            set
            {

            }
        }

        [DisplayName("Customer")]
        [UIHint("Customers")]
        public int CustomerID { get; set; }

        public CustomerDTO Customer { get; set; }

        [HiddenInput(DisplayValue = false)]
        public string CustomerName
        {
            get
            {
                return Customer != null ? Customer.Name : "";
            }
        }

        public List<ItemDTO> Items { get; set; }

        [DisplayName("Items")]
        [UIHint("InvoiceItems")]
        public string ItemIDs { get; set; }

        public InvoiceDTO()
        {
            if (Items != null)
            {
                ItemIDs = String.Join(",", Items.Select(x => x.ID).ToArray());
            }
        }

        [DisplayName("Items")]
        [HiddenInput(DisplayValue = false)]
        public string ItemNames
        {
            get
            {
                return Items != null ? String.Join(", ", Items.Select(x => x.Name)) : "";
            }
        }
    }
}