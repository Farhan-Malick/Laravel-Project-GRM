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
                <li class="breadcrumb-item"><a href="javascript:;">User's Message Section</a></li>
                <li class="breadcrumb-item active">User's Message</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Manage User's Message <small>You Can Update And Delete Data</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">GRM User's Message Section</h4>
                </div>
                <div class="panel-body">
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8 mb-2 mt-2 article">
                                <h1>Update User's Message</h1>
                                <form action="{{ URL('/Message_Update') }}" method="POST" name="sentMessage"
                                    id="contactForm" novalidate>
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $message['id'] }}">
                                    <div class="control-group form-group mt-5">
                                        <div class="form-group">
                                            <label for="" class=" p-0 ">Full Name :</label>
                                            <input class=" form-control" type="text" name="firstname"
                                                value="{{ $message['firstname'] }}">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="form-group">
                                            <label for="" class="  p-0 m-0 ">Email :</label>
                                            <input class="form-control" type="email" name="email"
                                                value="{{ $message['email'] }}">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Message:</label>
                                            <textarea rows="5" cols="100" name="message" class="form-control" id="message" required
                                                data-validation-required-message="Please enter your message"
                                                maxlength="999"
                                                style="resize:none">{{ $message['message'] }}</textarea>
                                        </div>
                                    </div>
                                    <div id="success"></div>
                                    <!-- For success/fail messages -->
                                    <button type="submit" class="btn btn-success btn-contact"
                                        id="sendMessageButton">Send
                                        Message</button>
                                </form>
                            </div>
                        </div>
                    </section>
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
