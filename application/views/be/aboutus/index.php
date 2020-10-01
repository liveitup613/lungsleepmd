<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->    
    <head>
        <meta charset="utf-8" />
        <title>About Us | Epignosis Specialty Practice</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL STYLES -->
        <?php $this->load->view('be/layout/styles'); ?>
        <!-- END GLOBAL STYLES -->
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-summernote/summernote.css');?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets/css/pages/be/about-us.css');?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url('favicon.png');?>" /> </head>
     </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed">     
        <!-- BEGIN HEADER -->           
        <?php 
            $menu['parent'] = 'about-us';
            $menu['current'] = 'about-us';
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
                            <h1>About Us
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
                                <a href="#">Main</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span href="#">About Us</span>  
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
                                                <span class="caption-subject font-green bold uppercase">About Us Content</span>
                                            </div>                                         
                                        </div>
                                        <form id='imageForm'>
                                            <input type='hidden' id='inputType' name='Type'>
                                            <input type='file' style='display:none' id='filePortfolio' name='Portfolio' accept=".jpg,.png,.gif">
                                        </form>
                                        <div class="portlet-body form">
                                            <!-- BEGIN FORM-->
                                            <form action="#" class="form-horizontal form-bordered ">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Meet Our Medical Director</label>
                                                        <div class="col-md-9">
                                                            <div id="sumnoteContent"><?php echo $Content?></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Our Clinical Staff</label>
                                                        <div class="col-md-9">
                                                            <div id="sumnoteClinical"><?php echo $ClinicalStaff;?></div>                                                            
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Staffs</label>
                                                        <div class="col-md-9">
                                                            <div class='new-core-value'>
                                                                <button type="button" class="btn green btn-sm" id='btnAddNewStaff'><i class='icon-plus'></i>&nbsp;&nbsp;ADD NEW</button>   
                                                            </div> 
                                                            <div class='row'>
                                                                <?php
                                                                    foreach ($staffs as $staff) {
                                                                        ?>
                                                                        <div class='col-md-4 col-sm-6 staff-img'>
                                                                            <img src='<?php echo base_url('assets/images/staffs/'.$staff['Attach']);?>'>
                                                                            <div class='image-control'>
                                                                                <button class='btn green btn-sm btn-circle' onclick='editStaff(<?php echo $staff["ID"];?>);'><i class='icon-pencil'></i></button>
                                                                                <button class='btn red btn-sm btn-circle' onclick='deleteStaff(<?php echo $staff["ID"];?>);'><i class='icon-trash'></i></button>
                                                                            </div>
                                                                        </div> 
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                
                                                            </div>                                                           
                                                        </div>
                                                    </div>    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Associations</label>
                                                        <div class="col-md-9">
                                                            <div class='new-core-value'>
                                                                <button type="button" class="btn green btn-sm" id='btnAddNewAssociation'><i class='icon-plus'></i>&nbsp;&nbsp;ADD NEW</button>   
                                                            </div>
                                                            <div class='row'>
                                                                <?php
                                                                    foreach ($Associations as $association) {
                                                                        ?>
                                                                        <div class='col-md-4 col-sm-6 image-box'>
                                                                            <img src='<?php echo base_url('assets/images/resource/'.$association['Portfolio']);?>'>
                                                                            <div class='image-control'>
                                                                                <button class='btn red btn-sm btn-circle' onclick='deleteAssociation(<?php echo $association["ID"];?>);'><i class='icon-trash'></i></button>
                                                                            </div>
                                                                        </div> 
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                                                                              
                                                            </div>
                                                        </div>
                                                    </div>                                                   
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Affiliation</label>
                                                        <div class="col-md-9">
                                                            <div class='new-core-value'>
                                                                <button type="button" class="btn green btn-sm" id='btnAddNewAffiliation'><i class='icon-plus'></i>&nbsp;&nbsp;ADD NEW</button>   
                                                            </div>
                                                            <div class='row'>
                                                                <?php
                                                                    foreach ($Affiliations as $affiliation) {
                                                                        ?>
                                                                        <div class='col-md-4 col-sm-6 image-box'>
                                                                            <img src='<?php echo base_url('assets/images/resource/'.$affiliation['Portfolio']);?>'>
                                                                            <div class='image-control'>
                                                                                <button class='btn red btn-sm btn-circle' onclick='deleteAffiliation(<?php echo $affiliation["ID"];?>);'><i class='icon-trash'></i></button>
                                                                            </div>
                                                                        </div> 
                                                                        <?php
                                                                    }
                                                                    ?>                                                             
                                                            </div>                                                                                                                   
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Certification</label>
                                                        <div class="col-md-9">
                                                            <div class='new-core-value'>
                                                                <button type="button" class="btn green btn-sm" id='btnAddNewCertification'><i class='icon-plus'></i>&nbsp;&nbsp;ADD NEW</button>   
                                                            </div>
                                                            <div class='row'>
                                                                <?php
                                                                    foreach ($Certifications as $certification) {
                                                                        ?>
                                                                        <div class='col-md-4 col-sm-6 image-box'>
                                                                            <img src='<?php echo base_url('assets/images/resource/'.$certification['Portfolio']);?>'>
                                                                            <div class='image-control'>
                                                                                <button class='btn red btn-sm btn-circle' onclick='deleteCerfication(<?php echo $certification["ID"];?>);'><i class='icon-trash'></i></button>
                                                                            </div>
                                                                        </div> 
                                                                        <?php
                                                                    }
                                                                    ?>                                                       
                                                            </div>                                                                                                                     
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

                <!-- BEGIN MODAL CONTENT BODY -->
                <!-- BEGIN ADD MODAL CONTENT BODY -->
                <div class="modal fade" id="AddNewModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Add New Staff</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='addNewForm'>
                                    <div class="form-body">
                                        <input type='hidden' id='Type' name='Type'>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class='form-control' id='Name' name='Name' required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Description</label>
                                            <div class="col-md-9">
                                                <textarea type="text" class='form-control' id='Description' name='Description' required></textarea>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3'>Image</label>
                                            <div class='col-md-9'>
                                                <input type='file' class='form-control' id='Attach' name='Attach' accept=".jpg,.png,.gif" required >
                                            </div>
                                        </div>                                        
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnAddNew'>Add</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END ADD MODAL CONTENT BODY -->

                <!-- BEGIN DEELTE MODAL CONTENT BODY -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Delete</h4>
                            </div>
                            <div class="modal-body">
                                Are  you really going to delete this?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">NO</button>
                                <button type="button" class="btn green" id='btnDeleteModalYes'>YES</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END DELETE MODAL CONTETN BODY -->
                <!-- BEGIN ADD MODAL CONTENT BODY -->
                <div class="modal fade" id="EditModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Edit Staff</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='editForm'>
                                    <input type='hidden' ID = 'editedID' name='ID'>
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class='form-control' id='NameEdit' name='Name' required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Description</label>
                                            <div class="col-md-9">
                                                <textarea type="text" class='form-control' id='DescriptionEdit' name='Description' required></textarea>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3'>Image</label>
                                            <div class='col-md-9'>
                                                <input type='file' class='form-control' id='AttachEdit' name='Attach' accept=".jpg,.png,.gif" >
                                            </div>
                                        </div>                                     
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnUpdateStaff'>Update</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END ADD MODAL CONTENT BODY -->
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
        <script src="<?php echo base_url('assets/layouts/layout3/scripts/pages/aboutus.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    </body>

</html>