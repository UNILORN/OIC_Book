function read(a)
{
    $("#qr-value").text(a);

    window.location.href = '/admin';

}
    
qrcode.callback = read;
