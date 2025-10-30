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
    <x-hero-section title="RDC: l'Office National du Tourisme à l'heure des prévisions budgétaires 2026"  imageUrl="/images/articles-images/article_11_5.jpeg" />

    <section class="section">
        <div class="container actualite-container">
            <div class="content actualite-content">
                <div class="actualite-title-img">
                    <img class="actualite-title-image" src="{{ asset('/images/articles-images/article_11_4.jpeg')}}" alt="ont prévisions budgétaires pour l'année 2026">
                </div>
                <div class="actualite-text">
                    <div class="actualite-text-meta">
                        <div>
                        <span><i class="fa-solid fa-circle-user"></i></span>
                        <span>Blaise Basomboli</span>
                        </div>
                        <span>27/10/2025</span>
                    </div>

                    <div class="actualite-text-cap">
                        <p>L'Office National du Tourisme s'est mis à l'heure des prévisions budgétaires pour l'année 2026. Ces travaux de trois jours ont débuté ce lundi 27 octobre 2025, au Cercle Elais, dans la commune de la Gombe, au nord de Kinshasa, capitale de la République Démocratique du Congo.</p>
                    </div>
                    <div class="actualite-text-text">
                       
                      
                      <p>L'Office National du Tourisme s'est mis à l'heure des prévisions budgétaires pour l'année 2026. Ces travaux de trois jours ont débuté ce lundi 27 octobre 2025, au Cercle Elais, dans la commune de la Gombe, au nord de Kinshasa, capitale de la République Démocratique du Congo.</p>
                      <p>Le coup d'envoi de ces travaux d'élaboration des prévisions budgétaires a été donné par le Directeur Général Adjoint de l'ONT, Paul Diakiese au nom de madame le Directeur Général Jolie Yombo Mukendi empêchée.</p>

                      <p>
                        <img src="{{ asset('/images/articles-images/article_11_1.jpeg')}}" alt="Directeur Général Adjoint de l'ONT, Paul Diakiese">
                      </p>
                      <p>Peu après, l'allocution d'ouverture du DGA,les participants sont entrés dans le vif du sujet.</p>
                      <p>Les délégués sont venus de différentes directions qui composent cet établissement public. L’argent n'aime pas les bruits dit-on. Mais ici, chaque délégué doit batailler dur pour faire passer le budget de sa direction qu'il est venu non seulement présenter mais aussi et surtout défendre. Les débats sont donc houleux. Chacune des directions intervient suivant le programme établi avant le début des travaux. En dépit de ces débats houleux, les participants à ces travaux d'élaboration des prévisions budgétaires ne perdent pas de vue les orientations du Conseil d'administration leur transmis par la Direction Générale.</p>
                     
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

