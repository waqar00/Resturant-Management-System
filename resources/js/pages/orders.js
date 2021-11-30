
var ordersTable = $('#ordersTable');
// hello
var optionsDateTime = {
  year: "numeric",
  month: "short",
  day: "numeric",
  hour: "2-digit",
  minute: "2-digit"
};
$(document).ready(function () {

    ordersTable.DataTable({

    lengthMenu: [[10, 25, 50, -1], ["10", "25", "50", "All"]],
    order: [[0, "desc"]],
    language: {
      searchPlaceholder: "Search Users"
    },
    processing: true,
    serverSide: true,
    ajax: {
      url: sosile.routes.orders.get,
      data: function data(d) {
        d.status = "all";
      }
    },
    columns: [
        {
            data: "name",
            name: "name",
            render: function render(data) {
              return data;
            }
          },
          {
            data: "phone",
            name: "phone",
            render: function render(data) {
              return data;
            }
          },
          {
            data: "address",
            name: "address",
            render: function render(data) {
              return data;
            }
          },
      {
      data: "foodname",
      name: "foodname",
      render: function render(data) {
        return data;
      }
    },
    {
        data: "price",
        name: "price",
        render: function render(data) {
          return data;
        }
      },
      {
        data: "quantity",
        name: "quantity",
        render: function render(data) {
          return data;
        }
      },
       {
      data: 'id',
      name: 'id',
      orderable: true,
      searchable: true,
      render: function render(data) {
        return '<a href="javascript:void(0)" data-id="'+data+'" class="delete-order btn btn-danger  btn-sm">Delete</a>';
      }
    }]
  });
});
