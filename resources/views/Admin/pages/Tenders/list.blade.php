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
                <li class="breadcrumb-item"><a href="javascript:;">Tenders Section</a></li>
                <li class="breadcrumb-item active">Latest Article</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage Tenders <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Tenders Section</h4>
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
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    {{-- <div class="card-header">
                                        <a class="btn btn-success" href="{{ route('/Admin/Tender-Add') }}">Add
                                            Post</a>
                                    </div> --}}
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
                                                    <th>Name</th>
                                                    <th style="width: 30%">Description</th>
                                                    <th>Opening date</th>
                                                    <th>Closing date</th>
                                                    <th>Location</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th style="width: 10%">Approval</th>
                                                    <th style="width: 20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tender as $tenders)
                                                    <tr class="odd gradeX">
                                                        <td class="f-s-600 text-inverse">
                                                            {{ $tenders->id }}</td>
                                                        <td>
                                                            @if ($tenders->user_id)
                                                                <b>{{ $tenders->Seller_tender->name }}
                                                                    {{ $tenders->Seller_tender->lname }}</b>
                                                            @else
                                                                <b>Un-Authorized User</b>
                                                            @endif
                                                        </td>
                                                        <td>{{ $tenders->description }}</td>
                                                        <td>{{ $tenders->odate }}</td>
                                                        <td>{{ $tenders->cdate }}</td>
                                                        <td>{{ $tenders->location }}</td>
                                                        <td>{{ $tenders->amount }}</td>
                                                        <td>
                                                            @if ($tenders->status == 'Open')
                                                                <span class="p-5 bg-success text-white"
                                                                    style="border-radius: 60px">{{ $tenders->status }}</span>
                                                            @else
                                                                <span class="p-5 bg-danger text-white"
                                                                    style="border-radius: 60px">{{ $tenders->status }}</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <form action="{{ url('/toggle-approval') }}"
                                                                method="POST">
                                                                @csrf
                                                                <input <?php
if ($tenders->approve == 1) {
    echo 'checked';
}
?> type="checkbox"
                                                                    name="approve" class="mr-2">
                                                                <input type="hidden" name="ad_id" id=""
                                                                    value="{{ $tenders->id }}">
                                                                <input type="submit" class="btn btn-primary" name=""
                                                                    value="Approve" id="">
                                                            </form>

                                                            {{-- <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/Users/Ad/') }}">Delete</a> --}}
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-primary"
                                                                href="{{ URL('/Admin/Tender-Edit/' . $tenders->id) }}">Edit</a>
                                                            <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/Tender/' . $tenders->id) }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Opening date</th>
                                                    <th>Closing date</th>
                                                    <th>Location</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Approval</th>
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
