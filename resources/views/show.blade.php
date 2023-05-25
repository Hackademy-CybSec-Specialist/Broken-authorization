<x-layout title="{{ $post->title }}">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p>{{ $post->content }}</p>

                <div class="text-center my-5">
                    <a href="{{ route('homepage') }}" class="btn btn-primary">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>