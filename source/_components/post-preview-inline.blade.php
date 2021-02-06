<div class="flex flex-col slide-up-wrap relative items-start justify-start mb-4 w-full md:w-1/2 lg:w-1/3 px-4 lg:px-8 mb-16 lg:mb-16">
    <a
        href="{{ $project->getUrl() }}"
        title="View details - {{ $project->title }}"
        class="flex flex-col w-full justify-start items-start  no-underline"
    >
        <span class="slide-up-wrap relative border-2 border-white flex flex-col items-center justify-center hover:border-theme-light transition">
            <img class="block w-full" src="{{$project->cover_image}}" alt="{{$project->title}} Home Page Screenshot">
            <span class="block overlay"></span>
            <span class="slide-up inline-flex bg-theme-light text-theme-dark rounded-full border border-theme-dark  p-1 px-2 text-sm z-30 absolute bottom-0">View Details</span>
        </span>

        <h2 class="underline-animation my-2 text-2xl lg:text-3xl">
        {{ $project->title }}
        </h2>
    
    </a>
    {{-- <div class="flex flex-wrap w-full-plus-2 justify-start items-start">
        @if($project->categories)
            @foreach ($project->categories as $i => $category)
                <span class="inline-flex text-xs text-gray-400"
                >{{ $category }}{!! $loop->last ? '' : '&comma;&nbsp;'!!}</span>
            @endforeach
        @endif
    </div> --}}
    
</div>
