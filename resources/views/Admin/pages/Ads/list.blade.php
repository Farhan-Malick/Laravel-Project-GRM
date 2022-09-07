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
                <li class="breadcrumb-item"><a href="javascript:;">User Ad Detail Section</a></li>
                <li class="breadcrumb-item active">User Ad Detail</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage User Ad <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM User Ad Section</h4>
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
                                                    <th>Category</th>
                                                    <th>Product Name</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Condition</th>
                                                    <th>Quantity Available </th>
                                                    <th>Unit (Weight) </th>
                                                    <th>Supply Type </th>
                                                    <th>Currency </th>
                                                    <th>Price</th>
                                                    <th>Pricing Terms </th>
                                                    <th>Collection Address </th>
                                                    <th>Country </th>
                                                    <th>City </th>
                                                    <th>Zip Code </th>
                                                    <th>Listing Options : </th>
                                                    <th>Payment Terms :</th>
                                                    <th>Images :</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($userad as $userads)
                                                    <tr class="odd gradeX">
                                                        <td width="" class="f-s-600 text-inverse">{{ $userads->id }}
                                                        </td>
                                                        <td>
                                                            @if ($userads->user_id)
                                                                <b>{{ $userads->clientuser->name }}</b>
                                                            @else
                                                                <b>Un-Authorized User</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ $userads->maintype->category }}
                                                            <li>{{ $userads->Client_ads_cat->category }}</li>
                                                        </td>
                                                        <td>{{ $userads->p_name }}</td>
                                                        <td>{{ $userads->title }}</td>
                                                        <td>{{ Str::limit($userads->description, 100) }}</td>
                                                        <td>{{ $userads->condition }}</td>
                                                        <td>{{ $userads->quantity_avl }}</td>
                                                        <td>{{ $userads->unit_weight }}</td>
                                                        <td>{{ $userads->supply_type }}</td>
                                                        <td>{{ $userads->currency }}</td>
                                                        <td>{{ $userads->price }}</td>
                                                        <td>{{ $userads->p_terms }}</td>
                                                        <td>{{ $userads->col_address }}</td>
                                                        <td>{{ $userads->country }}</td>
                                                        <td>{{ $userads->location }}</td>
                                                        <td>{{ $userads->zip_code }}</td>
                                                        <td>{{ $userads->listing_options }}</td>
                                                        <td>{{ $userads->payment_terms }}</td>
                                                        <td class="with-img"><img
                                                                src="{{ asset('storage/app/public/post/usersAd1/' . $userads->image1) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd2/' . $userads->image2) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd3/' . $userads->image3) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd4/' . $userads->image4) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd5/' . $userads->image5) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd6/' . $userads->image6) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd7/' . $userads->image7) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd8/' . $userads->image8) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd9/' . $userads->image9) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd10/' . $userads->image10) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd11/' . $userads->image11) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd12/' . $userads->image12) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd13/' . $userads->image13) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd14/' . $userads->image14) }}"
                                                                class="img-rounded height-30 width-30" />
                                                            <img src="{{ asset('storage/app/public/post/usersAd15/' . $userads->image15) }}"
                                                                class="img-rounded height-30 width-30" />
                                                        </td>
                                                        <td>
                                                            <form action="{{ url('/toggle-approve') }}"
                                                                method="POST">
                                                                @csrf
                                                                <input <?php
if ($userads->approve == 1) {
    echo 'checked';
}
?> type="checkbox"
                                                                    name="approve" class="mr-2">
                                                                <input type="hidden" name="ad_id" id=""
                                                                    value="{{ $userads->id }}">
                                                                <input type="submit" class="btn btn-primary" name=""
                                                                    value="Approve" id="">
                                                            </form>

                                                            {{-- <a class="btn btn-danger"
                                                                href="{{ URL('/Admin/Users/Ad/') }}">Delete</a> --}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th width="">ID</th>
                                                    <th>UserName</th>
                                                    <th>Category</th>
                                                    <th>Product Name</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Condition</th>
                                                    <th>Quantity Available </th>
                                                    <th>Unit (Weight) </th>
                                                    <th>Supply Type </th>
                                                    <th>Currency </th>
                                                    <th>Price</th>
                                                    <th>Pricing Terms </th>
                                                    <th>Collection Address </th>
                                                    <th>Country </th>
                                                    <th>City </th>
                                                    <th>Zip Code </th>
                                                    <th>Listing Options </th>
                                                    <th>Payment Terms </th>
                                                    <th>Images</th>
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
