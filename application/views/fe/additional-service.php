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
                                        <div class="header__breadcrumb"
                                            style="background-blend-mode: multiply;
                                                    background-image:url(<?php echo base_url('assets/frontend/images/medicus80.jpg');?>);
                                                    background-color : rgb(33 52 60 / 68%);
                                                    background-size: cover;
                                                    background-position: center;">
                                            <h1 class="header__breadcrumb--title">Additional Services</h1>
                                        </div>

                                        <main class="main">   
                                            <div class='service-container container-small'>
                                                <div class='content'>
                                                    <div class='service-quote'>
                                                        <h4>We also provide the following Services</h4>
                                                    </div>
                                                    <div>
                                                        <ul>
                                                            <?php
                                                                foreach ($services as $service) {
                                                                    echo '<li style="margin-bottom : 8px;">' . $service['Title'] . '</li>';
                                                                }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </main>
                                        <!-- END SLIDER -->
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