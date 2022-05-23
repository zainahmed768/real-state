<link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
<link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css"
    type="text/css" />

<script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>


<select class="selectpicker countrypicker" data-flag="true"></select>

<script>
$('.countrypicker').countrypicker();
</script>

<style>
.bootstrap-select.btn-group .dropdown-menu li a span.text {
    display: none;
}

.dropdown-toggle.btn-default {
    color: #292b2c;
    background-color: #fff;
    border-color: #ccc;
}

.bootstrap-select.show>.dropdown-menu>.dropdown-menu {
    display: block;
}

.bootstrap-select>.dropdown-menu>.dropdown-menu li.hidden {
    display: none;
}

.bootstrap-select>.dropdown-menu>.dropdown-menu li a {
    display: block;
    width: 100%;
    padding: 3px 1.5rem;
    clear: both;
    font-weight: 400;
    color: #292b2c;
    text-align: inherit;
    white-space: nowrap;
    background: 0 0;
    border: 0;
    text-decoration: none;
}

.bootstrap-select>.dropdown-menu>.dropdown-menu li a:hover {
    background-color: #f4f4f4;
}

.bootstrap-select>.dropdown-toggle {
    width: 100%;
}

.dropdown-menu>li.active>a {
    color: #fff !important;
    background-color: #337ab7 !important;
}

.bootstrap-select .check-mark {
    line-height: 14px;
}

.bootstrap-select .check-mark::after {
    font-family: "FontAwesome";
    content: "\f00c";
}

.bootstrap-select button {
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Make filled out selects be the same size as empty selects */
.bootstrap-select.btn-group .dropdown-toggle .filter-option {
    display: inline !important;
}

.bootstrap-select.btn-group .dropdown-toggle .filter-option {
    width: 20px
}

.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 62px;
}
</style>