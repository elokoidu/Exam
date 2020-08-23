@extends('layouts.app')
@section('title', '| Muuda toodet')

@section('content')
<div class="uk-margin-large-left uk-margin-large-top">
    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
        <h1>{{ $product->nimi }} {{ $product->hind }}</h1>
        <table class="uk-table uk-table-medium uk-table-divider uk-table-justify">
            <tbody>
            <tr><td><strong>Tootekood: </strong>{{ Form::number('tootekood', null, ['class' => 'form-control']) }}</td></tr>
            <tr><td><strong>Tootefoto: </strong>{{ Form::text('tootefoto', null, ['class' => 'form-control']) }}</td></tr>
            <tr><td><strong>Näitajad: </strong>{{ Form::textarea('näitajad', null, ['class' => 'form-control']) }}</td></tr>
            <tr><td><strong>Tootja: </strong>{{ Form::text('tootja', null, ['class' => 'form-control']) }}</td></tr>
            <tr><td><strong>Kategooria: </strong>{{ Form::select('kategooria', ['Monitor', 'Lisatarvikud', 'Emaplaat', 'Kõvaketas', 'Graafikakaart'], ['class' => 'form-control']) }}</td></tr>
            <tr><td><strong>Kirjeldus: </strong>{{ Form::textarea('Kirjeldus', null, ['class' => 'form-control']) }}</td></tr>
            </tbody>
        </table>
</div>
<div class="uk-margin-large-left uk-margin-medium-bottom">
        {!! Html::linkRoute('products.show', 'Tühista', array($product->id), array('class' => 'uk-button uk-button-danger')) !!}
        {{ Form::submit('Salvesta muudatused', ['class' => 'uk-button uk-button-primary']) }}
    {!! Form::close() !!}
</div>
@endsection
