<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.userLayouts.HeadLinks')
</head>

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

    <h1 class="text-center">Industry News</h1>
    <div class="container border 1px mt-2 mb-3 pb-2 pt-2">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <img src="public/assets/images/koria.svg" alt="" class="img-fluid mt-1">
                        </div>
                        <div class="">
                            <h6>What One Photo Tell Us About North Korea's Nuclear Program</h6>
                            <p class="reg_para">Clues from a propaganda photo reveal details about North Korea’s
                                expanding
                                weapons programs and
                                internal politics.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-12 txt">
                        <span class="bg">TOP_STORIES</span><br>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                        <hr class="m-0">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                        <hr class="m-0">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                        <hr class="m-0">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                        <hr class="m-0">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                        <hr class="m-0">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-12 txt">
                        <span class="bg">QUICK BITES</span><br>
                        <h5>
                            Stocks Sell Off, Gold Rises
                            Ahead of Trump Speech:
                            Markets Wrap
                        </h5>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit illum dolorum eos soluta
                            ex, excepturi harum doloremque ipsum quaerat totam enim aperiam asperiores non, sint ipsa!
                            Rem non soluta et ? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                            similique quasi sapiente, explicabo, eum voluptatem tempora quidem, ratione molestiae
                            repudiandae nobis. Modi quas inventore, sequi quae architecto excepturi quod dolorum?</span>
                        <div class="">
                            <form action="">
                                <input type="email" placeholder="Enter Your Email"
                                    class="inp  reg_para input-group input--style-1 input-contact"> <button
                                    class="btn btn-primary ebtn ">Sign up</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <h6 class="text-dark ">FEATURED<span class="text-dark bg_span reg_para">
                        Mahashivratri symbolizes a union of
                        divinity with a purpose of overcoming darkness and injustice.</span></h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-4">
                        <img src="public/assets/images/p1.svg" alt="" class="img-fluid mt-1 col-sm-12">
                    </div>
                    <div class="col-md-4">
                        <img src="public/assets/images/p2.svg" alt="" class="img-fluid mt-1  col-sm-12">
                    </div>
                    <div class="col-md-4">
                        <img src="public/assets/images/p3.svg" alt="" class="img-fluid mt-1  col-sm-12">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="public/assets/images/mudi.svg" alt="" class="img-fluid mt-1  col-sm-12">
            </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-md-2">
                <span class="bg_span">World News</span><br>
                <h6 class="">An Alarmed Base Prods Democrats Into an All-Out War</h6>
                <p class="txt">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas autem quod
                    corporis error,
                    recusandae perspiciatis aspernatur esse earum aperiam ipsum odit eius libero natus fuga animi.
                    Expedita aut quaerat eligendi!</p>
                <hr>
                <h6>
                    Transgender Student on the Front Lines of the Rights Battle
                </h6>
                <p class="txt">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas autem quod
                    corporis error,
                    recusandae perspiciatis aspernatur esse earum aperiam ipsum odit eius libero natus fuga animi.
                    Expedita aut quaerat eligendi!</p>
            </div>
            <div class="col-md-5 border-left 1 border-right 1">
                <h6>
                    Hate Crime Is Feared in Shooting of 2 Indians in Kansas
                </h6>
                <div class="row">
                    <div class="col-9">
                        <p class="txt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto
                            libero
                            omnis asperiores eos aliquam voluptates odio, officia quod iste reprehenderit sapiente eaque
                            atque
                            tempore velit dolorem earum, ullam, eius enim?</p>

                    </div>
                    <div class="col-3">
                        <img src="public/assets/images/mudi.svg" alt="" class="img-fluid">
                    </div>
                </div>
                <hr>
                <h6>
                    Uber Lawsuit Puts Spotlight on Rush for Driverless Cars
                </h6>
                <p class="txt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, veritatis sapiente, non eligendi
                    earum soluta repudiandae magnam corporis vero ut reprehenderit quibusdam dolore fuga tempora culpa
                    unde neque sequi quam?
                </p>
                <hr>
                <h6>Hate Crime Is Feared in Shooting of 2 Indians in Kansas</h6>
                <div class="row">
                    <div class="col-9">

                        <p class="txt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto
                            libero
                            omnis asperiores eos aliquam voluptates odio, officia quod iste reprehenderit sapiente eaque
                            atque
                            tempore velit dolorem earum, ullam, eius enim?</p>

                    </div>
                    <div class="col-3">
                        <img src="public/assets/images/fish.svg" alt="" class="img-fluid">
                    </div>
                </div>
                <h6>
                    Uber Lawsuit Puts Spotlight on Rush for Driverless Cars
                </h6>
                <p class="txt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, veritatis sapiente, non eligendi
                    earum soluta repudiandae magnam corporis vero ut reprehenderit quibusdam dolore fuga tempora culpa
                    unde neque sequi quam?
                </p>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-12 txt">
                        <span class="bg">ENTERTAINMENT</span><br>
                        <br>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                        <hr class="mb-0">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                        <hr class="mb-0">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                        <hr class="mb-0">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                        <hr class="mb-0">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                        <hr class="mb-0">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illum nostrum vel
                            repellendus
                            voluptas maiores nobis.</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <span class="bg_span"> SPORTS NEWS </span>
                <h6>COA wants all BCCI bodies to produce compliance report</h6>
                <p class="txt">After the election, Democrats debated whether to confront Mr. Trump or seek
                    compromise, but riled-up
                    liberals have pushed party leaders into a fight.</p>
                <img src="public/assets/images/aus.svg" alt="" class="img-fluid mt-5">
                <h6>Series win in Australia hugely satisfying: Upul Tharanga</h6>
                <hr>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12 border 1px pt-2 mb-2">
                        <div class="row">
                            <div class="col-md-9  col-sm-12 col-xs-12">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="vertical-menu ">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row ">
                    <div class="col-md-2  col-sm-12 col-xs-12 ">
                        <img src="public/assets/images/l1.png" class="img-fluid  col-sm-12 col-xs-12" alt="">
                        <h6>The Intimate Lens of Ed van der Elsken</h6>
                        <p class="txt">Two European museums are presenting retrospectives of a man many
                            consider to be one of the
                            best street photographers of the 20th century.</p>
                    </div>
                    <div class="col-md-2  col-sm-12 col-xs-12"><img src="public/assets/images/l2.svg"
                            class="img-fluid  col-sm-12 col-xs-12" alt="">
                        <h6>Gauging the Art Market’s Health</h6>
                        <p class="txt">Two European museums are presenting retrospectives of a man many
                            consider to be one of the
                            best street photographers of the 20th century.</p>
                    </div>
                    <div class="col-md-2  col-sm-12 col-xs-12"><img src="public/assets/images/l3.svg"
                            class="img-fluid  col-sm-12 col-xs-12" alt="">
                        <h6>What happen when you skip breakfast </h6>
                        <p class="txt">Two European museums are presenting retrospectives of a man many
                            consider to be one of the
                            best street photographers of the 20th century.</p>
                    </div>
                    <div class="col-md-2  col-sm-12 col-xs-12"><img src="public/assets/images/l4.svg"
                            class="img-fluid  col-sm-12 col-xs-12" alt="">
                        <h6> In London, the Rise of Old-Fashioned </h6>
                        <p class="txt">Two European museums are presenting retrospectives of a man many
                            consider to be one of the
                            best street photographers of the 20th century.</p>
                    </div>
                    <div class="col-md-2  col-sm-12 col-xs-12"><img src="public/assets/images/l5.svg"
                            class="img-fluid  col-sm-12 col-xs-12" alt="">
                        <h6>6 myths about keeping an aquarium </h6>
                        <p class="txt">Two European museums are presenting retrospectives of a man many
                            consider to be one of the
                            best street photographers of the 20th century.</p>
                    </div>
                    <div class="col-md-2  col-sm-12 col-xs-12"><img src="public/assets/images/g2.svg"
                            class="img-fluid  col-sm-12 col-xs-12" alt="">
                        <h6>In London, the Rise of Old-Fashioned</h6>
                        <p class="txt">Two European museums are presenting retrospectives of a man many
                            consider to be one of the
                            best street photographers of the 20th century.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <span class="bg ml-4">MOST POPULAR</span><br>
                <ol>
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>
                    <hr class="mb-0">
                    <li class="txt">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </li>

                </ol>
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
