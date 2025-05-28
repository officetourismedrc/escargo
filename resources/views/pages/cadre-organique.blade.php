<x-layouts.app :title="__('ok')">
  {{-- <x-hero-section title="CADRE ORGANIQUE" /> --}}
 


        <!-- hero sectipn -->
        <section class="hero-simple-desc">
            <div class="hero-simple-banner">
                <div class="hero-simple_content">
                    <div>
                    <img src="{{ asset('/images/lolabonobo3.jpg')}}" alt="" class="hero-simple_img">
                    </div>
                </div>

            
                    <div class="hero-desc-container">
                        <span class="hero-simple-desc-title">
                            CADRE ORGANIQUE
                        </span>
                    </div>
                </div>
    </section>
       <!-- ========  star cadre organique   ============== -->
            <section class="section section_cadre-organique">
                
                <div class="container container_cadre-organique">
                    <span class="title_1">Cadre Organique <br /> de l'Office National du Tourisme</span>
                    <div class="content content_cadre-organique">
                        <div class="cadre-organique_left">
                           <p class="cadre-organique-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis veritatis architecto, earum nemo perferendis eum voluptatum, molestias tenetur itaque autem quia, sed dignissimos modi ad cumque praesentium illo cupiditate dolores dolorem non animi atque.</p>
                           <p class="cadre-organique-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam natus eveniet modi, explicabo voluptate corporis ad voluptas ullam, aliquid laborum esse, velit veniam vel. Cumque excepturi saepe et, itaque perspiciatis illo repudiandae numquam non!</p>
                           <p class="cadre-organique-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eum, molestiae harum laboriosam doloremque placeat nihil accusamus sunt excepturi laudantium expedita voluptatem obcaecati dignissimos officia a blanditiis! Cum, soluta distinctio quam quasi error repellat.</p>
                        </div>
                        <div class="cadre-organique_right">
                           <div class="cadre-organique_right_image">
                            <div>
                              <img src="{{ asset('/images/cadre-organique.png')}}" alt="" class="cadre-organique-right_img">
                            </div>
                           </div>

                           <div class="cadre-organique-right_cta">
                              <button class="cadre-organique-right_button"><span>Telecharger</span><span><img src="{{ asset('/images/icons/download-white.png')}}" alt=""></span></button>
                           </div>
                        </div>
                    </div>
                </div>

            </section>

     


  @include('articles.article_recommander')
</x-layouts.app>
