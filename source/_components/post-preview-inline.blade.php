<div class="flex flex-col mb-4">
    <p class="font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="font-extrabold"
        >{{ $post->title }}</a>
    </h2>
    <div class="">
        {{-- @php
            var_dump($post);
            
        @endphp --}}
        @foreach ($post->categories as $cat)
    <a href="/blog/categories/{{$cat}}">{{$cat}}</a>
        @endforeach
    </div>

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a>
</div>
