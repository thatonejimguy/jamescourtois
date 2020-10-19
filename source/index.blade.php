
@extends('_layouts.master')

@section('body')
<div class="flex flex-col md:flex-row items-stretch justify-center relative w-full">
    @include('_layouts.jim',['class'=>'home-page'])
    <div class="text-left flex flex-col flex-1 items-center md:items-start md:pl-8 lg:items-end justify-center relative z-40">
      
        <h1 class="home-title">
            
                <span>James</span> <br /><span>Courtois</span>
            
        </h1>
        <h2 class="text-xl font-normal md:text-lg lg:text-xl max-w-xs md:max-w-none">Front-end web developer based in St. Louis, MO</h2>
        
        
    </div>
    

</div>



@stop
