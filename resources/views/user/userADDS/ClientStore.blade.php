<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-left " style="float:left">
                            @if (Auth::check())
                                @auth
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <span class="text-dark UserName "><b
                                            class="mr-2 ">Mr.{{ Auth::user()->name }}</b> ALL AD'S</span>
                                @endauth
                            @endif
                        </div>
                    </div>
                    <div class="container mt-2 mb-2">

                        <div class=" row">
                            @foreach ($user as $clientAds)
                                <div class="col-md-4 mt-2 mb-2">
                                    <div class="card" style="border-radius: 50px  0px">
                                        <div class="container ">
                                            <img style="border-radius: 60px 0px"
                                                src="{{ asset('storage/app/public/post/usersAd/' . $clientAds->image1) }}"
                                                class="img-rounded p-1 pl-2 " height="170px" width="100%" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $clientAds->title }}</h4>
                                            <h6 class="card-subtitle mb-2 text-muted">{{ $clientAds->location }}</h6>
                                            <p class="card-text">{{ Str::limit($clientAds->description, 112) }}
                                            </p>
                                            <a href="{{ URL('Ad-Offers/' . $clientAds->id) }}"
                                                class="card-link btn btn-outline-secondary">View Your Ads</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
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
