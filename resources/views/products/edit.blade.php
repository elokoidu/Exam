@extends('layouts.app')
@section('title', '| Muuda toodet')

@section('content')
<div class="uk-margin-large-left uk-margin-large-top">
    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        <h1>{{ $product->name }} {{ $product->price }}</h1>
        <table class="uk-table uk-table-medium uk-table-divider uk-table-justify">
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
            <tbody>
            <tr><td><strong>Tootekood: </strong>{{ Form::number('code', null, ['class' => 'form-control']) }}</td></tr>
            <tr><td><strong>Tootefoto: </strong>{{ Form::file('image', null, ['class' => 'form-control']) }}</td></tr>
            <tr><td><strong>Näitajad: </strong>{{ Form::textarea('details', null, ['class' => 'form-control']) }}</td></tr>
            <tr><td><strong>Tootja: </strong>{{ Form::text('manufacturer', null, ['class' => 'form-control']) }}</td></tr>
            <tr><td><strong>Kategooria: </strong>{{ Form::select('category', config('enums.categories'), array_search($product->category, config('enums.categories')), ['class' => 'form-control']) }}</td></tr>
            </tbody>
        </table>
</div>
<div class="uk-margin-large-left uk-margin-medium-bottom">
        {!! Html::linkRoute('products.show', 'Tühista', array($product->id), array('class' => 'uk-button uk-button-danger')) !!}
        {{ Form::submit('Salvesta muudatused', ['class' => 'uk-button uk-button-primary']) }}
    {!! Form::close() !!}
</div>
@endsection
