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
    <form action="{{ URL('/Attributes') }}" method="POST" enctype="multipart/form-data" class="reg_para">
        @csrf
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
                                                            @foreach ($item->childs as $s_category)
                                                                <option value="{{ $s_category->id }}">
                                                                    {{ $s_category->category }}
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
                                        <input type="text" value="{{ old('p_name') }}"
                                            class="form-control @error('p_name') is-invalid @enderror reg_para "
                                            name="p_name" placeholder="Enter Product Name">
                                        @error('p_name')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Adtitle">Ad title</label>
                                    <input type="text" value="{{ old('title') }}"
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
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="Description"
                                        aria-describedby="DescriptionHelp" cols="30"
                                        rows="4">{{ old('description') }}"</textarea>
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
                                            class="form-control @error('condition') is-invalid @enderror reg_para ">
                                            <option value="">--</option>
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
                                            class="form-control @error('p_terms') is-invalid @enderror reg_para ">
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
                                            class="form-control @error('unit_weight') is-invalid @enderror reg_para ">
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
                                        <select name="supply_type"
                                            class="form-control @error('supply_type') is-invalid @enderror reg_para ">
                                            <option value="">--</option>
                                            <option>Ongoing</option>
                                            <option>Off</option>
                                        </select>
                                        @error('supply_type')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group  col-md-4  ">
                                        <label class="reg_para" for="">Currency :</label>
                                        <input type="text" value="{{ old('company_scope') }}"
                                            class="form-control @error('currency') is-invalid @enderror reg_para"
                                            name="currency" placeholder="Enter Currency">
                                        @error('currency')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group   col-md-4  ">
                                        <label for="price">SET A PRICE</label>
                                        <input type="number" placeholder="Rs"
                                            class="form-control @error('price') is-invalid @enderror reg_para"
                                            name="price" id="price" aria-describedby="priceHelp">
                                        @error('price')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12  ">
                                        <label class="reg_para" for="">Quantity Available :</label>
                                        <input type="text" value="{{ old('company_scope') }}"
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
                                        <input type="text" value="{{ old('company_scope') }}"
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
                                            class="form-control @error('country') is-invalid @enderror reg_para ">
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
                                            class="form-control @error('location') is-invalid @enderror reg_para ">
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
                                        <input type="tel"
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
                                            class="form-control @error('listing_options') is-invalid @enderror reg_para ">
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
                                        <input type="text" value="{{ old('company_scope') }}"
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
                                            <div class="col-md-12">
                                                @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->get('image1') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image2') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image3') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            {{-- @foreach ($errors->get('image4') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image5') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image6') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image7') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image8') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image9') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image10') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image11') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image12') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image13') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image14') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                            @foreach ($errors->get('image15') as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach --}}
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">01 :</label>
                                                    <label for="firstimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input class="" type="file" name="image1"
                                                        id="firstimg" style="display:none; visibility:none;"
                                                        onchange="getImage(this.value);">
                                                    <div class="text-center" id="display-image">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">02 :</label>
                                                    <label for="secondimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image2" id="secondimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage2(this.value);">
                                                    <div class="text-center" id="second-display-image">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">03 :</label>
                                                    <label for="thirdimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image3" id="thirdimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage3(this.value);">
                                                    <div class="text-center" id="third-display-image">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">04 :</label>
                                                    <label for="fourthimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image4" id="fourthimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage4(this.value);">
                                                    <div class="text-center" id="fourth-display-image">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">05 :</label>
                                                    <label for="fifthimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image5" id="fifthimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage5(this.value);">
                                                    <div class="text-center" id="fifth-display-image">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">06 :</label>
                                                    <label for="sixthimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image6" id="sixthimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage6(this.value);">
                                                    <div class="text-center" id="sixth-display-image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">07 :</label>
                                                    <label for="seventhimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image7" id="seventhimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage7(this.value);">
                                                    <div class="text-center" id="seventh-display-image">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">08 :</label>
                                                    <label for="eightimg"><img class=""
                                                            class="border 1px" src="public/assets/images/i.jpg"
                                                            width="80px" alt=""></label>
                                                    <input type="file" name="image8" id="eightimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage8(this.value);">
                                                    <div class="text-center" id="eight-display-image">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">09 :</label>
                                                    <label for="ninthimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image9" id="ninthimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage9(this.value);">
                                                    <div class="text-center" id="ninth-display-image">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">10 :</label>
                                                    <label for="tenthimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image10" id="tenthimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage10(this.value);">
                                                    <div class="text-center" id="tenth-display-image">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">11 :</label>
                                                    <label for="eleventhimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image11" id="eleventhimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage11(this.value);">
                                                    <div class="text-center" id="eleventh-display-image">
                                                    </div>
                                                </div>

                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">12 :</label>
                                                    <label for="twelfthimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image12" id="twelfthimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage12(this.value);">
                                                    <div class=" text-center" id="twelfth-display-image">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">13 :</label>
                                                    <label for="thirteenthimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image13" id="thirteenthimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage13(this.value);">
                                                    <div class=" text-center" id="thirteenth-display-image">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">14 :</label>
                                                    <label for="fourteenthimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image14" id="fourteenthimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage14(this.value);">
                                                    <div class=" text-center" id="fourteenth-display-image">
                                                    </div>
                                                </div>
                                                <div class="pr-2" style="float: left">
                                                    <label style="font-size: 10px">15 :</label>
                                                    <label for="fifteenthimg"><img class=""
                                                            src="public/assets/images/i.jpg" width="80px"
                                                            alt=""></label>
                                                    <input type="file" name="image15" id="fifteenthimg"
                                                        style="display:none; visibility:none;"
                                                        onchange="getImage15(this.value);">
                                                    <div class=" text-center" id="fifteenth-display-image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function getImage(imagename) {
                                var newimg = imagename.replace(/^.*\\/, "");
                                $('#display-image').html(newimg);
                            }

                            function getImage2(imagename2) {
                                var secondnewimg = imagename2.replace(/^.*\\/, "");
                                $('#second-display-image').html(secondnewimg);
                            }

                            function getImage3(imagename3) {
                                var thirdnewimg = imagename3.replace(/^.*\\/, "");
                                $('#third-display-image').html(thirdnewimg);
                            }

                            function getImage4(imagename4) {
                                var fourthnewimg = imagename4.replace(/^.*\\/, "");
                                $('#fourth-display-image').html(fourthnewimg);
                            }

                            function getImage5(imagename5) {
                                var fifthnewimg = imagename5.replace(/^.*\\/, "");
                                $('#fifth-display-image').html(fifthnewimg);
                            }

                            function getImage6(imagename6) {
                                var sixthnewimg = imagename6.replace(/^.*\\/, "");
                                $('#sixth-display-image').html(sixthnewimg);
                            }

                            function getImage7(imagename7) {
                                var seventhnewimg = imagename7.replace(/^.*\\/, "");
                                $('#seventh-display-image').html(seventhnewimg);
                            }

                            function getImage8(imagename8) {
                                var eightnewimg = imagename8.replace(/^.*\\/, "");
                                $('#eight-display-image').html(eightnewimg);
                            }

                            function getImage9(imagename9) {
                                var ninthnewimg = imagename9.replace(/^.*\\/, "");
                                $('#ninth-display-image').html(ninthnewimg);
                            }

                            function getImage10(imagename10) {
                                var tenthnewimg = imagename10.replace(/^.*\\/, "");
                                $('#tenth-display-image').html(tenthnewimg);
                            }

                            function getImage11(imagename11) {
                                var eleventhnewimg = imagename11.replace(/^.*\\/, "");
                                $('#eleventh-display-image').html(eleventhnewimg);
                            }

                            function getImage12(imagename12) {
                                var twelfthnewimg = imagename12.replace(/^.*\\/, "");
                                $('#twelfth-display-image').html(twelfthnewimg);
                            }

                            function getImage13(imagename13) {
                                var thirteenthnewimg = imagename13.replace(/^.*\\/, "");
                                $('#thirteenth-display-image').html(thirteenthnewimg);
                            }

                            function getImage14(imagename14) {
                                var fourteenthnewimg = imagename14.replace(/^.*\\/, "");
                                $('#fourteenth-display-image').html(fourteenthnewimg);
                            }

                            function getImage15(imagename15) {
                                var fifteenththnewimg = imagename15.replace(/^.*\\/, "");
                                $('#fifteenthth-display-image').html(fifteenththnewimg);
                            }
                        </script>
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
