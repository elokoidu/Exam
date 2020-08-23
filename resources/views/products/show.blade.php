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
<div class="uk-margin-large-left uk-margin-medium-bottom">
    {!! Html::linkRoute('products.edit', 'Muuda', array($product->id), array('class' => 'uk-button uk-button-primary')) !!}
    {!! Html::linkRoute('products.destroy', 'Kustuta', array($product->id), array('class' => 'uk-button uk-button-danger')) !!}
</div>
@endsection
