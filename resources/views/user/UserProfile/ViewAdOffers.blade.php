<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

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
    <div class="container trade2">
        <div class="row mb-2">
            <div class="col-md-7 border 1px mb-3 mt-3 mr-3">
                <div class="row pt-2 ">
                    <div class="col-md-12">
                        <h4>Ad Details</h4>
                        <hr class="bg-success">
                    </div>
                    <div class="col-md-12 ">
                        <table class="table table-responsive w-100">
                            <tr>
                                <th>Seller:</th>
                                @if ($user->user_id)
                                    <td><b>{{ $user->username->name }}</b>
                                    </td>
                                @else
                                    <b>Un-Authorized User</b>
                                @endif

                            </tr>
                            <tr>
                                <th>Title:</th>
                                <td>{{ $user->title }}</td>
                            </tr>
                            <tr>
                                <th>Price:</th>
                                <td>{{ $user->currency }}{{ $user->price }}</td>
                            </tr>
                            <tr>
                                <th>Condition:</th>
                                <td>{{ $user->condition }}</td>
                            </tr>
                            <tr>
                                <th>Location:</th>
                                <td>{{ $user->location }}, {{ $user->country }}</td>
                            </tr>
                            <tr>
                                <th>Description:</th>
                                <td>{{ $user->description }}</td>
                            </tr>
                            <tr>
                                <th>Collection Address:</th>
                                <td>{{ $user->col_address }}</td>
                            </tr>
                            <tr>
                                <th>Supply Type:</th>
                                <td>{{ $user->supply_type }}</td>
                            </tr>
                            <tr>
                                <th>Quantity Available:</th>
                                <td>{{ $user->quantity_avl }}</td>
                            </tr>
                            <tr>
                                <th>Pricing Terms:</th>
                                <td>{{ $user->p_terms }}</td>
                            </tr>
                            <tr>
                                <th>Date:</th>
                                <td>{{ $user->updated_at }}</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
            <div class="col-md-4 border 1px mb-3 mt-3">

                <div class="row">
                    <div class="col-12 mt-2">
                        <img style="float: left"
                            src="{{ asset('storage/app/public/post/usersAd1/' . $user->image1) }}"
                            class=" ml-1 mt-2" width="100%" height="220px" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-2">
                        <img style="float: left"
                            src="{{ asset('storage/app/public/post/usersAd2/' . $user->image2) }}"
                            class=" ml-1 mt-2" width="100%" height="220px" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-2">
                        <img style="float: left"
                            src="{{ asset('storage/app/public/post/usersAd3/' . $user->image3) }}"
                            class=" ml-1 mt-2" width="100%" height="220px" />
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
