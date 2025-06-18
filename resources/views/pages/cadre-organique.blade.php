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
                           <p class="cadre-organique-text">Le “Cadre organique” est le document de référence qui définit l’architecture institutionnelle, les missions et les responsabilités de chaque service de l’Office National du Tourisme (ONT). </p>
                           
                           <div class='cadre-organique-text_block'>
                               <h2 class='cadre-organique-text_sub-title'>Véritable charte interne, il structure l’action publique en garantissant :  </h2>

                                <ul class='cadre-organique-text_list-block' style='padding-left: 1rem'>
                                    <li class='cadre-organique-text_list-item'>La répartition claire des rôles et des attributions, </li>
                                    <li class='cadre-organique-text_list-item'>La cohérence des processus de décision et de pilotage,  </li>
                                    <li class='cadre-organique-text_list-item'>La conformité aux normes légales et réglementaires en vigueur.</li>
                                </ul>
                           </div>
                           <h2 class='cadre-organique-text_sub-title' >POURQUOI UN CADRE ORGANIQUE EST-IL ESSENTIEL POUR UN ÉTABLISSEMENT PUBLIC ?</h2>

                           <div class='cadre-organique-text_block'>
                              <h2>1. Transparence et gouvernance </h2>
                              <p>En formalisant l’organigramme et les procédures, il instaure une gouvernance limpide à destination des parties prenantes (État, partenaires, citoyens). Chaque acteur connaît son périmètre d’intervention et les modalités de contrôle interne.</p>
                           </div>

                            <div class='cadre-organique-text_block'>
                              <h2>2. Efficacité opérationnelle   </h2>
                              <p>En décrivant les missions et les interactions entre services (promotion, marketing, partenariats, formation), le document évite les doublons, fluidifie les échanges et accélère la mise en œuvre des projets dans le domaine touristique.</p>
                           </div>

                            <div class='cadre-organique-text_block'>
                              <h2>3. Pérennité et responsabilité  </h2>
                              <p>Il ancre les principes de durabilité, de conservation du patrimoine et d’engagement communautaire dans les statuts. Et dans le cas de l’ONT,  il l’engage à rendre compte de ses résultats et à partager les bénéfices de la croissance touristique avec les populations locales.</p>
                           </div>
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

     


  {{-- <!-- @include('articles.article_recommander') --> --}}
</x-layouts.app>
