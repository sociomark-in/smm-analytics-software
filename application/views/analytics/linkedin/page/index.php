<!doctype html>
<html lang="en">

<head>
    <?php $this->load->view('components/_common_head'); ?>
    <?php $this->load->view('components/_common_css'); ?>
    <?php $this->load->view('components/_datatables_css'); ?>
</head>

<body>
    <header>
        <?php $this->load->view('components/_nav_01'); ?>
    </header>
    <main>
        <section class="py-3">
            <div class="container">
                <div class="row m-0 align-items-end mb-3">
                    <div class="col-12">
                        <?php
                        $data = [
                            'property' => [
                                'class' => 'sticky',
                                'icon' => [
                                    'fa' => 'fa-linkedin-in',
                                    'class' => "icon-linkedin"
                                ]
                            ],
                        ];
                        $this->load->view('components/dashboard/_page_title', $data) ?>
                    </div>
                </div>
                <div class="row m-0 mb-3">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="panel panel-brief panel-brief-linkedin">
                                    <div class="row m-0 g-0 flex-row-reverse justify-content-between">
                                        <div class="col-md-auto col-12">
                                            <div class="icon">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-auto col-12">
                                            <p class="text-muted panel-subject">Overall Engagement</p>
                                            <h3>559.25k</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-muted">
                                                <small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="panel panel-brief panel-brief-linkedin">
                                    <div class="row m-0 g-0 flex-row-reverse justify-content-between">
                                        <div class="col-md-auto col-12">
                                            <div class="icon">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-auto col-12">
                                            <p class="text-muted panel-subject">Overall Engagement</p>
                                            <h3>559.25k</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-muted">
                                                <small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="panel panel-brief panel-brief-linkedin">
                                    <div class="row m-0 g-0 flex-row-reverse justify-content-between">
                                        <div class="col-md-auto col-12">
                                            <div class="icon">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-auto col-12">
                                            <p class="text-muted panel-subject">Overall Engagement</p>
                                            <h3>559.25k</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-muted">
                                                <small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="panel panel-brief panel-brief-linkedin">
                                    <div class="row m-0 g-0 flex-row-reverse justify-content-between">
                                        <div class="col-md-auto col-12">
                                            <div class="icon">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-auto col-12">
                                            <p class="text-muted panel-subject">Overall Engagement</p>
                                            <h3>559.25k</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-muted">
                                                <small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 mb-3">
                    <div class="col-12">
                        <table class="table" id="pages_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($all_accounts as $account) : ?>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
                                        <tr>
                                            <td>
                                                <div class="panel panel-brief panel-brief-linkedin">
                                                    <div class="row m-0 justify-content-between align-items-center">
                                                        <div class="col-md-auto col-12">
                                                            <div class="icon">
                                                                <i class="fa-brands fa-linkedin-in"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md col-12">
                                                            
                                                            <p class="text-muted panel-subject"><a href="<?= $account['id'] ?>">#<?= $account['id'] ?></a></p>
                                                            <h4><a href="<?= base_url("page/linkedin/" . $account['id']) ?>"><?= $account['name'] ?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                    <?php endfor ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php $this->load->view('components/_common_footer'); ?>
    </footer>
    <?php $this->load->view('components/_common_js'); ?>
    <?php $this->load->view('components/_datatables_js') ?>
    <script>
        $(document).ready(function() {
            $('#pages_table').DataTable();
            $('#stock_report').DataTable();
        });
    </script>
    <?php $this->load->view('components/_charts_js') ?>
    <script>
        var myChart = echarts.init(document.getElementById('main'));

        // Draw the chart
        myChart.setOption({
            tooltip: {},
            xAxis: {
                data: ['shirt', 'cardigan', 'chiffon', 'pants', 'heels', 'socks']
            },
            yAxis: {},
            series: [{
                    name: 'sales',
                    type: 'bar',
                    data: [5, 20, 36, 10, 10, 20]
                },
                {
                    name: 'sales',
                    type: 'bar',
                    data: [5, 10, 26, 20, 30, 2]
                }
            ]
        });

        var myChart1 = echarts.init(document.getElementById('halfpie'));
        var option;
        option = {
            tooltip: {
                trigger: 'item'
            },
            legend: {
                top: '5%',
                left: 'center',
                // doesn't perfectly work with our tricks, disable it
                selectedMode: false
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                center: ['50%', '70%'],
                // adjust the start angle
                startAngle: 180,
                label: {
                    show: true,
                    formatter(param) {
                        // correct the percentage
                        return param.name + ' (' + param.percent * 2 + '%)';
                    }
                },
                data: [{
                        value: 1048,
                        name: 'Search Engine'
                    },
                    {
                        value: 735,
                        name: 'Direct'
                    },
                    {
                        value: 580,
                        name: 'Email'
                    },
                    {
                        value: 484,
                        name: 'Union Ads'
                    },
                    {
                        value: 300,
                        name: 'Video Ads'
                    },
                    {
                        // make an record to fill the bottom 50%
                        value: 1048 + 735 + 580 + 484 + 300,
                        itemStyle: {
                            // stop the chart from rendering this piece
                            color: 'none',
                            decal: {
                                symbol: 'none'
                            }
                        },
                        label: {
                            show: false
                        }
                    }
                ]
            }]
        };
        option && myChart1.setOption(option);

        var myChart2 = echarts.init(document.getElementById('revenue'));
        var option;
        option = {
            color: ['#5470c6', '#FF4E28', '#42C212'],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['Orders', 'Refunds', 'Earnings']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                    name: 'Orders',
                    type: 'line',
                    stack: 'Total',
                    data: [120, 132, 101, 134, 90, 230, 210]
                },
                {
                    name: 'Refunds',
                    type: 'line',
                    stack: 'Total',
                    data: [220, 182, 191, 234, 290, 330, 310]
                },
                {
                    name: 'Earnings',
                    type: 'line',
                    stack: 'Total',
                    data: [150, 232, 201, 154, 190, 330, 410]
                }
            ]
        };
        option && myChart2.setOption(option);


        var myChart3 = echarts.init(document.getElementById('customer_satisfaction'));
        var option;
        option = {
            color: ['#5470c6', '#FF4E28', '#42C212'],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['Orders', 'Refunds', 'Earnings']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                    name: 'Orders',
                    type: 'line',
                    stack: 'Total',
                    data: [120, 132, 101, 134, 90, 230, 210]
                },
                {
                    name: 'Refunds',
                    type: 'line',
                    stack: 'Total',
                    data: [220, 182, 191, 234, 290, 330, 310]
                },
                {
                    name: 'Earnings',
                    type: 'line',
                    stack: 'Total',
                    data: [150, 232, 201, 154, 190, 330, 410]
                }
            ]
        };
        option && myChart3.setOption(option);
    </script>
</body>

</html>