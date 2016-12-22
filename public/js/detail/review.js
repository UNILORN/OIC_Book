$('.display_review_form').click(function() {
    $('.review_form').fadeIn();
});


var vm = new Vue({
    el: "#review",
    data: {
        all_reviews: [],//全てのレビュー
        display_reviews: [],//画面に表示するレビュー
        display_count: 6,//画面に表示するレビューの数を決めるためのカウンタ
        more:true,//もっと見るボタンを表示するかどうかの判定用
        i:3
    },
    created: function () {
      this.setReviews();
    },
    methods: {
        setReviews: function() {
          var self = this;
          $.get("/getreview?product_id=" + $(':hidden[name="product_id"]').val(), function(review_data){
            self.$set(self.all_reviews, self.all_reviews.length, review_data);

            for (var i = 0; i < 3; i++) {
             self.display_reviews.push(self.all_reviews[0][i])
            }
          });
        },
        displayReviews: function() {
          for (this.i ; this.i < this.display_count; this.i++) {
            //レビューをすべて表示しきった場合の処理
            if(this.i == this.all_reviews[0].length){
                this.more = false;
                return 0;
            }else {
              this.display_reviews.push(this.all_reviews[0][this.i]);
            }
          }
          this.i = this.display_count;
          this.display_count+=3;  //もっと見るボタンをおしたら３つずつ表示される数を増やす
        }
    }
});
