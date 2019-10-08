<?php
session_start();

require_once 'engine/requires.php';
?>

<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->

    <head>
        <meta charset="utf-8" />

        <title>Add Payment</title>
        <meta name="description" content="General widget examples">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
                },
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Web font -->

        <!--begin::Base Styles -->

        <link href="stylesheets/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="stylesheets/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->

        <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
    </head>
    <!-- end::Head -->

    <!-- end::Body -->

    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--static m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">

            <!-- BEGIN: Header -->
            <?php include 'includes/header.php'; ?>
            <!-- END: Header -->
            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn"><i class="la la-close"></i></button>

                <?php include 'includes/sidebar.php'; ?>
                <!-- END: Left Aside -->
                <div class="m-grid__item m-grid__item--fluid m-wrapper">

                    <!-- BEGIN: Subheader -->
                    <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title m-subheader__title--separator" style="border-right:none; font-family: Poppins">Add PettyCash Record</h3>	
                            </div>
                        </div>
                    </div>
                    <!-- END: Subheader -->		        
                    <div class="m-content">
                        <?php require_once 'includes/daily-goal-warning.php'; ?>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <!--begin::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet" style="padding-top: 35px">
                                    <?php
                                    if (isset($_SESSION['error'])){
                                        $message = $_SESSION['error'];
                                        unset($_SESSION['error']);
                                    ?>
                                    <div style="margin-left: 35px; margin-right: 35px; text-align: center" class="m-alert m-alert--outline alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>			
                                        <span><?php echo $message ?></span>		
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    
                                    <?php
                                    if (isset($_SESSION['success'])){
                                        $message = $_SESSION['success'];
                                        unset($_SESSION['success']);
                                    ?>
                                    <div style="margin-left: 35px; margin-right: 35px; text-align: center" class="m-alert m-alert--outline alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>			
                                        <span><?php echo $message ?></span>		
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <!--begin::Form-->
                                    <form action="engine/actions/add-pettycash.php" method="POST" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
                                        <div class="m-portlet__body" style="padding-bottom: 80px">	
                                            <div class="form-group m-form__group row" style="padding-bottom: 0; border-bottom: none">
                                                <div class="col-lg-6">
                                                    <label>Description</label>
                                                    <input name="description" class="form-control m-input" placeholder="Enter description" style="font-family: Poppins">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="">Date:</label>
                                                    <input name="date" type="text" class="form-control" id="m_datepicker_1" readonly="" placeholder="Select date">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row" style="padding-bottom: 0; border-bottom: none">
                                                <div class="col-lg-4">
                                                    <label>Amount:</label>
                                                    <input name="amount" class="form-control m-input" placeholder="Enter merchant name" style="font-family: Poppins">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="">Current Balance:</label>
                                                    <input name="current-balance" class="form-control m-input" placeholder="Enter merchant name" style="font-family: Poppins">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="">Would Be Balance:</label>
                                                    <input name="final-balance" class="form-control m-input" placeholder="Enter merchant name" style="font-family: Poppins">
                                                </div>
                                            </div>	                
                                        </div>
                                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                            <div class="m-form__actions m-form__actions--solid">
                                                <div class="row">
                                                    <div class="col-lg-4"></div>
                                                    <div class="col-lg-8">
                                                        <button type="submit" class="btn btn-primary">Add Record</button>
                                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Portlet-->

                                <!--begin::Portlet-->
                                
                                <!--end::Portlet-->
                            </div>
                        </div>		        
                    </div>
                </div>

            </div>
            <!-- end:: Body -->

            <!-- begin::Footer -->
            <?php include 'includes/footer.php'; ?>
            <!-- end::Footer -->

        </div>
        <!-- end:: Page -->

        <!-- begin::Quick Sidebar -->
        
        <!-- end::Quick Sidebar -->
        <!-- begin::Scroll Top -->
        <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->
        <!-- begin::Quick Nav -->

        <!-- begin::Quick Nav -->
        <!--begin::Base Scripts -->
        <script src="scripts/vendors.bundle.js" type="text/javascript"></script>
        <script src="scripts/scripts.bundle.js" type="text/javascript"></script>
        <script src="scripts/bootstrap-datepicker.js?v=2" type="text/javascript"></script>
        <script src="scripts/custom.js?v=2" type="text/javascript"></script>
        <!--end::Base Scripts -->

    </body>
    <!-- end::Body -->

</html>