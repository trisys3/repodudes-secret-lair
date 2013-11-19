using IT490.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Kendo.Mvc.UI;
using Kendo.Mvc.Extensions;

namespace IT490.Controllers
{
    public class InvoiceController : Controller
    {
        //
        // GET: /Invoice/

        [HttpGet]
        public ActionResult Index()
        {
            using (var context = new DataContext())
            {
                var invoices = new List<InvoiceDTO>();

                foreach (var invoice in context.Invoices.ToList())
                {
                    var dto = new InvoiceDTO();
                    
                    dto.ID = invoice.ID;
                    var customer = context.Customers.SingleOrDefault(x => x.ID == invoice.Customer.ID);
                    dto.Customer = new CustomerDTO
                    {
                        ID = customer.ID,
                        Name = customer.Name,
                        Address = customer.Address
                    };

                    dto.Items = new List<ItemDTO>();
                    dto.CustomerID = customer.ID;

                    foreach (var item in invoice.Items)
                    {
                        var itemDTO = new ItemDTO
                        {
                            ID = item.ID,
                            Name = item.Name,
                            QuantityAvailable = item.QuantityAvailable,
                            Price = item.Price
                        };

                        dto.Items.Add(itemDTO);
                    }

                    invoices.Add(dto);
                }

                ViewData["Items"] = context.Items.ToList().Select(x => new ItemDTO { ID = x.ID, Price = x.Price, QuantityAvailable = x.QuantityAvailable, Name = x.Name });
                ViewData["Customers"] = context.Customers.ToList().Select(x => new CustomerDTO { ID = x.ID, Name = x.Name, Address = x.Address });

                return View(invoices);
            }
        }

        [HttpPost]
        public ActionResult Create([DataSourceRequest] DataSourceRequest request, FormCollection form, List<ItemDTO> items)
        {
            var invoice = new Invoice();
            var dto = new InvoiceDTO();

            if (TryUpdateModel(dto))
            {
                using (var context = new DataContext())
                {
                    invoice.Items = new List<Item>();

                    foreach (var item in dto.ItemIDs.Split(','))
                    {
                        var id = int.Parse(item);
                        var existing = context.Items.SingleOrDefault(x => x.ID == id);
                        invoice.Items.Add(existing);
                    }

                    invoice.Customer = context.Customers.SingleOrDefault(x => x.ID == dto.CustomerID);
                    context.Invoices.Add(invoice);
                    context.SaveChanges();

                    dto.ID = invoice.ID;
                    dto.Customer = new CustomerDTO { ID = invoice.Customer.ID, Address = invoice.Customer.Address, Name = invoice.Customer.Name };
                    dto.Items = new List<ItemDTO>(invoice.Items.Select(x => new ItemDTO { ID = x.ID, Price = x.Price, QuantityAvailable = x.QuantityAvailable, Name = x.Name }));
                }
            }

            return Json(new[] { dto }.ToDataSourceResult(request));
        }

        [HttpPost]
        public ActionResult Update([DataSourceRequest] DataSourceRequest request)
        {
            var invoice = new Invoice();
            var dto = new InvoiceDTO();

            if (TryUpdateModel(dto))
            {
                using (var context = new DataContext())
                {
                    var existing = context.Invoices.SingleOrDefault(x => x.ID == dto.ID);

                    if (existing != null)
                    {
                        existing.Customer = context.Customers.SingleOrDefault(x => x.ID == dto.CustomerID);
                    }

                    var itemIDs = new List<int>();

                    foreach (var item in dto.ItemIDs.Split(','))
                    {
                        itemIDs.Add(int.Parse(item));
                    }

                    var existingItems = new List<Item>(existing.Items);

                    foreach (var item in existingItems)
                    {
                        if (!itemIDs.Contains(item.ID))
                        {
                            existing.Items.Remove(item);
                        }
                    }

                    foreach (var item in itemIDs)
                    {
                        var eItem = existing.Items.SingleOrDefault(x => x.ID == item);

                        if (eItem == null)
                        {
                            eItem = context.Items.SingleOrDefault(x => x.ID == item);
                            existing.Items.Add(eItem);
                        }
                    }

                    context.SaveChanges();
                    dto.ID = invoice.ID;
                    dto.Customer = new CustomerDTO { ID = existing.Customer.ID, Address = existing.Customer.Address, Name = existing.Customer.Name };
                    dto.Items = new List<ItemDTO>(existing.Items.Select(x => new ItemDTO { ID = x.ID, Price = x.Price, QuantityAvailable = x.QuantityAvailable, Name = x.Name }));
                }
            }

            return Json(new[] { dto }.ToDataSourceResult(request));
        }

        [HttpPost]
        public ActionResult Destroy([DataSourceRequest] DataSourceRequest request, int id)
        {
            using (var context = new DataContext())
            {
                var invoice = context.Invoices.SingleOrDefault(x => x.ID == id);

                if (invoice != null)
                {
                    context.Invoices.Remove(invoice);
                    context.SaveChanges();
                }
            }

            return Json(new InvoiceDTO[] { }.ToDataSourceResult(request));
        }
    }
}
