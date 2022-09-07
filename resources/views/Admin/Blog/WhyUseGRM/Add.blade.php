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
        @include('Admin.layouts.header')
        <!-- end #header -->

        <!-- begin #sidebar -->
        @include('Admin.layouts.sidebar')
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb float-xl-right">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Why Use GRM Section</a></li>
                <li class="breadcrumb-item active">Why Use GRM</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage Why Use GRM <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Why Use GRM Section</h4>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title text-lg float-left col-md-12">
                                            Add Data
                                            <a class="float-right btn btn-danger"
                                                href="{{ URL('/Admin/Why-Use-GRM') }}">Back</a>
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="{{ URL('/Admin/Why-Use-GRM') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Heading</b> </label>
                                                        <input type="text" name="heading" class="form-control"
                                                            id="exampleInputTitle" placeholder="Enter Heading ">
                                                        @error('heading')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Paragraph 1</b> </label>
                                                        <input type="text" name="p1" class="form-control"
                                                            id="exampleInputp1" placeholder="Enter Paragraph 1 ">
                                                        @error('p1')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Paragraph 2</b> </label>
                                                        <input type="text" name="p2" class="form-control"
                                                            id="exampleInputp2" placeholder="Enter Paragraph 2 ">
                                                        @error('p2')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for=""><b>Paragraph 3</b> </label>
                                                        <input type="text" name="p3" class="form-control"
                                                            id="exampleInputp3" placeholder="Enter Paragraph 3 ">
                                                        @error('p3')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
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
    @include('Admin.layouts.scripting')
</body>

</html>
