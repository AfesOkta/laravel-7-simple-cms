@extends('layouts.contact')


@section('contact')
    @include('partials.app.hero')
    @include('partials.app.contact', ['hasCaptcha' => $hasCaptcha])
@endsection

@if ($hasCaptcha)
    @section('scripts')
        {!! NoCaptcha::renderJs('en') !!}
    @endsection
@endif
