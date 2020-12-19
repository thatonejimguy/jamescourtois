
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



<div class="flex flex-wrap w-full lg:w-full-plus-16 lg:-mx-8">
    @foreach ($websites->where('featured',true)->take(4)->chunk(2) as $row)
            @foreach ($row as $project)
                    @include('_components.post-preview-inline')
            @endforeach    
    @endforeach
</div>


<div class="w-full flex flex-col md:flex-row">
    <h2 class="flex-1">I'm easy to reach.</h2>
    <div class="flex-1 flex flex-col justify-start items-start">
        <p>Need a website? Like talking about websites? Know a good joke? I'm always interested in connecting with like minded individuals. Let's start a conversation.</p>
        <a href="/contact" class="btn"><span>Contact me</span></a>
    </div>
</div>

@stop
