
@extends('_layouts.master')

@section('body')


<div class="w-full h-auto lg:min-h-600 pb-24 flex flex-col items-center justify-center w-full">
    <div class="flex flex-col md:flex-row items-stretch justify-center relative w-full">
  
        @include('_layouts.jim',['class'=>'home-page'])
      
        <div class="text-left flex flex-col flex-1 items-center md:items-start md:pl-8 lg:items-end justify-center relative z-40 pt-4 md:pt-0">      
            <h1 class="home-title">            
                    <span>James</span> <br /><span>Courtois</span>            
            </h1>
        </div>
    
    </div>
</div>


<div class="w-full flex flex-col md:flex-row">
    <h2 class="flex-1">I make websites for a living.</h2>
    @foreach ($websites->take(6)->chunk(3) as $row)
    <div class="flex flex-1 flex-col md:flex-row md:-mx-6">
        @foreach ($row as $post)
            <div class="w-full md:w-1/2 md:mx-6">
                @include('_components.post-preview-inline')
            </div>
        @endforeach
    </div>
@endforeach
</div>

<hr class="border-black my-0 lg:my-24 opacity-25">

<div class="w-full flex flex-col md:flex-row">
    <h2 class="flex-1">I draw for fun.</h2>
    @foreach ($artwork->take(6)->chunk(3) as $row)
    <div class="flex flex-1 flex-col md:flex-row md:-mx-6">
        @foreach ($row as $post)
            <div class="w-full md:w-1/2 md:mx-6">
                @include('_components.post-preview-inline')
            </div>
        @endforeach
    </div>
@endforeach
</div>

<hr class="border-black my-0 lg:my-24 opacity-25">

<div class="w-full flex flex-col md:flex-row">
    <h2 class="flex-1">I'm easy to reach.</h2>
    <div class="flex-1 flex flex-col justify-start items-start">
        <p>Need a website? Like talking about websites? Know a good joke? I'm always interested in connecting with like minded individuals. Let's start a conversation.</p>
        <a href="/contact" class="btn"><span>Contact me</span></a>
    </div>
</div>

@stop
