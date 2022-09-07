<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')
<style>
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

<body>
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
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}

    {{-- @include('user.userLayouts.ProfileHeader') --}}
    <div class="container border 1px reg_para">
        <div class="row pb-1">
            <div class="col-md-5">
                <div class="">
                    <img src="{{ url('public/assets/images/PROFILE2.jpg') }}" class="img_div_pro " alt="">
                    @if ($approval)
                        <h5 class="name_padding m-0">{{ $approval->request->name }}
                            {{ $approval->request->lname }} <a href="#" type="submit"
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

                <a href="{{ URL('/chatify', $approval->user_id) }}" type="submit"
                    class="btn btn-secondary msg_span2 reg_para text-white">
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
                                            href="{{ route('Profile/', ['id' => $approval->request->id]) }}"><i
                                                class="bi bi-building mr-2"></i>Company
                                            Profile
                                            <span class="sr-only">(current)</span></a>

                                    </li>
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Offers/', ['id' => $approval->request->id]) }}"><i
                                                class="bi bi-hand-thumbs-up mr-2"></i>Offers
                                            <span class="sr-only"></span></a>

                                    </li>
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Request/', ['id' => $approval->request->id]) }}"><i
                                                class="bi bi-arrow-down-left-square mr-2"></i>Request <span
                                                class="sr-only"></span></a>

                                    </li>
                                    {{-- <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Documents/', ['id' => $approval->request->id]) }}"><i
                                                class="bi bi-file-earmark-plus mr-2"></i>Documents
                                            <span class="sr-only"></span></a>

                                    </li>
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Portfolio/', ['id' => $approval->request->id]) }}"><i
                                                class="bi bi-aspect-ratio mr-2"></i>Portfolio
                                            <span class="sr-only"></span></a>

                                    </li> --}}
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Tenders/', ['id' => $approval->request->id]) }}"><i
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
    @if ($allData)
        @foreach ($allData as $item)
            <div class="container mt-2 mb-3 border 1px mb-2">
                <div class="row">
                    <div class="col-md-3 mt-2">
                        <div class="card-body">
                            <div class="row ">
                                <h4 class="card-title w-100">{{ $item->Add_Request->category }}
                                </h4>
                                <span class="mr-3"><small><i
                                            class="bi bi-shield-fill mr-1"></i>{{ $item->weight }}</small>
                                </span> <small><button
                                        class="btn btn-ongoing3 border 1 text-right ml-2 text-dark">ONGOING</button></small>
                            </div>
                            <div class="row">
                                <p class="reg_para p-0 m-0"><i
                                        class="bi bi-geo-alt-fill text-dark mr-1"></i>{{ $item->location }}
                                </p>
                            </div>
                            <strong class="reg_para  p-0 mb-0">Commodity Type :</strong>
                            <br>
                            <span class="reg_para">{{ $item->mtype->category }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <strong class="reg_para  p-0 mb-0">Condition :</strong>
                            <br>
                            <span class="reg_para">{{ $item->condition }}</span>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3 text-center pt-2 pb-2">
                        <a href="{{ URL('Ad-Request-Detail/' . $item->id) }}" type="submit"
                            class="btn btn-primary  reg_para  ">
                            <i class="fa fa-eye mr-2" aria-hidden="true"></i>View Detail</a>
                    </div>
                </div>


            </div>
        @endforeach
    @endif

    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
