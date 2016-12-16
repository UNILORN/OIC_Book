(function cartNumchange()
 {
      $('.number').change(function()
      {
        location.href = '/sessionnumchange?number='+$(this).val()+"&index="+$(this).children().attr('index');
      });
 }());
