@extends('layouts.app')

@section('content')
    
<section>
    <div class="container">
        <div class="d-flex justify-content-start flex-wrap content">
            @foreach($comic as $comi)
                <div class="d-flex flex-column m-2 col-lg-3 card p-3 ">
                    <img class="img-katalog img-fluid" src="{{$comi->img}}" alt="Первый слайд">
                    <b class="py-1">{{$comi->name}}</b>
                    <span class="fs-4 py-1">{{$comi->price}}₽</span>
                    <a href="/catalog/{{$comi->id}}" class="nav">Подробнее</a>
                    
                </div>
            @endforeach
            
        </div>
    </div>
</section>
   
@endsection