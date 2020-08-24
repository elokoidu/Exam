@extends('layouts.app')
@section('title', '| Uus toode')
@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="uk-grid uk-width-1-5@m uk-margin-xlarge-left uk-margin-large-top">
        <h2 class="">Lisa uus toode</h2>
        <hr>
        <div class="uk-margin-medium-top">
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
        {{ Form::open(array('route' => 'products.store', 'files' => 'true','method' => 'post', 'class' => 'uk-form-controls-text uk-form-width-large')) }}
            {{ Form::label('name', 'Nimi') }}
            {{ Form::text('name', null, array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('price', 'Hind') }}
            {{ Form::number('price', null, array('class' => 'uk-margin-small-top uk-input', 'step'=>'0.1', 'min' => '0')) }}
        <hr>
            {{ Form::label('code', 'Tootekood') }}
            {{ Form::number('code', null, array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('image', 'Tootepilt') }}
            {{ Form::file('image', null, array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('details', 'Näitajad') }}
            {{ Form::text('details', null, array('class' => 'uk-margin-small-top uk-input')) }}
            <hr>
            {{ Form::label('manufacturer', 'Tootja') }}
            {{ Form::text('manufacturer', null, array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('category', 'Kategooria') }}
            {{ Form::select('category', config('enums.categories'), null, array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('slug', 'Slug') }}
            {{ Form::text('slug', null, array('class' => 'uk-margin-small-top uk-input')) }}
            <hr>
            {{ Form::submit('Lisa uus toode', array('class' => 'uk-button uk-button-default uk-margin-medium-bottom')) }}
        {{ Form::close() }}
    </div>
    </div>
@endsection
@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection
