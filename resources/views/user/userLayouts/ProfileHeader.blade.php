<div class="container border 1px reg_para">
    <div class="row pb-1">
        <div class="col-md-5">
            <div class="">
                <img src="{{ url('public/assets/images/PROFILE2.jpg') }}" class="img_div_pro " alt="">
                <h5 class="name_padding m-0">{{ Auth::user()->name }} {{ Auth::user()->lname }} <a href="#"
                        type="submit" class="pre btn btn-success">PREMIUM</a>
                </h5>
                <p class="reg_para p-0 m-0"><i class="bi bi-geo-alt-fill text-dark mr-1"></i>Lahore, Pakistan</p>
            </div>
        </div>
        <div class="col-md-7 mb-2 border-left 1px pt-3">
            <h6 class="p-0 m-0">Business Type</h6>
            <span class="reg_para p-0 m-0 text-secondary">Seller</span>
            <a href="#  " type="submit" class="btn btn-secondary msg_span2 reg_para text-white">
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
                            <li class="nav-item active ">
                                <a class="nav-link" href="{{ URL('Company-Profile') }}"><i
                                        class="bi bi-building mr-2"></i>Company
                                    Profile
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ URL('Offers') }}"><i
                                        class="bi bi-hand-thumbs-up mr-2"></i>Offers
                                    <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ URL('Request') }}"><i
                                        class="bi bi-arrow-down-left-square mr-2"></i>Request <span
                                        class="sr-only"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ URL('Docs') }}"><i
                                        class="bi bi-file-earmark-plus mr-2"></i>Documents
                                    <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ URL('Media') }}"><i
                                        class="bi bi-aspect-ratio mr-2"></i>Portfolio
                                    <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ URL('Tenders-List') }}"><i
                                        class="bi bi-file-earmark-spreadsheet-fill mr-2"></i>Tenders <span
                                        class="sr-only"></span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                {{-- navbarEnds --}}
            </div>
        </div>
    </div>
</div>
