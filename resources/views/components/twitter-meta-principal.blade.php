
<meta name="twitter:card" 
   content="{{ $twitterCard ?? 'summary_large_image' }}">
<meta name="twitter:title" 
   content="{{ $twitterTitle ?? 'Office National du Tourisme RDC - Découvrez les merveilles du Congo' }}">
<meta name="twitter:description" 
   content=" {{ $twitterDescription ?? 'Explorez les trésors naturels et culturels du Congo. Voyagez en toute sérénité avec l’Office National du Tourisme RDC.' }}">
<meta name="twitter:image" 
   content="{{ $twitterImage ?? asset('/images/logo_color_ont_paysage.png') }}">

<meta name="twitter:site" 
   content=" {{ $twitterSite ?? '@OfficetourismeCD' }}">
<meta name="twitter:creator" 
   content=" {{ $twitterCreator ?? '@OfficetourismeCD' }}"> 
<meta name="twitter:url" 
   content=" {{ $twitterUrl ?? url()->current() }}">
