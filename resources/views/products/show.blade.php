@extends('layouts.app')
@section('title', '| Infoleht')

@section('content')
<div class="uk-margin-large-left uk-margin-large-top">
    <h1>{{ $product->nimi }} {{ $product->hind }}</h1>
    <table class="uk-table uk-table-medium uk-table-divider">
        <tbody>
        <tr><td><strong>Tootekood: </strong>{{ $product->tootekood }}</td></tr>
        <tr><td><strong>Tootefoto: </strong>{{ $product->tootefoto }}</td></tr>
        <tr><td><strong>Näitajad: </strong>{{ $product->näitajad }}</td></tr>
        <tr><td><strong>Tootja: </strong>{{ $product->tootja }}</td></tr>
        <tr><td><strong>Kategooria: </strong>{{ $product->kategooria }}</td></tr>
        </tbody>
    </table>
</div>
<div>
    <dt>URL</dt>
    <dd><a href="{{ url($product->slug) }}">{{url($product->slug)}}</a></dd>
</div>
<div class="uk-margin-large-left uk-flex uk-margin-medium-bottom">
    <div class="uk-margin-small-right">{!! Html::linkRoute('products.edit', 'Muuda', array($product->id), array('class' => 'uk-button uk-button-primary')) !!}</div>


    <div class="uk-margin-small-right">{!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
    {!! Form::submit('Kustuta', ['class' => 'uk-button uk-button-danger']) !!}
        {!! Form::close() !!}</div>
    <div class="uk-margin-small-right">{!! Html::linkRoute('products.index', 'Tagasi toodete juurde', array($product->id), array('class' => 'uk-button uk-button-primary')) !!}</div>
</div>
@endsection
