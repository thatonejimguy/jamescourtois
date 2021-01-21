@extends('_layouts.master')

@php
    $page->type = 'article';
@endphp

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <div class="flex items-center justify-start">
        <h1 class="leading-none mb-2">{{ $page->title }}</h1>
    
        @include('_layouts.btn',
        [
            'url' => $page->url,
            'text' => 'View Live Site'
        ])
    </div>

    @if($page->categories)
        @foreach ($page->categories as $i => $category)
            <span class="inline-block border border-gray-500 leading-loose tracking-wide text-gray-500 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</span>
        @endforeach
    @endif

    <div class="mb-10 pb-4">
        @yield('content')
    </div>
    <div>
    </div>
    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>

    @include('_layouts.cta')
@endsection
