
@extends('_layouts.master')

@section('body')

<div class="flex flex-col md:flex-row items-stretch justify-center relative w-full">
  
    @include('_layouts.jim',['class'=>'home-page'])
  
    <div class="text-left flex flex-col flex-1 items-center md:items-start md:pl-8 lg:items-end justify-center relative z-40">      
        <h1 class="home-title">            
                <span>James</span> <br /><span>Courtois</span>            
        </h1>
    </div>

</div>
<div class="flex flex-col items-center justify-center w-full lg:my-8">
    <h2 class="text-xl font-normal leading-normal md:text-lg lg:text-xl max-w-xs md:max-w-none m-0 my-4">Front-end web developer based in St. Louis, MO.</h2>
</div>
<div class="flex flex-col md:flex-row justify-center items-stretch">
    <a href="#1" class="btn my-2 mx-auto md:mx-8 flex-1 w-full max-w-xs"><span>I make websites</span></a>
    <a href="#2" class="btn my-2 mx-auto md:mx-8 flex-1 w-full max-w-xs"><span>I draw for fun</span></a>
    <a href="#3" class="btn my-2 mx-auto md:mx-8 flex-1 w-full max-w-xs"><span>I am easy to reach</span></a>
</div>



@stop
