<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
    @include('user.userLayouts.ProfileHeader')
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('Attributes'))
                    <div class="col-sm-12 text-dark alert alert-primary" style="text-align: center; ">
                        {{ session('Attributes') }}</div>
                @endif
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('ClientsAds'))
                    <div class="col-sm-12 text-dark alert alert-secondary" style="text-align: center; ">
                        {{ session('ClientsAds') }}</div>
                @endif
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('ClientsAdsDEL'))
                    <div class="col-sm-12 text-dark alert alert-danger" style="text-align: center; ">
                        {{ session('ClientsAdsDEL') }}</div>
                @endif
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row pb-1">
            <div class="col-md-12 text-right mt-2 mb-2">
                <a href="{{ URL('Offers-Form') }}" type="submit" class="btn btn-success reg_para  ml-1">
                    Add New Offer</a>
            </div>
        </div>
    </div>
    @foreach ($user as $item)
        <div class="container border 1px mb-2">
            <div class="row">
                <div class="col-md-3 mt-2">
                    <img class=" card-img-top" src="{{ asset('storage/app/public/post/usersAd1/' . $item->image1) }}"
                        class="" height="250px">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="row ">
                            <h4 class="card-title w-100">{{ $item->title }}
                            </h4>
                            <span class="mr-3"><small><i
                                        class="bi bi-shield-fill mr-1"></i>{{ $item->product_weight }} -
                                    {{ $item->unit_weight }}</small>
                            </span> <small>
                                @if ($item->supply_type == 'On-Going')
                                    <button
                                        class="btn btn-ongoing2 bg-success text-right ml-2">{{ $item->supply_type }}</button>
                                @else
                                    <button
                                        class="btn btn-ofgoing2 bg-danger text-right ml-2">{{ $item->supply_type }}</button>
                                @endif
                            </small>
                        </div>
                        <div class="row">
                            <span class="text-dark "><b>{{ $item->currency }}{{ $item->price }}</b>
                                <small><i class=" span_stars bi bi-star-fill ml-2"></i>
                                    <i class="span_stars bi bi-star-fill"></i>
                                    <i class="span_stars bi bi-star-fill"></i>
                                    <i class="span_stars bi bi-star-fill"></i>
                                    <i class="span_stars bi bi-star-fill"></i>
                                    <i class="span_stars bi bi-star-fill"></i>
                                    (32)
                                </small>
                            </span>
                        </div>
                        <div class="row">
                            <p class="reg_para">{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 text-center pt-2 pb-2">
                    <a href="{{ URL('Offers-Edit/' . $item->id) }}" type="submit"
                        class="btn btn-secondary reg_para "><i class="bi bi-pencil"></i></a>
                    <a href="{{ URL('Offers_delete/' . $item->id) }}" type="submit"
                        class="btn btn-danger  reg_para  ">
                        <i class="bi bi-archive"></i></a>
                    <a href="{{ URL('Ad-Offers/' . $item->id) }}" type="submit" class="btn btn-success  reg_para  ">
                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    @endforeach



    </div>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
