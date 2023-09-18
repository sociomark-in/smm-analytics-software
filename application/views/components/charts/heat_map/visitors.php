<?php
$max = max($visitors_metrics['data']['data'])
?>

<div id="visitorsHeatMap" style="height: 200px;">
</div>
<script>
    var dom = document.getElementById('visitorsHeatMap');
    var visitorsHeatMap = echarts.init(dom, null, {
        renderer: 'canvas',
        useDirtyRect: false
    });
    var app = {};

    var option;

    /* function getVirtualData(year) {
        const date = +echarts.time.parse("<?= $visitors_metrics['duration']['from'] ?>");
        const end = +echarts.time.parse("<?= $visitors_metrics['duration']['to'] ?>");
        const dayTime = 3600 * 24 * 1000;
        const data = [];
        for (let time = date; time <= end; time += dayTime) {
            data.push([
                echarts.time.format(time, '{yyyy}-{MM}-{dd}', false),
                Math.floor(Math.random() * 10000)
            ]);
        }
        return data;
    } */

    function getStaticData(yearfrom, yearto) {
        const date = +echarts.time.parse(yearfrom + "<?= date_format(date_create($visitors_metrics['duration']['from']), "-m-d") ?>");
        const end = +echarts.time.parse(yearto + "<?= date_format(date_create($visitors_metrics['duration']['to']), "-m-d") ?>");
        const dayTime = 3600 * 24 * 1000;
        const data = [];
        for (let time = date; time < end; time += dayTime) {
            data.push([
                echarts.time.format(time, '{yyyy}-{MM}-{dd}', false),
                Math.floor(Math.random() * 10)
            ]);
        }
        return data;
    }

    function getVirtualData(yearfrom, yearto) {
        const date = +echarts.time.parse(yearfrom + "<?= date_format(date_create($visitors_metrics['duration']['from']), "-m-d") ?>");
        const end = +echarts.time.parse(yearto + "<?= date_format(date_create($visitors_metrics['duration']['to']), "-m-d") ?>");
        let jsondata;
        $.ajax({
            type: 'get',
            url: '<?= base_url("api/data/excel/import/353453") ?>',
            async: false,
        }).done(function(response) {
            jsondata = JSON.parse(response);
        })
        const dayTime = 3600 * 24 * 1000;
        const fdata = [];
        let i = 0;
        for (let time = date; time < end; time += dayTime) {
            fdata.push([
                echarts.time.format(time, '{yyyy}-{MM}-{dd}', false),
                parseInt(jsondata.data[i])
            ]);
            i++;
        }
        console.log("data", fdata);
        return fdata;
    }
    option = {
        title: {
            top: 0,
            left: 'center',
            text: 'Yearly Visits',
            subtext: "Year " + "<?= date_format(date_create($visitors_metrics['duration']['from']), "Y") ?>" +  " <?= date_format(date_create($visitors_metrics['duration']['to']), "Y") ?>",
        },
        tooltip: {},
        visualMap: {
            min: 1,
            max: parseInt(<?= $max ?>),
            type: 'piecewise',
            orient: 'horizontal',
            left: 'center',
            top: 50,
            splitNumber: 10
        },
        calendar: {
            top: 100,
            left: 30,
            right: 30,
            cellSize: ['auto', 13],
            range: ['<?= date_format(date_create($visitors_metrics['duration']['from']), "Y-m-d") ?>', '<?= date_format(date_create($visitors_metrics['duration']['to']), "Y-m-d") ?>'],
            itemStyle: {
                borderWidth: 0.5
            },
            yearLabel: {
                show: false
            }
        },
        series: {
            type: 'heatmap',
            name: 'Visitors',
            coordinateSystem: 'calendar',
            data: getVirtualData('<?= date_format(date_create($visitors_metrics['duration']['from']), "Y") ?>', '<?= date_format(date_create($visitors_metrics['duration']['to']), "Y") ?>')

        }
    };
    console.log(option.series.data);

    if (option && typeof option === 'object') {
        visitorsHeatMap.setOption(option);
    }

    window.addEventListener('resize', visitorsHeatMap.resize);
</script>