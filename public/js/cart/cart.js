(function cartNumchange()
{
    $('.number').change(function()
    {
        $.get('/sessionnumchange?number='+$(this).val()+"&index="+$(this).attr('index'));
    });
}());
