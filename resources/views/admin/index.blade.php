@extends('layouts.adminbase')

@section('title', 'Admin Panel')


@section('content')




<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">E-commerce Car Dashboard Template </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Revenue</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$12099</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue"><canvas width="274" height="100" style="display: inline-block; width: 274.913px; height: 100px; vertical-align: top;"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Affiliate Revenue</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$12099</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue2"><canvas width="274" height="100" style="display: inline-block; width: 274.913px; height: 100px; vertical-align: top;"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Refunds</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">0.00</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue3"><canvas width="274" height="100" style="display: inline-block; width: 274.913px; height: 100px; vertical-align: top;"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Avg. Revenue Per User</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$28000</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-2.00%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue4"><canvas width="274" height="100" style="display: inline-block; width: 274.913px; height: 100px; vertical-align: top;"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Orders</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Image</th>
                                                        <th class="border-0">Product Name</th>
                                                        <th class="border-0">Product Id</th>
                                                        <th class="border-0">Quantity</th>
                                                        <th class="border-0">Price</th>
                                                        <th class="border-0">Order Time</th>
                                                        <th class="border-0">Customer</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #1 </td>
                                                        <td>id000001 </td>
                                                        <td>20</td>
                                                        <td>$80.00</td>
                                                        <td>27-08-2018 01:22:12</td>
                                                        <td>Patricia J. King </td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #2 </td>
                                                        <td>id000002 </td>
                                                        <td>12</td>
                                                        <td>$180.00</td>
                                                        <td>25-08-2018 21:12:56</td>
                                                        <td>Rachel J. Wicker </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #3 </td>
                                                        <td>id000003 </td>
                                                        <td>23</td>
                                                        <td>$820.00</td>
                                                        <td>24-08-2018 14:12:77</td>
                                                        <td>Michael K. Ledford </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #4 </td>
                                                        <td>id000004 </td>
                                                        <td>34</td>
                                                        <td>$340.00</td>
                                                        <td>23-08-2018 09:12:35</td>
                                                        <td>Michael K. Ledford </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Customer Acquisition</h5>
                                    <div class="card-body">
                                        <div class="ct-chart ct-golden-section" style="height: 354px;"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="319" class="ct-grid ct-horizontal"></line><line x1="126.73333740234375" x2="126.73333740234375" y1="15" y2="319" class="ct-grid ct-horizontal"></line><line x1="203.4666748046875" x2="203.4666748046875" y1="15" y2="319" class="ct-grid ct-horizontal"></line><line x1="280.20001220703125" x2="280.20001220703125" y1="15" y2="319" class="ct-grid ct-horizontal"></line><line y1="319" y2="319" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="281" y2="281" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="243" y2="243" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="205" y2="205" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="167" y2="167" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="129" y2="129" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="91" y2="91" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="53" y2="53" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,319L50,281C75.578,230.333,101.156,129,126.733,129C152.311,129,177.889,243,203.467,243C229.044,243,254.622,167,280.2,129L280.2,319Z" class="ct-area"></path><path d="M50,281C75.578,230.333,101.156,129,126.733,129C152.311,129,177.889,243,203.467,243C229.044,243,254.622,167,280.2,129" class="ct-line"></path></g><g class="ct-series ct-series-b"><path d="M50,319L50,243C75.578,230.333,101.156,217.667,126.733,205C152.311,192.333,177.889,187.267,203.467,167C229.044,146.733,254.622,65.667,280.2,15L280.2,319Z" class="ct-area"></path><path d="M50,243C75.578,230.333,101.156,217.667,126.733,205C152.311,192.333,177.889,187.267,203.467,167C229.044,146.733,254.622,65.667,280.2,15" class="ct-line"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="324" width="76.73333740234375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 77px; height: 20px;">Mon</span></foreignObject><foreignObject style="overflow: visible;" x="126.73333740234375" y="324" width="76.73333740234375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 77px; height: 20px;">Tue</span></foreignObject><foreignObject style="overflow: visible;" x="203.4666748046875" y="324" width="76.73333740234375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 77px; height: 20px;">Wed</span></foreignObject><foreignObject style="overflow: visible;" x="280.20001220703125" y="324" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" y="281" x="10" height="38" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 38px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="243" x="10" height="38" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 38px; width: 30px;">1</span></foreignObject><foreignObject style="overflow: visible;" y="205" x="10" height="38" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 38px; width: 30px;">2</span></foreignObject><foreignObject style="overflow: visible;" y="167" x="10" height="38" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 38px; width: 30px;">3</span></foreignObject><foreignObject style="overflow: visible;" y="129" x="10" height="38" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 38px; width: 30px;">4</span></foreignObject><foreignObject style="overflow: visible;" y="91" x="10" height="38" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 38px; width: 30px;">5</span></foreignObject><foreignObject style="overflow: visible;" y="53" x="10" height="38" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 38px; width: 30px;">6</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="38" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 38px; width: 30px;">7</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">8</span></foreignObject></g></svg></div>
                                        <div class="text-center">
                                            <span class="legend-item mr-2">
                                                    <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Returning</span>
                                            </span>
                                            <span class="legend-item mr-2">

                                                    <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">First Time</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
              				                        <!-- product category  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"> Product Category</h5>
                                    <div class="card-body">
                                        <div class="ct-chart-category ct-golden-section" style="height: 315px;"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;"><g class="ct-series ct-series-a"><path d="M147.6,280.1A122.6,122.6,0,0,0,147.6,34.9" class="ct-slice-donut" ct:value="60" style="stroke-width: 40px;" stroke-dasharray="385.2134704589844px 385.2134704589844px" stroke-dashoffset="-385.2134704589844px"><animate attributeName="stroke-dashoffset" id="anim0" dur="1000ms" from="-385.2134704589844px" to="0px" fill="freeze" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g><g class="ct-series ct-series-b"><path d="M25,157.5A122.6,122.6,0,0,0,148.028,280.099" class="ct-slice-donut" ct:value="30" style="stroke-width: 40px;" stroke-dasharray="193.00784301757812px 193.00784301757812px" stroke-dashoffset="-193.00784301757812px"><animate attributeName="stroke-dashoffset" id="anim1" dur="1000ms" from="-193.00784301757812px" to="0px" fill="freeze" begin="anim0.end" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g><g class="ct-series ct-series-c"><path d="M147.6,34.9A122.6,122.6,0,0,0,25.001,157.928" class="ct-slice-donut" ct:value="30" style="stroke-width: 40px;" stroke-dasharray="193.0078125px 193.0078125px" stroke-dashoffset="-193.0078125px"><animate attributeName="stroke-dashoffset" id="anim2" dur="1000ms" from="-193.0078125px" to="0px" fill="freeze" begin="anim1.end" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g></svg></div>
                                        <div class="text-center m-t-40">
                                            <span class="legend-item mr-3">
                                                    <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">Man</span>
                                            </span>
                                            <span class="legend-item mr-3">
                                                <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Woman</span>
                                            </span>
                                            <span class="legend-item mr-3">
                                                <span class="fa-xs text-info mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Accessories</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end product category  -->
                                   <!-- product sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <!-- <div class="float-right">
                                                <select class="custom-select">
                                                    <option selected>Today</option>
                                                    <option value="1">Weekly</option>
                                                    <option value="2">Monthly</option>
                                                    <option value="3">Yearly</option>
                                                </select>
                                            </div> -->
                                        <h5 class="mb-0"> Product Sales</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="ct-chart-product ct-golden-section"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="114.97500610351562" class="ct-grid ct-horizontal"></line><line x1="107.55000305175781" x2="107.55000305175781" y1="15" y2="114.97500610351562" class="ct-grid ct-horizontal"></line><line x1="165.10000610351562" x2="165.10000610351562" y1="15" y2="114.97500610351562" class="ct-grid ct-horizontal"></line><line x1="222.65000915527344" x2="222.65000915527344" y1="15" y2="114.97500610351562" class="ct-grid ct-horizontal"></line><line y1="114.97500610351562" y2="114.97500610351562" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="81.65000406901041" y2="81.65000406901041" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="48.325002034505204" y2="48.325002034505204" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="280.20001220703125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="78.7750015258789" x2="78.7750015258789" y1="114.97500610351562" y2="88.31500447591145" class="ct-bar" ct:value="800000" style="stroke-width: 40px"></line><line x1="136.32500457763672" x2="136.32500457763672" y1="114.97500610351562" y2="74.98500366210938" class="ct-bar" ct:value="1200000" style="stroke-width: 40px"></line><line x1="193.87500762939453" x2="193.87500762939453" y1="114.97500610351562" y2="68.32000325520833" class="ct-bar" ct:value="1400000" style="stroke-width: 40px"></line><line x1="251.42501068115234" x2="251.42501068115234" y1="114.97500610351562" y2="71.65250345865886" class="ct-bar" ct:value="1300000" style="stroke-width: 40px"></line></g><g class="ct-series ct-series-b"><line x1="78.7750015258789" x2="78.7750015258789" y1="88.31500447591145" y2="81.65000406901041" class="ct-bar" ct:value="200000" style="stroke-width: 40px"></line><line x1="136.32500457763672" x2="136.32500457763672" y1="74.98500366210938" y2="61.65500284830729" class="ct-bar" ct:value="400000" style="stroke-width: 40px"></line><line x1="193.87500762939453" x2="193.87500762939453" y1="68.32000325520833" y2="51.657502237955725" class="ct-bar" ct:value="500000" style="stroke-width: 40px"></line><line x1="251.42501068115234" x2="251.42501068115234" y1="71.65250345865886" y2="61.65500284830729" class="ct-bar" ct:value="300000" style="stroke-width: 40px"></line></g><g class="ct-series ct-series-c"><line x1="78.7750015258789" x2="78.7750015258789" y1="81.65000406901041" y2="78.31750386555989" class="ct-bar" ct:value="100000" style="stroke-width: 40px"></line><line x1="136.32500457763672" x2="136.32500457763672" y1="61.65500284830729" y2="54.99000244140625" class="ct-bar" ct:value="200000" style="stroke-width: 40px"></line><line x1="193.87500762939453" x2="193.87500762939453" y1="51.657502237955725" y2="38.32750142415364" class="ct-bar" ct:value="400000" style="stroke-width: 40px"></line><line x1="251.42501068115234" x2="251.42501068115234" y1="61.65500284830729" y2="41.66000162760416" class="ct-bar" ct:value="600000" style="stroke-width: 40px"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="119.97500610351562" width="57.55000305175781" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 58px; height: 20px;">Q1</span></foreignObject><foreignObject style="overflow: visible;" x="107.55000305175781" y="119.97500610351562" width="57.55000305175781" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 58px; height: 20px;">Q2</span></foreignObject><foreignObject style="overflow: visible;" x="165.10000610351562" y="119.97500610351562" width="57.55000305175781" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 58px; height: 20px;">Q3</span></foreignObject><foreignObject style="overflow: visible;" x="222.65000915527344" y="119.97500610351562" width="57.55000305175781" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 58px; height: 20px;">Q4</span></foreignObject><foreignObject style="overflow: visible;" y="81.65000406901041" x="10" height="33.32500203450521" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 33px; width: 30px;">0k</span></foreignObject><foreignObject style="overflow: visible;" y="48.3250020345052" x="10" height="33.32500203450521" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 33px; width: 30px;">1000k</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="33.325002034505204" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 33px; width: 30px;">2000k</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">3000k</span></foreignObject></g></svg></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end product sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- top perfomimg  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header">Top Performing Campaigns</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table no-wrap p-table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Campaign</th>
                                                        <th class="border-0">Visits</th>
                                                        <th class="border-0">Revenue</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Campaign#1</td>
                                                        <td>98,789 </td>
                                                        <td>$4563</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#2</td>
                                                        <td>2,789 </td>
                                                        <td>$325</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#3</td>
                                                        <td>1,459 </td>
                                                        <td>$225</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#4</td>
                                                        <td>5,035 </td>
                                                        <td>$856</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#5</td>
                                                        <td>10,000 </td>
                                                        <td>$1000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#5</td>
                                                        <td>10,000 </td>
                                                        <td>$1000</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <a href="#" class="btn btn-outline-light float-right">Details</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end top perfomimg  -->
                                <!-- ============================================================== -->
                            </div>
                        </div>

                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Sales</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$12099</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">New Customer</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">1245</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Visitor</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">13000</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Orders</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">1340</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- total revenue  -->
                            <!-- ============================================================== -->
  
                            
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- category revenue  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Revenue by Category</h5>
                                    <div class="card-body">
                                        <div id="c3chart_category" style="height: 420px; max-height: 420px; position: relative;" class="c3"><svg width="295.20001220703125" height="420" style="overflow: hidden;"><defs><clipPath id="c3-1655038116426-clip"><rect width="295.20001220703125" height="376"></rect></clipPath><clipPath id="c3-1655038116426-clip-xaxis"><rect x="-31" y="-20" width="357.20001220703125" height="60"></rect></clipPath><clipPath id="c3-1655038116426-clip-yaxis"><rect x="-29" y="-4" width="20" height="400"></rect></clipPath><clipPath id="c3-1655038116426-clip-grid"><rect width="295.20001220703125" height="376"></rect></clipPath><clipPath id="c3-1655038116426-clip-subchart"><rect width="295.20001220703125" height="0"></rect></clipPath></defs><g transform="translate(0.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="147.60000610351562" y="188" style="opacity: 0;"></text><g clip-path="url(file:///D:/Laravel%209%20E-commerce/concept-master/index.html#c3-1655038116426-clip)" class="c3-regions" style="visibility: hidden;"></g><g clip-path="url(file:///D:/Laravel%209%20E-commerce/concept-master/index.html#c3-1655038116426-clip-grid)" class="c3-grid" style="visibility: hidden;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="376" style="visibility: hidden;"></line></g></g><g clip-path="url(file:///D:/Laravel%209%20E-commerce/concept-master/index.html#c3-1655038116426-clip)" class="c3-chart"><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-Men" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Men c3-bars c3-bars-Men" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Women" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Women c3-bars c3-bars-Women" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Accessories" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Accessories c3-bars c3-bars-Accessories" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Children" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Children c3-bars c3-bars-Children" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Apperal" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Apperal c3-bars c3-bars-Apperal" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-Men" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Men c3-lines c3-lines-Men"></g><g class=" c3-shapes c3-shapes-Men c3-areas c3-areas-Men"></g><g class=" c3-selected-circles c3-selected-circles-Men"></g><g class=" c3-shapes c3-shapes-Men c3-circles c3-circles-Men" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Women" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Women c3-lines c3-lines-Women"></g><g class=" c3-shapes c3-shapes-Women c3-areas c3-areas-Women"></g><g class=" c3-selected-circles c3-selected-circles-Women"></g><g class=" c3-shapes c3-shapes-Women c3-circles c3-circles-Women" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Accessories" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Accessories c3-lines c3-lines-Accessories"></g><g class=" c3-shapes c3-shapes-Accessories c3-areas c3-areas-Accessories"></g><g class=" c3-selected-circles c3-selected-circles-Accessories"></g><g class=" c3-shapes c3-shapes-Accessories c3-circles c3-circles-Accessories" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Children" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Children c3-lines c3-lines-Children"></g><g class=" c3-shapes c3-shapes-Children c3-areas c3-areas-Children"></g><g class=" c3-selected-circles c3-selected-circles-Children"></g><g class=" c3-shapes c3-shapes-Children c3-circles c3-circles-Children" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Apperal" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Apperal c3-lines c3-lines-Apperal"></g><g class=" c3-shapes c3-shapes-Apperal c3-areas c3-areas-Apperal"></g><g class=" c3-selected-circles c3-selected-circles-Apperal"></g><g class=" c3-shapes c3-shapes-Apperal c3-circles c3-circles-Apperal" style="cursor: pointer;"></g></g></g><g class="c3-chart-arcs" transform="translate(147.60000610351562,183)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 1;"></text><g class="c3-chart-arc c3-target c3-target-Men"><g class=" c3-shapes c3-shapes-Men c3-arcs c3-arcs-Men"><path class=" c3-shape c3-shape c3-arc c3-arc-Men" transform="" d="M8.58599906386801e-15,-140.22000579833983A140.22000579833983,140.22000579833983,0,0,1,116.05855612078128,78.68965355906657L69.63513367246877,47.213792135439945A84.1320034790039,84.1320034790039,0,0,0,5.151599438320805e-15,-84.1320034790039Z" style="fill: rgb(89, 105, 255); cursor: pointer;"></path></g><text dy=".35em" class="" transform="translate(99.10885119609955,-52.54418741673272)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Women"><g class=" c3-shapes c3-shapes-Women c3-arcs c3-arcs-Women"><path class=" c3-shape c3-shape c3-arc c3-arc-Women" transform="" d="M116.05855612078128,78.68965355906657A140.22000579833983,140.22000579833983,0,0,1,-96.42922210794215,101.79909208702999L-57.85753326476529,61.079455252218A84.1320034790039,84.1320034790039,0,0,0,69.63513367246877,47.213792135439945Z" style="fill: rgb(255, 64, 123); cursor: pointer;"></path></g><text dy=".35em" class="" transform="translate(12.128359512252754,111.51842409322724)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Accessories"><g class=" c3-shapes c3-shapes-Accessories c3-arcs c3-arcs-Accessories"><path class=" c3-shape c3-shape c3-arc c3-arc-Accessories" transform="" d="M-96.42922210794215,101.79909208702999A140.22000579833983,140.22000579833983,0,0,1,-135.10898553803577,-37.51282517978747L-81.06539132282145,-22.507695107872483A84.1320034790039,84.1320034790039,0,0,0,-57.85753326476529,61.079455252218Z" style="fill: rgb(37, 213, 242); cursor: pointer;"></path></g><text dy=".35em" class="" transform="translate(-108.0871884304286,30.010260143830106)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Children"><g class=" c3-shapes c3-shapes-Children c3-arcs c3-arcs-Children"><path class=" c3-shape c3-shape c3-arc c3-arc-Children" transform="" d="M-135.10898553803577,-37.51282517978747A140.22000579833983,140.22000579833983,0,0,1,-58.87685225544004,-127.26023060869228L-35.326111353264025,-76.35613836521537A84.1320034790039,84.1320034790039,0,0,0,-81.06539132282145,-22.507695107872483Z" style="fill: rgb(255, 199, 80); cursor: pointer;"></path></g><text dy=".35em" class="" transform="translate(-85.49629423141748,-72.62120688469881)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Apperal"><g class=" c3-shapes c3-shapes-Apperal c3-arcs c3-arcs-Apperal"><path class=" c3-shape c3-shape c3-arc c3-arc-Apperal" transform="" d="M-58.87685225544004,-127.26023060869228A140.22000579833983,140.22000579833983,0,0,1,-2.5757997191604024e-14,-140.22000579833983L-1.5454798314962417e-14,-84.1320034790039A84.1320034790039,84.1320034790039,0,0,0,-35.326111353264025,-76.35613836521537Z" style="fill: rgb(46, 197, 81); cursor: pointer;"></path></g><text dy=".35em" class="" transform="translate(-24.114525098289203,-109.55339198755699)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Men  " style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Men"></g></g><g class="c3-chart-text c3-target c3-target-Women  " style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Women"></g></g><g class="c3-chart-text c3-target c3-target-Accessories  " style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Accessories"></g></g><g class="c3-chart-text c3-target c3-target-Children  " style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Children"></g></g><g class="c3-chart-text c3-target c3-target-Apperal  " style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Apperal"></g></g></g><g class="c3-event-rects" style="fill-opacity: 0;"><rect class="c3-event-rect" x="0" y="0" width="295.20001220703125" height="376"></rect></g></g><g clip-path="url(file:///D:/Laravel%209%20E-commerce/concept-master/index.html#c3-1655038116426-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(file:///D:/Laravel%209%20E-commerce/concept-master/index.html#c3-1655038116426-clip-xaxis)" transform="translate(0,376)" style="visibility: visible; opacity: 0;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="295.20001220703125" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(148, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H295.20001220703125V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(file:///D:/Laravel%209%20E-commerce/concept-master/index.html#c3-1655038116426-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 0;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,345)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,306)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><g class="tick" transform="translate(0,267)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><g class="tick" transform="translate(0,228)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">50</tspan></text></g><g class="tick" transform="translate(0,189)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">60</tspan></text></g><g class="tick" transform="translate(0,150)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">70</tspan></text></g><g class="tick" transform="translate(0,111)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">80</tspan></text></g><g class="tick" transform="translate(0,72)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">90</tspan></text></g><g class="tick" transform="translate(0,33)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">100</tspan></text></g><path class="domain" d="M-6,1H0V376H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(295.20001220703125,0)" style="visibility: hidden; opacity: 0;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,376)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,339)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,301)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,264)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,226)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,189)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,151)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,114)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,76)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,39)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V376H6"></path></g></g><g transform="translate(0.5,420.5)" style="visibility: hidden;"><g clip-path="url(file:///D:/Laravel%209%20E-commerce/concept-master/index.html#c3-1655038116426-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(file:///D:/Laravel%209%20E-commerce/concept-master/index.html#c3-1655038116426-clip)" class="c3-brush" fill="none" pointer-events="all" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="overlay" pointer-events="all" cursor="crosshair" x="0" y="0" width="295.20001220703125" height="0"></rect><rect class="selection" cursor="move" fill="#777" fill-opacity="0.3" stroke="#fff" shape-rendering="crispEdges" style="display: none;"></rect><rect class="handle handle--e" cursor="ew-resize" style="display: none;"></rect><rect class="handle handle--w" cursor="ew-resize" style="display: none;"></rect></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(file:///D:/Laravel%209%20E-commerce/concept-master/index.html#c3-1655038116426-clip-xaxis)" style="opacity: 0;"><g class="tick" transform="translate(148, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H295.20001220703125V6"></path></g></g><g transform="translate(0,380)"><g class="c3-legend-item c3-legend-item-Men" style="visibility: visible; cursor: pointer;"><text x="56.23750400543213" y="9" style="pointer-events: none;">Men</text><rect class="c3-legend-item-event" x="42.23750400543213" y="-5" width="50.66250038146973" height="20" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="40.23750400543213" y1="4" x2="50.23750400543213" y2="4" stroke-width="10" style="stroke: rgb(89, 105, 255); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Women" style="visibility: visible; cursor: pointer;"><text x="106.90000438690186" y="9" style="pointer-events: none;">Women</text><rect class="c3-legend-item-event" x="92.90000438690186" y="-5" width="68.20000076293945" height="20" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="90.90000438690186" y1="4" x2="100.90000438690186" y2="4" stroke-width="10" style="stroke: rgb(255, 64, 123); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Accessories" style="visibility: visible; cursor: pointer;"><text x="175.1000051498413" y="9" style="pointer-events: none;">Accessories</text><rect class="c3-legend-item-event" x="161.1000051498413" y="-5" width="91.86250305175781" height="20" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="159.1000051498413" y1="4" x2="169.1000051498413" y2="4" stroke-width="10" style="stroke: rgb(37, 213, 242); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Children" style="visibility: visible; cursor: pointer;"><text x="94.55000495910645" y="29" style="pointer-events: none;">Children</text><rect class="c3-legend-item-event" x="80.55000495910645" y="15" width="74" height="20" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="78.55000495910645" y1="24" x2="88.55000495910645" y2="24" stroke-width="10" style="stroke: rgb(255, 199, 80); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Apperal" style="visibility: visible; cursor: pointer;"><text x="168.55000495910645" y="29" style="pointer-events: none;">Apperal</text><rect class="c3-legend-item-event" x="154.55000495910645" y="15" width="60.10000228881836" height="20" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="152.55000495910645" y1="24" x2="162.55000495910645" y2="24" stroke-width="10" style="stroke: rgb(46, 197, 81); pointer-events: none;"></line></g></g><text class="c3-title" x="147.60000610351562" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none;"></div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end category revenue  -->
                            <!-- ============================================================== -->

               </div>
                                    <div class="card-footer">
                                        <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- social source  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header"> Sales By Social Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="social-sales list-group list-group-flush">
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><i class="fab fa-facebook-f"></i></span><span class="social-sales-name">Facebook</span><span class="social-sales-count text-dark">120 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle twitter-bgcolor mr-2"><i class="fab fa-twitter"></i></span><span class="social-sales-name">Twitter</span><span class="social-sales-count text-dark">99 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle instagram-bgcolor mr-2"><i class="fab fa-instagram"></i></span><span class="social-sales-name">Instagram</span><span class="social-sales-count text-dark">76 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle pinterest-bgcolor mr-2"><i class="fab fa-pinterest-p"></i></span><span class="social-sales-name">Pinterest</span><span class="social-sales-count text-dark">56 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle googleplus-bgcolor mr-2"><i class="fab fa-google-plus-g"></i></span><span class="social-sales-name">Google Plus</span><span class="social-sales-count text-dark">36 Sales</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end social source  -->
                                <!-- ============================================================== -->
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- sales traffice source  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header"> Sales By Traffic Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="traffic-sales list-group list-group-flush">
                                            <li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Direct</span><span class="traffic-sales-amount">$4000.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Search<span class="traffic-sales-amount">$3123.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                                </span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Social<span class="traffic-sales-amount ">$3099.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                                </span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Referrals<span class="traffic-sales-amount ">$2220.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">4.02%</span></span>
                                                </span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Email<span class="traffic-sales-amount">$1567.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">3.86%</span></span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales traffice source  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- sales traffic country source  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Sales By Country Traffic Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="country-sales list-group list-group-flush">
                                            <li class="country-sales-content list-group-item"><span class="mr-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> </span>
                                                <span class="">United States</span><span class="float-right text-dark">78%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i></span><span class="">Canada</span><span class="float-right text-dark">7%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i></span><span class="">Russia</span><span class="float-right text-dark">4%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-in" title="in" id="in"></i></span><span class="">India</span><span class="float-right text-dark">12%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i></span><span class="">France</span><span class="float-right text-dark">16%</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales traffice country source  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>

@endsection