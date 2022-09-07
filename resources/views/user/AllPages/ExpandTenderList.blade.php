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

    <div class="container border 1 mb-5">
        <div class="row">
            <div class="col-md-12">
                <!-- ./card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="" type="submit" class="btn btn-success step">NEW TENDERS</a>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover mt-2">
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
                                <td>Lorem Ipsum is simply dummy text
                                    of the printing and typeseting </td>
                                <td>22/DEC/2020</td>
                                <td>15/JAN/2022</td>
                                <td>Lahore, Pkaistan.</td>
                                <td>$8500</td>
                                <td><span class="btn-ongoing_status w-100 p-2">Open</span></td>
                            </tr>
                            <tr class="expandable-body">
                                <td colspan="5">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when
                                        an
                                        unknown printer took a galley of type and scrambled it to make a type
                                        specimen
                                        book.
                                    </p>
                                </td>
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
                            <tr class="expandable-body">
                                <td colspan="5">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when
                                        an
                                        unknown printer took a galley of type and scrambled it to make a type
                                        specimen
                                        book.
                                    </p>
                                </td>
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
                            <tr class="expandable-body">
                                <td colspan="5">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when
                                        an
                                        unknown printer took a galley of type and scrambled it to make a type
                                        specimen
                                        book.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <table border=1 id="table_detail" align=center cellpadding=10>

                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Salary</th>
                        <th>Job</th>
                    </tr>

                    <tr onclick="showHideRow('hidden_row1');">
                        <td>Person-1</td>
                        <td>24</td>
                        <td>60000</td>
                        <td>Computer Programmer</td>
                    </tr>
                    <tr id="hidden_row1" class="hidden_row">
                        <td colspan=4>
                            Person-1 is 24 years old and
                            he is a computer programmer
                            he earns 60000 per month
                        </td>
                    </tr>

                    <tr onclick="showHideRow('hidden_row2');">
                        <td>Person-2</td>
                        <td>25</td>
                        <td>100000</td>
                        <td>Web Designer</td>
                    </tr>
                    <tr id="hidden_row2" class="hidden_row">
                        <td colspan=4>
                            Person-2 is 25 years old and
                            she is a web designer she earns
                            100000 per month
                        </td>
                    </tr>
                </table>
                <script type="text/javascript">
                    function showHideRow(row) {
                        $("#" + row).toggle();
                    }
                </script>
                <!-- /.card-body -->

                <!-- /.card -->
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
