<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<head>
    <style>
        thead {
            background-color: rgb(224, 224, 224);
        }

        tfoot {
            background-color: rgb(224, 224, 224);
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #108d6f;
            border-color: #108d6f;
            box-shadow: none;
            outline: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #007b5e;
            border-color: #007b5e;
        }

    </style>
</head>

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
    <h3 class="pt-1" id="button"> <i class="fa fa-angle-up text-white" aria-hidden="true"></i></i></h3>
    <script>
        var btn = $('#button');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>
    <div class="container border 1px reg_para">
        <div class="row pb-1">
            <div class="col-md-5">
                <div class="">
                    <img src="{{ url('public/assets/images/PROFILE2.jpg') }}" class="img_div_pro " alt="">
                    @if ($approval)
                        <h5 class="name_padding m-0">{{ $approval->Seller_tender->name }}
                            {{ $approval->Seller_tender->lname }} <a href="#" type="submit"
                                class="pre btn btn-success">PREMIUM</a>
                        </h5>
                    @else
                        <h5 class="name_padding m-0"> This user has No Request<a href="#" type="submit"
                                class="pre btn btn-success ml-3">PREMIUM</a>
                        </h5>
                    @endif
                    <p class="reg_para p-0 m-0"><i class="bi bi-geo-alt-fill text-dark mr-1"></i>Lahore, Pakistan</p>
                </div>
            </div>
            <div class="col-md-7 mb-2 border-left 1px pt-3">
                <h6 class="p-0 m-0">Business Type</h6>
                <span class="reg_para p-0 m-0 text-secondary">Seller</span>

                <a href="{{ URL('/chatify', $approval->user_id) }}" type="submit" class="btn btn-secondary msg_span2 reg_para text-white">
                    <i class="bi bi-chat mr-2"></i>Message</a>

                <h6 class="p-0 m-0">Status</h6>
                <span class="reg_para p-0 m-0 text-secondary">Active</span>
            </div>
            <div class="navheader w-100  text-center">
                <div class="container ">
                    {{-- navbar starts --}}
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand d-flex" href="{{ URL('/') }}">
                            {{-- <img src="public/assets/images/GRMLogoFinal2.png" class="logo" alt=""> --}}
                            <div class=" ml-2">
                                <h6 class="pt-2 text-white">GLOBAL RECYCLING MARKETING</h6>
                            </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent2">
                            <ul class="navbar-nav">
                                @if ($approval)
                                    <li class="nav-item active ">

                                        <a class="nav-link"
                                            href="{{ route('Profile/', ['id' => $approval->Seller_tender->id]) }}"><i
                                                class="bi bi-building mr-2"></i>Company
                                            Profile
                                            <span class="sr-only">(current)</span></a>

                                    </li>
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Offers/', ['id' => $approval->Seller_tender->id]) }}"><i
                                                class="bi bi-hand-thumbs-up mr-2"></i>Offers
                                            <span class="sr-only"></span></a>

                                    </li>
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Request/', ['id' => $approval->Seller_tender->id]) }}"><i
                                                class="bi bi-arrow-down-left-square mr-2"></i>Request <span
                                                class="sr-only"></span></a>
                                    </li>
                                    {{-- <li class="nav-item ">
                                            <a class="nav-link"
                                                href="{{ route('Documents/', ['id' => $approval->Seller_tender->id]) }}"><i
                                                    class="bi bi-file-earmark-plus mr-2"></i>Documents
                                                <span class="sr-only"></span></a>

                                        </li>
                                        <li class="nav-item ">

                                            <a class="nav-link"
                                                href="{{ route('Portfolio/', ['id' => $approval->Seller_tender->id]) }}"><i
                                                    class="bi bi-aspect-ratio mr-2"></i>Portfolio
                                                <span class="sr-only"></span></a>
                                    </li> --}}
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Tenders/', ['id' => $approval->Seller_tender->id]) }}"><i
                                                class="bi bi-file-earmark-spreadsheet-fill mr-2"></i>Tenders <span
                                                class="sr-only"></span></a>

                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                    {{-- navbarEnds --}}
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-5=">
        <div class="row mb-2">
            <div class="col-md-12">
                <h6 class="text-secondary">TENDER COMMENTS AND PRICINGS<span class="step">
                </h6>
            </div>
        </div>
        <div class=" reg_para mb-4">
            <table id="data-table-default" id="table_detail"
                class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th width="2%">ID</th>
                        <th style="width: 30%">Description</th>
                        <th style="width: 10%">Opening date</th>
                        <th style="width: 10%">Closing date</th>
                        <th style="width: 10%">Location</th>
                        <th style="width: 10%">Amount</th>
                        <th style="width: 10%">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="" onclick="showHideRow('hidden_row');">
                        <td>{{ $approval->id }}</td>
                        <td>{{ $approval->description }}</td>
                        <td>{{ $approval->odate }}</td>
                        <td>{{ $approval->cdate }}</td>
                        <td>{{ $approval->location }}</td>
                        <td>{{ $approval->amount }}</td>
                        <td>
                            @if ($approval->status == 'Open')
                                <span class="p-2 bg-success mt-2 text-white"
                                    style="border-radius: 60px">{{ $approval->status }}</span>
                            @else
                                <span class="p-2 bg-danger mt-2 text-white"
                                    style="border-radius: 60px">{{ $approval->status }}</span>
                            @endif
                        </td>
                    </tr>
                    @foreach ($comments as $comment)
                        <tr id="hidden_row" class="expandable-body">
                            <td colspan="4">
                                <p>
                                    <b>COMMENT :</b>
                                </p>
                                <p>
                                    {{ $comment->comment }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Price :</b>
                                </p>
                                <p>
                                    {{ $comment->price }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Date/Time :</b>
                                </p>
                                <p>
                                    {{ Carbon\Carbon::parse($comment->created_at)->format('d F Y g:i A') }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Buyer Name :</b>
                                </p>
                                <p>
                                    @if ($comment->user_id)
                                        <b></b>
                                        <a class="btn btn-primary mt-1 reg_para"
                                            href="{{ route('Profile/', ['id' => $comment->buyerTender->id]) }}"></i>
                                            {{ $comment->buyerTender->name }}
                                            {{ $comment->buyerTender->lname }}</a>
                                        {{-- <a href="{{ URL('User-Comments/' . $comment->id) }}" type="submit"
                                            class="btn btn-primary mt-1 reg_para  border-radius 20px">
                                            Profile</a> --}}
                                    @else
                                        <b>Un-Authorized User</b>
                                    @endif
                                </p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script type="text/javascript">
                function showHideRow(row) {
                    $("#" + row).toggle();
                }
            </script>
        </div>
    </div>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
