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
                <li class="breadcrumb-item"><a href="javascript:;">Waste Regulations Section</a></li>
                <li class="breadcrumb-item active">Add Waste Regulations</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Add Something In Waste Regulations <small>You Can Update And Delete Data</small>
            </h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Add Data Waste Regulations Section</h4>
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
                                    @if (session('msg'))
                                        <div class="col-sm-6 mx-auto " style="text-align: center;  font-size:20px">
                                            {{ session('msg') }}</div>
                                    @endif
                                    <div class="card-header">
                                        <h3 class="card-title text-lg float-left col-md-12">
                                            Add Data
                                            <a class="float-right btn btn-danger"
                                                href="{{ URL('/Admin/Waste-Regulations') }}">Back</a>
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="{{ URL('/Admin/Waste-add') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for=""><b>Country</b> </label>
                                                    <select id="selectCountry" name="country_id"
                                                        class="form-control reg_para ">
                                                        <option value="">Select Country :</option>
                                                        @foreach ($country as $wastes)
                                                            <option value="{{ $wastes->id }}">
                                                                {{ $wastes->country }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="eu_members" for=""><b>EU Members :</b></label>
                                                        <select name="eu_members" class="form-control ">
                                                            <option></option>
                                                            <option>EU Members</option>
                                                        </select>
                                                        @error('eu_members')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="oecd" for=""><b>OECD :</b></label>
                                                        <select name="oecd" class="form-control ">
                                                            <option></option>
                                                            <option>OECD</option>
                                                        </select>
                                                        @error('oecd')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Link 1</b> </label>
                                                        <input type="text" name="link1" class="form-control"
                                                            id="exampleInputTitle" placeholder="Enter Link 1 ">
                                                        @error('link1')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Link 2</b> </label>
                                                        <input type="text" name="link2" class="form-control"
                                                            id="exampleInputTitle" placeholder="Enter Link 2 ">
                                                        @error('link2')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Link 3</b> </label>
                                                        <input type="text" name="link3" class="form-control"
                                                            id="exampleInputTitle" placeholder="Enter Link 3 ">
                                                        @error('link3')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Link 4</b> </label>
                                                        <input type="text" name="link4" class="form-control"
                                                            id="exampleInputTitle" placeholder="Enter Link 4 ">
                                                        @error('link4')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Link 5</b> </label>
                                                        <input type="text" name="link5" class="form-control"
                                                            id="exampleInputTitle" placeholder="Enter Link 5 ">
                                                        @error('link5')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Link 6</b> </label>
                                                        <input type="text" name="link6" class="form-control"
                                                            id="exampleInputTitle" placeholder="Enter Link 6 ">
                                                        @error('link6')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Link 7</b> </label>
                                                        <input type="text" name="link7" class="form-control"
                                                            id="exampleInputTitle" placeholder="Enter Link 7 ">
                                                        @error('link7')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for=""><b>Link 8</b> </label>
                                                        <input type="text" name="link8" class="form-control"
                                                            id="exampleInputTitle" placeholder="Enter Link 8 ">
                                                        @error('link8')
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
