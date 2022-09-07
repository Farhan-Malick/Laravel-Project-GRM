<!DOCTYPE html>
<html lang="en">
@include('Admin.layouts.headlinks')

<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        @include('ADmin.layouts.header')
        <!-- end #header -->

        <!-- begin #sidebar -->
        @include('ADmin.layouts.sidebar')
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb float-xl-right">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Service Section</a></li>
                <li class="breadcrumb-item active">Edit Service</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage Service <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Add Data Service Section</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                            data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                            data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                            data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title text-lg float-left col-md-12">
                                            Edit Data
                                            <a class="float-right btn btn-danger"
                                                href="{{ URL('/Admin/Service') }}">Back</a>
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="{{ URL('/Admin/Service-Update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $header['id'] }}">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for=""><b>Service Providers</b> </label>
                                                    <input value="{{ $header['service_providers'] }}" type="text"
                                                        name="service_providers" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Service Providers ">
                                                    @error('Service Providers')
                                                        <span>{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <div class="tab-content p-0">

                                        </div>
                                    </div><!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end #content -->



        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
            data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    @include('ADmin.layouts.scripting')
</body>

</html>
