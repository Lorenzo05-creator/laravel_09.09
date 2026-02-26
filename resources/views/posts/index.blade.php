<x-app>
    <h2>Tutti i Post</h2>

    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    @if($post->image)
                        <img src="/storage/{{ $post->image }}" class="card-img-top" alt="Immagine del post">
                    @endif
                    <div class="card-body">
                        <h5>{{ $post->title }}</h5>
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app>
