
const foodTable = $('#foodTable');
const foodId = $('#foodId');
const deletefoodForm=$('#deletefoodForm');


$(document).on('click', '.delete-food', function () {
       destroy($(this).data('id'));
});
var optionsDateTime = {
  year: "numeric",
  month: "short",
  day: "numeric",
  hour: "2-digit",
  minute: "2-digit"
};
$(document).ready(function () {
    foodTable.DataTable({
    lengthMenu: [[10, 25, 50, -1], ["10", "25", "50", "All"]],
    order: [[0, "desc"]],
    language: {
      searchPlaceholder: "Search Users"
    },
    processing: true,
    serverSide: true,
    responsive: true,

    ajax: {
      url: sosile.routes.foods.get,
      data: function data(d) {
        d.status = "all";
      }
    },
    columns: [{
      data: "title",
      name: "title",
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
        data: "description",
        name: "description",
        render: function render(data) {
          return data;
        }
      },
      {
          data:"image",
          name:"image",
          render:function render(data) {
             return '<img src="/images/foodimages/'+data+'"/>'
          }
      }
      ,
       {
      data: 'id',
      name: 'id',
      orderable: true,
      searchable: true,
      render: function render(data) {
        return ' <a href="/foods/'+data+'/edit" class="brn btn-primary" >Edit</a><a href="javascript:void(0)" data-id="'+data+'" class="delete-food btn btn-danger  btn-sm">Delete</a>';
      }
    }]
  });
});
function destroy(id) {

    Swal.fire({
      title: 'Are you sure?',
      text: 'Do you want to delete this Dish!',
      icon: "question",
      showCancelButton: true,
    confirmButtonColor:'#d33' ,
  cancelButtonColor:'#3085d6' ,
      confirmButtonText: "Delete",
      reverseButtons: true,
    }).then((result) => {
        if(result.value === true){
            foodId.val(id);
            deleteFoodForm.submit();
          }
      });
  }
