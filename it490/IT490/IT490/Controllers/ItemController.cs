using IT490.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Kendo.Mvc.Extensions;
using Kendo.Mvc.UI;

namespace IT490.Controllers
{
    public class ItemController : Controller
    {
        //
        // GET: /Item/

        [HttpGet]
        public ActionResult Index()
        {
            using (var context = new DataContext())
            {
                var items = context.Items.ToList().Select(x => new ItemDTO
                {
                    ID = x.ID,
                    Name = x.Name,
                    Price = x.Price,
                    QuantityAvailable = x.QuantityAvailable
                });

                return View(items);
            }
        }

        [HttpPost]
        public ActionResult Create([DataSourceRequest] DataSourceRequest request)
        {
            var item = new Item();
            var dto = new ItemDTO();

            if (TryUpdateModel(item))
            {
                using (var context = new DataContext())
                {
                    context.Items.Add(item);
                    context.SaveChanges();

                    dto.ID = item.ID;
                    dto.Name = item.Name;
                    dto.Price = item.Price;
                    dto.QuantityAvailable = item.QuantityAvailable;
                }
            }

            return Json(new[] { dto }.ToDataSourceResult(request));
        }

        [HttpPost]
        public ActionResult Read([DataSourceRequest] DataSourceRequest request)
        {
            using (var context = new DataContext())
            {
                var items = context.Items.ToList().Select(x => new ItemDTO
                {
                    ID = x.ID,
                    Name = x.Name,
                    Price = x.Price,
                    QuantityAvailable = x.QuantityAvailable
                });

                return Json(items);
            }
        }

        [HttpPost]
        public ActionResult Update([DataSourceRequest] DataSourceRequest request)
        {
            var item = new Item();
            var dto = new ItemDTO();

            if (TryUpdateModel(item))
            {
                using (var context = new DataContext())
                {
                    var existing = context.Items.SingleOrDefault(x => x.ID == item.ID);

                    if (existing != null)
                    {
                        existing.Name = item.Name;
                        existing.Price = item.Price;
                        existing.QuantityAvailable = item.QuantityAvailable;
                        context.SaveChanges();

                        dto.Name = item.Name;
                        dto.Price = item.Price;
                        dto.QuantityAvailable = item.QuantityAvailable;
                    }
                }
            }

            return Json(new[] { dto }.ToDataSourceResult(request));
        }

        [HttpPost]
        public ActionResult Destroy([DataSourceRequest] DataSourceRequest request, int id)
        {
            using (var context = new DataContext())
            {
                var item = context.Items.SingleOrDefault(x => x.ID == id);

                if (item != null)
                {
                    context.Items.Remove(item);
                    context.SaveChanges();
                }
            }

            return Json(new ItemDTO[] { }.ToDataSourceResult(request));
        }
    }
}
