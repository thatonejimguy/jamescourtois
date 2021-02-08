---
title: Websites
description: The websites
pagination:
    collection: websites
    perPage: 99
---
@extends('_layouts.master')

@section('body')
    <div class="padded">
        <div class="flex flex-col pb-16">
            <h1>Website Portfolio</h1>
            <div class="flex flex-col max-w-6xl">
                <p>Go ahead and take a gander at this list of websites I've developed. Some of these projects were completed 100% by me, others were completed as a team effort. As the front-end developer, it was up to me to translate the design vision into the working digital form, including the back-end content entry, form validation and front end appearance.</p>
                <p>You will see a mix of marketing sites and e-commerce. Almost all of these are WordPress sites built using Advanced Custom Fields, Gravity Forms, Node.js, Composer, and Laravel Blade. </p>
            </div>
        </div>
    </div>

   

    <div class="padded w-full">
        <div class="w-full-plus-16 -mx-8 flex flex-wrap">
            @foreach ($pagination->items as $project)
                @include('_components.post-preview-inline')
            @endforeach
        </div>
    </div>

    @if ($pagination->pages->count() > 1)
        <nav class="pasdded flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-gray-200 hover:bg-gray-400 text-blue-700 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif

    @include('_layouts.cta')
@stop
