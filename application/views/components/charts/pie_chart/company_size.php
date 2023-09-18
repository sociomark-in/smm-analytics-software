<!-- 
    Required Imports - 
    - jquery.min.js
    - echarts.min.js
 -->

<div id="companySizePie" style="height: 500px;"></div>
<script>
    var companySizePie = echarts.init(document.getElementById('companySizePie'));
    var option;
    option = {
        title: {
            text: 'Total Visitors',
            subtext: 'By Company Size',
            left: 'center'
        },
        tooltip: {
            trigger: 'item'
        },
        legend: {
            orient: 'horizontal',
            bottom: 'left'
        },
        series: [{
            name: 'Company Size',
            type: 'pie',
            radius: '50%',
            data: [
                <?php
                for ($i = 0; $i < count($chart['headers']); $i++) :
                    echo "{";
                    echo "value: " . $chart['data'][$i] . ",";
                    echo "name: '" . $chart['headers'][$i] . "',";
                    echo "},";
                endfor ?>

            ],
            emphasis: {
                itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }]
    };
    option && companySizePie.setOption(option);
</script>