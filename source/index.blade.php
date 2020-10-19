
@extends('_layouts.master')

@section('body')
<div class="flex flex-col md:flex-row relative">
    @include('_layouts.jim',['class'=>'md:ml-8'])
    <div class="text-left flex flex-col flex-1 items-center justify-center relative z-40 md:pl-16">
      
        <h1>
            <span class="home-title">
                <span>James</span> <br /><span>Courtois</span>
            </span>
        </h1>
        
        
    </div>
    

</div>



@stop
