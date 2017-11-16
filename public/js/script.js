$(document).ready(function () {
    // slider
    $('.carousel').carousel()

    $('#btnlienhengay').click(function () {
        $.alert({
            title: 'Thông tin người bán',
            content: $('#bangthongtinlienhe').html(),
            theme: 'supervan'
        });
    });
});
