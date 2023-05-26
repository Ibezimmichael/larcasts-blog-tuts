

<x-layout>

    @include('posts._header')


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())

            <x-grid :posts="$posts"/>

        @else

            <h1>No post</h1>

        @endif








        {{-- <div class="lg:grid lg:grid-cols-3">
            @foreach ($posts as $post)
                <x-post-card/>

            @endforeach



        </div> --}}
    </main>
    <div class="mt-6 p-4">
        {{$posts->links()}}
    </div>

</x-layout>
