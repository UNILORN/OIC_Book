(function(){
    var vm = new Vue({
      el: '.container',
      data: {
        cart: []
      }
    });

    function cartNumchange()
    {
        $('.number').change(function()
        {
            $.get('/sessionnumchange?number='+$(this).val()+"&index="+$(this).attr('index'),function(cartdata){
              console.log(cartdata);
            });
        });
    }
    cartNumchange();
}());
