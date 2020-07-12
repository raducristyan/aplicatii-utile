@if ( session()->has('flash.body') )

<x-flash.flash color="{{ config('apps.flash.'.session()->get('flash.type')) ?? 'indigo' }}" />

@endif