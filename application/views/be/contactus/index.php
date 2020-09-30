<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->    
    <head>
        <meta charset="utf-8" />
        <title>Epignosis | Home Content</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL STYLES -->
        <?php $this->load->view('be/layout/styles'); ?>
        <!-- END GLOBAL STYLES -->

        <link rel="shortcut icon" href="<?php echo base_url('favicon.png');?>" />
     </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed">     
        <!-- BEGIN HEADER -->           
        <?php 
            $menu['parent'] = 'contact-us';
            $menu['current'] = 'contact-us';
            $this->load->view('be/layout/header', $menu);
            ?>
        <!-- END HEADER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Contact Us                          
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->                       
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span href="#">Contact Us</span>  
                            </li>                            
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PORTLET-->
                                    <div class="portlet light form-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-social-dribbble font-green"></i>
                                                <span class="caption-subject font-green bold uppercase">Contact Content</span>
                                            </div>                                         
                                        </div>
                                        <div class="portlet-body form">
                                            <!-- BEGIN FORM-->
                                            <form action="#" class="form-horizontal form-bordered" id='contactForm'>
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Phone</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='Phone' value='<?php echo $Phone;?>'>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Address</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='Address' value='<?php echo $Address;?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Fax</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='Fax' value='<?php echo $Fax;?>'>
                                                        </div>
                                                    </div>                                                                                                                                             
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="button" class="btn green" id='btnUpdateContact'>
                                                                <i class="fa fa-check"></i> Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END FORM-->
                                        </div>
                                    </div>

                                    <div class="portlet light form-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-social-dribbble font-green"></i>
                                                <span class="caption-subject font-green bold uppercase">Office Hours</span>
                                            </div>                                         
                                        </div>
                                        <div class="portlet-body form">
                                            <!-- BEGIN FORM-->
                                            <form action="#" class="form-horizontal form-bordered" id='officeForm'>
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Monday</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='Monday' value='<?php echo $Monday;?>'>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Tuesday</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='Tuesday' value='<?php echo $Tuesday;?>'>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Wednesday</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='Wednesday' value='<?php echo $Wednesday;?>'>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Thursday</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='Thursday' value='<?php echo $Thursday;?>'>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Friday</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='Friday' value='<?php echo $Friday;?>'>
                                                        </div>
                                                    </div>                                                                                                                                                                                         
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="button" class="btn green" id='btnUpdateOfficeHoure'>
                                                                <i class="fa fa-check"></i> Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END FORM-->
                                        </div>
                                    </div>

                                    <div class="portlet light form-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-social-dribbble font-green"></i>
                                                <span class="caption-subject font-green bold uppercase">PFT Testing Hours</span>
                                            </div>                                         
                                        </div>
                                        <div class="portlet-body form">
                                            <!-- BEGIN FORM-->
                                            <form action="#" class="form-horizontal form-bordered" id='pftForm'>
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Monday</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='PFTMonday' value='<?php echo $PFTMonday;?>'>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Tuesday</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='PFTTuesday' value='<?php echo $PFTTuesday;?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Wednesday</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='PFTWednesday' value='<?php echo $PFTWednesday;?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Thursday</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='PFTThursday' value='<?php echo $PFTThursday;?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Friday</label>
                                                        <div class="col-md-9">
                                                            <input type='text' class='form-control' name='PFTFriday' value='<?php echo $PFTFriday;?>'>
                                                        </div>
                                                    </div>                                                                                                                                            
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="button" class="btn green" id='btnUpdatePFTHours'>
                                                                <i class="fa fa-check"></i> Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END FORM-->
                                        </div>
                                    </div>
                                    <!-- END PORTLET-->
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('be/layout/footer'); ?>
        <!-- END FOOTER -->
        <!-- BEGIN GLOBAL SCRIPTS -->
        <?php $this->load->view('be/layout/scripts'); ?>
        <!-- END GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url('assets/layouts/layout3/scripts/pages/contactus/index.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    </body>

</html>