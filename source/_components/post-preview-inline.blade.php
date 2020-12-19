<div class="flex flex-col relative items-start justify-start mb-4 w-full md:w-1/2 px-4 lg:px-8 mb-8 lg:mb-16">
    <a
        href="{{ $project->getUrl() }}"
        title="Read more - {{ $project->title }}"
        class="flex flex-col w-full justify-start items-start"
    >
        <div class="relative border-2 border-white flex flex-col items-center justify-center">
            <img class="block w-full" src="{{$project->cover_image}}" alt="{{$project->title}}">
            <div class="overlay"></div>
            <div class="hidden text-theme-light rounded-full border border-theme-light  p-1 px-3 z-30 absolute bottom-0">View Details</div>
        </div>

        <h2>
            {{ $project->title }}
        </h2>
    
    </a>
    <div class="flex flex-wrap w-full-plus-2 -mx-1 justify-start items-start ">
        @if($project->categories)
            @foreach ($project->categories as $i => $category)
                <span class="inline-flex bg-gray-300 leading-loose text-theme-dark text-xs m-1 rounded px-1"
                >{{ $category }}</span>
            @endforeach
        @endif
    </div>
    
</div>
