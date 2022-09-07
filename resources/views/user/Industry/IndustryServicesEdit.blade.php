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
                    {{-- navbarEnds --}}
                </div>
            </div>
        </div>
    </div>
    {{-- @foreach ($user as $item) --}}
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-12 ">
                <h3 class="card-title text-lg trade2 ">
                    Edit Industry Services
                </h3>
                <hr class="bg-success">
                <!-- /.card-header -->
                <div class="border 1px p-4 reg_para">
                    <form action="{{ URL('/Update-Industry_Services') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input value="{{ $industryService['id'] }}" type="hidden" name="id">
                        <div class="">
                            <div class="form-group">
                                <label for=""><b>Title</b> </label>
                                <input value="{{ $industryService['title'] }}" type="text" name="title"
                                    class="form-control" id="exampleInputTitle" placeholder="Enter Title ">
                                @error('title')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for=""><b>Services Type</b> </label>
                                    <input value="{{ $industryService['services_type'] }}" type="text"
                                        name="services_type" class="form-control" id="exampleInputTitle"
                                        placeholder="Enter Services Type">
                                    @error('services_type')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for=""><b>Detail</b> </label>
                                    <input value="{{ $industryService['detail'] }}" type="text" name="detail"
                                        class="form-control" id="exampleInputDetail" placeholder="Enter Detail ">
                                    @error('detail')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="reg_para" for=""><b>Location :</b></label>
                                    <select name="location" class="form-control reg_para ">
                                        <option>Lahore</option>
                                        <option>Karachi</option>
                                        <option>Islamabad</option>
                                        <option>Multan</option>
                                    </select>
                                    @error('location')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for=""><b>Duration</b> </label>
                                    <input value="{{ $industryService['duration'] }}" type="text" name="duration"
                                        class="form-control" id="exampleInputTitle" placeholder="Enter Duration ">
                                    @error('duration')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-success reg_para">Submit</button>
                        </div>
                    </form>
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
