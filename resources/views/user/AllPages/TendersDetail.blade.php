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


    <h3 class="text-center">Tenders Detail</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('msg'))
                    <div class="col-sm-12 text-dark alert alert-success" style="text-align: center; ">
                        {{ session('msg') }}</div>
                @endif
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row">
            <div class="col-md-9 border 1px mb-3 mt-3">
                <div class="row pt-2 ">
                    <div class="col-md-12">
                        <h4>Tender Details</h4>
                        <hr class="bg-success">
                    </div>
                    <div class="col-md-12 ">
                        <table class="table table-responsive w-100">
                            <tr>
                                <th>Buyer / Seller:</th>
                                <td>
                                    @if ($tender->user_id)
                                        <b>{{ $tender->Seller_tender->name }}
                                            {{ $tender->Seller_tender->lname }}</b>
                                    @else
                                        <b>Un-Authorized User</b>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Tender Ref. No:</th>
                                <td>{{ $tender->id }}</td>
                            </tr>
                            <tr>
                                <th>Date:</th>
                                <td>{{ $tender->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Tender Closing Date:</th>
                                <td>{{ $tender->cdate }}</td>
                            </tr>
                            <tr>
                                <th>Description:</th>
                                <td>{{ $tender->description }}</td>
                            </tr>
                            <tr>
                                <th> Tender Opening Date:</th>
                                <td>{{ $tender->odate }}</td>
                            </tr>
                            <tr>
                                <th>Location :</th>
                                <td>{{ $tender->location }}</td>
                            </tr>
                            <tr>
                                <th> Tender Documents:</th>
                                <td>Available to download</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3  mt-3">
                <div class="border 1px pt-2 pl-2">
                    <h4>Closing Date</h4>
                    <hr class="bg-success">
                    <div class="text-center">
                        <h1 class="text-success h1_9 mb-0 pb-0">9</h1>
                        <h3 class="font_color mt-0 pt-0">Days Left</h3>
                    </div>
                </div>
                <div class="border 1px mb-2 mt-2 pt-2 pl-2">
                    <h4>Contact Details</h4>
                    <hr class="bg-success">
                    <div class="mb-5 mt-5 pt-5 pb-5 text-center">
                        <img src="" alt=""> <span>info@cdoxs.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  border 1px mb-2">
        <div class="row ">
            <div class="col-md-12">
                <h4 class="mt-2">Request</h4>
                <hr class="bg-success">
            </div>
        </div>
        <form action="{{ URL('commentForTender/' . $tender->id) }}" method="POST" enctype="multipart/form-data"
            class="reg_para">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <strong>Comment :</strong>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="comment" class="form-control mb-3 w-100 reg_para input-group input--style-1 input-contact" id=""
                                cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Price :</strong>
                            <br>
                            <input type="tel"
                                class="form-control mb-3 w-50 reg_para input-group input--style-1 input-contact"
                                name="price" require placeholder="Enter Price" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn mb-2 premium p-2 pl-3 pr-3 text-white">Submit</button>
                        </div>
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
