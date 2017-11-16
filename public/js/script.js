$(document).ready(function () {
    // slider
    $('.carousel').carousel()

    $('#btnlienhengay').click(function () {
        $.alert({
            title: 'Thông tin liên hệ người bán',
            content: `<table class="table table-bordered bangchitietsp">
            <tr>
            <td class="dongdau">Mã sản phẩm</td>
                <td>tilt super</td>
            </tr>
            <tr>
            <td class="dongdau">Thể tích</td>
        <td>100ml</td>
        </tr>
        <tr>
        <td class="dongdau">Quy cách</td>
        <td>chai</td>
        </tr>
        <tr>
        <td class="dongdau">Hoạt chất</td>
        <td>Propiconazole 150 g/l</td>
        </tr>
        <tr>
        <td class="dongdau">Hãng SX</td>
        <td>Syngenta
        </td>
        </tr>
        </table>`,
        });
    });
});
