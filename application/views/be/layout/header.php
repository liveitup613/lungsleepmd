<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="<?php echo base_url('');?>">                            
                    <img src="<?php echo base_url('assets/layouts/global/img/logo.svg');?>" alt="logo" class="logo-default" style='width: 120px;'>
                </a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">                                                        
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="<?php echo base_url('admin/logout');?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="<?php echo base_url('assets/images/'.$user['Avatar']);?>">
                            <span class="username username-hide-mobile">Admin</span>
                        </a>   
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="<?php echo base_url('admin/profile');?>">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>                           
                            <li class="divider"> </li>                            
                            <li>
                                <a href="<?php echo base_url('admin/logout');?>">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>                             
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <li class="dropdown-extended quick-sidebar-toggler">    
                        <a href="<?php echo base_url('admin/logout');?>" style="padding: 0px; font-size: 20px; color: #8ea3b6;">                   
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">                    
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->            
            <div class="hor-menu">                
                <ul class="nav navbar-nav">
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'home' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/home');?>"> Home </a>                                
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'services' ? 'active' : '');?>">
                        <a href="javascript:;"> Our Services
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="<?php echo ($current == 'pulmonary_medicine' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/services/pulmonary_medicine');?>" class="nav-link  ">Pulmonary Medicine</a>
                            </li>
                            <li class="<?php echo ($current == 'sleep_medicine' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/services/sleep_medicine');?>" class="nav-link  ">Sleep Medicine</a>
                            </li>
                            <li class="<?php echo ($current == 'critical_care' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/services/critical_care');?>" class="nav-link  ">Critical Care Medicine</a>
                            </li>
                            <li class="<?php echo ($current == 'additional' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/services/additional');?>" class="nav-link  ">Additional Services</a>
                            </li>                                    
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'service_fee' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/service_fee');?>"> Service Fees </a>                                
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'about-us' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/about-us');?>"> About Us </a>                                
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'quick_links' ? 'active' : '');?>">
                        <a href="javascript:;"> Quick Links
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="<?php echo ($current == 'insurance' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/links/insurance');?>" class="nav-link  ">Insurance Information</a>
                            </li>
                            <li class="<?php echo ($current == 'patient_forms' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/links/patient_forms');?>" class="nav-link  ">Patient Forms</a>
                            </li>
                            <li class="<?php echo ($current == 'medical_vidoes' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/links/medical_videos');?>" class="nav-link  ">Instructional Medical Videos</a>
                            </li>
                            <li class="<?php echo ($current == 'blogs' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/links/blogs');?>" class="nav-link  ">Blogs</a>
                            </li>                                    
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'contact-us' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/contact-us');?>"> Contact Us</a>                                
                    </li>                            
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>