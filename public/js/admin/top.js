$(function () {
    var sales;
    $.ajax({
        url: "/api/admin/sales"
    }).done(function (data) { //ajaxの通信に成功した場合
        sales = data;

        var salesdata = [
            ['Element', '売上/円', { role: 'style' }, { role: 'annotation' } ]
        ];

        for (key in sales) {
            salesdata[salesdata.length] = [key, sales[key]["price"],"",sales[key]["num"]+"冊"];
        }

        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

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
});
