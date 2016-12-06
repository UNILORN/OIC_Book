$(function(){
    var sales;
    $.ajax({
        url: "/api/admin/sales"
    }).done(function(data){ //ajaxの通信に成功した場合
        sales = data;
        var data = [];
        for (key in sales){
            data[data.length] = {"ジャンル":key , "価格":sales[key]}
        }

        var chart = new tauCharts.Chart({

            data: data,  //表示するデータ
            type: 'bar',  //グラフの種類
            x: 'ジャンル',  //X軸の要素
            y: '価格',  //Y軸の要素
            color: '月'  //カラーの基準要素

        });
        chart.renderTo('#stage');
    });

});
