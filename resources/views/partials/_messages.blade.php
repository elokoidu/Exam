@if (Session::has('success'))

    <div class="uk-alert-primary" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>{{ Session::get('success') }}</p>
    </div>

@endif

