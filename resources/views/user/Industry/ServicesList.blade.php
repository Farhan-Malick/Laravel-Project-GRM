<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
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

                <a href="#" type="submit" class="btn btn-success msg_span ml-1 text-white reg_para"><i
                        class="bi bi-pencil mr-2 "></i>
                    Edit Profile</a>



                <a href="" type="submit" class="btn btn-secondary msg_span2 reg_para text-white">
                    <i class="bi bi-chat mr-2"></i>Message</a>

                <h6 class="p-0 m-0">Status</h6>
                <span class="reg_para p-0 m-0 text-secondary">Active</span>
            </div>
            <div class="navheader w-100  text-center">
                <div class="container ">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand d-flex" href="{{ URL('/') }}">
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
                                    <a class="nav-link" href="{{ URL('Industry-Profile') }}"><i
                                            class="bi bi-building mr-2"></i>Industry
                                        Profile
                                        <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ URL('industry-Services-List') }}"><i
                                            class="bi bi-hand-thumbs-up mr-2"></i>Services
                                        <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ URL('Industry-Portfolio') }}"><i
                                            class="bi bi-hand-thumbs-up mr-2"></i>Portfolio
                                        <span class="sr-only"></span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row pb-1">
            <div class="col-md-12 text-right mt-2 mb-2">
                <a href="{{ URL('Services-Form') }}" type="submit" class="btn btn-success reg_para  ml-1">
                    Add New Service</a>
            </div>
        </div>
    </div>
    {{-- Footer Start --}}
    @foreach ($industryService as $item)
        <div class="container border 1px mb-2">
            <div class="row">
                <div class="col-md-9">
                    <table class="table table-responsive w-100">
                        <tr>
                            <th style="width: 30%">Industry-User:</th>
                            <td>
                                @if ($item->user_id)
                                    <b>{{ $item->IndustryServices->name }}
                                        {{ $item->IndustryServices->lname }}</b>
                                @else
                                    <b>Un-Authorized User</b>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 30%">Industry:</th>
                            <td>
                                {{ $item->services_Providers->service_providers }}
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 30%">Title:</th>
                            <td>{{ $item->title }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%">Services Type:</th>
                            <td>{{ $item->services_type }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%">Description:</th>
                            <td>{{ $item->detail }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%">Location:</th>
                            <td>{{ $item->location }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%">Duration :</th>
                            <td>{{ $item->duration }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3 mt-3 text-center pt-2 pb-2">
                    <a href="{{ URL('Industry_Services-Edit/' . $item->id) }}" type="submit"
                        class="btn btn-secondary reg_para "><i class="bi bi-pencil"></i> Edit</a>
                    <a href="{{ URL('Industry_Services_delete/' . $item->id) }}" type="submit"
                        class="btn btn-danger  reg_para  ">
                        <i class="bi bi-archive"></i> Delete</a>
                </div>
            </div>
        </div>
    @endforeach

    @include('user.userLayouts.Footer')
    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
