@extends('layouts.app')
@section('title', '| Lisainfo')
@section('content')
    <div class="uk-child-width-expand@s uk-text-center uk-margin-large-top uk-margin-large-left uk-margin-large-right uk-width-1-1" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">@include('partials._img')</div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">@include('partials._text')</div>
        </div>
    </div>
@endsection

