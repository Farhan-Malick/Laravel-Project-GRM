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
                <li class="breadcrumb-item"><a href="javascript:;">Request Section</a></li>
                <li class="breadcrumb-item active">Request</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage Request <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Request Section</h4>
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
                                            <thead class="thead-dark ">
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Product Name</th>
                                                    <th>Location</th>
                                                    <th>Condition</th>
                                                    <th>Weight</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($addreq as $msg)
                                                    <tr class="odd gradeX">
                                                        <td width="1%" class="f-s-600 text-inverse">{{ $msg->id }}
                                                        </td>
                                                        <td>
                                                            @if ($msg->user_id)
                                                                <b>{{ $msg->request->name }}</b>
                                                            @else
                                                                <b>Un-Authorized User</b>
                                                            @endif
                                                        </td>
                                                        <td> {{ $msg->mtype->category }}
                                                            <li>{{ $msg->sub_type }}</li>
                                                        </td>
                                                        <td> {{ $msg->p_name }}</td>
                                                        <td> {{ $msg->location }}</td>
                                                        <td> {{ $msg->condition }}</td>
                                                        <td> {{ $msg->weight }}</td>
                                                        <td>
                                                            <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/DeleteReq/' . $msg->id) }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Product Name</th>
                                                    <th>Location</th>
                                                    <th>Condition</th>
                                                    <th>Weight</th>
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
