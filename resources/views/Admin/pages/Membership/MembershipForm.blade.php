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
                <li class="breadcrumb-item"><a href="javascript:;">Membership Form Detail Section</a></li>
                <li class="breadcrumb-item active">Membership Form Detail</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage Membership Form <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Membership Form Section</h4>
                </div>
                <div class="panel-body">
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
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
                                                    <th>UserName</th>
                                                    <th>Registered As</th>
                                                    <th>Company Name</th>
                                                    <th>Company Scope</th>
                                                    <th>Address</th>
                                                    <th>Country</th>
                                                    <th>City</th>
                                                    <th>Zip Code</th>
                                                    <th>Company Email</th>
                                                    <th>Company Website</th>
                                                    <th>First Name</th>
                                                    <th>Last Scope</th>
                                                    <th>Phone</th>
                                                    <th>Gender</th>
                                                    <th>Profile Image</th>
                                                    <th>Company Document</th>
                                                    <th>Name-On-Card</th>
                                                    <th>Card-No</th>
                                                    <th>Expiration</th>
                                                    <th>Cvv</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($member as $membership)
                                                    <tr class="odd gradeX">
                                                        <td width="" class="f-s-600 text-inverse">
                                                            {{ $membership->id }}
                                                        <td>
                                                            @if ($membership->user_id)
                                                                <b>{{ $membership->Membership->name }}</b>
                                                            @else
                                                                <b>Un-Authorized User</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($membership->user_id || $membership->industry != null)
                                                                <b>{{ $membership->industry }}</b>
                                                            @endif
                                                            @if ($membership->user_id || $membership->industry == null || $membership->type != null)
                                                                <b>{{ $membership->type }}</b>
                                                            @endif
                                                        </td>
                                                        <td>{{ $membership->company_name }}</td>
                                                        <td>{{ $membership->company_scope }}</td>
                                                        <td>{{ $membership->address }}</td>
                                                        <td>{{ $membership->country }}</td>
                                                        <td>{{ $membership->city }}</td>
                                                        <td>{{ $membership->zip_code }}</td>
                                                        <td>{{ $membership->company_email }}</td>
                                                        <td>{{ $membership->company_website }}</td>
                                                        <td>{{ $membership->firstname }}</td>
                                                        <td>{{ $membership->last_scope }}</td>
                                                        <td>{{ $membership->phone }}</td>
                                                        <td>{{ $membership->gender }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/app/public/post/Memberships/' . $membership->image) }}"
                                                                class="img-rounded height-30 width-30" />
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="{{ URL('/storage/app/public/post/', $membership->company_document) }}">{{ $membership->company_document }}</a>
                                                        </td>
                                                        <td>{{ $membership->name_on_card }}</td>
                                                        <td>{{ $membership->card_no }}</td>
                                                        <td>{{ $membership->expiration }}</td>
                                                        <td>{{ $membership->cvv }}</td>
                                                        <td colspan="2" style="width: 20%">
                                                            <a class="btn btn-primary" href="#">Approve</a>
                                                            <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/Membership_Decline/' . $membership->id) }}">Decline</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>UserName</th>
                                                    <th>Registered As</th>
                                                    <th>Company Name</th>
                                                    <th>Company Scope</th>
                                                    <th>Address</th>
                                                    <th>Country</th>
                                                    <th>City</th>
                                                    <th>Zip Code</th>
                                                    <th>Company Email</th>
                                                    <th>Company Website</th>
                                                    <th>First Name</th>
                                                    <th>Last Scope</th>
                                                    <th>Phone</th>
                                                    <th>Gender</th>
                                                    <th>Profile Image</th>
                                                    <th>Company Document</th>
                                                    <th>Name-On-Card</th>
                                                    <th>Card-No</th>
                                                    <th>Expiration</th>
                                                    <th>Cvv</th>
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
