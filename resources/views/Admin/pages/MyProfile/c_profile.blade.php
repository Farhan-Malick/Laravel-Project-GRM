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
                <li class="breadcrumb-item"><a href="javascript:;">dCompany Profile Section</a></li>
                <li class="breadcrumb-item active">dCompany Profile</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage dCompany Profile <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM dCompany Profile Section</h4>
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
                                                    <th>Name</th>
                                                    <th>Company Email</th>
                                                    <th>Phone</th>
                                                    <th>Company Website </th>
                                                    <th>Description</th>
                                                    <th>Company Founding Year </th>
                                                    <th>VAT ID </th>
                                                    <th>Tax Id </th>
                                                    <th>Registration ID </th>
                                                    <th>Court </th>
                                                    <th>LinkedIn </th>
                                                    <th>Facebook </th>
                                                    <th>Twitter </th>
                                                    <th>Instagram </th>
                                                    <th>Office Address
                                                    </th>
                                                    <th>Warehouse Address
                                                    </th>
                                                    <th>Company Logo</th>
                                                    <th>Business Certificates</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($c_profile as $msg)
                                                    <tr class="odd gradeX">
                                                        <td>{{ $msg->id }}</td>
                                                        <td>{{ $msg->name }}</td>
                                                        <td>{{ $msg->company_email }}</td>
                                                        <td>{{ $msg->phone }}</td>
                                                        <td>{{ $msg->company_website }}</td>
                                                        <td>{{ $msg->description }}</td>
                                                        <td>{{ $msg->companyfy }}</td>
                                                        <td>{{ $msg->vat_id }}</td>
                                                        <td>{{ $msg->tax_id }}</td>
                                                        <td>{{ $msg->reg_id }}</td>
                                                        <td>{{ $msg->court }}</td>
                                                        <td>{{ $msg->linkedin }}</td>
                                                        <td>{{ $msg->facebook }}</td>
                                                        <td>{{ $msg->twitter }}</td>
                                                        <td>{{ $msg->insta }}</td>
                                                        <td>{{ $msg->address }}</td>
                                                        <td>{{ $msg->warehouse }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/app/public/post/Memberships/' . $msg->image) }}"
                                                                class="img-rounded height-30 width-30" />
                                                        </td>
                                                        <td>{{ $msg->file }}</td>
                                                        <td>
                                                            <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/Delete/' . $msg->id) }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>Name</th>
                                                    <th>Company Email</th>
                                                    <th>Phone</th>
                                                    <th>Company Website </th>
                                                    <th>Description</th>
                                                    <th>Company Founding Year </th>
                                                    <th>VAT ID </th>
                                                    <th>Tax Id </th>
                                                    <th>Registration ID </th>
                                                    <th>Court </th>
                                                    <th>LinkedIn </th>
                                                    <th>Facebook </th>
                                                    <th>Twitter </th>
                                                    <th>Instagram </th>
                                                    <th>Office Address
                                                    </th>
                                                    <th>Warehouse Address
                                                    </th>
                                                    <th>Company Logo</th>
                                                    <th>Business Certificates</th>
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
