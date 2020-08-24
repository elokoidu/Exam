@extends('layouts.app')
@section('title', '| Infoleht')

@section('content')
    <div class="uk-child-width-expand@s uk-text-center uk-margin-large-top uk-width-1-1">
        <div>
            <div class="uk-card uk-card-default uk-card-body">@include('partials._img')</div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom">@include('partials._text') @include('partials._buy')</div>
        </div>
    </div>
@endsection
