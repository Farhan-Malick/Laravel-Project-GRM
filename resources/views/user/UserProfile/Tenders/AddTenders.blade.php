<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<head>
    <style>
        thead {
            background-color: rgb(224, 224, 224);
        }

        tfoot {
            background-color: rgb(224, 224, 224);
        }

    </style>
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
    @include('user.userLayouts.ProfileHeader')

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-12 ">
                <h3 class="card-title text-lg ">
                    Add Tender
                </h3>
                <hr class="bg-success">
                <!-- /.card-header -->
                <div class="border 1px p-4 reg_para">
                    <form action="{{ URL('/Seller/Tender') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <div class="form-group">
                                <label for=""><b>Description</b> </label>
                                <input type="text" name="description" class="form-control" id="exampleInputTitle"
                                    placeholder="Enter Heading ">
                                @error('description')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for=""><b>Opening Date</b> </label>
                                    <input type="date" name="odate" class="form-control" id="exampleInputTitle"
                                        placeholder="Enter Opening Date">
                                    @error('odate')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for=""><b>Closing Date</b> </label>
                                    <input type="date" name="cdate" class="form-control" id="exampleInputTitle"
                                        placeholder="Enter Closing Date">
                                    @error('cdate')
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
                                    <label class="reg_para" for=""><b>Status :</b></label>
                                    <select name="status" class="form-control reg_para ">
                                        <option>Open</option>
                                        <option>Close</option>
                                    </select>
                                    @error('status')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for=""><b>Amount</b> </label>
                                    <input type="text" name="amount" class="form-control" id="exampleInputTitle"
                                        placeholder="Enter Amount ">
                                    @error('amount')
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
