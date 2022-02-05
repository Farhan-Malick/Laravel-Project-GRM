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

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <div class="container-fluid m-0 p-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 border 1px">
                            <h5 class="pb-0 pt-3">Company Logo</h5>
                            <hr class="bg-success pt-0">
                            <div class="text-center">
                                <img src="public/assets/images/c_log.svg" alt="" class="img-fluid">
                                <div class="form-group">
                                    <div class="mt-3">
                                        <div class=" custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label  livetablerow  mx-0 px-0 text-center"
                                                for="exampleInputFile">Add
                                                a
                                                Company Logo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid m-0 p-0  mb-5">
                    <div class="row">
                        <div class="col-md-12 border 1px">
                            <h5 class="pb-0 pt-3">Addresses</h5>
                            <hr class="bg-success pt-0">
                            <span class="text-secondary reg_para">Office Address</span>
                            <p class="reg_para">Office No. 9-10, Sandhu Trade Center, Moon Market, Allama Iqbal
                                Town, Lahore, Pakistan.
                            </p>
                            <span class="text-secondary reg_para">Warehouse Address</span>
                            <p class="reg_para">Office No. 9-10, Sandhu Trade Center, Moon Market, Allama Iqbal
                                Town, Lahore, Pakistan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid m-0 p-0  mb-5">
                    <div class="row">
                        <div class="col-md-12 border 1px">
                            <h5 class="pb-0 pt-3">Business Certificates</h5>
                            <hr class="bg-success pt-0">


                            <div class="row">
                                <div class="col-12">
                                    <img src="public/assets/images/pdf.svg" class="pb-2" height="50px"
                                        width="50px" alt="">
                                    <span class="reg_para_final">Company-certificate-2021</span>
                                    <a href="" type="submit" class="btn btn-secondary msg_span4 step text-light">
                                        <i class="bi bi-download step"></i></a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <img src="public/assets/images/pdf.svg" class="pb-2" height="50px"
                                        width="50px" alt="">
                                    <span class="reg_para_final">Company-certificate-2021</span>
                                    <a href="" type="submit" class="btn btn-secondary msg_span4 step text-light">
                                        <i class="bi bi-download step"></i></a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <img src="public/assets/images/pdf.svg" class="pb-2" height="50px"
                                        width="50px" alt="">
                                    <span class="reg_para_final">Company-certificate-2021</span>
                                    <a href="" type="submit" class="btn btn-secondary msg_span4 step text-light">
                                        <i class="bi bi-download step"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container-fluid m-0 p-0  mb-5">
                    <div class="row">
                        <div class="col-md-12 border 1px">
                            <h5 class="pb-0 pt-3">Ratings</h5>
                            <hr class="bg-success pt-0">
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div><span class="ml-2">10 Reviews</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="container-fluid ml-2 pr-2    p-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 border 1px">
                            <h5 class="pb-0 pt-3">General Information</h5>
                            <hr class="bg-success pt-0">
                            <div class="form-row ">
                                <div class="form-group  col-md-12">
                                    <label class="reg_para" for="">Name *</label>
                                    <input type="text"
                                        class="form-control  reg_para input-group input--style-1 input-contact"
                                        name="cname" require placeholder="Enter company Name" required>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Company Email *</label>
                                    <input type="email"
                                        class="form-control reg_para input-group input--style-1 input-contact"
                                        name="email" require placeholder="Enter Email Address" required>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Phone *</label>
                                    <input type="tel"
                                        class="form-control reg_para input-group input--style-1 input-contact"
                                        name="cphone" require placeholder="Enter Phone Number" required>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Company Website *</label>
                                    <input type="text"
                                        class="form-control reg_para input-group input--style-1 input-contact"
                                        name="company_website" require placeholder="Enter Company's Website" required>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Description *</label>
                                    <input type="text"
                                        class="form-control reg_para input-group input--style-1 input-contact"
                                        name="Description" require placeholder="Enter Company Description " required>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Company Founding Year *</label>
                                    <input type="text"
                                        class="form-control reg_para input-group input--style-1 input-contact"
                                        name="Description" require placeholder="Enter Company Description " required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid ml-2 pr-2    p-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 border 1px">
                            <h5 class="pb-0 pt-3">Registration Details</h5>
                            <hr class="bg-success pt-0">
                            <div class="form-row ">
                                <div class="form-group  col-md-6">
                                    <label class="reg_para" for="">VAT ID *</label>
                                    <input type="text"
                                        class="form-control  reg_para input-group input--style-1 input-contact"
                                        name="vat_id" require placeholder="Enter VAT ID" required>
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Tax Id *</label>
                                    <input type="text"
                                        class="form-control reg_para input-group input--style-1 input-contact"
                                        name="tax_id" require placeholder="Enter Tax Id" required>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-6">
                                    <label class="reg_para" for="">Registration ID *</label>
                                    <input type="text"
                                        class="form-control  reg_para input-group input--style-1 input-contact"
                                        name="registration_id" require placeholder="Enter Registration ID" required>
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Instagram *</label>
                                    <input type="text"
                                        class="form-control reg_para input-group input--style-1 input-contact"
                                        name="reg_court" require placeholder="Enter Court" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid ml-2 pr-2    p-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 border 1px">
                            <h5 class="pb-0 pt-3">Comments</h5>
                            <hr class="bg-success pt-0">
                            <div class="form-row ">
                                <div class="form-group  col-md-6">
                                    <label class="reg_para" for="">LinkedIn *</label>
                                    <input type="text"
                                        class="form-control  reg_para input-group input--style-1 input-contact"
                                        name="Linkedin" require placeholder="Enter LinkedIn link " required>
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Facebook *</label>
                                    <input type="text"
                                        class="form-control reg_para input-group input--style-1 input-contact"
                                        name="fb" require placeholder="Enter Facebook link" required>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-6">
                                    <label class="reg_para" for="">Twitter *</label>
                                    <input type="text"
                                        class="form-control  reg_para input-group input--style-1 input-contact"
                                        name="twitter" require placeholder="Enter Twitter link" required>
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Instagram *</label>
                                    <input type="text"
                                        class="form-control reg_para input-group input--style-1 input-contact"
                                        name="insta" require placeholder="Enter Instagram link" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid ml-2 pr-2    p-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 border 1px">
                            <h5 class="pb-0 pt-3">Comments</h5>
                            <hr class="bg-success pt-0">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="public/assets/images/cmnt.svg" alt=""
                                                class="img_fluid img_div_VP mr-2">
                                            <p class="pt-2 "><b>Maude Hall</b> <span
                                                    class="text-secondary"><small>14 min</small></span></p>
                                            <p>That's a fantastic new app feature. You and your team did an excellent
                                                job of incorporating user testing feedback.</p>
                                            <span class="text-secondary">2 Likes</span> <i
                                                class="bi bi-arrow-return-right ml-1 "></i>
                                            <span class="text-secondary">Reply</span><i
                                                class="bi bi-hand-thumbs-up step mr-3"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="public/assets/images/cmnt.svg" alt=""
                                                class="img_fluid img_div_VP mr-2">
                                            <p class="pt-2 "><b>Maude Hall</b> <span
                                                    class="text-secondary"><small>14 min</small></span></p>
                                            <p>That's a fantastic new app feature. You and your team did an excellent
                                                job of incorporating user testing feedback.</p>
                                            <span class="text-secondary">2 Likes</span> <i
                                                class="bi bi-arrow-return-right ml-1 "></i>
                                            <span class="text-secondary">Reply</span><i
                                                class="bi bi-hand-thumbs-up step mr-3"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="public/assets/images/cmnt.svg" alt=""
                                                class="img_fluid img_div_VP mr-2">
                                            <p class="pt-2 "><b>Maude Hall</b> <span
                                                    class="text-secondary"><small>14 min</small></span></p>
                                            <p>That's a fantastic new app feature. You and your team did an excellent
                                                job of incorporating user testing feedback.</p>
                                            <span class="text-secondary">2 Likes</span> <i
                                                class="bi bi-arrow-return-right ml-1 "></i>
                                            <span class="text-secondary">Reply</span><i
                                                class="bi bi-hand-thumbs-up step mr-3"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row shadow-lg border 1px full_div mb-5">
            <div class="col-md-12 ">
                <div class="container ">
                    <p class="john_para"><i>Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.</i></p>
                    <div class="row text-center john_img">

                        <div class="col-3"> <img src="public/assets/images/larrow.svg" class="mt-4"
                                alt="">
                        </div>
                        <div class="col-6"> <img src="public/assets/images/john.svg" alt="">
                            <p class="mt-4"> <strong>JOHN SMITH</strong></p>
                            <p>Founder of Awesomeux Technology</p>
                        </div>
                        <div class="col-3"><img src="public/assets/images/rarrow.svg" class="mt-4"
                                alt="">
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
