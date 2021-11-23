window._ = require("lodash");

require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
//jQuery
window.$ = window.jQuery = require("jquery");

window.Swal = require("sweetalert2");

// Yajra Datatables
require("datatables.net/js/jquery.dataTables.min");
require("datatables.net-bs4/js/dataTables.bootstrap4.js");
