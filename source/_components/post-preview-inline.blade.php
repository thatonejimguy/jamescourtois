<div class="flex flex-col relative items-start justify-start mb-4 w-full md:w-1/2 xl:w-1/3 px-4 lg:px-8 mb-16 lg:mb-16">
    <a
        href="{{ $project->getUrl() }}"
        title="Read more - {{ $project->title }}"
        class="flex flex-col w-full justify-start items-start  no-underline"
    >
        <span class="slide-up-wrap relative border-2 border-white flex flex-col items-center justify-center hover:border-theme-light transition">
            <img class="block w-full" src="{{$project->cover_image}}" alt="{{$project->title}} Home Page Screenshot">
            <span class="block overlay"></span>
            <span class="slide-up inline-flex bg-theme-light text-white rounded-full border border-theme-light  p-1 px-3 z-30 absolute bottom-0">View Details</span>
        </span>

        <h2 class="underline-animation my-2 text-2xl lg:text-3xl">
        {{ $project->title }}
        </h2>
    
    </a>
    <div class="flex flex-wrap w-full-plus-2 justify-start items-start">
        @if($project->categories)
            @foreach ($project->categories as $i => $category)
                <span class="inline-flex text-xs rounded text-gray-400"
                >{{ $category }}{!! $loop->last ? '' : '&comma;&nbsp;'!!}</span>
            @endforeach
        @endif
    </div>
    
</div>
