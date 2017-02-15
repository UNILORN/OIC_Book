function read(a)
{
    $("#qr-value").text(a);

    var res = a.split(',');

    window.location.href = '/admin/phone/conf?order_id=' + res[0] + '&product_id=' + res[1] + '&num=' + res[2] + '&price=' + res[3];

}
    
qrcode.callback = read;
