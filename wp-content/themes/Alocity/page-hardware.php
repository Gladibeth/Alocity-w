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
  <div class="main-control main-control--hard" style="background-image:url(assets/img/hardware/bg.png)">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-12 p-0">
          <div class="main-control__box">
            <div class="main-title__general main-title__general--fullwidth">
              <h2>World’s #1 Fingerprint Technology</h2>
              <p>works with anyone, anytime, anywhere!</p>
            </div>
            <div class="row main-content">
              <div class="col-lg-6 col-sm-6">
                <div class="main-users__content main-users__content--hard">
                  <div class="main-users__item">
                    <div class="main-users__boximg active">
                      <div class="main-users__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/light-bulb-1.png">
                      </div>
                    </div>
                  </div>
                  <div class="main-users__item">
                    <div class="main-users__boxtext">
                      <div class="main-users__title">
                        <p>Multi-Spectral Technology</p>
                      </div>
                      <div class="main-general__description main-general__description--hard">
                        <p>Reads the inner layer fingerprint, resulting in superior images and results.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="main-users__content main-users__content--hard">
                  <div class="main-users__item">
                    <div class="main-users__boximg active">
                      <div class="main-users__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/balaclava.png">
                      </div>
                    </div>
                  </div>
                  <div class="main-users__item">
                    <div class="main-users__boxtext">
                      <div class="main-users__title">
                        <p>Liveness Detection</p>
                      </div>
                      <div class="main-general__description main-general__description--hard">
                        <p>Uses the best liveness detection technology to protect against fake and spoof fingerprints.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="main-users__content main-users__content--hard">
                  <div class="main-users__item">
                    <div class="main-users__boximg active">
                      <div class="main-users__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/collaboration.png">
                      </div>
                    </div>
                  </div>
                  <div class="main-users__item">
                    <div class="main-users__boxtext">
                      <div class="main-users__title">
                        <p>Works on All People</p>
                      </div>
                      <div class="main-general__description main-general__description--hard">
                        <p>Our readers work on ALL people - including that 2-5% of the population with “problem fingerprints”  that fail to enroll on conventional sensors.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="main-users__content main-users__content--hard">
                  <div class="main-users__item">
                    <div class="main-users__boximg active">
                      <div class="main-users__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/drizzle.png">
                      </div>
                    </div>
                  </div>
                  <div class="main-users__item">
                    <div class="main-users__boxtext">
                      <div class="main-users__title">
                        <p>Works in All Conditions</p>
                      </div>
                      <div class="main-general__description main-general__description--hard">
                        <p>Maintains superior performance even in rain, cold, dry and hot environments.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12 p-0">
          <div class="content-control__img">
            <div class="main-control__img main-control__img--hard">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image_6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-infomation main-information--height">
    <div class="container">
      <div class="row">
        <div class="main-infomation__img main-information__img--hard">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image_5.png">
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-6">
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-6">
          <div class="main-information__content  main-information__content--height">
            <div class="main-information__title main-information__title--left">
              <p>Waterproof IP67</p>
            </div>
            <div class="main-information__description main-information__description--left">
              <p>The AW series was designed with an IP-67 rated housing ideal for extreme outdoor environments, working even under water, snow, dust, and humid conditions without compromising it’s efficiency and reliability.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-access">
    <div class="container">
      <div class="main-title__general">
        <h2>Access Control Readers Specifications</h2>
      </div>
      <?php if(wp_is_mobile()): ?>


      <div id="main-access__nav" class="main-access__nav">
        <div class="main-access__item main-access__item--center ">
          <div class="main-access__box">
            <div class="main-access__box--small">
              <p>A55</p>
            </div>
          </div>
        </div>
        <div class="main-access__box">
          <div class="main-access__item main-access__item--center ">
            <div class="main-access__box--small">
              <p>A250</p>
            </div>
          </div>
        </div>
      </div>


      <div class="main-access__content">
        <div class="main-access__item main-access__item--center ">
          <div class="main-access__boximg">
            <div class="main-access__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image.png">
            </div>
          </div>
          <div class="main-access__check">
            <div class="main-access__boxcheck active">
              <div class="main-access__smallcheck"></div>
            </div>
            <div class="main-access__boxcheck">
              <div class="main-access__smallcheck main-access__smallcheck--black"></div>
            </div>
          </div>
          <div class="main-access__namecolor">
            <p> White</p>
          </div>
        </div>
        <div class="main-access__item main-access__item--center ">
          
          <div class="main-access__boximg">
            <div class="main-access__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image_2.png">
            </div>
          </div>
          <div class="main-access__check">
            <div class="main-access__boxcheck active">
              <div class="main-access__smallcheck"></div>
            </div>
            <div class="main-access__boxcheck">
              <div class="main-access__smallcheck main-access__smallcheck--black"></div>
            </div>
          </div>
          <div class="main-access__namecolor">
            <p> White</p>
          </div>
        </div>
      </div>

      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Access Methods</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
            </div>
          </div>
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Fingerprint</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/fingerprint.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
            </div>
          </div>  
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
                <p>Under Covered Area</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Under Covered Area</p>
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
                <p>PoE (Power over Ethernet)</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wi-Fi</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Ethernet 10/100 Mbps</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Bluetooth Smart</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>RS-485</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wiegand</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>OSDP</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>PoE (Power over Ethernet)</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wi-Fi</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Ethernet 10/100 Mbps</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Bluetooth Smart</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>RS-485</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wiegand</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>OSDP</p>
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
                <p>Form C Relay</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Door Contact Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Exit Button Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>TTL Output</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Form C Relay</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Door Contact Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Exit Button Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>TTL Output</p>
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
                  <span>None</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span>20,000</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span>20,000</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Fingerprint Users
                  <span>1,000 / 10,000 Optional</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span>20,000</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span>20,000</span>
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
                  <span>7” inches (177.8 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span>2.50” inches (63.50 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span>2” inches (50.8 mm)</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Height
                  <span>7” inches (177.8 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span>2.50” inches (63.50 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span>2” inches (50.8 mm)</span>
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
                  <span>DC 12 volts</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span>Operatinals Amp</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Power
                  <span>DC 12 volts</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span>Operatinals Amp</span>
                </p>
              </div>
            </div>
          </div>
        
        </div>
      </div>



      //// 2

      <div class="main-access__nav">
        <div class="main-access__box">
          <div class="main-access__item main-access__item--center ">
            <div class="main-access__box--small">
              <p>AW50</p>
            </div>
          </div>
        </div>
        <div class="main-access__box">
          <div class="main-access__item main-access__item--center ">
            <div class="main-access__box--small">
              <p>AW500</p>
            </div>
          </div>
        </div>
      </div>

      <div class="main-access__content">   
        <div class="main-access__item main-access__item--center ">
          
          <div class="main-access__boximg">
            <div class="main-access__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image_3.png">
            </div>
          </div>
          <div class="main-access__check">
            <div class="main-access__boxcheck active">
               <div class="main-access__smallcheck main-access__smallcheck--black"></div>
              
            </div>
            <div class="main-access__boxcheck">
             <div class="main-access__smallcheck"></div>
            </div>
          </div>
          <div class="main-access__namecolor">
            <p> Black</p>
          </div>
        </div>
        <div class="main-access__item main-access__item--center ">
          
          <div class="main-access__boximg">
            <div class="main-access__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image_4.png">
            </div>
          </div>
          <div class="main-access__check">
            <div class="main-access__boxcheck active">
               <div class="main-access__smallcheck main-access__smallcheck--black"></div>
              
            </div>
            <div class="main-access__boxcheck">
             <div class="main-access__smallcheck"></div>
            </div>
          </div>
          <div class="main-access__namecolor">
            <p> Black</p>
          </div>
        </div>
      </div>
      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Access Methods</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
            </div>
          </div>
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Fingerprint</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/fingerprint.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
            </div>
          </div>
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
                <p>Yes</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Yes</p>
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
                <p>PoE (Power over Ethernet)</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wi-Fi</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Ethernet 10/100 Mbps</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Bluetooth Smart</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>RS-485</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wiegand</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>OSDP</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>PoE (Power over Ethernet)</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wi-Fi</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Ethernet 10/100 Mbps</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Bluetooth Smart</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>RS-485</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wiegand</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>OSDP</p>
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
                <p>Form C Relay</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Door Contact Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Exit Button Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>TTL Output</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Form C Relay</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Door Contact Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Exit Button Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>TTL Output</p>
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
                  <span>1,000 / 10,000 Optional</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span>20,000</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span>20,000</span>
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
                  <span>7” inches (177.8 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span>2.50” inches (63.50 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span>2” inches (50.8 mm)</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Height
                  <span>7” inches (177.8 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span>2.50” inches (63.50 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span>2” inches (50.8 mm)</span>
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
                  <span>DC 12 volts</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span>Operatinals Amp</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Power
                  <span>DC 12 volts</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span>Operatinals Amp</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php else:?>
<div id="main-access__nav" class="main-access__nav">
        <div class="main-access__item main-access__item--center ">
          <div class="main-access__box">
            <div class="main-access__box--small">
              <p>A55</p>
            </div>
          </div>
        </div>
        <div class="main-access__box">
          <div class="main-access__item main-access__item--center ">
            <div class="main-access__box--small">
              <p>A250</p>
            </div>
          </div>
        </div>
        <div class="main-access__box">
          <div class="main-access__item main-access__item--center ">
            <div class="main-access__box--small">
              <p>AW50</p>
            </div>
          </div>
        </div>
        <div class="main-access__box">
          <div class="main-access__item main-access__item--center ">
            <div class="main-access__box--small">
              <p>AW500</p>
            </div>
          </div>
        </div>
      </div>



      <div class="main-access__content">
        <div class="main-access__item main-access__item--center ">
          <div class="main-access__boximg">
            <div class="main-access__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image.png">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image.png">
            </div>
          </div>
          <div class="main-access__check">
            <div class="main-access__boxcheck active">
              <div class="main-access__smallcheck"></div>
            </div>
            <div class="main-access__boxcheck two">
              <div class="main-access__smallcheck main-access__smallcheck--black"></div>
            </div>
          </div>
          <div class="main-access__namecolor">
            <p class="name-white"> White</p>
            <p class="name-black p-opacity"> black</p>
          </div>
        </div>
        <div class="main-access__item main-access__item--center ">
          
          <div class="main-access__boximg">
            <div class="main-access__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image_2.png">
            </div>
          </div>
          <div class="main-access__check">
            <div class="main-access__boxcheck active">
              <div class="main-access__smallcheck"></div>
            </div>
            <div class="main-access__boxcheck">
              <div class="main-access__smallcheck main-access__smallcheck--black"></div>
            </div>
          </div>
          <div class="main-access__namecolor">
            <p> White</p>
          </div>
        </div>
        <div class="main-access__item main-access__item--center ">
          
          <div class="main-access__boximg">
            <div class="main-access__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image_3.png">
            </div>
          </div>
          <div class="main-access__check">
            <div class="main-access__boxcheck active">
               <div class="main-access__smallcheck main-access__smallcheck--black"></div>
              
            </div>
            <div class="main-access__boxcheck">
             <div class="main-access__smallcheck"></div>
            </div>
          </div>
          <div class="main-access__namecolor">
            <p> Black</p>
          </div>
        </div>
        <div class="main-access__item main-access__item--center ">
          
          <div class="main-access__boximg">
            <div class="main-access__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/image_4.png">
            </div>
          </div>
          <div class="main-access__check">
            <div class="main-access__boxcheck active">
               <div class="main-access__smallcheck main-access__smallcheck--black"></div>
              
            </div>
            <div class="main-access__boxcheck">
             <div class="main-access__smallcheck"></div>
            </div>
          </div>
          <div class="main-access__namecolor">
            <p> Black</p>
          </div>
        </div>
      </div>



      <div class="main-access__boxcontent">
        <div class="main-access__general">
          <p>Access Methods</p>
        </div>
        <hr>
        <div class="main-access__content">
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
            </div>
          </div>
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Fingerprint</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/fingerprint.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
            </div>
          </div>
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
            </div>
          </div>
          <div class="main-access__item main-access__item--center main-access__item--top">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Fingerprint</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/fingerprint.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Card</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Mobile</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/icon_3.png">
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle">
                <p>Cloud-Key</p>
              </div>
              <div class="main-access__methodimg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/1.png">
              </div>
            </div>
          </div>
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
                <p>Under Covered Area</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Under Covered Area</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Yes</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Yes</p>
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
                <p>PoE (Power over Ethernet)</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wi-Fi</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Ethernet 10/100 Mbps</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Bluetooth Smart</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>RS-485</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wiegand</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>OSDP</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>PoE (Power over Ethernet)</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wi-Fi</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Ethernet 10/100 Mbps</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Bluetooth Smart</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>RS-485</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wiegand</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>OSDP</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>PoE (Power over Ethernet)</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wi-Fi</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Ethernet 10/100 Mbps</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Bluetooth Smart</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>RS-485</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wiegand</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>OSDP</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>PoE (Power over Ethernet)</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wi-Fi</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Ethernet 10/100 Mbps</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Bluetooth Smart</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>RS-485</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Wiegand</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>OSDP</p>
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
                <p>Form C Relay</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Door Contact Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Exit Button Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>TTL Output</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Form C Relay</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Door Contact Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Exit Button Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>TTL Output</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Form C Relay</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Door Contact Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Exit Button Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>TTL Output</p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Form C Relay</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Door Contact Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>Exit Button Input</p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p>TTL Output</p>
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
                  <span>None</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span>20,000</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span>20,000</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Fingerprint Users
                  <span>1,000 / 10,000 Optional</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span>20,000</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span>20,000</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Fingerprint Users
                  <span>1,000 / 10,000 Optional</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Card / Pin Users
                  <span>20,000</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Mobile Credentials
                  <span>20,000</span>
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
                  <span>7” inches (177.8 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span>2.50” inches (63.50 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span>2” inches (50.8 mm)</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Height
                  <span>7” inches (177.8 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span>2.50” inches (63.50 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span>2” inches (50.8 mm)</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Height
                  <span>7” inches (177.8 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span>2.50” inches (63.50 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span>2” inches (50.8 mm)</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Height
                  <span>7” inches (177.8 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Width
                  <span>2.50” inches (63.50 mm)</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Depth
                  <span>2” inches (50.8 mm)</span>
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
                  <span>DC 12 volts</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span>Operatinals Amp</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Power
                  <span>DC 12 volts</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span>Operatinals Amp</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Power
                  <span>DC 12 volts</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span>Operatinals Amp</span>
                </p>
              </div>
            </div>
          </div>
          <div class="main-access__item">
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Power
                  <span>DC 12 volts</span>
                </p>
              </div>
            </div>
            <div class="main-access__boxmethod">
              <div class="main-access__methodtitle main-access__methodtitle--left">
                <p class="title__bold">
                  Current
                  <span>Operatinals Amp</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endif;?>

      
<?php  get_template_part('sections/main-testimonials'); ?>
<?php  get_template_part('sections/main-client'); ?>
<?php  get_template_part('sections/main-infomation'); ?>
<?php get_footer(); ?>