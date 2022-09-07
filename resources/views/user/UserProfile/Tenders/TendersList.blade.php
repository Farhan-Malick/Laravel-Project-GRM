<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<head>
    <style>
        thead {
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
                <h6 class="text-secondary">TENDER LIST <span class="step"><a href="{{ URL('/Add-Tenders') }}"
                            type="submit" class="btn btn-success reg_para msg_span text-light">NEW TENDERS</a></span>
                </h6>
            </div>
        </div>
        {{-- <div class="row mb-5 ">
            <div class="col-md-3 offset-md-9">
                <h6 class="">Price <span></span></h6>
                <div class="">
                    <div id="slider" wire:ignore></div>
                </div>
            </div>
        </div> --}}
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
                        <th style="width: 18%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($seller_tender as $tenders)
                        <tr class="">
                            <td>
                                {{ $tenders->id }}</td>
                            <td>{{ $tenders->description }}</td>
                            <td>{{ $tenders->odate }}</td>
                            <td>{{ $tenders->cdate }}</td>
                            <td>{{ $tenders->location }}</td>
                            <td>{{ $tenders->amount }}</td>
                            <td>
                                @if ($tenders->status == 'Open')
                                    <span class="p-2 bg-success text-white"
                                        style="border-radius: 60px">{{ $tenders->status }}</span>
                                @else
                                    <span class="p-2 bg-danger text-white"
                                        style="border-radius: 60px">{{ $tenders->status }}</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary  reg_para"
                                    href="{{ URL('Tender-Edit/' . $tenders->id) }}"><i class="bi bi-pencil"></i></a>
                                <a class="btn btn-danger reg_para" href="{{ URL('Tender/' . $tenders->id) }}"><i
                                        class="bi bi-archive"></i></a>
                                <a class="btn btn-success reg_para"
                                    href="{{ URL('Tenders-Details-Comments/' . $tenders->id) }}"> <i
                                        class="fa fa-eye" aria-hidden="true"></i></a>

                            </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th width="">ID</th>
                        <th>Description</th>
                        <th>Opening date</th>
                        <th>Closing date</th>
                        <th>Location</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
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
{{-- <script>
    var slider = document.getElementById('slider');
    noUiSlider.create(slider, {
        start: [50, 100000],
        connect: true,
        range: {
            'min': 50,
            'max': 100000
        },
        pips: {
            mode: 'steps',
            stepped: true,
            density: 4
        }
    })
</script> --}}
