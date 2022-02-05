<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
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
    {{-- First Section Ends --}}

    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ URL('/') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- Content Row -->

        <!-- Map Column -->
        <div class="row">
            <div class="col-lg-8 mb-4 mt-5 article">
                <h1 class="">Leave us a Message</h1>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group mt-5">
                        <div class="input-group">
                            <label for="" class="p-0 ">Full Name :</label>
                            <input class="input--style-1 input-contact" type="text" placeholder="Enter Your Full Name"
                                name="name">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="input-group">
                            <label for="" class="p-0 m-0 ">Email :</label>
                            <input class="input--style-1 input-contact" type="email"
                                placeholder="Enter Your Email Address" name="name">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" id="message" required
                                data-validation-required-message="Please enter your message" maxlength="999"
                                style="resize:none" placeholder="Write your message here"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-success btn-contact" id="sendMessageButton">Send
                        Message</button>
                </form>
            </div>


            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4 article mt-5">
                <h1 class="">Contact Details</h1>

                <p class="d-flex  mt-5"><i class="bi bi-geo-alt mr-3 "></i>
                    Office No. 9-10, Sandhu Trade Center,<br>
                    Moon Market, Allama Iqbal Town,
                    Lahore, Pakistan.
                </p>
                <p>
                    <i class="bi bi-telephone  mr-3"></i>+92 4237800153
                </p>
                <p>
                    <i class="bi bi-envelope  mr-3"></i>farhanbaba1995@gmail.com
                </p>
                <i class="bi bi-youtube mr-3"></i> <i class="bi bi-instagram mr-3"></i> <i
                    class="bi bi-facebook mr-3"></i><i class="bi bi-twitter mr-3"></i>
                <p>
                    <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 100px">
                    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <!--Google Maps-->
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

        <!-- /.row -->

    </div>


    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
