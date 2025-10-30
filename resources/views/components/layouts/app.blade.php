<x-layouts.app.sidebar 

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
        :twitterCreator="$twitterCreator ?? null"    >
  
        {{ $slot }}
        
</x-layouts.app.sidebar>
