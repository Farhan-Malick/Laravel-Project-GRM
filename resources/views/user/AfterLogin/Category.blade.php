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

    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="main  border 1px pl-2 pr-2">
                    <div class="filter">
                        <div class="form-group  col-md-12 ">
                            <select name="filter" class="form-control reg_para mt-3">
                                <option>Filter</option>
                                <option>Non-Filter</option>
                            </select>
                            @error('filter')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <hr>
                    </div>
                    <div class="category border 1 px p-2 mb-5">
                        <input class="form-control " id="myInput" type="text" placeholder=" Search..">
                        <div id="myDIV" class="container mb-5">
                            <br>
                            <h6>Category 1 <span><i class="bi bi-plus-circle step"></i></span></h6>
                            <small>
                                <span>subcategory</span><br>
                                <span>subcategory</span><br>
                                <span>subcategory</span><br>
                            </small>
                            <hr>
                            <h6 class="mt-1">Category 2<span><i class="bi bi-plus-circle step"></i></span>
                            </h6>
                            <h6 class="mt-1">Category 3<span><i class="bi bi-plus-circle step"></i></span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $("#myInput").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#myDIV *").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="card">
                            <img src="public/assets/images/latest1.svg" alt="">
                            <div class="card-body">
                                <span class="text-secondary">December 13, 2021</span>
                                <h5 class="card-title">Top 15 Secrete Business
                                    Ideas Next Levels
                                </h5>
                                <a href="{{ URL('Blog-Selected') }}" class="btn btn-success "><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="card">
                            <img src="public/assets/images/g1.svg" alt="">
                            <div class="card-body">
                                <span class="text-secondary">December 13, 2021</span>
                                <h5 class="card-title">Top 15 Secrete Business
                                    Ideas Next Levels
                                </h5>
                                <a href="{{ URL('Blog-Selected') }}" class="btn btn-success "><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <div class="card">
                            <img src="public/assets/images/g2.svg" alt="">
                            <div class="card-body">
                                <span class="text-secondary">December 13, 2021</span>
                                <h5 class="card-title">Top 15 Secrete Business
                                    Ideas Next Levels
                                </h5>
                                <a href="{{ URL('Blog-Selected') }}" class="btn btn-success "><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="card">
                            <img src="public/assets/images/latest1.svg" alt="">
                            <div class="card-body">
                                <span class="text-secondary">December 13, 2021</span>
                                <h5 class="card-title">Top 15 Secrete Business
                                    Ideas Next Levels
                                </h5>
                                <a href="{{ URL('Blog-Selected') }}" class="btn btn-success "><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <div class="card">
                            <img src="public/assets/images/latest1.svg" alt="">
                            <div class="card-body">
                                <span class="text-secondary">December 13, 2021</span>
                                <h5 class="card-title">Top 15 Secrete Business
                                    Ideas Next Levels
                                </h5>
                                <a href="{{ URL('Blog-Selected') }}" class="btn btn-success "><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="card">
                            <img src="public/assets/images/g1.svg" alt="">
                            <div class="card-body">
                                <span class="text-secondary">December 13, 2021</span>
                                <h5 class="card-title">Top 15 Secrete Business
                                    Ideas Next Levels
                                </h5>
                                <a href="{{ URL('Blog-Selected') }}" class="btn btn-success "><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
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
