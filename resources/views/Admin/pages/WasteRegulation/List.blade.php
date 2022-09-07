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
                <li class="breadcrumb-item active">Waste Regulations</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage Waste Regulations <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Waste Regulations Section</h4>
                </div>
                <div class="panel-body">
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn btn-success" href="{{ route('/Admin/Waste-Add') }}">Add
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
                                                    <th>Country</th>
                                                    <th>EU Members</th>
                                                    <th>OECD</th>
                                                    <th>Link 1</th>
                                                    <th>Link 2</th>
                                                    <th>Link 3</th>
                                                    <th>Link 4</th>
                                                    <th>Link 5</th>
                                                    <th>Link 6</th>
                                                    <th>Link 7</th>
                                                    <th>Link 8</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($waste as $regulation)
                                                    <tr class="odd gradeX">
                                                        <td width="1%" class="f-s-600 text-inverse">
                                                            {{ $regulation->id }}
                                                        </td>
                                                        <td> {{ $regulation->WasteRegulations->country }}</td>
                                                        <td>
                                                            @if ($regulation->eu_members)
                                                                <b>{{ $regulation->eu_members }}</b>
                                                            @else
                                                                <b>Non-EU Member</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($regulation->oecd)
                                                                <b>{{ $regulation->oecd }}</b>
                                                            @else
                                                                <b>Non-OECD</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($regulation->link1)
                                                                <a href="">{{ $regulation->link1 }}</a>
                                                            @else
                                                                <b>No links Available</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($regulation->link2)
                                                                <a href=""> {{ $regulation->link2 }}</a>
                                                            @else
                                                                <b>No links Available</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($regulation->link3)
                                                                <a href=""> {{ $regulation->link3 }}</a>
                                                            @else
                                                                <b>No links Available</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($regulation->link4)
                                                                <a href="">{{ $regulation->link4 }}</a>
                                                            @else
                                                                <b>No links Available</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($regulation->link5)
                                                                <a href=""> {{ $regulation->link5 }}</a>
                                                            @else
                                                                <b>No links Available</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($regulation->link6)
                                                                <a href=""> {{ $regulation->link6 }}</a>
                                                            @else
                                                                <b>No links Available</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($regulation->link7)
                                                                <a href=""> {{ $regulation->link7 }}</a>
                                                            @else
                                                                <b>No links Available</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($regulation->link8)
                                                                <a href=""> {{ $regulation->link8 }}</a>
                                                            @else
                                                                <b>No links Available</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-primary"
                                                                href="{{ URL('/Admin/Waste-Edit/' . $regulation->id) }}">Edit</a>
                                                            <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/Waste/' . $regulation->id) }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Country</th>
                                                    <th>EU Members</th>
                                                    <th>OECD</th>
                                                    <th>Link 1</th>
                                                    <th>Link 2</th>
                                                    <th>Link 3</th>
                                                    <th>Link 4</th>
                                                    <th>Link 5</th>
                                                    <th>Link 6</th>
                                                    <th>Link 7</th>
                                                    <th>Link 8</th>
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
