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
                <li class="breadcrumb-item"><a href="javascript:;">Waste
                        Regulation Section</a></li>
                <li class="breadcrumb-item active">Add Waste
                    Regulation</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Add Something In Waste
                Regulation <small>You Can Update And Delete Data</small></h1>
            <!-- end page-Waste
Regulation -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Add Data Waste
                        Regulation Section</h4>
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
                                                href="{{ URL('/Admin/WasteRKC') }}">Back</a>
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="{{ URL('/Admin/WasteRKC-Update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $waste_regulations['id'] }}">
                                            <div class="row card-body">
                                                <div class="form-group col-md-6">
                                                    <label for=""><b>Heading 1</b> </label>
                                                    <input value="{{ $waste_regulations['heading1'] }}" type="text"
                                                        name="heading1" class="form-control" id="exampleInputTitle"
                                                        placeholder="Enter Heading ">
                                                    @error('heading1')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for=""><b>Heading 2</b> </label>
                                                    <input value="{{ $waste_regulations['heading2'] }}" type="text"
                                                        name="heading2" class="form-control" id="exampleInputTitle"
                                                        placeholder="Enter Heading ">
                                                    @error('heading2')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for=""><b>Paragraph</b> </label>
                                                    <textarea name="paragraph" id="" cols="30" class="form-control">{{ $waste_regulations['paragraph'] }}</textarea>
                                                    @error('paragraph')
                                                        <p class="text-danger"><span>{{ $message }}</span></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group  col-md-6">
                                                    <label for="exampleInputFile"><b>Background-Image</b> </label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="image" class="custom-file-input"
                                                                id="exampleInputFile">
                                                            <label class="custom-file-label"
                                                                for="exampleInputFile">Choose file</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>
                                                    @error('image')
                                                        <span>{{ $message }}</span>
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
