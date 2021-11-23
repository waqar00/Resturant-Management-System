/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/pages/reservation.js ***!
  \*******************************************/
var reservationTable = $('#reservationTable');
var optionsDateTime = {
  year: "numeric",
  month: "short",
  day: "numeric",
  hour: "2-digit",
  minute: "2-digit"
};
$(document).ready(function () {
  reservationTable.DataTable({
    lengthMenu: [[10, 25, 50, -1], ["10", "25", "50", "All"]],
    order: [[0, "desc"]],
    language: {
      searchPlaceholder: "Search Users"
    },
    processing: true,
    serverSide: true,
    ajax: {
      url: sosile.routes.reservation.get,
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
      data: "email",
      name: "email",
      render: function render(data) {
        return data;
      }
    }, {
      data: "phone",
      name: "phone",
      render: function render(data) {
        return data;
      }
    }, {
      data: "guest",
      name: "guest",
      render: function render(data) {
        return data;
      }
    }, {
      data: "date",
      name: "date",
      render: function render(data) {
        return data;
      }
    }, {
      data: "time",
      name: "time",
      render: function render(data) {
        return data;
      }
    }, {
      data: "message",
      name: "message",
      render: function render(data) {
        return data;
      }
    }, {
      data: 'id',
      name: 'id',
      orderable: true,
      searchable: true,
      render: function render(data) {
        return ' <a href="javascript:void(0)" data-id="' + data + '" class="delete-user btn btn-danger  btn-sm">Delete</a>';
      }
    }]
  });
});
/******/ })()
;