@foreach($comics as $ind => $comic)

    <div class="single-comic col-12 col-sm-6 col-md-3 col-lg-2">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

        <div class="text-white py-3 comic-title">
            {{ $comic['title'] }}
        </div>
    </div>

@endforeach
