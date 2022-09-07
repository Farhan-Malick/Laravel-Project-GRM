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
                <li class="breadcrumb-item"><a href="javascript:;">Category Section</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage Category <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Category Section</h4>
                </div>
                <div class="panel-body">
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn btn-success" href="{{ URL('/Admin/Request_Add_Category') }}">Add
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
                                                    <th>Category</th>
                                                    <th>Sub-Categories Of</th>
                                                    <th>Updated At</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($category as $categories)
                                                    <tr class="odd gradeX">
                                                        <td width="1%" class="f-s-600 text-inverse">
                                                            {{ $categories->id }}</td>
                                                        <td> {{ $categories->category }}</td>
                                                        <td>
                                                            @if ($categories->cat_id)
                                                                <b>{{ $categories->father->category }}</b>
                                                            @else
                                                                <b>Main Category</b>
                                                            @endif
                                                        </td>
                                                        <td> {{ $categories->created_at }}</td>
                                                        <td> {{ $categories->updated_at }}</td>
                                                        <td>
                                                            <a class="btn btn-primary"
                                                                href="{{ URL('/Admin/Request_Category_Edit/' . $categories->id) }}">Edit</a>
                                                            <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/Request_Category/' . $categories->id) }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Category</th>
                                                    <th>Sub-Categories Of</th>
                                                    <th>Updated At</th>
                                                    <th>Created At</th>
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
