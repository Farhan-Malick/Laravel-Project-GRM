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
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('request'))
                    <div class="col-sm-12 text-dark alert alert-success" style="text-align: center; ">
                        {{ session('request') }}</div>
                @endif
            </div>
        </div>
    </div>

    <div class="container A_P mt-2 mb-5">
        <form action="{{ URL('/Add_Requests') }}" method="POST" enctype="multipart/form-data" class="reg_para">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="border-radius row  border 1px ">
                        <div class="col-12 addproduct_header">
                            <h6 class="text-light p-3">Select Category</h6>
                        </div>
                        <div class="col-md-12 mt-3 ">
                            <select name="m_type" id="DOM_Category"
                                class="form-control @error('m_type') is-invalid @enderror">
                                <option name="">-Select Category-</option>
                                @foreach (App\Models\RequestCategory::with('children')->where('cat_id', null)->get()
    as $items)
                                    <option value="{{ $items->id }}">
                                        {{ $items->category }}</option>
                                @endforeach
                            </select>
                            @error('m_type')
                                <span>{{ $message }}</span>
                            @enderror
                            <script>
                                function DropEvent() {
                                    var Lists = document.getElementById('DOM_Category');
                                    Lists.addEventListener('change', DisableMenus, false);
                                }

                                function DisableMenus() {
                                    var Lists = document.getElementsByClassName('Drop');
                                    for (var i = 0; i < Lists.length; i++) {
                                        if (Lists[i].id !== event.target.value) {
                                            Lists[i].disabled = true;
                                        } else {
                                            Lists[i].disabled = false;
                                        }
                                    }
                                }
                                window.onload = DropEvent;
                            </script>
                            <br>
                            <div class="row  mb-3">
                                <div class="col-md-12">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="form-group text-dark">
                                                @foreach (App\Models\RequestCategory::with('children')->where('cat_id', null)->get()
    as $items)
                                                    @if ($items->children->count() > null)
                                                        <p class="trade2 reg_para mb-2">{{ $items->category }}
                                                        </p>
                                                        <select id="{{ $items->id }}" name="sub_type" disabled
                                                            class="form-control  @error('sub_type') is-invalid @enderror reg_para mt-1 Drop">
                                                            <option name="">-Sub Category-</option>
                                                            @foreach ($items->children as $sub_category)
                                                                <option value="{{ $sub_category->id }}">
                                                                    {{ $sub_category->category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('sub_type')
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
                <div class="col-md-9  border 1px" style="border-radius: 0px 60px 0px 60px">
                    <div class="row pt-1 addproduct_header">
                        <div class="col-12">
                            <h6 class="text-light p-3">Add Your Request</h6>
                        </div>
                    </div>
                    <div class="col-md-12 pt-4 pl-5 pr-5">
                        <h6>Material Information <span class="step">Step-01</span></h6>
                        <hr class="bg-success">
                    </div>
                    <div class="col-md-12 pl-5 pr-5">
                        <div class="form-row ">
                            <div class="form-group  col-md-12  ">
                                <label class="reg_para" for="">Product Name :</label>
                                <input type="text" class="form-control reg_para " name="p_name" require
                                    placeholder="Enter Product Name" required>
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="form-group  col-md-12">
                                <label name="condition">{{ __('Condition') }}</label>
                                <select name="condition"
                                    class="form-control @error('condition') is-invalid @enderror reg_para ">
                                    <option>--</option>
                                    <option>Compound,Lumps,Rolls</option>
                                    <option>Hybrid</option>
                                    <option>Normal</option>
                                </select>
                                @error('condition')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group   col-md-12  ">
                                <label class="reg_para" for="">City :</label>
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
                        </div>
                        <div class="form-row ">
                            <div class="form-group  col-md-12  ">
                                <label class="reg_para" for="">Enter Weight :</label>
                                <input type="text" class="form-control reg_para " name="weight" require
                                    placeholder="Weight Must be in KG'S, MT (Metric Tonnes), LB" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <input type="submit" class="btn btn-success reg_para addproduct_btn input-contact"
                                    value="Done">
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="form-group form-check col-md-12 m-2 text-right">
                                <a href="" type="submit" class="btn btn-success addproduct_btn">Done</a>
                            </div>
                        </div> --}}
                    </div>

                </div>



            </div>
        </form>
    </div>

    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
