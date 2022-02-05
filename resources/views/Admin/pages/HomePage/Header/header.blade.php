<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Color Admin | Page with Light Sidebar</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    @include('Admin.layouts.headlinks')
</head>

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
                <li class="breadcrumb-item"><a href="javascript:;">Header Section</a></li>
                <li class="breadcrumb-item active">Header</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage Header <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Header Section</h4>
                </div>
                <div class="panel-body">
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn btn-success" href="{{ route('/Admin/header-Add') }}">Add
                                            Post</a>
                                    </div>
                                    @if (session('Teacherupdated'))
                                        <div class="col-sm-6 mx-auto " style="text-align: center; font-size:20px">
                                            {{ session('Teacherupdated') }}</div>
                                    @endif
                                    @if (session('TeacherDeleted'))
                                        <div class="col-sm-6 mx-auto "
                                            style="text-align: center; color:red; font-size:20px">
                                            {{ session('TeacherDeleted') }}</div>
                                    @endif
                                    @if (session('msg'))
                                        <div class="col-sm-6 mx-auto " style="text-align: center;  font-size:20px">
                                            {{ session('msg') }}</div>
                                    @endif
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="data-table-default"
                                            class="table table-striped table-bordered table-responsive">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Heading</th>
                                                    <th>Title</th>
                                                    <th>Background-Image(s)</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($header as $headers)
                                                    <tr class="odd gradeX">
                                                        <td width="1%" class="f-s-600 text-inverse">{{ $headers->id }}
                                                        </td>
                                                        <td>{{ $headers->heading }}</td>
                                                        <td>{{ $headers->title }}</td>
                                                        <td class="with-img"><img
                                                                src="{{ asset('storage/app/public/post/home/background/' . $headers->image) }}"
                                                                class="img-rounded height-50" /></td>
                                                        <td class="with-img"><img
                                                                src="{{ asset('storage/app/public/post/home/BannerImage/' . $headers->image2) }}"
                                                                class="img-rounded height-50" /></td>
                                                        <td>
                                                            <a class="btn btn-primary"
                                                                href="{{ URL('/Admin/header-Edit/' . $headers->id) }}">Edit</a>
                                                            <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/header/' . $headers->id) }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Heading</th>
                                                    <th>Title</th>
                                                    <th>Background-Image(s)</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </section>
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
