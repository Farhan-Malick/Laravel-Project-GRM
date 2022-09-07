<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<head>
    <style>
        /* FontAwesome for working BootSnippet :> */

        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        #team {
            background: #eee !important;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #108d6f;
            border-color: #108d6f;
            box-shadow: none;
            outline: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #007b5e;
            border-color: #007b5e;
        }

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #team .card {
            border: none;
            background: #ffffff;
        }

        .image-flip:hover .backside,
        .image-flip.hover .backside {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
            border-radius: .25rem;
        }

        .image-flip:hover .frontside,
        .image-flip.hover .frontside {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .mainflip {
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -ms-transition: 1s;
            -moz-transition: 1s;
            -moz-transform: perspective(1000px);
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
            position: relative;
        }

        .frontside {
            position: relative;
            -webkit-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            z-index: 2;
            margin-bottom: 30px;
        }

        .backside {
            position: absolute;
            top: 0;
            left: 0;
            background: white;
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }

        .frontside,
        .backside {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -moz-transition: 1s;
            -moz-transform-style: preserve-3d;
            -o-transition: 1s;
            -o-transform-style: preserve-3d;
            -ms-transition: 1s;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
        }

        .frontside .card,
        .backside .card {
            min-height: 312px;
        }

        .backside .card a {
            font-size: 18px;
            color: #007b5e !important;
        }

        .frontside .card .card-title,
        .backside .card .card-title {
            color: #007b5e !important;
        }

        .frontside .card .card-body img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        .pagination a {
            transition: background-color .3s;
        }

        .pagination a {
            border-radius: 20px;
            margin-right: 10px;
            font-size: 15px;
            border: 1px solid rgb(58, 226, 142);
            color: black;

        }

        .pagination a.active {

            border: 1px solid rgb(58, 226, 142);

        }

        .pagination a:hover:not(.active) {
            background-color: rgb(58, 226, 142);
        }

        .div_col_4 {
            border-radius: 50px 0px;
            margin-right: ;
        }

        .container {
            border-radius: 130px 0px;
        }

    </style>
</head>

<body>
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
    <div class="container-fluid trade2 p-5 mt-4 mb-4" id="jar">
        <div class="row">
            <div class="col-md-12">
                <h2 class="trade2">Service Providers</h2>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row mx-auto ">
            <div class="col-md-12 col-lg-3 col-12">
                <form action="{{ URL::current() }}" method="GET">
                    <section id="team" class="pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            Type/Categories
                                            <a href="{{ URL('/Services-Store') }}"
                                                class="btn btn-primary btn-sm float-right " type="submit">Show
                                                All</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group   col-md-12  ">
                                                <label class="reg_para" for="">Service Providers :
                                                    <small>(Filter Services)</small></label>
                                                <select name="service[]"
                                                    class="form-control @error('service') is-invalid @enderror reg_para mt-1 Drops">
                                                    <option name="">-Select Sub-Category-</option>
                                                    @foreach ($ServiceProviders as $item)
                                                        @php
                                                            $checked = [];
                                                            if (isset($_GET['service'])) {
                                                                $checked = $_GET['service'];
                                                            }
                                                        @endphp
                                                        <option value="{{ $item->service_providers }}">
                                                            --{{ $item->service_providers }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('service')
                                                    <span>{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <button class="btn btn-primary btn-sm float-right mt-4" type="submit">Filter
                                                Selected</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
            <div class="col-md-12 col-lg-9 col-12">
                <section id="team" class="pb-5">
                    <div class="container">
                        <div class="row">
                            <!-- Team member -->
                            @foreach ($userServices as $item)
                                <div class="col-lg-4 col-md-6 col-12 content" id="jar">
                                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                        <div class="mainflip">
                                            <div class="frontside">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <p><img class=" img-fluid"
                                                                src="{{ asset('public/assets/images/service-1.jpg') }}"
                                                                alt="card image"></p>
                                                        <h4 class="card-title">
                                                            <b> {{ $item->services_Providers->service_providers }}</b>
                                                            <br>
                                                            {{ $item->title }}
                                                        </h4>
                                                        <p class="card-text">
                                                            {{ Str::limit($item->detail, 70) }}
                                                            <br>
                                                        </p>
                                                        <a href="#" class="btn btn-primary btn-sm"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="backside">
                                                <div class="card">
                                                    <div class="card-body text-center mt-4">
                                                        <h4 class="card-title">
                                                            {{ $item->services_type }}
                                                            <br>
                                                            Duration: {{ $item->duration }}
                                                            <br>
                                                        </h4>
                                                        <p class="card-text">
                                                            {{ Str::limit($item->detail, 150) }}
                                                        </p>
                                                        ({{ $item->location }})
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a class="social-icon text-xs-center" target="_blank"
                                                                    href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a class="social-icon text-xs-center" target="_blank"
                                                                    href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a class="social-icon text-xs-center" target="_blank"
                                                                    href="#">
                                                                    <i class="fa fa-skype"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a class="social-icon text-xs-center" target="_blank"
                                                                    href="#">
                                                                    <i class="fa fa-google"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <a href="{{ url('Services-Details/' . $item->id) }}"
                                                            class="card-link btn btn-outline-secondary">View
                                                            Ads</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- ./Team member -->
                        </div>
                    </div>
                    <nav>
                        <ul class="pagination justify-content-center pagination-md pt-5"></ul>
                    </nav>
                </section>
            </div>
        </div>

    </div>
    <script>
        function getPageList(totalPages, page, maxLength) {
            if (maxLength < 5) throw "maxLength must be at least 5";

            function range(start, end) {
                return Array.from(Array(end - start + 1), (_, i) => i + start);
            }

            var sideWidth = maxLength < 9 ? 1 : 2;
            var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
            var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;
            if (totalPages <= maxLength) {
                // no breaks in list
                return range(1, totalPages);
            }
            if (page <= maxLength - sideWidth - 1 - rightWidth) {
                // no break on left of page
                return range(1, maxLength - sideWidth - 1)
                    .concat([0])
                    .concat(range(totalPages - sideWidth + 1, totalPages));
            }
            if (page >= totalPages - sideWidth - 1 - rightWidth) {
                // no break on right of page
                return range(1, sideWidth)
                    .concat([0])
                    .concat(
                        range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages)
                    );
            }
            // Breaks on both sides
            return range(1, sideWidth)
                .concat([0])
                .concat(range(page - leftWidth, page + rightWidth))
                .concat([0])
                .concat(range(totalPages - sideWidth + 1, totalPages));
        }

        $(function() {
            // Number of items and limits the number of items per page
            var numberOfItems = $("#jar .content").length;
            var limitPerPage = 12;
            // Total pages rounded upwards
            var totalPages = Math.ceil(numberOfItems / limitPerPage);
            // Number of buttons at the top, not counting prev/next,
            // but including the dotted buttons.
            // Must be at least 5:
            var paginationSize = 7;
            var currentPage;

            function showPage(whichPage) {
                if (whichPage < 1 || whichPage > totalPages) return false;
                currentPage = whichPage;
                $("#jar .content")
                    .hide()
                    .slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
                    .show();
                // Replace the navigation items (not prev/next):
                $(".pagination li").slice(1, -1).remove();
                getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                    $("<li>")
                        .addClass(
                            "page-item " +
                            (item ? "current-page " : "") +
                            (item === currentPage ? "active " : "")
                        )
                        .append(
                            $("<a>")
                            .addClass("page-link")
                            .attr({
                                href: "javascript:void(0)"
                            })
                            .text(item || "...")
                        )
                        .insertBefore("#next-page");
                });
                return true;
            }

            // Include the prev/next buttons:
            $(".pagination").append(
                $("<li>").addClass("page-item").attr({
                    id: "previous-page"
                }).append(
                    $("<a>")
                    .addClass("page-link")
                    .attr({
                        href: "javascript:void(0)"
                    })
                    .text("Prev")
                ),
                $("<li>").addClass("page-item").attr({
                    id: "next-page"
                }).append(
                    $("<a>")
                    .addClass("page-link")
                    .attr({
                        href: "javascript:void(0)"
                    })
                    .text("Next")
                )
            );
            // Show the page links
            $("#jar").show();
            showPage(1);

            // Use event delegation, as these items are recreated later
            $(
                document
            ).on("click", ".pagination li.current-page:not(.active)", function() {
                return showPage(+$(this).text());
            });
            $("#next-page").on("click", function() {

                return showPage(currentPage + 1);
            });

            $("#previous-page").on("click", function() {
                return showPage(currentPage - 1);
            });
            $(".pagination").on("click", function() {
                $("html,body").animate({
                    scrollTop: 0
                }, 0);
            });
        });
    </script>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
