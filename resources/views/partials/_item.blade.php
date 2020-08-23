@foreach($products as $product)
    <div class="uk-grid-small">
        <div
            class="uk-card uk-card-small uk-card-default uk-align-center uk-margin-large-top uk-width-medium uk-card-hover uk-text-center">
            <div class="uk-card-media-top uk-card-header">
                <a href="/detail"><img src="{{ $product->tootefoto }}" alt="Image"></a>
                <button class="uk-button uk-button-primary uk-card-badge"><a href="#" uk-icon="icon: cart"></a></button>
            </div>
            <div class="uk-card uk-card-body">
                <a href="{{ url('products/'.$product->slug) }}"><h2 class="uk-card-title">{{ $product->nimi }}
                        <br>{{ $product->hind }}</h2></a>
                <p>{{ substr($product->kirjeldus, 0, 40) }} {{ strlen($product->kirjeldus) > 40 ? '...' : '' }}</p>
            </div>
        </div>
    </div>
@endforeach

