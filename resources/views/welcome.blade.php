<x-layout title="Broken Authorization - OWASP Top 10">

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach($posts as $post)
                <div class="col-12 col-md-2">
                    <a href="{{ route('show', compact('post')) }}" class="btn btn-primary">Leggi "{{ $post->title }}"</a>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>