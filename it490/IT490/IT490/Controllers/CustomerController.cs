using IT490.Models;
using Kendo.Mvc.UI;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Kendo.Mvc.Extensions;

namespace IT490.Controllers
{
    public class CustomerController : Controller
    {
        //
        // GET: /Customer/

        [HttpGet]
        public ActionResult Index()
        {
            using (var context = new DataContext())
            {
                var customers = context.Customers.ToList().Select(x => new CustomerDTO
                {
                    ID = x.ID,
                    Name = x.Name,
                    Address = x.Address
                });

                return View(customers);
            }
        }

        [HttpPost]
        public ActionResult Create([DataSourceRequest] DataSourceRequest request)
        {
            var customer = new Customer();
            var dto = new CustomerDTO();

            if (TryUpdateModel(customer))
            {
                using (var context = new DataContext())
                {
                    context.Customers.Add(customer);
                    context.SaveChanges();
                }

                dto.ID = customer.ID;
                dto.Name = customer.Name;
                dto.Address = customer.Address;
            }

            return Json(new[] { dto }.ToDataSourceResult(request));
        }

        [HttpPost]
        public ActionResult Read([DataSourceRequest] DataSourceRequest request)
        {
            using (var context = new DataContext())
            {
                var customers = context.Customers.ToList().Select(x => new CustomerDTO
                {
                    ID = x.ID,
                    Name = x.Name,
                    Address = x.Address
                });

                return Json(customers.ToDataSourceResult(request));
            }
        }

        [HttpPost]
        public ActionResult Update([DataSourceRequest] DataSourceRequest request)
        {
            var customer = new Customer();
            var dto = new CustomerDTO();

            if (TryUpdateModel(customer))
            {
                using (var context = new DataContext())
                {
                    var existing = context.Customers.SingleOrDefault(x => x.ID == customer.ID);

                    if (existing != null)
                    {
                        existing.Name = customer.Name;
                        existing.Address = customer.Address;
                        context.SaveChanges();

                        dto.ID = customer.ID;
                        dto.Name = customer.Name;
                        dto.Address = customer.Address;

                        return Json(new[] { dto }.ToDataSourceResult(request));
                    }
                }
            }

            return Json(new CustomerDTO[]{}.ToDataSourceResult(request));
        }

        [HttpPost]
        public ActionResult Destroy([DataSourceRequest] DataSourceRequest request, int id)
        {
            using (var context = new DataContext())
            {
                var customer = context.Customers.SingleOrDefault(x => x.ID == id);

                if (customer != null)
                {
                    context.Customers.Remove(customer);
                    context.SaveChanges();
                }
            }

            return Json(new CustomerDTO[] { }.ToDataSourceResult(request));
        }
    }
}
