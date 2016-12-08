$(function () {

    //
    // 売上　ジャンル別売上総数
    //
    $.ajax({
        url: "/api/admin/genresales"
    }).done(function (data) {
        sales = data;

        // 売上情報整形
        var salesdata = [ ['Element', '売上/円', {role: 'style'}, {role: 'annotation'}]];
        for (key in sales) {
            salesdata[salesdata.length] = [key, sales[key]["price"], "", sales[key]["num"] + "冊"];
        }

        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawSales);

        function drawSales() {
            var data = new google.visualization.arrayToDataTable(salesdata);
            var options = {
                title: 'ジャンル別総合売上',
                hAxis: {
                    title: 'ジャンル',
                    viewWindow: {
                        min: [7, 30, 0],
                        max: [17, 30, 0]
                    }
                },
                vAxis: {
                    title: '売上'
                }
            };
            var chart = new google.visualization.ColumnChart(
                document.getElementById('genre_sales'));
            chart.draw(data, options);
        }
    });

    //
    // 売上　ジャンル別売上総数
    //
    $.ajax({
        url: "/api/admin/monthlysales"
    }).done(function (data) {
        monthlysales = data;

        // 売上情報整形
        var salesdata = [ ['Element', '売上/円', {role: 'style'}]];
        for (key in monthlysales) {
            monthname = parseInt(key) + 1;
            salesdata[salesdata.length] = [monthname+"月", monthlysales[key], ""];
        }

        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawSales);

        function drawSales() {
            var data = new google.visualization.arrayToDataTable(salesdata);
            var options = {
                title: '月間売上',
                hAxis: {
                    title: '月',
                    viewWindow: {
                        min: [7, 30, 0],
                        max: [17, 30, 0]
                    }
                },
                vAxis: {
                    title: '売上'
                }
            };
            var chart = new google.visualization.ColumnChart(

                //描画するElementId
                document.getElementById('monthly_sales'));
            chart.draw(data, options);
        }
    });


});
