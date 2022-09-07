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
                                    <span class="text-dark UserName"><b class="mr-2">Mr.{{ Auth::user()->name }}
                                        </b>
                                        By Clicking On Sell Button Post Your Ad</span>
                                @endauth
                            @endif
                        </div>
                        <div class="text-right">
                            <a href="{{ URL('Attributes') }}" class="btn btn-success " style="width:100px">SELL</a>
                        </div>
                    </div>
                    <div class="card-body">Your Are Logged in Successfully!!</div>
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
