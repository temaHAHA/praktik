@extends('layouts.app')

@section('content')

<section>
            <div class="d-flex flex- column flex-wrap justify-content-center align-items-center">
                    <b class="d-flex justify-contentcenter text-center fs-4">Категории:</b>
                    <ul class="d-flex flex-row">
                        <li><a class="nav-link mt-3 ms-2" href="\catalog\name\asc">По названию А-Я</a></li>
                        <li><a class="nav-link mt-3 ms-2" href="\catalog\name\desc">По названию Я-А</a></li>
                        <li><a class="nav-link mt-3 ms-2" href="\catalog\price\asc">По возврастанию цены</a></li>
                        <li><a class="nav-link mt-3 ms-2" href="\catalog\price\desc">По убыванию цены</a></li>
                    </ul>
            
            </div>
      

    <div class="container">
        <div class="d-flex  flex-wrap content justify-content-sm-center justify-content-lg-start justify-content-md-center">
            @foreach($comic as $comi)
                <div class="d-flex  m-2 col-lg-3 card p-3 col-sm-6">
                    <img  src="{{$comi->img}}" alt="Первый слайд" class="img-katalog w-100 ">
                    <b class="py-1">{{$comi->name}}</b>    
                    @if(intval($comi->price)>10)
                     <span class="fs-4 py-1">{{$comi->price}}₽</span>
                        @else
                        <span class="fs-4 py-1">Предзаказ</span>
                        @endif
                    </span>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <a href="/catalog/{{$comi->id}}" class="nav">Подробнее</a>
                        @auth
                        <a href="">Добавить в корзину</a>
                        @else
                        <a href=""></a>
                        @endauth
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</section>
   
@endsection