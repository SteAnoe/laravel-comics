@extends('layout.app')

@section('content')
<main>
    <div id="giumbotron">
    </div>
    <div id="content">
        <h2 id="label">CURRENT SERIES</h2>
        <div class="container">
            @foreach ($comics as $comic)
            <div class="carta">
                <div>
                    <img src="{{$comic['thumb']}}" alt="">
                    <h5>{{$comic['series']}}</h5>
                </div>
            </div>   
            @endforeach    
        </div> 
        <div id="button">LOAD MORE</div> 
    </div>
    <div id="shop">
        <div class="container">
            @foreach ($menushop as $elem)
            <div class="carta1">
                
                <div>
                    <img src="{{$elem['img']}}" alt="">
                    <div>{{$elem['nome']}}</div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</main>
@endsection