<!doctype html>
<html lang="en">

<head>
    <?php $this->load->view('components/_common_head'); ?>
    <?php $this->load->view('components/_common_css'); ?>
    <?php $this->load->view('components/_datatables_css'); ?>

    <?php $this->load->view('components/_charts_js') ?>
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
                <div class="row m-0">
                    <div class="col-12 mb-3">
                        <div class="card panel">
                            <div class="card-header">
                                Activity Heatmap
                            </div>
                            <div class="card-body">
                                <div class="row g-0 justify-content-center">
                                    <div class="col-lg-9 col-10">
                                        <?php
                                        $data = [];
                                        // $data['chart'] = json_decode($visitors_company_size, true, 5);
                                        $this->load->view("components/charts/heat_map/visitors", $data);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                        <div class="card panel">
                            <div class="card-header">
                                Total Visitors
                            </div>
                            <div class="card-body">
                                <?php
                                $data['chart'] = json_decode($visitors_company_size, true, 5);
                                $this->load->view("components/charts/pie_chart/company_size", $data);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-3"></div>
                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                        <div class="card panel h-100">
                            <div class="card-header">
                                Scheduled Events (All Accounts & Pages)
                            </div>
                            <div class="card-body">
                                <?php $this->load->view('components/charts/calendar/dayView') ?>
                            </div>
                        </div>
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
            $('#products_table').DataTable();
            $('#stock_report').DataTable();
        });
    </script>
</body>

</html>