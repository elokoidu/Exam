@foreach($products as $product)
<div class="uk-card uk-card-default uk-margin-large-left uk-margin-large-top uk-width-medium">
    <div class="uk-card-media-top uk-card-header">
        <img src="{{ $product->tootefoto }}" alt="Image">
        <button class="uk-button uk-button-primary uk-card-badge"><a href="#" uk-icon="icon: cart"></a></button>
    </div>
    <div class="uk-card uk-card-default uk-card-body">
        <a href="#"><h2 class="uk-card-title">{{ $product->nimi }} {{ $product->hind }}</h2></a>
        <p>{{ substr($product->näitajad, 0, 50) }}</p>
    </div>
</div>
@endforeach
