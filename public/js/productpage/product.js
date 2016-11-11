$(function(){
  var vm = new Vue({
    el: 'body',
    data: {
      products: []
    }
  });

  //api
  $.get("/search",function(data){
    console.log(data);
    vm.$set('products',data);
  });
  $.get("/product",function(data){
    console.log(data);
    vm.$set('products',data);
  });
});
