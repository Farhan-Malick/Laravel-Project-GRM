<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center pt-3 ">POST YOUR Ad</h5>
                @if (Session::has('ClientsAd'))
                    <div class="col-sm-12 text-dark alert alert-success" style="text-align: center; ">
                        {{ session('ClientsAd') }}</div>
                @endif
            </div>
        </div>
    </div>
    <form action="{{ URL('/Update-Offers') }}" method="POST" enctype="multipart/form-data" class="reg_para">
        @csrf
        <input value="{{ $offers['id'] }}" type="hidden" name="id">
        <div class="container">

            <div class="row">
                <div class="col-md-3 mb-2 ">
                    <div class="border-radius row  border 1px ">
                        <div class="col-12 addproduct_header">
                            <h6 class="text-light p-3">Select Category</h6>
                        </div>
                        <div class="col-md-12 mt-3 ">
                            <select name="main_type" id="Category"
                                class="form-control @error('main_type') is-invalid @enderror">
                                <option name="">-Select Category-</option>
                                @foreach (App\Models\Category::with('childs')->where('category_id', null)->get()
    as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->category }}</option>
                                @endforeach
                            </select>
                            @error('main_type')
                                <span>{{ $message }}</span>
                            @enderror
                            <script>
                                function DropEvents() {
                                    var Lists = document.getElementById('Category');
                                    Lists.addEventListener('change', DisableMenu, false);
                                }

                                function DisableMenu() {
                                    var Lists = document.getElementsByClassName('Drops');
                                    for (var i = 0; i < Lists.length; i++) {
                                        if (Lists[i].id !== event.target.value) {
                                            Lists[i].disabled = true;
                                        } else {
                                            Lists[i].disabled = false;
                                        }
                                    }
                                }
                                window.onload = DropEvents;
                            </script>
                            <br>
                            <div class="row  mb-3">
                                <div class="col-md-12">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="form-group text-dark ">
                                                @foreach (App\Models\Category::with('childs')->where('category_id', null)->get()
    as $item)
                                                    @if ($item->childs->count() > null)
                                                        <p class="trade2 reg_para mb-2">{{ $item->category }}
                                                        </p>
                                                        <select id="{{ $item->id }}" name="sub_category" disabled
                                                            class="form-control @error('sub_category') is-invalid @enderror reg_para mt-1 Drops">
                                                            <option name="">-Select Sub-Category-</option>
                                                            @foreach ($item->childs as $sub_category)
                                                                <option>
                                                                    --{{ $sub_category->category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('sub_category')
                                                            <span>{{ $message }}</span>
                                                        @enderror
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="container A_P  mb-5 border 1px">
                        {{-- COMPANY INFORMATION SECTION --}}
                        <div class="row pt-1 addproduct_header">
                            <div class="col-12">
                                <h6 class="text-light p-3">Post Your Ad</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-4 pl-5 pr-5">
                                <h6>Material Information <span class="step">Step-01</span></h6>
                                <hr class="bg-success">
                            </div>
                            <div class="col-md-12 pl-5 pr-5">
                                <div class="form-row ">
                                    <div class="form-group  col-md-12  ">
                                        <label class="reg_para" for="">Product Name :</label>
                                        <input type="text" value="{{ $offers['p_name'] }}"
                                            class="form-control @error('p_name') is-invalid @enderror reg_para "
                                            name="p_name" placeholder="Enter Product Name">
                                        @error('p_name')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Adtitle">Ad title</label>
                                    <input type="text" value="{{ $offers['title'] }}"
                                        class="form-control @error('title') is-invalid @enderror reg_para" name="title"
                                        id="Adtitle" aria-describedby="AdtitleHelp" placeholder="Enter Product title">
                                    <small id="AdtitleHelp" class="form-text text-muted">Mention the key
                                        features of your
                                        item (e.g. brand, model, type)</small>
                                    @error('title')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea name="description"
                                        class="form-control @error('description') is-invalid @enderror" id="Description"
                                        aria-describedby="DescriptionHelp" cols="30"
                                        rows="4">{{ $offers['description'] }}</textarea>
                                    <small id="DescriptionHelp" class="form-text text-muted">Include condition,
                                        features and
                                        reason for selling</small>
                                    @error('description')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-row ">
                                    <div class="form-group  col-md-12">
                                        <label name="condition">{{ __('Condition') }}</label>
                                        <select name="condition"
                                            class="form-control @error('condition') is-invalid @enderror reg_para "
                                            required>
                                            <option>--</option>
                                            <option>Compound </option>
                                            <option>Lumps</option>
                                            <option>Rolls</option>
                                        </select>
                                        @error('condition')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pt-4 pl-5 pr-5">
                                <h6>Availabality & Pricing<span class="step">Step-02</span></h6>
                                <hr class="bg-success">
                            </div>
                            <div class="col-md-12 pl-5 pr-5">
                                <div class="form-row ">
                                    <div class="form-group   col-md-12  ">
                                        <label class="reg_para" for="">Pricing Terms :</label>
                                        <select name="p_terms"
                                            class="form-control @error('p_terms') is-invalid @enderror reg_para "
                                            required>
                                            <option value="">--</option>
                                            <option>EXW</option>
                                            <option>FCA</option>
                                            <option>FAS</option>
                                            <option>FOB</option>
                                            <option>CFR</option>
                                            <option>CIF</option>
                                            <option>CPT</option>
                                            <option>CIP</option>
                                            <option>DAF</option>
                                            <option>DES </option>
                                            <option>DEQ</option>
                                            <option>DDU</option>
                                            <option>DAP</option>
                                            <option>Others</option>
                                        </select>
                                        @error('p_terms')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group   col-md-6  ">
                                        <label for="product_weight">Product Weight </label>
                                        <p> <small>(Without Unit-Weight
                                                You Can't
                                                Go Any
                                                Further)</small></p>
                                        <input type="tel" placeholder="Enter Product Weight "
                                            value="{{ $offers['product_weight'] }}"
                                            class="form-control @error('product_weight') is-invalid @enderror reg_para"
                                            name="product_weight" id="product_weight"
                                            aria-describedby="product_weightHelp">
                                        @error('product_weight')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group   col-md-6  ">
                                        <label class="reg_para" for="">Unit (Weight) :</label>
                                        <p> <small>(Without Product Weight
                                                You Can't
                                                Go Any
                                                Further)</small></p>
                                        <select name="unit_weight"
                                            class="form-control @error('unit_weight') is-invalid @enderror reg_para "
                                            required>
                                            <option value="">--</option>
                                            <option>MT (Metric Tonnes)</option>
                                            <option>KG</option>
                                            <option>LB</option>
                                            <option>Others</option>
                                        </select>
                                        @error('unit_weight')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group   col-md-4  ">
                                        <label class="reg_para" for="">Supply Type :</label>
                                        <select name="supply_type" value="{{ $offers['supply_type'] }}"
                                            class="form-control @error('supply_type') is-invalid @enderror reg_para ">
                                            <option value="">--</option>
                                            <option>On-Going</option>
                                            <option>Off-Going</option>
                                        </select>
                                        @error('supply_type')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group  col-md-4  ">
                                        <label class="reg_para" for="">Currency :</label>
                                        <input type="text" value="{{ $offers['currency'] }}"
                                            class="form-control @error('currency') is-invalid @enderror reg_para"
                                            name="currency" placeholder="Enter Currency">
                                        @error('currency')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group   col-md-4  ">
                                        <label for="price">SET A PRICE</label>
                                        <input type="number" placeholder="Rs" value="{{ $offers['price'] }}"
                                            class="form-control @error('price') is-invalid @enderror reg_para"
                                            name="price" id="price" aria-describedby="priceHelp">
                                        @error('price')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12  ">
                                        <label class="reg_para" for="">Quantity Available :</label>
                                        <input type="text" value="{{ $offers['quantity_avl'] }}"
                                            class="form-control @error('quantity_avl') is-invalid @enderror reg_para"
                                            name="quantity_avl" placeholder="15">
                                        @error('quantity_avl')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-4 pl-5 pr-5">
                                <h6>Location<span class="step">Step-03</span></h6>
                                <hr class="bg-success">
                            </div>
                            <div class="col-md-12 pl-5 pr-5">
                                <div class="form-row ">
                                    <div class="form-group  col-md-12  ">
                                        <label class="reg_para" for="">Collection Address :</label>
                                        <input type="text" value="{{ $offers['col_address'] }}"
                                            class="form-control @error('col_address') is-invalid @enderror reg_para "
                                            name="col_address" placeholder="Enter Collection Address">
                                        @error('col_address')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group   col-md-4  ">
                                        <label class="reg_para" for="">Country :</label>
                                        <select name="country"
                                            class="form-control @error('country') is-invalid @enderror reg_para "
                                            required>
                                            <option value="">--</option>
                                            <option>Pakistan</option>
                                            <option>india</option>
                                            <option>Australia</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Belgium</option>
                                            <option>Canada</option>
                                            <option>China</option>
                                            <option>Colombia</option>
                                            <option>Egypt</option>
                                            <option>Iran</option>
                                        </select>
                                        @error('country')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group   col-md-4  ">
                                        <label class="reg_para" for="">City :</label>
                                        <select name="location"
                                            class="form-control @error('location') is-invalid @enderror reg_para "
                                            required>
                                            <option value="">--</option>
                                            <option>Lahore</option>
                                            <option>Karachi</option>
                                            <option>Islamabad</option>
                                            <option>Multan</option>
                                        </select>
                                        @error('location')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group   col-md-4  ">
                                        <label class="reg_para" for="">Zip Code :</label>
                                        <input type="tel" value="{{ $offers['zip_code'] }}"
                                            class="form-control @error('zip_code') is-invalid @enderror reg_para "
                                            name="zip_code" placeholder="Enter Zip-Code">
                                        @error('zip_code')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group   col-md-12 ">
                                        <label class="reg_para" for="">Listing Options :</label>
                                        <select name="listing_options"
                                            class="form-control @error('listing_options') is-invalid @enderror reg_para "
                                            required>
                                            <option value="">--</option>
                                            <option>All Countries</option>
                                            <option>Pakistan</option>
                                            <option>india</option>
                                            <option>Australia</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Belgium</option>
                                            <option>Canada</option>
                                            <option>China</option>
                                            <option>Colombia</option>
                                            <option>Egypt</option>
                                            <option>Iran</option>
                                        </select>
                                        @error('listing_options')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group   col-md-12  ">
                                        <label class="reg_para" for="">Payment Terms :</label>
                                        <input type="text" value="{{ $offers['payment_terms'] }}"
                                            class="form-control @error('payment_terms') is-invalid @enderror reg_para "
                                            name="payment_terms" placeholder="Enter your payment terms here">
                                        @error('Payment_terms')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row border-bottom 1px mb-2">
                            <div class="col-md-12 pl-5 pr-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="pt-2 pb-2">UPLOAD UP TO 12 PHOTOS</h5>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">01 :</span>
                                                    <span for="firstimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd1/' . $offers->image1) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="1display-image1">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">02 :</span>
                                                    <span for="secondimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd2/' . $offers->image2) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="1second-display-image1">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">03 :</span>
                                                    <span for="thirdimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd3/' . $offers->image3) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="1third-display-image1">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">04 :</span>
                                                    <span for="fourthimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd4/' . $offers->image4) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="1fourth-display-image1">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">05 :</span>
                                                    <span for="fifthimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd5/' . $offers->image5) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="1fifth-display-image1">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">06 :</span>
                                                    <span for="sixthimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd6/' . $offers->image6) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="sixth-display-image1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">07 :</span>
                                                    <span for="seventhimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd7/' . $offers->image7) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="seventh-display-image1">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">08 :</span>
                                                    <span for="eightimg"><img class=""
                                                            class="border 1px"
                                                            src="{{ asset('storage/app/public/post/usersAd8/' . $offers->image8) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="eight-display-image1">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">09 :</span>
                                                    <span for="ninthimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd9/' . $offers->image9) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="ninth-display-image1">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">10 :</span>
                                                    <span for="tenthimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd10/' . $offers->image10) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="tenth-display-image1">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">11 :</span>
                                                    <span for="eleventhimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd11/' . $offers->image11) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class="text-center" id="eleventh-display-image1">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">12 :</span>
                                                    <span for="twelfthimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd12/' . $offers->image12) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <input type="hidden" name="image12" id="twelfthimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage12(this.value);">
                                                    <div class=" text-center" id="twelfth-display-image1">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">13 :</span>
                                                    <span for="thirteenthimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd13/' . $offers->image13) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class=" text-center" id="thirteenth-display-image1">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">14 :</span>
                                                    <span for="fourteenthimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd14/' . $offers->image14) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class=" text-center" id="fourteenth-display-image1">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <span style="font-size: 10px">15 :</span>
                                                    <span for="fifteenthimg"><img class=""
                                                            src="{{ asset('storage/app/public/post/usersAd15/' . $offers->image15) }}"
                                                            width="80px" alt="" height="40px"></span>
                                                    <div class=" text-center" id="fifteenth-display-image1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success addproduct_btn">POST NOW</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </form>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
