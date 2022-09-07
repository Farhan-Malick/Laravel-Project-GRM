<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')


<body>
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
    <div class="container mt-3 mb-3 p-4 border 1px">
        <div class="row">
            <div class="col-md-12">
                <h2 class="trade2">Services Detail</h2>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row  m-1">
            <div class="col-md-6 trade2">
                <div class="" style="height: 350px">
                    <img src="{{ asset('public/assets/images/grmReq.jpg') }}" class="img-fluid" alt=""
                        style="height: 350px" width="100%">
                </div>
            </div>
            <div class="col-md-6  trade2 ">
                <h3>{{ $user->services_Providers->service_providers }}</h3>
                <hr class="bg-success">
                <p class="">{{ $user->detail }}</p>
                <p>The More Detail is given below.</p>
                <br>
                <br> <br> <br>
                @if (Auth::user())
                    <div class="row ">
                        <div class="chat_with_seller col-12 pt-5 text-center">
                            <a class="btn btn-success w-100 view-btn2 "><i class="bi bi-chat mr-2"></i>Chat with
                                seller</a>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12 trade2 alert alert-danger mt-5">
                            <h6 class="text-center">Want chat with a seller? You have to Login First</h6>
                        </div>
                    </div>
                @endif

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <h5>Details</h5>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row m-1">
            <div class="col-md-6  trade2">
                <table class="table table-responsive w-100">
                    <tr>
                        <th style="width: 30%">Industry-User:</th>
                        <td>
                            @if ($user->user_id)
                                <b>{{ $user->IndustryServices->name }}
                                    {{ $user->IndustryServices->lname }}</b>
                            @else
                                <b>Un-Authorized User</b>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 30%">Industry:</th>
                        <td>
                            {{ $user->services_Providers->service_providers }}
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 30%">Title:</th>
                        <td>{{ $user->title }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%">Services Type:</th>
                        <td>{{ $user->services_type }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%">Description:</th>
                        <td>{{ $user->detail }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%">Location:</th>
                        <td>{{ $user->location }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%">Duration :</th>
                        <td>{{ $user->duration }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <div class="trade2  mb-3 m-1 mt-3">
                    <div class="text-light   p_div col-md-12  pt-3 pb-3 ">
                        <h5 class="">Upgrade to Premium</h5>
                        <p>
                            <a href="{{ URL('Memberships') }}"> to unlock all benefits of GRM, to sell & buy more
                                material</a>
                            <span><u><a href="#" class="p_div_learn">LEARN MORE</a></u></span>
                        </p>
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
