/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/pages/chef.js ***!
  \************************************/
var chefTable = $('#chefTable');
var deleteChefForm = $('#deleteChefForm');
var chefId = $('#chefId');
$(document).on('click', '.chef-delete', function () {
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
  chefTable.DataTable({
    lengthMenu: [[10, 25, 50, -1], ["10", "25", "50", "All"]],
    order: [[0, "desc"]],
    language: {
      searchPlaceholder: "Search Users"
    },
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: {
      url: sosile.routes.chefs.get,
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
    }, {
      data: "speciality",
      name: "speciality",
      render: function render(data) {
        return data;
      }
    }, {
      data: "image",
      name: "image",
      render: function render(data) {
        return data;
      }
    }, {
      data: 'id',
      name: 'id',
      orderable: true,
      searchable: true,
      render: function render(data) {
        return ' <a href="/chefs/' + data + '/edit" class="brn btn-primary" >Edit</a><a href="javascript:void(0)" data-id="' + data + '" class="chef-delete btn btn-danger  btn-sm">Delete</a>';
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
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: "Delete",
    reverseButtons: true
  }).then(function (result) {
    if (result.value === true) {
      chefId.val(id);
      deleteChefForm.submit();
    }
  });
}
/******/ })()
;