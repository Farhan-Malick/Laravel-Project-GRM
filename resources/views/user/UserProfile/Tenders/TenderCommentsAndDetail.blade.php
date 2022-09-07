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

    <div class="container mt-4 mb-5=">
        <div class="row mb-2">
            <div class="col-md-12">
                <h6 class="text-secondary">TENDER COMMENTS AND PRICINGS<span class="step">
                </h6>
            </div>
        </div>
        <div class=" reg_para mb-4">
            <table id="data-table-default" id="table_detail" class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th width="2%">ID</th>
                        <th style="width: 30%">Description</th>
                        <th style="width: 10%">Opening date</th>
                        <th style="width: 10%">Closing date</th>
                        <th style="width: 10%">Location</th>
                        <th style="width: 10%">Amount</th>
                        <th style="width: 10%">Status</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="" onclick="showHideRow('hidden_row');">
                        <td>{{ $tender->id }}</td>
                        <td>{{ $tender->description }}</td>
                        <td>{{ $tender->odate }}</td>
                        <td>{{ $tender->cdate }}</td>
                        <td>{{ $tender->location }}</td>
                        <td>{{ $tender->amount }}</td>
                        <td>
                            @if ($tender->status == 'Open')
                                <span class="p-2 bg-success mt-2 text-white"
                                    style="border-radius: 60px">{{ $tender->status }}</span>
                            @else
                                <span class="p-2 bg-danger mt-2 text-white"
                                    style="border-radius: 60px">{{ $tender->status }}</span>
                            @endif
                        </td>
                    </tr>
                    @foreach ($comments as $comment)
                        <tr id="hidden_row" class="expandable-body">
                            <td colspan="4">
                                <p>
                                    <b>COMMENT :</b>
                                </p>
                                <p>
                                    {{ $comment->comment }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Price :</b>
                                </p>
                                <p>
                                    {{ $comment->price }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Date/Time :</b>
                                </p>
                                <p>
                                    {{ Carbon\Carbon::parse($comment->created_at)->format('d F Y g:i A') }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Buyer Name :</b>
                                </p>
                                <p>
                                    <a href="{{ route('buyerProfile/', ['id' => $comment->buyerTender->id]) }}"
                                        class="text-dark">
                                        @if ($comment->user_id)
                                            {{ $comment->buyerTender->name }}
                                            {{ $comment->buyerTender->lname }}
                                        @else
                                            <b>Un-Authorized User</b>
                                        @endif
                                    </a>
                                </p>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script type="text/javascript">
                function showHideRow(row) {
                    $("#" + row).toggle();
                }
            </script>
        </div>
    </div>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    <!-- ================== BEGIN BASE JS ================== -->
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
