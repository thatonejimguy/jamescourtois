@extends('_layouts.master')

@php
    $page->type = 'article';
@endphp

@section('body')
    <div class="padded flex flex-col lg:flex-row w-full justify-between">
        <div class="mb-12 pr-16">
            <h1 class="leading-none m-0 mb-4">{{ $page->title }}</h1>
    
            @include('_layouts.btn',
            [
                'url' => $page->url,
                'text' => 'View Live Site',
                'class' => 'mb-6'
            ])
            
            <div class="w-full leading-tight mb-8">
                @if($page->categories)
                    @foreach ($page->categories as $i => $category)
                        <span class="inline-flex text-gray-400 text-xs"
                        >{{ $category }}{!! $loop->last ? '' : '&comma;&nbsp;'!!}</span>
                    @endforeach
                @endif
            </div>
            @yield('content')
        </div>
    
        @if ($page->cover_image)
            <a class="no-underline" href="{{ $page->url }}"><img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image self-end" class="mb-2"></a>
        @endif
    </div>

    <div>
    </div>
    <nav class="flex items-center justify-between my-8 padded py-8 bg-gray-800">
        <div>
            @if ($next = $page->getNext())
                <a class="text-xs" href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; View details for {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a class="text-xs" href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    View details for {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>

    @include('_layouts.cta')
@endsection
