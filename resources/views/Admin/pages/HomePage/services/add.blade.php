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
                <li class="breadcrumb-item"><a href="javascript:;">Services Section</a></li>
                <li class="breadcrumb-item active">Add Services</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Add Something In Services <small>You Can Update And Delete Data</small></h1>
            <!-- end page-Services -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Add Data Services Section</h4>
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
                                            Add Data
                                            <a class="float-right btn btn-danger"
                                                href="{{ URL('/Admin/Services') }}">Back</a>
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="{{ URL('Admin/add') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row card-body">
                                                <div class="form-group col-md-4">
                                                    <label for=""><b>Heading Of Block 1</b> </label>
                                                    <input type="text" name="h1_b1" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Heading ">
                                                    @error('h1_b1')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for=""><b>Paragraph Of block 1</b> </label>
                                                    <input type="text" name="p1_b1" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Paragraph ">
                                                    @error('p1_b1')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for=""><b>Heading Of Block 2</b> </label>
                                                    <input type="text" name="h2_b2" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Heading ">
                                                    @error('h2_b2')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for=""><b>Paragraph Of block 2</b> </label>
                                                    <input type="text" name="p2_b2" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Paragraph ">
                                                    @error('p2_b2')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for=""><b>Heading Of Block 3</b> </label>
                                                    <input type="text" name="h3_b3" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Heading ">
                                                    @error('h3_b3')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for=""><b>Paragraph Of block 3</b> </label>
                                                    <input type="text" name="p3_b3" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Paragraph ">
                                                    @error('p3_b3')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for=""><b>Heading Of Block 4</b> </label>
                                                    <input type="text" name="h4_b4" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Heading ">
                                                    @error('h4_b4')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for=""><b>Paragraph Of block 4</b> </label>
                                                    <input type="text" name="p4_b4" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Paragraph ">
                                                    @error('p4_b4')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for=""><b>Heading Of Block 5</b> </label>
                                                    <input type="text" name="h5_b5" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Heading ">
                                                    @error('h5_b5')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for=""><b>Paragraph Of block 5</b> </label>
                                                    <input type="text" name="p5_b5" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Paragraph ">
                                                    @error('p5_b5')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for=""><b>Heading Of Block 6</b> </label>
                                                    <input type="text" name="h6_b6" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Heading ">
                                                    @error('h6_b6')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for=""><b>Paragraph Of block 6</b> </label>
                                                    <input type="text" name="p6_b6" class="form-control"
                                                        id="exampleInputTitle" placeholder="Enter Paragraph ">
                                                    @error('p6_b6')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary "
                                                    style="width: 40%">Submit</button>
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
