"use strict";


$(document).ready(function () {


    $('.selectpicker').selectpicker();

    $('#bologna-list a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    $('#empTable').DataTable();


    $('#tutorialTable').DataTable();

    $('#empTutorialTable').DataTable();

})