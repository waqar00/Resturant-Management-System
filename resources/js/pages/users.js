
const userTable = $('#userTable');
const userId = $('#userId');
const deleteUserForm=$('#deleteUserForm');


$(document).on('click', '.delete-user', function () {
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
    userTable.DataTable({
    lengthMenu: [[10, 25, 50, -1], ["10", "25", "50", "All"]],
    order: [[0, "desc"]],
    language: {
      searchPlaceholder: "Search Users"
    },
    processing: true,
    serverSide: true,
    ajax: {
      url: sosile.routes.users.get,
      data: function data(d) {
        d.status = "all";
      }
    },
    columns: [{
      data: "name",
      name: "name",
      render: function render(data) {
        return data;
      }
    },
    {
        data: "email",
        name: "email",
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
        return ' <a href="javascript:void(0)" data-id="'+data+'" class="delete-user btn btn-danger  btn-sm">Delete</a>';
      }
    }]
  });
});
function destroy(id) {

    Swal.fire({
      title: 'Are you sure?',
      text: 'Do you want to delete this Role!',
      icon: "question",
      showCancelButton: true,
    confirmButtonColor:'#d33' ,
  cancelButtonColor:'#3085d6' ,
      confirmButtonText: "Delete",
      reverseButtons: true,
    }).then((result) => {
        if(result.value === true){
            userId.val(id);
            deleteUserForm.submit();
          }
      });
  }
