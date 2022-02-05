<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

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

    <div class="container mt-4 mb-5=">
        <div class="row mb-2">
            <div class="col-md-12">
                <h6 class="text-secondary">TENDER LIST <span class="step"><a href="" type="submit"
                            class="btn btn-success msg_span text-light">NEW TENDERS</a></span></h6>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-12 col-sm-4">
                <table class="table table-bordered table-hover mt-2 table-responsive">
                    <thead>
                        <tr>
                            <th>REF NO.</th>
                            <th>Description</th>
                            <th>Opening date</th>
                            <th>Closing date</th>
                            <th>Location</th>
                            <th>Amount</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>#3576866</td>
                            <td> <a href="{{ URL('Tenders-Detail') }}" class="text-dark">Lorem Ipsum is
                                    simply
                                    dummy text
                                    of the printing and typeseting</a></td>
                            <td>22/DEC/2020</td>
                            <td>15/JAN/2022</td>
                            <td>Lahore, Pkaistan.</td>
                            <td>$8500</td>
                            <td><span class="btn-ongoing_status w-100 p-2">Open</span></td>
                        </tr>

                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>#3576866</td>
                            <td>Lorem Ipsum is simply dummy text
                                of the printing and typeseting </td>
                            <td>22/DEC/2020</td>
                            <td>15/JAN/2022</td>
                            <td>Lahore, Pkaistan.</td>
                            <td>$8500</td>
                            <td><span class="btn-ongoing_status_closed bg-danger p-2">CLOSED</span></td>
                        </tr>

                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>#3576866</td>
                            <td>Lorem Ipsum is simply dummy text
                                of the printing and typeseting </td>
                            <td>22/DEC/2020</td>
                            <td>15/JAN/2022</td>
                            <td>Lahore, Pkaistan.</td>
                            <td>$8500</td>
                            <td><span class="btn-ongoing_status w-100 p-2">Open</span></td>
                        </tr>
                        </a>
                    </tbody>
                </table>
                {{-- {!! $dataTable->table() !!} --}}
            </div>
        </div>
    </div>
    </div>
    {{-- {!! $dataTable->scripts() !!} --}}
    </div>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
