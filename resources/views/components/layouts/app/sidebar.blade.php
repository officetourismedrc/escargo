<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.site_head', [
            'title' => $title ?? 'office national du tourisme',
            'metaTitle' => $metaTitle ?? '',
            'description' => $description ?? '',
            'robot' => $robot ?? '',
            'canonical' => $canonical ?? '',
            'language' => $language ?? '',
            'author' => $author ?? '',
            'ogTitle' => $ogTitle ?? '',
            'ogDescription' => $ogDescription ?? '',
            'ogImage' => $ogImage ?? '',
            'ogUrl' => $ogUrl ?? '',
            'ogType' => $ogType ?? '',
            'ogSiteName' => $ogSiteName ?? '',
            'ogLocale' => $ogLocale ?? '',
            'twitterTitle' => $twitterTitle ?? '',
            'twitterDescription' => $twitterDescription ?? '',
            'twitterImage' => $twitterImage ?? '',
            'twitterCard' => $twitterCard ?? '',
            'twitterSite' => $twitterSite ?? '',
            'twitterCreator' => $twitterCreator ?? '',
        ])
    </head>
    <body>

        {{ $slot }}

        @include('partials.site_footer')
        @fluxScripts
    </body>
</html>
