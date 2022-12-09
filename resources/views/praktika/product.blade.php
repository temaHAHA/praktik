@extends('layouts.app')

@section('content')
   
<div class="container">
    <div class="d-flex justify-content-center align-items-center flex-column">
         <img class="" src="{{$comic->img}}" alt="Первый слайд">
         <b class="fs-3">{{$comic->name}}</b>
         <b class="fs-3">Издатель - {{$comic->publisher}}</b>
         <span class="fs-4">Издатель - {{$comic->release}}</span>
         <span class="fs-4">Цена - {{$comic->price}}</span>
    </div>
</div>
   
@endsection