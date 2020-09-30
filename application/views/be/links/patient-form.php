<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->    
    <head>
        <meta charset="utf-8" />
        <title>Patient Form | Epignosis Specialty Practice</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL STYLES -->
        <?php $this->load->view('be/layout/styles'); ?>
        <!-- END GLOBAL STYLES -->

        <link href="<?php echo base_url('assets/css/pages/be/about-us.css');?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url('favicon.png');?>" /> </head>
     </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed">     
        <!-- BEGIN HEADER -->           
        <?php 
            $menu['parent'] = 'quick_links';
            $menu['current'] = 'patient_forms';
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
                            <h1>Patient Forms
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
                                <a href="#">Quick Links</a>
                                <i class="fa fa-circle"></i>
                            </li>                              
                            <li>
                                <span href="#">Patient Forms</span>  
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
                                                <span class="caption-subject font-green bold uppercase">Patient Forms Content</span>
                                            </div>                                         
                                        </div>
                                        <div class="portlet-body form">
                                            <!-- BEGIN FORM-->
                                            <form action="#" class="form-horizontal form-bordered ">
                                                <div class="form-body">                                                     
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Medical & Sleep Questionnaires</label>
                                                        <div class="col-md-9">
                                                            <div class='new-core-value'>
                                                                <button type="button" class="btn green btn-sm" id='btnAddNewForm1'><i class='icon-plus'></i>&nbsp;&nbsp;ADD NEW</button>   
                                                            </div>
                                                            <?php 
                                                                foreach ($Medicals as $medical) {
                                                                    ?>
                                                                        <div class='core-value'>                                                                
                                                                            <div class='core-value-title'>
                                                                                <a href='<?php echo base_url('assets/forms/'.$medical['Attach']);?>' target='blank'><img src="<?php echo base_url('assets/images/download.png');?>"></a>
                                                                                <?php echo $medical['Title'];?>
                                                                            </div>
                                                                            <div class='core-value-buttons'>                                                                    
                                                                                <button type="button" class="btn green btn-sm" onclick='editForm(<?php echo $medical["ID"];?>)'>EDIT</button>
                                                                                <button type="button" class="btn red btn-sm" onclick='deleteForm(<?php echo $medical["ID"];?>)'>DELETE</button>                                                                                
                                                                            </div>
                                                                        </div>  
                                                                    <?php
                                                                }
                                                                ?>
                                                                                                                                                                              
                                                        </div>
                                                    </div>  
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Instruction Forms</label>
                                                        <div class="col-md-9">
                                                            <div class='new-core-value'>
                                                                <button type="button" class="btn green btn-sm" id='btnAddNewForm2'><i class='icon-plus'></i>&nbsp;&nbsp;ADD NEW</button>   
                                                            </div>
                                                            <?php 
                                                                foreach ($Instructions as $medical) {
                                                                    ?>
                                                                        <div class='core-value'>                                                                
                                                                            <div class='core-value-title'>
                                                                                <a href='<?php echo base_url('assets/forms/'.$medical['Attach']);?>' target='blank'><img src="<?php echo base_url('assets/images/download.png');?>"></a>
                                                                                <?php echo $medical['Title'];?>
                                                                            </div>
                                                                            <div class='core-value-buttons'>                                                                    
                                                                                <button type="button" class="btn green btn-sm" onclick='editForm(<?php echo $medical["ID"];?>)'>EDIT</button>
                                                                                <button type="button" class="btn red btn-sm" onclick='deleteForm(<?php echo $medical["ID"];?>)'>DELETE</button>                                                                                
                                                                            </div>
                                                                        </div>  
                                                                    <?php
                                                                }
                                                                ?>                                                                                                                  
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Sleep Diary Forms</label>
                                                        <div class="col-md-9">
                                                            <div class='new-core-value'>
                                                                <button type="button" class="btn green btn-sm" id='btnAddNewForm3'><i class='icon-plus'></i>&nbsp;&nbsp;ADD NEW</button>   
                                                            </div>
                                                            <?php 
                                                                foreach ($Sleeps as $medical) {
                                                                    ?>
                                                                        <div class='core-value'>                                                                
                                                                            <div class='core-value-title'>
                                                                                <a href='<?php echo base_url('assets/forms/'.$medical['Attach']);?>' target='blank'><img src="<?php echo base_url('assets/images/download.png');?>"></a>
                                                                                <?php echo $medical['Title'];?>
                                                                            </div>
                                                                            <div class='core-value-buttons'>                                                                    
                                                                                <button type="button" class="btn green btn-sm" onclick='editForm(<?php echo $medical["ID"];?>)'>EDIT</button>
                                                                                <button type="button" class="btn red btn-sm" onclick='deleteForm(<?php echo $medical["ID"];?>)'>DELETE</button>                                                                                
                                                                            </div>
                                                                        </div>  
                                                                    <?php
                                                                }
                                                                ?>                                                                                                                    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Other Forms</label>
                                                        <div class="col-md-9">
                                                            <div class='new-core-value'>
                                                                <button type="button" class="btn green btn-sm" id='btnAddNewForm4'><i class='icon-plus'></i>&nbsp;&nbsp;ADD NEW</button>   
                                                            </div>
                                                            <?php 
                                                                foreach ($Others as $medical) {
                                                                    ?>
                                                                        <div class='core-value'>                                                                
                                                                            <div class='core-value-title'>
                                                                                <a href='<?php echo base_url('assets/forms/'.$medical['Attach']);?>' target='blank'><img src="<?php echo base_url('assets/images/download.png');?>"></a>
                                                                                <?php echo $medical['Title'];?>
                                                                            </div>
                                                                            <div class='core-value-buttons'>                                                                    
                                                                                <button type="button" class="btn green btn-sm" onclick='editForm(<?php echo $medical["ID"];?>)'>EDIT</button>
                                                                                <button type="button" class="btn red btn-sm" onclick='deleteForm(<?php echo $medical["ID"];?>)'>DELETE</button>                                                                                
                                                                            </div>
                                                                        </div>  
                                                                    <?php
                                                                }
                                                                ?>                                                                                                                  
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
                                <h4 class="modal-title">Add New Patient Form</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='addNewForm'>
                                    <div class="form-body">
                                        <input type='hidden' id='Type' name='Type'>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <textarea type="text" class='form-control' id='FormTitle' name='Title' required></textarea>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3'>PDF File</label>
                                            <div class='col-md-9'>
                                                <input type='file' class='form-control' id='FormAttach' name='Attach' accept=".pdf,.doc,.docx" required >
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

                <!-- BEGIN ADD MODAL CONTENT BODY -->
                <div class="modal fade" id="EditModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Edit Patient Form</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='editForm'>
                                    <input type='hidden' ID = 'editedID' name='ID'>
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <textarea type="text" class='form-control' id='FormTitleEdit' name='Title' required></textarea>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3'>PDF File</label>
                                            <div class='col-md-9'>
                                                <input type='file' class='form-control' id='FormAttachEdit' name='Attach' accept=".pdf,.doc,.docx" >
                                            </div>
                                        </div>                                     
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnUpdate'>Update</button>
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
                                Are  you really going to delete this service?
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
        <script src="<?php echo base_url('assets/layouts/layout3/scripts/pages/links/patient-form.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    </body>

</html>