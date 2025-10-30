<x-layouts.app 

   :title="$title ?? null"
        :metaTitle="$metaTitle ?? null" 
        :description="$description ?? null" 
        :robot="$robot ?? null" 
        :canonical="$canonical ?? null" 
        :language="$language ?? null" 
        :author="$author ?? null" 
        :ogTitle="$ogTitle ?? null" 
        :ogDescription="$ogDescription ?? null"  
        :ogImage="$ogImage ?? null" 
        :ogUrl="$ogUrl ?? null" 
        :ogType="$ogType ?? null" 
        :ogSiteName="$ogSiteName ?? null" 
        :ogLocale="$ogLocale ?? null" 
        :twitterTitle="$twitterTitle ?? null"  
        :twitterDescription="$twitterDescription ?? null" 
        :twitterImage="$twitterImage ?? null" 
        :twitterCard="$twitterCard ?? null" 
        :twitterSite="$twitterSite ?? null" 
        :twitterCreator="$twitterCreator ?? null" 
>
  <x-hero-section title="Guide touristique, un métier à l'honneur le 21 février" imageUrl="/images/articles-images/AfRLWYCrvVYi4vxGQDHXJpW3Lh3oMs7shyBfnI4Y.jpg.jpg" />
  

      
  <section class="section">
    <div class="container actualite-container">
        <div class="content actualite-content">
            <div class="actualite-title-img">
                <img class="actualite-title-image" src="{{asset('/images/articles-images/AfRLWYCrvVYi4vxGQDHXJpW3Lh3oMs7shyBfnI4Y.jpg.jpg')}}" alt="">
            </div>
            <div class="actualite-text">
                <div class="actualite-text-meta">
                    <div>
                    <span><i class="fa-solid fa-circle-user"></i></span>
                    <span>Blaise Basomboli</span>
                    </div>
                    <span>23/03/2025</span>
                </div>

                <div class="actualite-text-cap">
                    <p>Le monde entier a célébré le 21 février la journée internationale de guide touristique. </p>
                </div>
                <div class="actualite-text-text">
                    
                    <p>En République Démocratique du Congo, la célébration de cette journée est l'occasion d'honorer ces ambassadeurs de notre patrimoine, qui partagent avec passion la beauté et l'histoire de notre pays. </p>
                    <p>En dépit du déficit des moyens auquel ils font face, les guides touristiques font de leur mieux pour faire connaître aux touristes la richesse de notre potentiel touristique. Ils racontent entre autre l'histoire des lieux visités, son patrimoine, ses traditions culinaires, culturelles et tant d'autres aspects. Ils font preuve de dévouement et de savoir-faire. </p>
                    <p>Ces guides touristiques permettent aux touristes de visiter les sites touristiques d'une ville. Dans le même temps, ils présentent et vendent les produits touristiques. Ils le font lors des circuits touristiques dont ils ont la maîtrise. </p>
                    <p></p>
                    
                </div>
            </div>
            <div class="actualite-meta">
                <div class="actualite-meta-tags">
                    <span class="actualite-meta-tags-item" >tourisme</span>
                    <span class="actualite-meta-tags-item" >ont</span>
                    <span class="actualite-meta-tags-item" >congo</span>
                    <span class="actualite-meta-tags-item" >RDC</span>
                    <span class="actualite-meta-tags-item" >anapi</span>
                    <span class="actualite-meta-tags-item" >Jolie</span>
                    <span class="actualite-meta-tags-item" >RD Congo</span>
                </div>
                <div class="actualite-share">
                    <span>Partagerer</span>
                    <div>
                    <span><i class="fa-brands fa-facebook-f"></i></span>
                    <span><i class="fa-brands fa-x-twitter"></i></span>
                    <span><i class="fa-brands fa-linkedin-in"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  @include('articles.article_recommander')
</x-layouts.app>


