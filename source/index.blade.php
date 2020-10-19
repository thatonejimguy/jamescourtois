
@extends('_layouts.master')

@section('body')


<div class="w-full h-auto lg:h-screen pb-16 flex flex-col items-center justify-center w-full">
    <div class="flex flex-col md:flex-row items-stretch justify-center relative w-full">
  
        @include('_layouts.jim',['class'=>'home-page'])
      
        <div class="text-left flex flex-col flex-1 items-center md:items-start md:pl-8 lg:items-end justify-center relative z-40 pt-4 md:pt-0">      
            <h1 class="home-title">            
                    <span>James</span> <br /><span>Courtois</span>            
            </h1>
        </div>
    
    </div>
    <div class="flex flex-col md:flex-row justify-center items-stretch pt-8 lg:pt-16 w-full">
        <a href="#1" class="btn my-2 mx-auto md:mx-8 flex-1 w-full max-w-xs"><span>I make websites</span></a>
        <a href="#2" class="btn my-2 mx-auto md:mx-8 flex-1 w-full max-w-xs"><span>I draw for fun</span></a>
        <a href="#3" class="btn my-2 mx-auto md:mx-8 flex-1 w-full max-w-xs"><span>I am easy to reach</span></a>
    </div>
</div>


@stop
