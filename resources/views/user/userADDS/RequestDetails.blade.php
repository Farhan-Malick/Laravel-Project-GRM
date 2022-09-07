<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}



    <div class="container mt-3 p-4 border 1px">
        <div class="row">
            <div class="col-md-12">
                <h2 class="trade2">Request Detail</h2>
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
                <h3>{{ $user->mtype->category }}</h3>
                <hr class="bg-success">
                <p class="">This is my Request if anyone up for this request. Make your to Contact. Thank
                    You </p>
                <p>The Detail is given below.</p>
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
        <div class="row m-1">
            <div class="col-md-8  trade2">
                <h5>Details</h5>
                <hr class="bg-success">
                <table class="table table-responsive">
                    <tr>
                        <th>Seller:</th>
                        @if ($user->user_id)
                            <td><b>{{ $user->request->name }} {{ $user->request->lname }}</b>
                            </td>
                        @endif
                    </tr>
                    <tr>
                        <th>Product Name:</th>
                        <td>{{ $user->p_name }}</td>
                    </tr>
                    <tr>
                        <th>Commodity Type:</th>
                        <td>{{ $user->mtype->category }}</td>
                    </tr>
                    <tr>
                        <th>Type:</th>
                        <td>{{ $user->Add_Request->category }}</td>
                    </tr>

                    <tr>
                        <th>Location:</th>
                        <td>{{ $user->location }}</td>
                    </tr>
                    <tr>
                        <th>Condition:</th>
                        <td>{{ $user->condition }}</td>
                    </tr>
                    <tr>
                        <th>Weight:</th>
                        <td>{{ $user->weight }}</td>
                    </tr>
                    <tr>
                        <th>Date:</th>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 trade2">
                <h5>Seller</h5>
                <hr class="bg-success">
                <div class="container border 1px">
                    <div class="text-center">
                        <img src="{{ asset('public/assets/images/1.png') }}" class="img_div" alt="">
                    </div>
                    <div class="info">
                        <h3 class="text-center">
                            @if ($user->user_id)
                                <b>{{ $user->request->name }} {{ $user->request->lname }}</b>
                            @else
                                <b>Un-Authorized User</b>
                            @endif
                        </h3>
                        <h5 class="text-center">Inner Art Interiors</h5>
                        <p class="text-center">{{ $user->location }}, {{ $user->country }}</p>
                        <h5 class="text-center text-primary"><i class="bi bi-star mr-2"></i>Premium Member</h5>
                    </div>
                    <div class="row ">
                        <div class="chat_with_seller col-12 pt-3 pb-3 text-center">
                            <a class="btn btn-success w-100 view-btn2 "
                                href="{{ route('Profile/', ['id' => $user->request->id]) }}"><i
                                    class="bi bi-person-circle mr-2"></i>View
                                Profile</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="trade2 row w-100 mb-3 m-1 mt-3">
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
    <div class="mt-5"></div>
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}


    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
