$('.display_review_form').click(function() {
    $('.review_form').fadeIn();
});


var vm = new Vue({
    el: ".review",
    data: {
        all_reviews: [],//全てのレビュー
        display_reviews: [],//画面に表示するレビュー
        display_count: 3,//画面に表示するレビューの数を決めるためのカウンタ
        more:true,//もっと見るボタンを表示するかどうかの判定用
        i:0
    },
    beforeMount: function () {
      this.setReviews();
    },
    methods: {
        setReviews: function() {
          $.get("/getreview?product_id=" + $(':hidden[name="product_id"]').val(), function(review_data){
            vm.$set(vm.all_reviews, 0, review_data);
            vm.displayReview();
          });
        },
        displayReviews: function() {
          for (vm.i; vm.i < vm.display_count; vm.i++) {
            vm.display_reviews.push(vm.all_reviews[0][vm.i]);
            //レビューをすべて表示しきった場合の処理
            if(vm.i == vm.all_reviews[0].length){
                vm.more = false;
                return 0;
            }
          }
          vm.i = vm.display_count;
          vm.display_count+=3;  //もっと見るボタンをおしたら３つずつ表示される数を増やす
        }
    }
});
