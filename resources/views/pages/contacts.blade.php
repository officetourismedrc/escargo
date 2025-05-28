<x-layouts.app :title="__('ok')">
 <!-- hero sectipn -->
        {{-- <section class="hero-simple-desc">
            <div class="hero-simple-banner">
                <div class="hero-simple_content">
                    <div>
                    <img src="{{asset('/images/16280.jpg')}}" alt="" class="hero-simple_img">
                    </div>
                </div>

            
                    <div class="hero-desc-container">
                        <span class="hero-simple-desc-title">
                           
                        </span>
                    </div>
                </div>
    </section> --}}
       <!-- ========  start section about us  ============== -->

            
        <section class="section page-section-top">
            
       <div class="container contact-container">
         <h1 class="title_1">Contactez-nous</h1>

         <div class="content contact-content">

            <h2 class="title_2">Vous avez des questions ou souhaitez obtenir des informations, n’hésitez pas à nous contacter.</h2>

            <div class="item-container">
                <div class="card-item-top">
                    <div class="top-card-item-container">
                       <i class="fi fi-rr-envelope"></i>
                    </div>
                    <div class="top-card-item-container_title">
                        <h2 class="title_2">Adresse Mail</h2>
                    </div>
                    <div class="top-card-item-container-list">
                        <ul>
                            <li>info@tourismerdc.cd</li>
                            <li>contact@tourismerdc.cd</li>
                        </ul>
                    </div>
                 </div>

                 <div class="card-item-top">
                    <div class="top-card-item-container">
                        <i class="fi fi-rr-phone-call"></i>
                    </div>
                    <div class="top-card-item-container_title">
                        <h2 class="title_2">Numero de Téléphone</h2>
                    </div>
                    <div class="top-card-item-container-list">
                        <ul>
                            <li>(+243) 815 780 217</li>
                            <li>(+243) 854 628 621</li>
                        </ul>
                    </div>
                 </div>

                 <div class="card-item-top">
                    <div class="top-card-item-container">
                       <i class="fi fi-sr-marker"></i>
                    </div>
                    <div class="top-card-item-container_title">
                        <h2 class="title_2">Adresse locale</h2>
                    </div>
                    <div class="top-card-item-container-list">
                        <ul>
                            <li>AV. LUKUSA N.16C C. KINSHASA/GOMBE. B.P 9502, KINSHASA</li>
                           
                        </ul>
                    </div>
                 </div>

                 <div class="card-item-top">
                    <div class="top-card-item-container">
                        <i class="fi fi-rr-clock-three"></i>
                    </div>
                    <div class="top-card-item-container_title">
                        <h2 class="title_2">Nos horaires</h2>
                    </div>
                    <div class="top-card-item-container-list">
                        <ul>
                            <li>Lundi au Vendredi</li>
                            <li>8h30 - 15h30</li>
                        </ul>
                    </div>
                 </div>

            </div>
            <div class="item-container-mid">

                <div class="item-content-mid">
                    <div class="item-container-mid-left">
                        <h1 class="title_1">Nous laisser un message</h1>
                        <h2 class="title_2">Votre opinion nous est précieuse, alors contactez-nous dès aujourd’hui, nous serions ravis de vous lire.</h2>
                        <form class="item-container-mid-left-content">

                            <div class="item-container-mid-left-content-1">

                                <div class="item-container-mid-left-content-1-1">

                                    <input type="text" mame="first-name" placeholder="first name">
                                    <input type="text" mame="first-name" placeholder="adress">
                                </div>
                                <div class="item-container-mid-left-content-1-2">

                                     <input type="text" mame="first-name" placeholder="numero de telephone">
                                     <input type="text" mame="first-name" placeholder="sujet">
                                </div>
                            </div>
                            <div class="item-container-mid-left-content-2">

                                <textarea name="user-text" id="" placeholder="votre message">

                                </textarea>
                            </div>
                            <div class="item-container-mid-left-content-3">

                                <button>Envoyer</button>
                            </div>
                        </form>
                    </div>
                     <div class="item-container-mid-right">
                        <img src="{{asset('/images/27071.jpg')}}" alt="">
                     </div>
                </div>
            </div>
            <div class="item-container-bottom">

                <h1 class="title_1">Notre Localisation</h1>
                <div class="item-content-bottom">

                    <h2 class="title_2">Retrouvez-nous facilement grâce à la carte ci-dessous et aux informations de localisation. Nous serons ravis de vous accueillir.</h2>
                    <div class="item-content-bottom-map">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.5779152328255!2d15.298964485917933!3d-4.301838135183271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a338ca0a87a23%3A0x5ef8f81c84fb395!2sNational%20Tourism%20Office%20%2F%20DRC!5e0!3m2!1sen!2scd!4v1748255039241!5m2!1sen!2scd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
         </div>
       </div>
        </section>

 
</x-layouts.app>