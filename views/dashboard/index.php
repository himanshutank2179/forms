<?php
/**
 * Created by PhpStorm.
 * User: vytech
 * Date: 20/04/2018
 * Time: 11:06 AM
 */
?>
<h2>Welcome to dashboard</h2>


<div id="container"></div>




<?php
$this->registerJs("
 var myChart = Highcharts.chart('container', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Fruit Consumption'
            },
            xAxis: {
                categories: ['Apples', 'Bananas', 'Oranges']
            },
            yAxis: {
                title: {
                    text: 'Fruit eaten'
                }
            },
            series: [{
                name: 'Jane',
                data: [1, 0, 4]
            }, {
                name: 'John',
                data: [5, 7, 3]
            }]
        });
", \yii\web\View::POS_END);
?>

