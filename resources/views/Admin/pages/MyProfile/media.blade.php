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
                <li class="breadcrumb-item"><a href="javascript:;">Media Section</a></li>
                <li class="breadcrumb-item active">Media</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage Media <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Media Section</h4>
                </div>
                <div class="panel-body">
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    @if (session('msg'))
                                        <div class="col-sm-6 mx-auto " style="text-align: center;  font-size:20px">
                                            {{ session('msg') }}</div>
                                    @endif
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="data-table-default"
                                            class="table table-striped table-bordered table-responsive ">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>File</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($media as $msgs)
                                                    <tr class="odd gradeX">
                                                        <td width="1%" class="f-s-600 text-inverse">{{ $msgs->id }}
                                                        </td>
                                                        <td>
                                                            @if ($msgs->user_id)
                                                                <b>{{ $msgs->media->name }}</b>
                                                            @else
                                                                <b>Un-Authorized User</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset('storage/app/public/post/' . $msgs->file) }}"
                                                                class="img-rounded height-50 width-50" />
                                                        </td>
                                                        <td> <video
                                                                src="{{ asset('storage/app/public/post/' . $msgs->video) }}"
                                                                class="img-rounded height-50 width-50"></video>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/DeleteMedia/' . $msgs->id) }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>File</th>
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
