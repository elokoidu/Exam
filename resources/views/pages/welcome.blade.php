@extends('layouts.app')
@section('title', '| Avaleht')
@section('content')
    @include('layouts.hero')
    <div class="uk-grid uk-margin-large-left">
    @include('partials._item')
    </div>
@endsection
