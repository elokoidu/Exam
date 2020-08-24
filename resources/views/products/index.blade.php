@extends('layouts.app')
@section('title', '| Kõik tooted')

@section('content')

<div class="uk-margin-large-top uk-margin-large-left">
    <h1>Kõik tooted</h1>
    <a href="{{ route('products.create') }}"><button class="uk-button uk-button-primary">Lisa uus toode</button></a>
</div>
    <div class="uk-visible@l uk-margin-medium-top">
        <table class="uk-table uk-margin-large-left uk-width-1-1 uk-margin-small-right">
            <thead>
                <th>#</th>
                <th>Nimi</th>
                <th>Hind</th>
                <th>Tootekood</th>
                <th>Tootefoto</th>
                <th>Näitajad</th>
                <th>Tootja</th>
                <th>Kategooria</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ substr($product->details, 0, 40) }} {{ strlen($product->details) > 40 ? '...' : '' }}</td>
                    <td>{{ $product->manufacturer }}</td>
                    <td>{{ $product->category }}</td>
                    <td><a href="{{ route('products.show', $product->id) }}" class="uk-button uk-button-primary uk-button-small">Vaata</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="uk-button uk-button-primary uk-button-small">Muuda</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="uk-pagination uk-flex uk-flex-center uk-text-large uk-margin-medium-top">
            {!! $products->render(); !!}
        </div>
    </div>
<div class="uk-hidden@l uk-visible@m uk-width-1-1 uk-margin-medium-left">
    <table class="uk-table">
        <thead>
        <th>#</th>
        <th>Nimi</th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ substr($product->name, 0, 15) }}</td>
                <td>{{ substr($product->details, 0, 30) }} {{ strlen($product->details) > 30 ? '...' : '' }}</td>
                <td><a href="{{ route('products.show', $product->id) }}" class="uk-button uk-button-primary uk-button-small">Vaata</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="uk-button uk-button-primary uk-button-small">Muuda</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="uk-pagination uk-flex uk-flex-center uk-text-large uk-margin-medium-top">
        {!! $products->render(); !!}
    </div>
</div>
<div class="uk-hidden@m uk-width-1-1 uk-margin-medium-left">
    <table class="uk-table">
        <thead>
        <th>#</th>
        <th>Nimi</th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ substr($product->name, 0, 25) }}</td>
                <td><a href="{{ route('products.show', $product->id) }}" class="uk-button uk-button-primary uk-button-small">Vaata</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="uk-button uk-button-primary uk-button-small">Muuda</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="uk-pagination uk-flex uk-flex-center uk-text-small uk-margin-medium-top">
        {!! $products->render(); !!}
    </div>
</div>
@endsection
