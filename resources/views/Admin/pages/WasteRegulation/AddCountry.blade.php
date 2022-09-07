<!DOCTYPE html>
<html lang="en">
@include('Admin.layouts.headlinks')

<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        @include('Admin.layouts.header')
        <!-- end #header -->

        <!-- begin #sidebar -->
        @include('Admin.layouts.sidebar')
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb float-xl-right">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Waste Regulations Section</a></li>
                <li class="breadcrumb-item active">Add Waste Regulations</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Add Something In Waste Regulations <small>You Can Update And Delete Data</small>
            </h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM Add Data Waste Regulations Section</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                            data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                            data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                            data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    @if (session('msg'))
                                        <div class="col-sm-6 mx-auto " style="text-align: center;  font-size:20px">
                                            {{ session('msg') }}</div>
                                    @endif
                                    <div class="card-header">
                                        <h3 class="card-title text-lg float-left col-md-12">
                                            Add Data
                                            <a class="float-right btn btn-danger"
                                                href="{{ URL('/Waste-RKC-Countries') }}">Back</a>
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="{{ URL('/Admin/Country-add') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group col-lg-4 col-md-8 col-12">
                                                    <label for=""><b>Country</b> </label>
                                                    <select class="form-control reg_para " id="selectCountry"
                                                        name="country">
                                                        <option value="">--</option>
                                                    </select>
                                                    @error('country')
                                                        <span>{{ $message }}</span>
                                                    @enderror
                                                    <script>
                                                        var select = document.getElementById("selectCountry");

                                                        var countries = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica",
                                                            "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
                                                            "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
                                                            "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi",
                                                            "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China",
                                                            "Colombia", "Comoros", "Democratic Republic of the Congo", "Republic of the Congo", "Costa Rica",
                                                            "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica",
                                                            "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea",
                                                            "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana",
                                                            "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras",
                                                            "Hong Kong", "Hungary", "Ivory Coast", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel",
                                                            "Italy",
                                                            "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "North Korea", "South Korea ", "Kuwait",
                                                            "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania",
                                                            "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta",
                                                            "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco",
                                                            "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
                                                            "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines",
                                                            "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome",
                                                            "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia",
                                                            "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname",
                                                            "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo",
                                                            "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine",
                                                            "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela",
                                                            "Vietnam", "Yemen", "Zambia", "Zimbabwe");

                                                        //console.log(countries);
                                                        //console.log(select);

                                                        for (var i = 0; i < countries.length; i++) {

                                                            var option = document.createElement("option");
                                                            //for every turn of the loop create an option tag
                                                            //console.log(option);
                                                            var txt = document.createTextNode(countries[i]);
                                                            //for every turn of the loop create the inner text
                                                            //console.log(txt);
                                                            option.appendChild(txt);
                                                            //for every turn of the loop put the words from txt inside the <option> tags
                                                            //console.log(option);
                                                            option.setAttribute("value", countries[
                                                                i]); //for every turn of the loop set the value attribute to corresponding country name
                                                            //console.log(option);
                                                            select.insertBefore(option, select.lastChild);
                                                            //console.log(select);

                                                        }

                                                        document.addEventListener('DOMContentLoaded', function() {
                                                            //console.log('DOM fully loaded and parsed');
                                                            document.querySelector('select[name="selectCountry"]').onchange = alertCountry;
                                                        }, false);

                                                        // function alertCountry(event) {
                                                        //     //console.log('DOM loaded');
                                                        //     //use "this" to refer to selected element
                                                        //     if (!event.target.value) alert('Please select a country');
                                                        //     else alert('You chose ' + event.target.value + '. Yay, grab a beer!');
                                                        // }
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <div class="tab-content p-0">

                                        </div>
                                    </div><!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end #content -->



        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
            data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    @include('Admin.layouts.scripting')
</body>

</html>
