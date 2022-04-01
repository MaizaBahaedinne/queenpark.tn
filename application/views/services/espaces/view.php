<div data-elementor-type="wp-page" data-elementor-id="1637" class="elementor elementor-1637" data-elementor-settings="[]">
   <div class="elementor-section-wrap">
      <section class="elementor-section elementor-top-section elementor-element elementor-element-7626dbd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7626dbd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style='background-image: url("<?php echo base_url() ?>assets/img/salle/<?php echo $salle->photo ?>"); background-position: center; '>
         <div class="elementor-background-overlay" ></div>
         <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b64ac81" data-id="b64ac81" data-element_type="column">
               <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-3d03e1f elementor-widget elementor-widget-heading" data-id="3d03e1f" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Espace</h2>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-f34c28f elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-id="f34c28f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="icon-list.default">
                     <div class="elementor-widget-container">
                        <ul class="elementor-icon-list-items elementor-inline-items">
                           <li class="elementor-icon-list-item elementor-inline-item">
                              <span class="elementor-icon-list-text">Espace</span>
                           </li>
                           <li class="elementor-icon-list-item elementor-inline-item">
                              <span class="elementor-icon-list-icon">
                              <i aria-hidden="true" class="fas fa-chevron-right"></i>						</span>
                              <span class="elementor-icon-list-text"><?php echo  $salle->nom ?></span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
     
      <section class="elementor-section elementor-top-section elementor-element elementor-element-ac1a76c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ac1a76c" data-element_type="section">
         <div class="elementor-background-overlay"></div>
         <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f15706f" data-id="f15706f" data-element_type="column">
               <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-cb89006 elementor-invisible elementor-widget elementor-widget-jkit_heading" data-id="cb89006" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="jkit_heading.default">
                     <div class="elementor-widget-container">
                        <div  class="jeg-elementor-kit jkit-heading  align-center align-tablet-left align-mobile-left jeg_module_1637_14_6240513eca283" >
                           <h3 class="heading-section-subtitle  style-color">Notre galerie</h3>
                           <div class="heading-section-title ">
                              <h2 class="heading-title">capturé avec amour</h2>
                           </div>
                           <div class="heading-section-description">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <section class="elementor-section elementor-inner-section elementor-element elementor-element-ae252c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="ae252c6" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                     <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4a32dca" data-id="4a32dca" data-element_type="column">
                           <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-8b3b84d elementor-widget elementor-widget-jkit_gallery" data-id="8b3b84d" data-element_type="widget" data-widget_type="jkit_gallery.default">
                                 <div class="elementor-widget-container">
                                    <div  class="jeg-elementor-kit jkit-gallery layout-overlay jeg_module_1637_15_6240513ed09b8"  data-grid="masonry" data-id="jeg_module_1637_15_6240513ed09b8" data-per-page="6" data-load-more="0" data-current-loaded="6" data-count-items="6" data-animation-duration="500" data-no-more="No More Item" >
                                    <div class="gallery-items">
                                       
                                        <?php
                                             $dir = "./assets/img/salle/gallery/elila/";
                                             $dir1 = base_url()."/assets/img/salle/gallery/elila/";
                                            
                                             chdir($dir);
                                             array_multisort(array_map('filemtime', ($files = glob("*.{jpg,png,gif}", GLOB_BRACE))), SORT_DESC, $files);
                                             foreach($files as $filename)
                                             { echo $filename ; ?>

                                            
                                          <?php } 
                                          ?>


                                      
                                        <div class="gallery-item-wrap ">
                                                <div class="grid-item">
                                                   <div class="thumbnail-wrap">
                                                      <img src="<?php echo base_url() ?>assets/img/salle/gallery/elila/IMG_4028.JPG" ></div>
                                                   <a href="<?php echo base_url() ?>assets/img/salle/gallery/elila/IMG_4028.JPG" class="gallery-link"data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="jkit_gallery_lightbox_jeg_module_1637_15_6240513ed09b8" >
                                                      <div class="caption-wrap style-overlay overlay-fade">
                                                         <div class="item-hover-bg"></div>
                                                         <div class="item-caption-over">
                                                            <h5 class="item-title"></h5>
                                                            <div class="item-content"></div>
                                                         </div>
                                                         <div class="caption-head"></div>
                                                         <div class="caption-category"></div>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                          
                                     
                                       
                                    </div>
                                    <div class="load-more-items"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               </section>
            </div>
         </div>
   </div>
   </section>


      <section class="elementor-section elementor-top-section elementor-element elementor-element-e280e3b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e280e3b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
         <div class="elementor-background-overlay"></div>
         <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-2cedb92 elementor-invisible" data-id="2cedb92" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:100}">
               <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-24566fd elementor-widget elementor-widget-jkit_fun_fact" data-id="24566fd" data-element_type="widget" data-widget_type="jkit_fun_fact.default">
                     <div class="elementor-widget-container">
                        <div  class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_1637_10_6240513ec68b4" >
                           <div class=fun-fact-inner>
                              <div class="icon elementor-animation-"><i aria-hidden="true" class="jki jki-handshake-light"></i></div>
                              <div class="content">
                                 <div class="number-wrapper">
                                    <span class="number" data-value="125" data-animation-duration="3500">0</span>
                                    <sup class="super">+</sup>
                                 </div>
                                 <h2 class="title">Projects Done</h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c5dae59 elementor-invisible" data-id="c5dae59" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:200}">
               <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-7208ed2 elementor-widget elementor-widget-jkit_fun_fact" data-id="7208ed2" data-element_type="widget" data-widget_type="jkit_fun_fact.default">
                     <div class="elementor-widget-container">
                        <div  class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_1637_11_6240513ec75c5" >
                           <div class=fun-fact-inner>
                              <div class="icon elementor-animation-"><i aria-hidden="true" class="jki jki-smile-wink-solid"></i></div>
                              <div class="content">
                                 <div class="number-wrapper">
                                    <span class="number" data-value="200" data-animation-duration="3500">0</span>
                                    <sup class="super">+</sup>
                                 </div>
                                 <h2 class="title">Customer Happy</h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-9b5dfc5 elementor-invisible" data-id="9b5dfc5" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:300}">
               <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-dc47de6 elementor-widget elementor-widget-jkit_fun_fact" data-id="dc47de6" data-element_type="widget" data-widget_type="jkit_fun_fact.default">
                     <div class="elementor-widget-container">
                        <div  class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_1637_12_6240513ec81e2" >
                           <div class=fun-fact-inner>
                              <div class="icon elementor-animation-"><i aria-hidden="true" class="jki jki-badge"></i></div>
                              <div class="content">
                                 <div class="number-wrapper">
                                    <span class="number" data-value="199" data-animation-duration="3500">0</span>
                                    <sup class="super">+</sup>
                                 </div>
                                 <h2 class="title">Service Guarantee</h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-04da0c8 elementor-invisible" data-id="04da0c8" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:400}">
               <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-432a613 elementor-widget elementor-widget-jkit_fun_fact" data-id="432a613" data-element_type="widget" data-widget_type="jkit_fun_fact.default">
                     <div class="elementor-widget-container">
                        <div  class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_1637_13_6240513ec8dd1" >
                           <div class=fun-fact-inner>
                              <div class="icon elementor-animation-"><i aria-hidden="true" class="jki jki-team-2-line"></i></div>
                              <div class="content">
                                 <div class="number-wrapper">
                                    <span class="number" data-value="99" data-animation-duration="3500">0</span>
                                    <sup class="super">+</sup>
                                 </div>
                                 <h2 class="title">Team Experts</h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
  
   <section class="elementor-section elementor-top-section elementor-element elementor-element-7e8d1c7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7e8d1c7" data-element_type="section">
      <div class="elementor-container elementor-column-gap-no">
         <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-28b0b80" data-id="28b0b80" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
               <section class="elementor-section elementor-inner-section elementor-element elementor-element-f55bc07 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f55bc07" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8dff41d" data-id="8dff41d" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-76c188a elementor-invisible elementor-widget elementor-widget-jkit_accordion" data-id="76c188a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="jkit_accordion.default">
                              <div class="elementor-widget-container">
                                 <div  class="jeg-elementor-kit jkit-accordion style-default jeg_module_1637_18_6240513eda0a0" >
                                  
                                  <div class="accordion" id="accordionExample">
                                   <div class="card">
                                     <div class="card-header" id="headingOne">
                                       <h2 class="mb-0">
                                         <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           Collapsible Group Item #1
                                         </button>
                                       </h2>
                                     </div>

                                     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                       <div class="card-body">
                                         Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                       </div>
                                     </div>
                                   </div>
                                   <div class="card">
                                     <div class="card-header" id="headingTwo">
                                       <h2 class="mb-0">
                                         <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                           Collapsible Group Item #2
                                         </button>
                                       </h2>
                                     </div>
                                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                       <div class="card-body">
                                         Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                       </div>
                                     </div>
                                   </div>
                                   <div class="card">
                                     <div class="card-header" id="headingThree">
                                       <h2 class="mb-0">
                                         <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           Collapsible Group Item #3
                                         </button>
                                       </h2>
                                     </div>
                                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                       <div class="card-body">
                                         Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-94bde5b" data-id="94bde5b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-913c59d elementor-invisible elementor-widget elementor-widget-jkit_heading" data-id="913c59d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="jkit_heading.default">
                              <div class="elementor-widget-container">
                                 <div  class="jeg-elementor-kit jkit-heading  align-left align-tablet-left align-mobile-left jeg_module_1637_19_6240513edb1cc" >
                                    <h3 class="heading-section-subtitle  style-color">Faq</h3>
                                    <div class="heading-section-title ">
                                       <h2 class="heading-title">General Question</h2>
                                    </div>
                                    <div class="heading-section-description">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-95e18a4 elementor-invisible elementor-widget elementor-widget-jkit_button" data-id="95e18a4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="jkit_button.default">
                              <div class="elementor-widget-container">
                                 <div  class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_1637_20_6240513edbbb1" ><a href="#"  class="jkit-button-wrapper">SEE MORE</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </section>
</div>
</div>