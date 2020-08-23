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
            {{ Form::label('nimi', 'Nimi') }}
            {{ Form::text('nimi', null, array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('hind', 'Hind') }}
            {{ Form::number('hind', null, array('class' => 'uk-margin-small-top uk-input', 'step'=>'0.1', 'min' => '0')) }}
        <hr>
            {{ Form::label('tootekood', 'Tootekood') }}
            {{ Form::number('tootekood', null, array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('tootefoto', 'Tootefoto') }}
            {{ Form::url('tootefoto', null, array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('näitajad', 'Näitajad') }}
            {{ Form::text('näitajad', null, array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('tootja', 'Tootja') }}
            {{ Form::text('tootja', null, array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('kategooria', 'Kategooria') }}
            {{ Form::select('kategooria', ['Monitor', 'Lisatarvikud', 'Emaplaat', 'Kõvaketas', 'Graafikakaart'], array('class' => 'uk-margin-small-top uk-input')) }}
        <hr>
            {{ Form::label('kirjeldus', 'kirjeldus') }}
            {{ Form::text('kirjeldus', null, array('class' => 'uk-margin-small-top uk-input')) }}
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

