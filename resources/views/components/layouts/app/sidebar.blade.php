<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.site_head')
    </head>
    <body>

        {{ $slot }}

        @include('partials.site_footer')
        @fluxScripts
    </body>
</html>
