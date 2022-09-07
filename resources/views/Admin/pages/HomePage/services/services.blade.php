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
                <li class="breadcrumb-item active">Services</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage Services <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Services Section</h4>
                </div>
                <div class="panel-body">
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn btn-success" href="{{ url('/Admin/Add') }}">Add
                                            Post</a>
                                    </div>
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
                                                    <th>Heading Block - 1</th>
                                                    <th>Paragraph Block - 1</th>
                                                    <th>Heading Block - 2</th>
                                                    <th>Paragraph Block - 2</th>
                                                    <th>Heading Block - 3</th>
                                                    <th>Paragraph Block - 3</th>
                                                    <th>Heading Block - 4</th>
                                                    <th>Paragraph Block - 4</th>
                                                    <th>Heading Block - 5</th>
                                                    <th>Paragraph Block - 5</th>
                                                    <th>Heading Block - 6</th>
                                                    <th>Paragraph Block - 6</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($Service as $Services)
                                                    <tr>
                                                        <td>{{ $Services->id }}</td>
                                                        <td>{{ $Services->h1_b1 }}</td>
                                                        <td>{{ $Services->p1_b1 }}</td>
                                                        <td>{{ $Services->h2_b2 }}</td>
                                                        <td>{{ $Services->p2_b2 }}</td>
                                                        <td>{{ $Services->h3_b3 }}</td>
                                                        <td>{{ $Services->p3_b3 }}</td>
                                                        <td>{{ $Services->h4_b4 }}</td>
                                                        <td>{{ $Services->p4_b4 }}</td>
                                                        <td>{{ $Services->h5_b5 }}</td>
                                                        <td>{{ $Services->p5_b5 }}</td>
                                                        <td>{{ $Services->h6_b6 }}</td>
                                                        <td>{{ $Services->p6_b6 }}</td>
                                                        <td>
                                                            <a class="btn btn-primary"
                                                                href="{{ URL('/Admin/Services-Edit/' . $Services->id) }}">Edit</a>
                                                            <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/Services/' . $Services->id) }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Heading Block - 1</th>
                                                    <th>Paragraph Block - 1</th>
                                                    <th>Heading Block - 2</th>
                                                    <th>Paragraph Block - 2</th>
                                                    <th>Heading Block - 3</th>
                                                    <th>Paragraph Block - 3</th>
                                                    <th>Heading Block - 4</th>
                                                    <th>Paragraph Block - 4</th>
                                                    <th>Heading Block - 5</th>
                                                    <th>Paragraph Block - 5</th>
                                                    <th>Heading Block - 6</th>
                                                    <th>Paragraph Block - 6</th>

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
