<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" class="js" style="">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Epignosis Specialty Practice | South Shore, Nassau, Queens, Suffok</title>

    <!-- All In One SEO Pack 3.6.2[325,366] -->
    <meta name="description" content="Epignosis Specialty Practice, located in West Hempstead, New York provides Pulmonary and Sleep Medicine treatments for people of all ages.">
    <meta content="Epignosis v2.0" name="generator">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="msapplication-TileImage" content="<?php echo base_url('assets/frontend/img/cropped-favicon-270x270.png');?>">

    <link rel="canonical" href="<?php echo base_url();?>">    
    <!-- All In One SEO Pack -->
    <?php $this->load->view('fe/layout/style');?>
    
</head>

<body
    class="home page-template-default page page-id-28944 et-tb-has-template et-tb-has-footer header_fixin_mobile et_button_custom_icon et_pb_button_helper_class et_transparent_nav et_fixed_nav et_show_nav et_secondary_nav_enabled et_secondary_nav_two_panels et_primary_nav_dropdown_animation_expand et_secondary_nav_dropdown_animation_fade et_header_style_left et_cover_background et_pb_gutter windows et_pb_gutters2 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css chrome"
    style="overflow-x: hidden;">
    <div id="page-container" class="et-animated-content" style="overflow-y: hidden; margin-top: -1px;">
        <div id="et-boc" class="et-boc">

            <?php $this->load->view('fe/layout/header');?>

            <div id="et-main-area">
                <!-- PRE LOADER -->
                <div class="preloader" style="display: none;">
                    <div class="status" style="display: none;">&nbsp;</div>
                </div><!-- .preloader -->

                <div id="main-content">
                    <article class="page">
                        <div class="entry-content">
                            <div class="et-l et-l--post">
                                <div class="et_builder_inner_content et_pb_gutters2">                                    
                                    <div class='main-container'>
                                        <!-- BEGIN SLIDER -->
                                        <div class="header__breadcrumb-high"
                                            style=" background-image:linear-gradient(180deg,rgba(0,40,73,0.68) 0%,rgba(0,34,56,0.41) 26%), url(<?php echo base_url('assets/frontend/images/medicus241.jpg');?>);                                                    
                                                    background-size: cover;
                                                    background-position: center;
                                                    ">
                                            <h4 class='header__breadcrumb--subtitle'>Contact Us</h4>
                                            <h1 class="header__breadcrumb--title">Get In Touch Today</h1>
                                        </div>
                                        <!-- END SLIDER -->

                                        <main class="main" style='background-color:#f0f5f5!important;'>
                                            <div class="service-container">
                                                <div class='content'>                                                    
                                                    <div class='contact-info'>
                                                        <div class='contact-container'>
                                                            <div class='contact'>
                                                                <img src='<?php echo base_url('assets/frontend/images/icon-green-28.png');?>'>
                                                                <?php
                                                                    $phones = explode('/', $Phone);
                                                                    foreach ($phones as $phone) {
                                                                        echo '<p>'.$phone.'</p>';
                                                                    }
                                                                ?>                                                                
                                                            </div>
                                                        </div>
                                                        <div class='contact-container'>
                                                            <div class='contact'>
                                                                <img src='<?php echo base_url('assets/frontend/images/icon-green-15.png');?>'>
                                                                <?php  
                                                                    echo '<p>' . $Address . '</p>';
                                                                ?>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class='contact-container'>
                                                            <div class='contact'>
                                                                <img src='<?php echo base_url('assets/frontend/images/fax-icon.png');?>'>
                                                                <p><?php echo $Fax;?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='opening-hours-info'>
                                                        <div class='hours-container'>
                                                            <div class='office-hours'>
                                                                <h4>Office Hours</h4>
                                                                <?php
                                                                    echo $Monday == '' ? '' : "<div class='hours'><div class='date'>Monday</div><p>".$Monday."</p></div>";
                                                                    echo $Tuesday == '' ? '' : "<div class='hours'><div class='date'>Tuesday</div><p>".$Tuesday."</p></div>";
                                                                    echo $Wednesday == '' ? '' : "<div class='hours'><div class='date'>Wednesday</div><p>".$Wednesday."</p></div>";
                                                                    echo $Thursday == '' ? '' : "<div class='hours'><div class='date'>Thursday</div><p>".$Thursday."</p></div>";
                                                                    echo $Friday == '' ? '' : "<div class='hours'><div class='date'>Friday</div><p>".$Friday."</p></div>";
                                                                    ?>
                                                            </div>
                                                        </div>
                                                        <div class='hours-container'>
                                                            <div class='office-hours'>
                                                                <h4>PFT Testing Hours</h4>
                                                                <?php
                                                                    echo $PFTMonday == '' ? '' : "<div class='hours'><div class='date'>Monday</div><p>".$PFTMonday."</p></div>";
                                                                    echo $PFTTuesday == '' ? '' : "<div class='hours'><div class='date'>Tuesday</div><p>".$PFTTuesday."</p></div>";
                                                                    echo $PFTWednesday == '' ? '' : "<div class='hours'><div class='date'>Wednesday</div><p>".$PFTWednesday."</p></div>";
                                                                    echo $PFTThursday == '' ? '' : "<div class='hours'><div class='date'>Thursday</div><p>".$PFTThursday."</p></div>";
                                                                    echo $PFTFriday == '' ? '' : "<div class='hours'><div class='date'>Friday</div><p>".$PFTFriday."</p></div>";
                                                                    ?>                                                                
                                                            </div>                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </main>
                                    </div>
                                </div><!-- .et_builder_inner_content -->
                            </div><!-- .et-l -->
                        </div> <!-- .entry-content -->
                    </article> <!-- .et_pb_post -->

                </div> <!-- #main-content -->

                <?php $this->load->view('fe/layout/footer');?>
            </div> <!-- #et-main-area -->


        </div><!-- #et-boc -->
    </div> <!-- #page-container -->
    

    <span class="et_pb_scroll_top et-pb-icon et-hidden" style="display: inline;"></span>

    <script type='text/javascript'>
        document.documentElement.className = 'js';  


        var base_url = "<?php echo base_url();?>";        
    </script>

    <?php $this->load->view('fe/layout/scripts');?>
    
</body>

</html>