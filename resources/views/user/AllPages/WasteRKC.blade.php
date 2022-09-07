<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<head>

</head>

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
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
    <div class="container">
        <h5 class="mt-5">Select Location for Waste Moving Regulation</h5>
        <div class="row">
            <div class="col-md-12  ">
                <form action="{{ URL::current() }}" method="GET">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <select id="selectCountry" name="country[]" class="form-control reg_para " required>
                                <option value="">Waste Move From :</option>
                                @foreach ($waste as $wastes)
                                    @php
                                        $checked = [];
                                        if (isset($_GET['country'])) {
                                            $checked = $_GET['country'];
                                        }
                                    @endphp
                                    <option value="{{ $wastes->country }}">
                                        {{ $wastes->country }}
                                    </option>
                                @endforeach
                            </select>
                            @error('country')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <select id="selectCountry2" name="country2[]" class="form-control reg_para ">
                                <option value="">Waste Move To :</option>
                                @foreach ($waste as $wastes)
                                    @php
                                        $checked2 = [];
                                        if (isset($_GET['country2'])) {
                                            $checked2 = $_GET['country2'];
                                        }
                                    @endphp
                                    <option value="{{ $wastes->country }}">
                                        {{ $wastes->country }}
                                    </option>
                                @endforeach
                            </select>
                            @error('country2')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button type=" submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container mt-3 mb-5 border 1px p-4">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <h4>Waste Regulation Knowledge Center</h4>
                    <hr class="bg-success">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 border-right 1px ">
                    <h4 class="trade2">Waste Moving :</h4>
                    <hr class="bg-success">
                    @if ($SelectedCountry->eu_members == 'EU Members' && $SelectedCountry->oecd == 'OECD')
                        <p>The Country <b>{{ $SelectedCountry->WasteRegulations->country }}</b> is a part
                            of
                            <b>{{ $SelectedCountry->eu_members }}</b>
                            And it is Listed as <b>{{ $SelectedCountry->oecd }}</b> country.
                        </p>
                        <p>There are no links available for now.</p>
                    @elseif($SelectedCountry->eu_members == 'EU Members' && $SelectedCountry->oecd == null)
                        <p>The Country <b>{{ $SelectedCountry->WasteRegulations->country }}</b> is a part
                            of
                            <b>{{ $SelectedCountry->eu_members }}</b>
                            And it is NOT Listed as <b>OECD</b>
                            country.
                        </p>
                        <strong>The links are given below will help you out.</strong>
                        <p>
                            <a href="">{{ $SelectedCountry->link1 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link2 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link3 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link4 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link5 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link6 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link7 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link8 }}</a>

                            <br>
                        </p>
                    @elseif($SelectedCountry->eu_members == null && $SelectedCountry->oecd == 'OECD')
                        <p>The Country <b>{{ $SelectedCountry->WasteRegulations->country }}</b> is a NOT
                            a
                            part
                            of
                            <b>European Union</b>
                            And it is Listed as <b>{{ $SelectedCountry->oecd }}</b>
                            country.
                        </p>
                        @if ($SelectedCountry->link1 || $SelectedCountry->link2 || $SelectedCountry->link3 || $SelectedCountry->link4 || $SelectedCountry->link5 || $SelectedCountry->link6 || $SelectedCountry->link7 || $SelectedCountry->link8)
                            <strong>The links are given below will help you out.</strong>
                        @else
                        @endif
                        <strong>There Are no Links Available for now.</strong>
                        <p><a href="">{{ $SelectedCountry->link1 }}</a></p>

                        <p><a href="">{{ $SelectedCountry->link2 }}</a></p>

                        <p><a href="">{{ $SelectedCountry->link3 }}</a></p>

                        <p><a href="">{{ $SelectedCountry->link4 }}</a></p>

                        <p><a href="">{{ $SelectedCountry->link5 }}</a></p>

                        <p><a href="">{{ $SelectedCountry->link6 }}</a></p>

                        <p><a href="">{{ $SelectedCountry->link7 }}</a></p>

                        <p> <a href="">{{ $SelectedCountry->link8 }}</a></p>
                    @elseif($SelectedCountry->eu_members == null && $SelectedCountry->oecd == null)
                        <p>The Country <b>{{ $SelectedCountry->WasteRegulations->country }}</b> is NOT a
                            part
                            of
                            <b>European Union</b>
                            And it is NOT Listed as <b>OECD</b>
                            country.
                        </p>
                        @if ($SelectedCountry->link1 || $SelectedCountry->link2 || $SelectedCountry->link3 || $SelectedCountry->link4 || $SelectedCountry->link5 || $SelectedCountry->link6 || $SelectedCountry->link7 || $SelectedCountry->link8)
                            <strong>The links are given below will help you out.</strong>
                        @else
                            <strong>There Are no Links Available for now.</strong>
                        @endif
                        <p>
                            <a href="">{{ $SelectedCountry->link1 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link2 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link3 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link4 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link5 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link6 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link7 }}</a>
                            <br>
                            <a href="">{{ $SelectedCountry->link8 }}</a>
                            <br>
                        </p>
                    @endif
                    <hr>
                </div>
                <div class="col-md-4">
                    <div class="img pt-4">
                        <img src="public/assets/images/w.svg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>






        <div class="container mt-3 mb-5 border 1px">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <h4>Waste Regulation</h4>
                    <hr class="bg-success">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="reg_para">We all know how complicated and ever-changing the regulations can be in
                        Waste Management and Recycling industry. </p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="reg_para">That's why we're proud to offer a solution for you - an easy guide that
                        will help keep your business up with Waste Regulations by helping ensure compliance when
                        importing or exporting waste from one country into another!
                    </p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="reg_para">This is not just something exclusive; it’s been created as World’s First,
                        which means there aren't any online platform or companies out there doing what ours does: making
                        sure material movements meets global regulation through research & development efforts like
                        these ones."
                    </p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="reg_para">Simply choose the type of material, origin and destination in the search
                        box and get the results.
                    </p>
                    <hr>
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
