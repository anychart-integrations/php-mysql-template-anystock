<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AnyChart PHP template</title>
    <script src="https://cdn.anychart.com/js/latest/anychart-bundle.min.js"></script>
    <script src="http://cdn.anychart.com/js/latest/data-adapter.min.js"></script>
    <link rel="stylesheet" href="https://cdn.anychart.com/css/latest/anychart-ui.min.css"/>
    <link rel="stylesheet" href="static/css/style.css"/>
</head>
<body>
<div id="container"></div>
<script>
    anychart.data.loadJsonFile("/data.php", function (data) {
        // create stock chart
        var chart = anychart.stock();

        var table = anychart.data.table('x');
        table.addData(data);

        // create mapping
        var mapping = table.mapAs({x: 'x', value: 'value'});

        var plot = chart.plot(0);
        // create area series on the first plot
        plot.column()
            .name('MSFT')
            .data(mapping)
            .fill('#a9e1d4 0.85');
        plot.xAxis().background().enabled(true);

        // set chart selected date/time range
        chart.selectRange('2005-01-03', '2006-08-20');

        // set container id for the chart
        chart.container('container');
        // initiate chart drawing
        chart.draw();

        // create range picker
        rangePicker = anychart.ui.rangePicker();
        // init range picker
        rangePicker.render(chart);

        // create range selector
        rangeSelector = anychart.ui.rangeSelector();
        // init range selector
        rangeSelector.render(chart);
    });
</script>
</body>
</html>


