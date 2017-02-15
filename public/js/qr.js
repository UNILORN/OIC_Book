function read(a)
{
    $("#qr-value").text(a);

    var res = a.split(',');

    window.location.href = '/?order_id=' + res[0] + '&product_id=' + res[1] + '&num=' + res[2];

}
    
qrcode.callback = read;
