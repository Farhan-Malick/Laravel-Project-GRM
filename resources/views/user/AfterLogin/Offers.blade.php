<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
    @include('user.userLayouts.ProfileHeader')
    <div class="container mt-1">
        <div class="row pb-1">
            <div class="col-md-12 text-right mt-2 mb-2">
                <a href="{{ URL('Add-Product') }}" type="submit" class="btn btn-success  ml-1 text-light">
                    New Tenders</a>
            </div>
        </div>
    </div>
    <div class="container border 1px mb-2">
        <div class="row">
            <div class="col-md-3 mt-2">
                <img class=" card-img-top" src="public/assets/images/rectangle2.svg" class="img-fluid">
            </div>
            <div class="col-md-6">

                <div class="card-body">
                    <div class="row ">
                        <h4 class="card-title w-100">EVA OFF GRADE
                        </h4>
                        <span class="mr-3"><small><i class="bi bi-shield-fill mr-1"></i>50 - T</small>
                        </span> <small><button class="btn btn-ongoing2 text-right ml-2">ONGOING</button></small>
                    </div>
                    <div class="row">
                        <span class="text-dark "><b>$2600.00</b>
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
                        <p class="reg_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                            tempore maiores sed fugiat,
                            quidem, inventore deserunt molestiae assumenda possimus rerum corrupti quasi labore nulla
                            ducimus hic officiis natus. Repellat, nihil?</p>
                    </div>
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
                <img class=" card-img-top" src="public/assets/images/rectangle2.svg" class="img-fluid">
            </div>
            <div class="col-md-6">

                <div class="card-body">
                    <div class="row ">
                        <h4 class="card-title w-100">EVA OFF GRADE
                        </h4>
                        <span class="mr-3"><small><i class="bi bi-shield-fill mr-1"></i>50 - T</small>
                        </span> <small><button class="btn btn-ongoing2 text-right ml-2">ONGOING</button></small>
                    </div>
                    <div class="row">
                        <span class="text-dark "><b>$2600.00</b>
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
                        <p class="reg_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                            tempore maiores sed fugiat,
                            quidem, inventore deserunt molestiae assumenda possimus rerum corrupti quasi labore nulla
                            ducimus hic officiis natus. Repellat, nihil?</p>
                    </div>
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
                <img class=" card-img-top" src="public/assets/images/rectangle2.svg" class="img-fluid">
            </div>
            <div class="col-md-6">

                <div class="card-body">
                    <div class="row ">
                        <h4 class="card-title w-100">EVA OFF GRADE
                        </h4>
                        <span class="mr-3"><small><i class="bi bi-shield-fill mr-1"></i>50 - T</small>
                        </span> <small><button class="btn btn-ongoing2 text-right ml-2">ONGOING</button></small>
                    </div>
                    <div class="row">
                        <span class="text-dark "><b>$2600.00</b>
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
                        <p class="reg_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                            tempore maiores sed fugiat,
                            quidem, inventore deserunt molestiae assumenda possimus rerum corrupti quasi labore nulla
                            ducimus hic officiis natus. Repellat, nihil?</p>
                    </div>
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
