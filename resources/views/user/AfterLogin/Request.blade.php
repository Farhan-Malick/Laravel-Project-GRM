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
    @include('user.userLayouts.ProfileHeader')

    <div class="container mt-2 border 1px mb-2">
        <div class="row">
            <div class="col-md-3 mt-2">
                <div class="card-body">
                    <div class="row ">
                        <h4 class="card-title w-100">ABS
                        </h4>
                        <span class="mr-3"><small><i class="bi bi-shield-fill mr-1"></i>80 - T</small>
                        </span> <small><button
                                class="btn btn-ongoing3 border 1 text-right ml-2 text-dark">ONGOING</button></small>
                    </div>
                    <div class="row">
                        <p class="reg_para p-0 m-0"><i class="bi bi-geo-alt-fill text-dark mr-1"></i>Lahore, Pakistan
                        </p>
                    </div>
                    <strong class="reg_para  p-0 mb-0">Commodity Type :</strong>
                    <br>
                    <span class="reg_para">Plastic</span>
                </div>
            </div>
            <div class="col-md-6">

                <div class="card-body">
                    <strong class="reg_para  p-0 mb-0">Condition :</strong>
                    <br>
                    <span class="reg_para">Compound, Lumps, Rolls</span>
                </div>

            </div>
            <div class="col-md-3  text-center pt-2 pb-2">
                <a href="" type="submit" class="btn btn-secondary msg_span4 text-light"><i
                        class="bi bi-pencil mr-2"></i>Edit</a>
                <a href="" type="submit" class="btn btn-danger msg_span3 text-light ">
                    <i class="bi bi-archive mr-2"></i>Delete</a>
            </div>
        </div>
    </div>
    <div class="container border 1px mb-2">
        <div class="row">
            <div class="col-md-3 mt-2">
                <div class="card-body">
                    <div class="row ">
                        <h4 class="card-title w-100">EPS
                        </h4>
                        <span class="mr-3"><small><i class="bi bi-shield-fill mr-1"></i>80 - T</small>
                        </span> <small><button
                                class="btn btn-ongoing3 border 1 text-right ml-2 text-dark">ONGOING</button></small>
                    </div>
                    <div class="row">
                        <p class="reg_para p-0 m-0"><i class="bi bi-geo-alt-fill text-dark mr-1"></i>Lahore, Pakistan
                        </p>
                    </div>
                    <strong class="reg_para  p-0 mb-0">Commodity Type :</strong>
                    <br>
                    <span class="reg_para">Plastic</span>
                </div>
            </div>
            <div class="col-md-6">

                <div class="card-body">
                    <strong class="reg_para  p-0 mb-0">Condition :</strong>
                    <br>
                    <span class="reg_para">Compound, Lumps, Rolls</span>
                </div>

            </div>
            <div class="col-md-3  text-center pt-2 pb-2">
                <a href="" type="submit" class="btn btn-secondary msg_span4 text-light"><i
                        class="bi bi-pencil mr-2"></i>Edit</a>
                <a href="" type="submit" class="btn btn-danger msg_span3 text-light ">
                    <i class="bi bi-archive mr-2"></i>Delete</a>
            </div>
        </div>
    </div>
    <div class="container border 1px mb-2">
        <div class="row">
            <div class="col-md-3 mt-2">
                <div class="card-body">
                    <div class="row ">
                        <h4 class="card-title w-100">LDPE
                        </h4>
                        <span class="mr-3"><small><i class="bi bi-shield-fill mr-1"></i>80 - T</small>
                        </span> <small><button
                                class="btn btn-ongoing3 border 1 text-right ml-2 text-dark">ONGOING</button></small>
                    </div>
                    <div class="row">
                        <p class="reg_para p-0 m-0"><i class="bi bi-geo-alt-fill text-dark mr-1"></i>Lahore, Pakistan
                        </p>
                    </div>
                    <strong class="reg_para  p-0 mb-0">Commodity Type :</strong>
                    <br>
                    <span class="reg_para">Plastic</span>
                </div>
            </div>
            <div class="col-md-6">

                <div class="card-body">
                    <strong class="reg_para  p-0 mb-0">Condition :</strong>
                    <br>
                    <span class="reg_para">Compound, Lumps, Rolls</span>
                </div>

            </div>
            <div class="col-md-3  text-center pt-2 pb-2">
                <a href="" type="submit" class="btn btn-secondary msg_span4 text-light"><i
                        class="bi bi-pencil mr-2"></i>Edit</a>
                <a href="" type="submit" class="btn btn-danger msg_span3 text-light ">
                    <i class="bi bi-archive mr-2"></i>Delete</a>
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
