<?php get_header(); ?>
  <div class="main-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__img main-banner__img--hard">
          <img src="<?php echo get_theme_mod('hardware_banner_image'); ?>">
        </div>
        <div class="main-banner__container main-banner__container--prin">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12  col-hard">
              <div class="main-banner__boxtext main-banner__boxtext--princing">
                <div class="main-banner__text">
                  <div class="main-banner__title">
                    <h1><?php echo get_theme_mod('hardware_banner_title'); ?></h1>
                    <p><?php echo get_theme_mod('hardware_banner_subtitle'); ?></p>
                    <span><?php echo get_theme_mod('hardware_banner_content'); ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="main-users" style="background:<?php echo get_theme_mod('background_hardware_users'); ?>;">
    <div class="container">
      <div class="row main-content">
      <?php for ($i=1; $i <=9 ; $i++) { 
        if(get_theme_mod('hardware_users'.$i.'_title')!=NULL){?>      
        <div class="col-lg-4 col-sm-6">
          <div class="main-users__content">
            <div class="main-users__item">
              <div class="main-users__boximg">
                <div class="main-users__img">
                  <img src="<?php echo get_theme_mod('hardware_users'.$i.'_icon'); ?>">
                </div>
              </div>
            </div>
            <div class="main-users__item">
              <div class="main-users__boxtext">
                <div class="main-users__title">
                  <p><?php echo get_theme_mod('hardware_users'.$i.'_title'); ?></p>
                </div>
                <div class="main-general__description">
                  <p><?php echo get_theme_mod('hardware_users'.$i.'_content'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }} ?> 

      </div>
    </div>
  </section>
  <div class="main-control main-control--hard" style="background:<?php echo get_theme_mod('background_hardware_control'); ?>;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-12 p-0">
          <div class="main-control__box">
            <div class="main-title__general main-title__general--fullwidth">
              <h2><?php echo get_theme_mod('hardware_control_title'); ?></h2>
              <p><?php echo get_theme_mod('hardware_control_subtitle'); ?></p>
            </div>
            <div class="row main-content">
            <?php for ($i=1; $i <=4 ; $i++) { 
              if(get_theme_mod('hardware_control'.$i.'_title')!=NULL){?>             
              <div class="col-lg-6 col-sm-6">
                <div class="main-users__content main-users__content--hard">
                  <div class="main-users__item">
                    <div class="main-users__boximg active">
                      <div class="main-users__img">
                        <img src="<?php echo get_theme_mod('hardware_control'.$i.'_icon'); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="main-users__item">
                    <div class="main-users__boxtext">
                      <div class="main-users__title">
                        <p><?php echo get_theme_mod('hardware_control'.$i.'_title'); ?></p>
                      </div>
                      <div class="main-general__description main-general__description--hard">
                        <p><?php echo get_theme_mod('hardware_control'.$i.'_content'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             <?php }} ?> 
              
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12 p-0">
          <div class="content-control__img">
            <div class="main-control__img main-control__img--hard">
              <img src="<?php echo get_theme_mod('hardware_control_image'); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-infomation main-information--height" style="background:<?php echo get_theme_mod('background_hardware_information'); ?> !important;">
    <div class="container">
      <div class="row">
        <div class="main-infomation__img main-information__img--hard">
          <img src="<?php echo get_theme_mod('hardware_information_image'); ?>">
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-6">
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-6">
          <div class="main-information__content  main-information__content--height">
            <div class="main-information__title main-information__title--left">
              <p><?php echo get_theme_mod('hardware_information_title'); ?></p>
            </div>
            <div class="main-information__description main-information__description--left">
              <p><?php echo get_theme_mod('hardware_information_content'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-access" style="background:<?php echo get_theme_mod('background_hardware_access'); ?>;">
    <div class="container">
      <div class="main-title__general">
        <h2><?php echo get_theme_mod('hardware_access_title'); ?></h2>
      </div>
      <?php if(wp_is_mobile()): ?>

      <div id="main-access__nav" class="main-access__nav">
        <div class="main-access__item main-access__item--center ">
          <div class="main-access__box">
            <div class="main-access__box--small">
              <p><?php access(0,title); ?></p>
            </div>
          </div>
        </div>
        <div class="main-access__box">
          <div class="main-access__item main-access__item--center ">
            <div class="main-access__box--small">
              <p><?php access(1,title); ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="main-access__content">        
        <div class="main-access__item main-access__item--center ">        
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(0,image_white); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p> White</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(0,image_black); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p>Black</p>
                </div>
              </div>
              
            </div>
          </div>
        
        
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="main-access__check">
                  <div class="main-access__boxcheck active">
                    <div class="main-access__smallcheck"></div>
                  </div>
        
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                <div class="main-access__check">
                  <div class="main-access__boxcheck">
                    <div class="main-access__smallcheck main-access__smallcheck--black"></div>
                  </div>
                </div>
              </a>
            </li>
         
          </ul>
        </div>
  
        
        
        <div class="main-access__item main-access__item--center ">
        
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home1-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(1,image_white); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p> White</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile1-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(1,image_black); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p>Black</p>
                </div>
              </div>
              
            </div>
          </div>
        
        
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home1-tab" data-toggle="pill" href="#pills-home1" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="main-access__check">
                  <div class="main-access__boxcheck active">
                    <div class="main-access__smallcheck"></div>
                  </div>
        
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile1-tab" data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile" aria-selected="false">
                <div class="main-access__check">
                  <div class="main-access__boxcheck">
                    <div class="main-access__smallcheck main-access__smallcheck--black"></div>
                  </div>
                </div>
              </a>
            </li>         
          </ul>
        </div>
      </div>

      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Access Methods</p>
        </div>
        <hr>
        <div class="main-access__content">
         <?php for($i=0; $i<=1; $i++){ ?>
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Fingerprint) == "Fingerprint") {?>
              <div class="main-access__methodtitle">
                <p>Fingerprint</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/fingerprint.png">
              </div>
             <?php } if(access_methods($i,Fingerprint) != "Fingerprint") {?>  <div class="main-access__item_Fingerprint"></div> <?php } ?>
            </div>            
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Card) == "Card") {?>
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
             <?php } if(access_methods($i,Card) != "Card") {?>  <div class="main-access__item_Card"></div> <?php } ?> 
            </div>
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Mobile) == "Mobile") {?>
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
             <?php } if(access_methods($i,Mobile) != "Mobile") {?>  <div class="main-access__item_Mobile"></div> <?php } ?>  
            </div>
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Cloud_Key) == "Cloud_Key") {?>
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
             <?php } if(access_methods($i,Cloud_Key) != "Cloud_Key") {?>  <div class="main-access__item_Cloud-Key"></div> <?php } ?>  
            </div>
          </div>
         <?php } ?> 
        </div>
      </div>

       <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Works Outdoors</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(0,works_outdoors); ?></p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(1,works_outdoors); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Communication Interface</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(0,communication_interface); ?></p>
              </div>
            </div>            
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(1,communication_interface); ?></p>
              </div>
            </div>            
          </div>  
        </div>
      </div>


      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Door Control</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(0,door_control); ?></p>
              </div>
            </div>            
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(1,door_control); ?></p>
              </div>
            </div>            
          </div>
        </div>
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>User Credentials Capacity</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Fingerprint Users
                  <span><?php access(0,fingerprint_users); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span><?php access(0,card_pin_users); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span><?php access(0,mobile_credentials); ?></span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Fingerprint Users
                  <span><?php access(1,fingerprint_users); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span><?php access(1,card_pin_users); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span><?php access(1,mobile_credentials); ?></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Size & Dimensions</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Height
                  <span><?php access(0,height); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span><?php access(0,width); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span><?php access(0,depth); ?></span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Height
                  <span><?php access(1,height); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span><?php access(1,width); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span><?php access(1,depth); ?></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Power</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Power
                  <span><?php access(0,power); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span><?php access(0,current); ?></span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Power
                  <span><?php access(1,power); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span><?php access(1,current); ?></span>
                </p>
              </div>
            </div>
          </div>        
        </div>
      </div>

      <div class="main-access__nav">
        <div class="main-access__box">
          <div class="main-access__item main-access__item--center ">
            <div class="main-access__box--small">
              <p><?php access(2,title); ?></p>
            </div>
          </div>
        </div>
        <div class="main-access__box">
          <div class="main-access__item main-access__item--center ">
            <div class="main-access__box--small">
              <p><?php access(3,title); ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="main-access__content">   
        <div class="main-access__item main-access__item--center ">
        
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home2-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(2,image_black); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p> Black</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile2-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(2,image_white); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p>White</p>
                </div>
              </div>
              
            </div>
          </div>


          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home2-tab" data-toggle="pill" href="#pills-home2" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="main-access__check">
                  <div class="main-access__boxcheck active">
                    <div class="main-access__smallcheck main-access__smallcheck--black"></div>
                    
                  </div>
                  

                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile2-tab" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile" aria-selected="false">
                <div class="main-access__check">
                  <div class="main-access__boxcheck">
                    <div class="main-access__smallcheck"></div>
                  </div>
                </div>
              </a>
            </li>
         
          </ul>
        </div>




        <div class="main-access__item main-access__item--center ">
        
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home3-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(3,image_black); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p> Black</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile3-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(3,image_white); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p>White</p>
                </div>
              </div>
              
            </div>
          </div>


          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home3-tab" data-toggle="pill" href="#pills-home3" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="main-access__check">
                  <div class="main-access__boxcheck active">
                    <div class="main-access__smallcheck main-access__smallcheck--black"></div>
                    
                  </div>               
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile3-tab" data-toggle="pill" href="#pills-profile3" role="tab" aria-controls="pills-profile" aria-selected="false">
                <div class="main-access__check">
                  <div class="main-access__boxcheck">
                    <div class="main-access__smallcheck"></div>
                  </div>
                </div>
              </a>
            </li>         
          </ul>
        </div>      
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Access Methods</p>
        </div>
        <hr>
        <div class="main-access__content">
         <?php for($i=2; $i<=3; $i++){ ?>
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Fingerprint) == "Fingerprint") {?>
              <div class="main-access__methodtitle">
                <p>Fingerprint</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/fingerprint.png">
              </div>
             <?php } if(access_methods($i,Fingerprint) != "Fingerprint") {?>  <div class="main-access__item_Fingerprint"></div> <?php } ?>
            </div>            
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Card) == "Card") {?>
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
             <?php } if(access_methods($i,Card) != "Card") {?>  <div class="main-access__item_Card"></div> <?php } ?> 
            </div>
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Mobile) == "Mobile") {?>
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
             <?php } if(access_methods($i,Mobile) != "Mobile") {?>  <div class="main-access__item_Mobile"></div> <?php } ?>  
            </div>
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Cloud_Key) == "Cloud_Key") {?>
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
             <?php } if(access_methods($i,Cloud_Key) != "Cloud_Key") {?>  <div class="main-access__item_Cloud-Key"></div> <?php } ?>  
            </div>
          </div>
         <?php } ?> 
        </div>
      </div>

      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Works Outdoors</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(2,works_outdoors); ?></p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(3,works_outdoors); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Communication Interface</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(2,communication_interface); ?></p>
              </div>
            </div>            
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(3,communication_interface); ?></p>
              </div>
            </div>            
          </div>
        </div>
      </div>

      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Door Control</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(2,door_control); ?></p>
              </div>
            </div>            
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access(3,door_control); ?></p>
              </div>
            </div>            
          </div>
        </div>
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>User Credentials Capacity</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Fingerprint Users
                  <span><?php access(2,fingerprint_users); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span><?php access(2,card_pin_users); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span><?php access(2,mobile_credentials); ?></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <?php if(access(3,fingerprint_users) != NULL){ ?>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Fingerprint Users
                  <span><?php access(3,fingerprint_users); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span><?php access(3,card_pin_users); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span><?php access(3,mobile_credentials); ?></span>
                </p>
              </div>
            </div>
          </div>
        </div>        
      </div>
      <?php } ?>

      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Size & Dimensions</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Height
                  <span><?php access(2,height); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span><?php access(2,width); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span><?php access(2,depth); ?></span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Height
                  <span><?php access(3,height); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span><?php access(3,width); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span><?php access(3,depth); ?></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Power</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Power
                  <span><?php access(2,power); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span><?php access(2,current); ?></span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Power
                  <span><?php access(3,power); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span><?php access(3,current); ?></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php else:?>

<div id="main-access__nav" class="main-access__nav">
      <?php for ($i=0; $i <=3; $i++) { ?> 
        <div class="main-access__item main-access__item--center ">
          <div class="main-access__box">
            <div class="main-access__box--small">
              <p><?php access($i,title); ?></p>
            </div>
          </div>
        </div>
      <?php } ?>  
      </div>

      <div class="main-access__content">
        <div class="main-access__item main-access__item--center ">
        
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(0,image_white); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p> White</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(0,image_black); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p>Black</p>
                </div>
              </div>
              
            </div>
          </div>


          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="main-access__check">
                  <div class="main-access__boxcheck active">
                    <div class="main-access__smallcheck"></div>
                  </div>

                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                <div class="main-access__check">
                  <div class="main-access__boxcheck">
                    <div class="main-access__smallcheck main-access__smallcheck--black"></div>
                  </div>
                </div>
              </a>
            </li>         
          </ul>
        </div>

        <div class="main-access__item main-access__item--center ">        
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home1-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(1,image_white); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p> White</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile1-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(1,image_black); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p>Black</p>
                </div>
              </div>              
            </div>
          </div>

          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home1-tab" data-toggle="pill" href="#pills-home1" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="main-access__check">
                  <div class="main-access__boxcheck active">
                    <div class="main-access__smallcheck"></div>
                  </div>

                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile1-tab" data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile" aria-selected="false">
                <div class="main-access__check">
                  <div class="main-access__boxcheck">
                    <div class="main-access__smallcheck main-access__smallcheck--black"></div>
                  </div>
                </div>
              </a>
            </li>         
          </ul>
        </div>

        <div class="main-access__item main-access__item--center ">        
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home2-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(2,image_black); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p> Black</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile2-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(2,image_white); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p>White</p>
                </div>
              </div>              
            </div>
          </div>

          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home2-tab" data-toggle="pill" href="#pills-home2" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="main-access__check">
                  <div class="main-access__boxcheck active">
                    <div class="main-access__smallcheck main-access__smallcheck--black"></div>
                    
                  </div>                
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile2-tab" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile" aria-selected="false">
                <div class="main-access__check">
                  <div class="main-access__boxcheck">
                    <div class="main-access__smallcheck"></div>
                  </div>
                </div>
              </a>
            </li>         
          </ul>
        </div>

        <div class="main-access__item main-access__item--center ">        
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home3-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(3,image_black); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p> Black</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile3-tab">
              <div class="main-access__boximg">
                <div class="main-access__img">
                  <img src="<?php access(3,image_white); ?>">
                </div>
                <div class="main-access__namecolor">
                  <p>White</p>
                </div>
              </div>              
            </div>
          </div>

          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home3-tab" data-toggle="pill" href="#pills-home3" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="main-access__check">
                  <div class="main-access__boxcheck active">
                    <div class="main-access__smallcheck main-access__smallcheck--black"></div>
                    
                  </div>              
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile3-tab" data-toggle="pill" href="#pills-profile3" role="tab" aria-controls="pills-profile" aria-selected="false">
                <div class="main-access__check">
                  <div class="main-access__boxcheck">
                    <div class="main-access__smallcheck"></div>
                  </div>
                </div>
              </a>
            </li>         
          </ul>
        </div>
      </div>

      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Access Methods</p>
        </div>
        <hr>
        <div class="main-access__content">
         <?php for($i=0; $i<=3; $i++){ ?>
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Fingerprint) == "Fingerprint") {?>
              <div class="main-access__methodtitle">
                <p>Fingerprint</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/fingerprint.png">
              </div>
             <?php } if(access_methods($i,Fingerprint) != "Fingerprint") {?>  <div class="main-access__item_Fingerprint"></div> <?php } ?>
            </div>            
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Card) == "Card") {?>
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
             <?php } if(access_methods($i,Card) != "Card") {?>  <div class="main-access__item_Card"></div> <?php } ?> 
            </div>
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Mobile) == "Mobile") {?>
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
             <?php } if(access_methods($i,Mobile) != "Mobile") {?>  <div class="main-access__item_Mobile"></div> <?php } ?>  
            </div>
            <div class="main-access__boxmethod">
             <?php if(access_methods($i,Cloud_Key) == "Cloud_Key") {?>
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
             <?php } if(access_methods($i,Cloud_Key) != "Cloud_Key") {?>  <div class="main-access__item_Cloud-Key"></div> <?php } ?>  
            </div>
          </div>
         <?php } ?> 
        </div>
      </div>

      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Works Outdoors</p>
        </div>
        <hr>
        <div class="main-access__content">
         <?php for($i=0; $i<=3; $i++){ ?>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access($i,works_outdoors); ?></p>
              </div>
            </div>
          </div>          
         <?php } ?> 
        </div>
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Communication Interface</p>
        </div>
        <hr>
        <div class="main-access__content">
         <?php for ($i=0; $i <=3; $i++) { ?>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access($i,communication_interface); ?></p>
              </div>
            </div>            
          </div>
          <?php } ?>
          
        </div>
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Door Control</p>
        </div>
        <hr>
        <div class="main-access__content">
         <?php for ($i=0; $i <=3; $i++) { ?> 
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p><?php access($i,door_control); ?></p>
              </div>
            </div>            
          </div>
          <?php } ?>        
        </div>
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>User Credentials Capacity</p>
        </div>
        <hr>
        <div class="main-access__content">
         <?php for ($i=0; $i <=3; $i++) { ?> 
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Fingerprint Users
                  <span><?php access($i,fingerprint_users); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span><?php access($i,card_pin_users); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span><?php access($i,mobile_credentials); ?></span>
                </p>
              </div>
            </div>
          </div>
         <?php } ?>
        </div>
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Size & Dimensions</p>
        </div>
        <hr>
        <div class="main-access__content">
         <?php for ($i=0; $i <=3; $i++) { ?>  
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Height
                  <span><?php access($i,height); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span><?php access($i,width); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span><?php access($i,depth); ?></span>
                </p>
              </div>
            </div>
          </div>
         <?php } ?> 
        </div>
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Power</p>
        </div>
        <hr>
        <div class="main-access__content">
         <?php for ($i=0; $i <=3; $i++) { ?> 
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Power
                  <span><?php access($i,power); ?></span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span><?php access($i,current); ?></span>
                </p>
              </div>
            </div>
          </div>
         <?php } ?>  
        </div>
      </div>
    </div>
  </div>

<?php endif;?>

  <?php if (get_theme_mod('hardware_sections_check') == 1) {?>
     <?php  get_template_part('sections/main-check'); ?>
  <?php } ?> 
  <?php if (get_theme_mod('hardware_sections_users') == 1) {?>
     <?php  get_template_part('sections/main-users'); ?>
  <?php } ?>   
  <?php if (get_theme_mod('hardware_sections_readers') == 1) {?>
     <?php  get_template_part('sections/main-readers'); ?>
  <?php } ?> 
  <?php if (get_theme_mod('hardware_sections_testimonials') == 1) {?>
     <?php  get_template_part('sections/main-testimonials'); ?>
  <?php } ?>
  <?php if (get_theme_mod('hardware_sections_clients') == 1) {?>
     <?php  get_template_part('sections/main-client'); ?>
  <?php } ?> 
  <?php if (get_theme_mod('hardware_sections_information') == 1) {?>
     <?php  get_template_part('sections/main-infomation'); ?>
  <?php } ?>

<?php get_footer(); ?>