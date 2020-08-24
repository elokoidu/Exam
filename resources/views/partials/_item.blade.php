@foreach($products as $product)
<div class="uk-card uk-card-small uk-card-default uk-margin-large-left uk-margin-large-top uk-width-medium uk-card-hover uk-text-center">
    <div class="uk-card-media-top uk-card-header">
        <a href="{{ url('products/'.$product->slug) }}"><img src="{{url('/storage/upload/' . $product->image)}}" alt="Image"></a>
        <button class="uk-button uk-button-primary uk-card-badge"><a href="#" uk-icon="icon: cart"></a></button>
    </div>
    <div class="uk-card uk-card-default uk-card-body">
        <a href="{{ url('products/'.$product->slug) }}"><h2 class="uk-card-title uk-align-center">{{ $product->name }} <br>{{ $product->price }}</h2></a>
        <p>{{ substr($product->details, 0, 25) }} {{ strlen($product->details) > 25 ? '...' : '' }}</p>
    </div>
</div>
@endforeach
