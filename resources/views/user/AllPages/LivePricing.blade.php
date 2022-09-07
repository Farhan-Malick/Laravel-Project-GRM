<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<head>
    {{-- <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" /> --}}
</head>

<body>
    <h3 class="pt-1" id="button"> <i class="fa fa-angle-up text-white" aria-hidden="true"></i></i></h3>
    <script>
        var btn = $('#button');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
    <div class="container-fluid mb-5 mt-5 p-4" style="width:90%">
        <div class="row border 1px mb-4 pt-4">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-2">
                        <h5 class="img_div_VP " style="float: left">Stock Overview </h5>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="" id="" class="form-control  inp  img_div_VP mr-2"
                            placeholder="Stock Search" style="float: right">
                        <input type="date" name="" class="form-control mr-2  inp" id="" style="float: right">

                        <a type="button" class="btn btn-outline-danger livebtn">Live Feed</a>
                        <a type="button" class="btn btn-outline-secondary livebtn text-dark">Historical</a>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-3 livetablerow">
                        <div class="panel-body">
                            <table id="data-table-responsive" class="table ">
                                <thead class="">
                                    <tr>
                                        <th class="text-nowrap">Stock Name</th>
                                        <th class="text-nowrap"></th>
                                        <th class="text-nowrap">Charge (%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX alert alert-danger">
                                        <td>COMPOSITE</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX ">
                                        <td>DBX</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>

                                    <tr class="odd gradeX">
                                        <td>MXB</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>KOMPAS100</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>INFOBANK15</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>LQ45</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>JII</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>BISNIS-27</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>IDX30</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>IDXHIDIV20</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>Investor33</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX ">
                                        <td>DBX</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>

                                    <tr class="odd gradeX">
                                        <td>MXB</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>KOMPAS100</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>INFOBANK15</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>LQ45</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>JII</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>BISNIS-20</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>IDX30</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>IDXHIDIV20</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.53</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <!-- begin panel -->
                        <div class="panel panel-inverse " data-sortable-id="chart-js-5">
                            <div class="panel-body ">
                                <div class="row mt-4">
                                    <div class="col-md-8 mb-2">
                                        <a type="button " class="btn btn-outline-danger livebtn" style="">Today</a>
                                        <a type="button" class="btn btn-outline-secondary livebtn " style="">Weeks</a>
                                        <a type="button" class="btn btn-outline-secondary livebtn " style="">Months</a>
                                        <a type="button" class="btn btn-outline-secondary livebtn " style="">Years</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body ">
                                <div id="apex-mixed-chart" class="mt-4"></div>
                            </div>
                        </div>
                        <!-- end panel -->
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                        <form action="">
                            <div class="form-row ">
                                <div class="form-group   col-md-12 ">
                                    <select name="country" class="form-control reg_para ">
                                        <option>ELECTRONIC PUBLIC OFFERING</option>
                                        <option>india</option>
                                        <option>Australia</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                        <option>China</option>
                                        <option>Colombia</option>
                                        <option>Egypt</option>
                                        <option>Iran</option>
                                    </select>
                                    @error('country')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group   col-md-12 ">
                                    <select name="country" class="form-control reg_para ">
                                        <option>LISTED COMPANY DISCLOSURE</option>
                                        <option>india</option>
                                        <option>Australia</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                        <option>China</option>
                                        <option>Colombia</option>
                                        <option>Egypt</option>
                                        <option>Iran</option>
                                    </select>
                                    @error('country')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group   col-md-12 ">
                                    <select name="country" class="form-control reg_para ">
                                        <option>LISTED COMPANY FINANCIAL REPORT</option>
                                        <option>india</option>
                                        <option>Australia</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                        <option>China</option>
                                        <option>Colombia</option>
                                        <option>Egypt</option>
                                        <option>Iran</option>
                                    </select>
                                    @error('country')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group   col-md-12 ">
                                    <select name="country" class="form-control reg_para ">
                                        <option>ANNOUNCEMENT</option>
                                        <option>india</option>
                                        <option>Australia</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                        <option>China</option>
                                        <option>Colombia</option>
                                        <option>Egypt</option>
                                        <option>Iran</option>
                                    </select>
                                    @error('country')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 livetablerow">
                        {{-- STOCK TABLE --}}
                        <div class="panel-body ">
                            <table id="data-table-responsive" class="table ">
                                <thead class="">
                                    <tr>
                                        <th class="text-nowrap">Stock Name</th>
                                        <th class="text-nowrap"></th>
                                        <th class="text-nowrap">Charge (%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX alert alert-danger">
                                        <td>COMPOSITE</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.33</td>
                                    </tr>
                                    <tr class="odd gradeX ">
                                        <td>DBX</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.03</td>
                                    </tr>

                                    <tr class="odd gradeX">
                                        <td>MXB</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.33</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>KOMPAS100</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.33</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>INFOBANK15</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.33</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>LQ45</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.09</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>JII</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.33</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>BISNIS-27</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.33</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>IDX30</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.33</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>IDXHIDIV20</td>
                                        <td>6,651.207</td>
                                        <td class="text-success">0.33</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12">
                <h3 class="" style="float: left">TOP STOCK</h3>
                <small class="ml-3"><a class="pt-5" href="">View More</a></small>
                <input type="date" class="form-control" style="width:10%; float: right;" name="" id="">
            </div>
        </div>
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-12">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-sm-4">
                        <!-- begin card -->
                        <div class="card border-0 text-truncate mb-3 bg-success text-white">
                            <!-- begin card-body -->
                            <div class="card-body">
                                <!-- begin title -->
                                <div class="mb-3 text-grey">
                                    <b class="mb-3">Composite</b>
                                    <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover"
                                            data-trigger="hover" data-title="Conversion Rate" data-placement="top"
                                            data-content="Percentage of sessions that resulted in orders from total number of sessions."
                                            data-original-title="" title=""></i></span>
                                </div>
                                <!-- end title -->
                                <!-- begin conversion-rate -->
                                <div class="d-flex align-items-center mb-1">
                                    <h2 class="text-white mb-0"><span data-animation="number"
                                            data-value="0.33">0.00</span>%</h2>
                                    <div class="ml-auto">
                                        <div id="conversion-rate-sparkline"></div>
                                    </div>
                                </div>
                                <!-- end conversion-rate -->
                                <!-- begin percentage -->
                                <div class="mb-4 text-grey">
                                    <i class="fa fa-caret-down"></i> <span data-animation="number"
                                        data-value="0.50">0.00</span>% compare to last week
                                </div>
                                <!-- end percentage -->
                                <!-- begin info-row -->
                                <div class="d-flex mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-circle text-red f-s-8 mr-2"></i> Added to cart
                                    </div>
                                    <div class="d-flex align-items-center ml-auto">
                                        <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span
                                                data-animation="number" data-value="262">0</span>%</div>
                                        <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number"
                                                data-value="3.79">0.00</span>%</div>
                                    </div>
                                </div>
                                <!-- end info-row -->
                                <!-- begin info-row -->
                                <div class="d-flex mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-circle text-warning f-s-8 mr-2"></i> Reached checkout
                                    </div>
                                    <div class="d-flex align-items-center ml-auto">
                                        <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span
                                                data-animation="number" data-value="11">0</span>%</div>
                                        <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number"
                                                data-value="3.85">0.00</span>%</div>
                                    </div>
                                </div>
                                <!-- end info-row -->
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-sm-4">
                        <!-- begin card -->
                        <div class="card border-0 text-truncate mb-3 bg-danger text-white">
                            <!-- begin card-body -->
                            <div class="card-body">
                                <!-- begin title -->
                                <div class="mb-3 text-grey">
                                    <b class="mb-3">LQ45</b>
                                    <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover"
                                            data-trigger="hover" data-title="Conversion Rate" data-placement="top"
                                            data-content="Percentage of sessions that resulted in orders from total number of sessions."
                                            data-original-title="" title=""></i></span>
                                </div>
                                <!-- end title -->
                                <!-- begin conversion-rate -->
                                <div class="d-flex align-items-center mb-1">
                                    <h2 class="text-white mb-0"><span data-animation="number"
                                            data-value="0.09">0.00</span>%</h2>
                                    <div class="ml-auto">
                                        <div id="conversion-rate-sparkline"></div>
                                    </div>
                                </div>
                                <!-- end conversion-rate -->
                                <!-- begin percentage -->
                                <div class="mb-4 text-grey">
                                    <i class="fa fa-caret-down"></i> <span data-animation="number"
                                        data-value="0.50">0.00</span>% compare to last week
                                </div>
                                <!-- end percentage -->
                                <!-- begin info-row -->
                                <div class="d-flex mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-circle text-red f-s-8 mr-2"></i> Added to cart
                                    </div>
                                    <div class="d-flex align-items-center ml-auto">
                                        <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span
                                                data-animation="number" data-value="262">0</span>%</div>
                                        <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number"
                                                data-value="3.79">0.00</span>%</div>
                                    </div>
                                </div>
                                <!-- end info-row -->
                                <!-- begin info-row -->
                                <div class="d-flex mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-circle text-warning f-s-8 mr-2"></i> Reached checkout
                                    </div>
                                    <div class="d-flex align-items-center ml-auto">
                                        <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span
                                                data-animation="number" data-value="11">0</span>%</div>
                                        <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number"
                                                data-value="3.85">0.00</span>%</div>
                                    </div>
                                </div>
                                <!-- end info-row -->
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-6 -->
                    <div class="col-sm-4">
                        <!-- begin card -->
                        <div class="card border-0 text-truncate mb-3 bg-success text-white">
                            <!-- begin card-body -->
                            <div class="card-body">
                                <!-- begin title -->
                                <div class="mb-3 text-grey">
                                    <b class="mb-3">DBX</b>
                                    <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover"
                                            data-trigger="hover" data-title="Store Sessions" data-placement="top"
                                            data-content="Number of sessions on your online store. A session is a period of continuous activity from a visitor."
                                            data-original-title="" title=""></i></span>
                                </div>
                                <!-- end title -->
                                <!-- begin store-session -->
                                <div class="d-flex align-items-center mb-1">
                                    <h2 class="text-white mb-0"><span data-animation="number"
                                            data-value="0.03">0</span></h2>
                                    <div class="ml-auto">
                                        <div id="store-session-sparkline"></div>
                                    </div>
                                </div>
                                <!-- end store-session -->
                                <!-- begin percentage -->
                                <div class="mb-4 text-grey">
                                    <i class="fa fa-caret-up"></i> <span data-animation="number"
                                        data-value="9.5">0.00</span>% compare to last week
                                </div>
                                <!-- end percentage -->
                                <!-- begin info-row -->
                                <div class="d-flex mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-circle text-teal f-s-8 mr-2"></i> Mobile
                                    </div>
                                    <div class="d-flex align-items-center ml-auto">
                                        <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span
                                                data-animation="number" data-value="25.7">0.00</span>%</div>
                                        <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number"
                                                data-value="53210">0</span></div>
                                    </div>
                                </div>
                                <!-- end info-row -->
                                <!-- begin info-row -->
                                <div class="d-flex mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-circle text-blue f-s-8 mr-2"></i> Desktop
                                    </div>
                                    <div class="d-flex align-items-center ml-auto">
                                        <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span
                                                data-animation="number" data-value="16.0">0.00</span>%</div>
                                        <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number"
                                                data-value="11959">0</span></div>
                                    </div>
                                </div>

                                <!-- end info-row -->
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end col-6 -->

        </div>
    </div>
    <!-- ================== BEGIN BASE JS ================== -->

    <script>
        < script src = "{{ asset('public/assets/js/app.min.js') }}" >
    </script>
    <script src="{{ asset('public/assets/js/theme/default.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('public/assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/demo/chart-apex.demo.js') }}"></script>
    </script>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/theme/default.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('public/assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('public/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('public/assets/js/demo/table-manage-responsive.demo.js') }}"></script>
    {{-- scripting Link Ends --}}
</body>

</html>
