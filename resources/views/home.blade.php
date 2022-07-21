@extends('layouts.user')

@section('title')
    <title>{{ "HOME".str_replace('APP','',config('app.name')) }}</title>
@endsection

@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no width=device-width">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/display.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="hero homeBackImage">
        <div class="hero-body flex-display">
            <div class="container">
                <h1 class="title">
                    Lilliput Step
                </h1>
                <h2 class="subtitle">
                    - Playing StampRally Game -
                </h2>
            </div>
        </div>
    </section>
@endsection
