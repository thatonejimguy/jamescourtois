<div class="flex flex-wrap mb-4 w-full md:w-1/2 lg:w-1/3 px-2">
    <a
        href="{{ $project->getUrl() }}"
        title="Read more - {{ $project->title }}"
        class="flex flex-col w-full justify-start items-start"
    >
        <img class="block w-full" src="{{$project->cover_image}}" alt="{{$project->title}}">

        <h2>
            {{ $project->title }}
        </h2>
    
    </a>
    <div class="flex w-full justify-start items-start">
        @if($project->categories)
            @foreach ($project->categories as $i => $category)
                <span class="inline-block bg-gray-300 leading-loose text-theme-dark text-xs mr-4 p-2"
                >{{ $category }}</span>
            @endforeach
        @endif
    </div>
</div>
