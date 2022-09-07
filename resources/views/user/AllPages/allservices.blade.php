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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active">
                <img src="{{ asset('public/assets/images/services.jpeg') }}" alt="" width="100%" height="500px">
                <div class="carousel-caption d-none d-md-block about_h2">

                    <h2>GLOBAL RECYCLING MARKETPLACE</h2>
                    <h3>SERVICES</h3>
                    <p>We offer products, solutions, and services across the entire recycling marketing. We support our
                        customers on their way to a more sustainable future.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item">
                <img src="{{ asset('public/assets/images/services.jpeg') }}" alt="" width="100%" height="500px">
                <div class="carousel-caption d-none d-md-block about_h2">

                    <h2>GLOBAL RECYCLING MARKETPLACE</h2>
                    <h3>SERVICES</h3>
                    <p>We offer products, solutions, and services across the entire recycling marketing. We support our
                        customers on their way to a more sustainable future.</p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <a href="{{ URL('/Memberships') }}" class="trade2 btn btn-success step">Add Your Own Services</a>
                <br>
                <hr class="bg-success">
            </div>
        </div>
        <div class="container mt-2 p-4 border 1px service_borders">
            <div class="row">
                <div class="col-md-7 ">
                    <h2 class=" mt-3 trade"><i class="fa fa-globe mr-3" aria-hidden="true"></i>TRADE :</h2>
                    <hr class="bg-success">
                    <p><b><span class="" style="font-size: 25px">Company profiles </span></b> will be
                        available
                        for each of the companies
                        that register on our
                        site. This page
                        provides information about them, as well their certification, memberships, accreditation,
                        photos,
                        and badges of recommendations from other companies who recognize them for excellence in trade
                        work!
                        Trade section provides.
                    </p>
                    <ul>
                        <li>Company profile and dashboard management
                        </li>
                        <li>Listings of recyclables commodities (cardboard, metal, paper, plastic, textiles, and wood)
                        </li>
                        <li>Live Tender platform of all commodities – the most exciting part of our platform!
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 p-4 service_borders2">
                    <div class="div  w-100 " style="height: 308px">
                        <img class="mt-1" src="{{ asset('public/assets/images/trade.jpg') }}" height="300px"
                            width="100%" style="border-radius:60px;
                            background-repeat: no-repeat;
                            background-size: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container  service_borders mt-2 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-3 trade"><i class="fa fa-sliders mr-3" aria-hidden="true"></i>INDUSTRY SERVICES :
                    </h3>
                    <hr class="bg-success">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 border 1px service_borders ">
                    <div class="row m-1 ">
                        <div class="col-md-4">
                            <div class="div  w-100 ">
                                <img class="mt-4" src="{{ asset('public/assets/images/Pueblo.jpg') }}"
                                    height="300px" width="100%" style="border-radius:20px;
                                    background-repeat: no-repeat;
                                    background-size: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-8  mb-3 ">
                            <h4 class="mt-4"><span class="trade">COMMERCIAL</span> Services</h4>
                            <hr class="bg-success">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Asset Financing
                                        </li>
                                        <li>Consumables and Protective workwear- GRM Store
                                        </li>
                                        <li>Environment agency
                                        </li>
                                        <li>Environmental consultancy services
                                        </li>
                                        <li>Fire Safety Solutions
                                        </li>
                                        <li>First Aid Training providers
                                        </li>
                                        <li>Health and Safety Advisors
                                        </li>
                                        <li>Insurance Providers
                                        </li>
                                        <li>Portable Office Solutions
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Noise Pollution Assessment and Prevention Services
                                        </li>
                                        <li>Pest Control Services
                                        </li>
                                        <li>Facilities Management
                                        </li>
                                        <li>Reverse Vending Machine Suppliers
                                        </li>
                                        <li>Signages, Photographers and Videographers
                                        </li>
                                        <li>Green Energy Providers
                                        </li>
                                        <li>Waste Facility Designers and Construction companies
                                        </li>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 border 1px service_borders">
                    <div class="row m-1 ">
                        <div class="col-md-4">
                            <div class="div  w-100 " style="height: 308px">
                                <img class="mt-4" src="{{ asset('public/assets/images/grm.jpg') }}"
                                    width="100%" style="border-radius:20px;
                                background-repeat: no-repeat;
                                background-size: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-8  mb-3 pb-0 pt-3">
                            <h4 class="mt-2 "><span class="trade">Recycling Machinery and </span>
                                Equipment Suppliers</h4>
                            <hr class="bg-success">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul>
                                        <li>Full Turnkey Plant Manufacturers for MRF, PRF Etc.
                                        </li>
                                        <li>Conveyors Supply and maintenance companies
                                        </li>
                                        <li>Shredders Supply and maintenance companies
                                        </li>
                                        <li>Waste Screens, Ballistics Separators, and others
                                        </li>
                                        <li>Balers Supply and maintenance companies
                                        </li>
                                        <li>Waste Compactors Supply and maintenance companies
                                        </li>
                                        <li>Weighbridges </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 border 1px service_borders">
                    <div class="row m-1 ">
                        <div class="col-md-4">
                            <div class="div  w-100 ">
                                <img class="mt-4" src="{{ asset('public/assets/images/isp.jpg') }}"
                                    width="100%" style="border-radius:20px;
                                background-repeat: no-repeat;
                                background-size: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-8  mb-3 pb-0 pt-3">
                            <h4 class="mt-2 "><span class="trade"> Inspection</span>
                                Service Providers</h4>
                            <hr class="bg-success">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul>
                                        <li>Facility Inspection Services
                                        </li>
                                        <li>Supplier Evaluation Services
                                        </li>
                                        <li>Material Loading Inspections
                                        </li>
                                        <li>Technical Scrap Metal Services
                                        </li>
                                        <li>Waste and Recycling Inspection Services providers
                                        </li>
                                        <li>Shipping Inspection Services
                                        </li>
                                        <li> And many more
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 border 1px service_borders">
                    <div class="row m-1 ">
                        <div class="col-md-4">
                            <div class="div  w-100 ">
                                <img class="mt-4" src="{{ asset('public/assets/images/it.jpg') }}"
                                    width="100%" style="border-radius:20px;
                                background-repeat: no-repeat;
                                background-size: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-8  mb-3 pb-0 pt-3">
                            <h4 class="mt-2 "><span class="trade"> IT </span>
                                Services</h4>
                            <hr class="bg-success">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Recycling Machinery software management companies
                                        </li>
                                        <li>Staff Time and Attendance
                                        </li>
                                        <li>Weighbridge Software
                                        </li>
                                        <li>Industry specialist software
                                        </li>
                                        <li>Vehicle tracking software and systems
                                        </li>
                                        <li>Documentation management solutions
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Cloud IT Services
                                        </li>
                                        <li>Health and Safety Services
                                        </li>
                                        <li>Fleet Management software
                                        </li>
                                        <li>Fuel Control software and system
                                        </li>
                                        <li>Vehicle Cameras, tracking and supplies
                                        </li>
                                        <li>Accounts Software
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 border 1px service_borders">
                    <div class="row m-1 ">
                        <div class="col-md-4">
                            <div class="div  w-100 ">
                                <img class="mt-4" src="{{ asset('public/assets/images/mhe.jpg') }}"
                                    width="100%" style="border-radius:20px;
                                background-repeat: no-repeat;
                                background-size: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-8  mb-3 pb-0 pt-3">
                            <h4 class="mt-2 "><span class="trade"> Material </span>
                                Handling Equipment</h4>
                            <hr class="bg-success">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul>
                                        <li>Forklift, Crane and Lifting equipment Supply and maintenance companies
                                        </li>
                                        <li>Loading Docks and Ramps solutions
                                        </li>
                                        <li>Pellets and Pellet Box, Dolav Suppliers
                                        </li>
                                        <li>Bin, Front End Loaders (FEL), Drums Suppliers
                                        </li>
                                        <li>Bin Lifting Equipment suppliers
                                        </li>
                                        <li>Skip and Skip Net Manufacturers
                                        </li>
                                        <li> Weighbridges and Platform Scales Manufacturers
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 border 1px service_borders">
                    <div class="row m-1 ">
                        <div class="col-md-4">
                            <div class="div  w-100 ">
                                <img class="mt-4" src="{{ asset('public/assets/images/cl.jpg') }}"
                                    width="100%" style="border-radius:20px;
                                background-repeat: no-repeat;
                                background-size: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-8  mb-3 pb-0 pt-3">
                            <h4 class="mt-2 "><span class="trade"> Logistics </span>
                                Companies</h4>
                            <hr class="bg-success">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul>
                                        <li>Deep Sea Shipping Lines and Agents
                                        </li>
                                        <li>Short Sea Containers Shipping Agents and Lines
                                        </li>
                                        <li>Rail Freight Agents and Services
                                        </li>
                                        <li>Road Haulage Companies
                                        </li>
                                        <li>Heavy Haulage Services
                                        </li>
                                        <li>Customs Clearance Agents
                                        </li>
                                        <li>Temporary Storage Solutions
                                        </li>
                                        <li>Shipment Tracking Solution Providers
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 border 1px service_borders">
                    <div class="row m-1 ">
                        <div class="col-md-4">
                            <div class="div mb-2 w-100 ">
                                <img class="mt-4" src="{{ asset('public/assets/images/sm.jpg') }}"
                                    width="100%" style="border-radius:20px;
                                background-repeat: no-repeat;
                                background-size: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-8  mb-3 pb-0 pt-3">
                            <h4 class="mt-2 "><span class="trade"> Others </span></h4>
                            <hr class="bg-success">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Recruitment Agencies and Legal Support Providers</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li class="pt-2">Recycling News, Media, and Advertisement Agencies
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 border 1px service_borders">
                    <div class="row m-1 ">
                        <div class="col-md-12  mb-3 pb-0 pt-3">
                            <h4 class="mt-2 "><span class="trade"> Recycling
                                </span>
                                Service Providers</h4>
                            <hr class="bg-success">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul>
                                        <li>Bricks and Inert Waste Recycling</li>
                                        <li>Carpet Recycling Services</li>
                                        <li>Construction and Demolition Waste Management CDW </li>
                                        <li>Clinical Waste Disposal Companies</li>
                                        <li>Plastic, Paper & Cardboard Recycling Companies</li>
                                        <li>Rubber Recycling</li>
                                        <li>Confidential Office Waste Shredding services</li>
                                        <li>Ocean Waste Handling Companies</li>

                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li>Cooking Oil Recycling Companies</li>
                                        <li>Food or Organic Waste Management</li>
                                        <li>General Waste Management Companies</li>
                                        <li>Glass Recycling Services</li>
                                        <li>Tanker Waste Disposal Companies</li>
                                        <li>Tyres Recycling Companies </li>
                                        <li>Waste from Electrical and Electronic Equipment (WEEE)</li>
                                        <li>Not for Profit Organisations </li>

                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li>Hazardous Waste Companies </li>
                                        <li> Washing and Pelletising Service Providers</li>
                                        <li>Mattress Recycling Services</li>
                                        <li>Textile Recycling Companies</li>
                                        <li>Wood Recycling Companies </li>
                                        <li>Complete solution providers for Waste Management and Recycling</li>
                                        <li> Waste to Energy Services</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container mb-5 p-4 border 1px service_borders">
            <div class="row">
                <div class="col-md-7 ">
                    <h2 class=" mt-3 trade"><i class="fa fa-globe mr-3" aria-hidden="true"></i>GRM - STORE :</h2>
                    <hr class="bg-success">
                    <p><b><span class="" style="font-size: 25px"> The only
                                Marketplace</span></b> for
                        purchase and sale of Waste Management and Recycling Industry related Consumables
                        in the world. Such as Baling Wire, Twine, Oils, Fluids, Hydraulic supplies, Workshop tools,
                        Protective workwear etc.
                    </p>
                </div>
                <div class="col-md-5 p-4 service_borders2">
                    <div class="div  w-100 ">
                        <img class="mt-1" src="{{ asset('public/assets/images/grmstore.jpg') }}"
                            height="300px" width="100%" style="border-radius:60px;
                            background-repeat: no-repeat;
                            background-size: cover;" alt="">
                    </div>
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
