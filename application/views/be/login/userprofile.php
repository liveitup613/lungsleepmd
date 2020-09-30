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
        <link href="<?php echo base_url('assets/css/pages/be/blog-edit.css');?>?<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL STYLES -->

        <link rel="shortcut icon" href="<?php echo base_url('favicon.png');?>" />
     </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed">     
        <!-- BEGIN HEADER -->           
        <?php 
            $menu['parent'] = 'user-profile';
            $menu['current'] = 'user-profile';
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
                            <h1>Admin Profile                       
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
                                <span href="#">Admin Profile</span>  
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
                                                <span class="caption-subject font-green bold uppercase">Profile Content</span>
                                            </div>                                         
                                        </div>
                                        <div class="portlet-body form">
                                            <!-- BEGIN FORM-->
                                            <form action="#" class="form-horizontal form-bordered" id='profileForm'>
                                                <div class="form-body">
                                                    <div class='form-group'>
                                                        <label class='control-label col-md-3'>Avatar</label>
                                                        <div class='col-md-9'>
                                                            <div class='portfolio-box'>                                                                
                                                                <img class='portfolio img-thumbnail' id='imgPortfolio' src='<?php echo base_url('assets/images/'.$Avatar);?>'>
                                                                <img class='portfolio-camera' src='<?php echo base_url('assets/images/camera.png');?>'>
                                                                <input type='file' style='display:none' id='filePortfolio' name='Portfolio' accept=".jpg,.png">
                                                            </div>                                                            
                                                        </div>                                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Old Password</label>
                                                        <div class="col-md-9">
                                                            <input type='password' class='form-control' name='OldPassword' required>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">New Password</label>
                                                        <div class="col-md-9">
                                                            <input type='password' class='form-control' name='NewPassword' id='NewPassword' required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">New Password Confirm</label>
                                                        <div class="col-md-9">
                                                            <input type='password' class='form-control' name='PasswordConfirm' id='PasswordConfirm' required>
                                                        </div>
                                                    </div>                                                                                                                                             
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="button" class="btn green" id='btnUpdate'>
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
        <script src="<?php echo base_url('assets/layouts/layout3/scripts/pages/profile.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    </body>

</html>