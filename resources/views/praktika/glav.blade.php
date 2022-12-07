@extends('layouts.app')

@section('content')
    


    <section>
        <div class="container">
            <div class="d-flex flex-column justifyc-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="/public/img/logo.png" alt="logo" class=" py-5">
                    <h2><b>Funny Comics Land с заботой о тебе</b></h2>
                </div>
                <h2><b>Новинки компании!</b></h2>
            <div id="carouselExampleControls" class="carousel slide w-25 h-25 py-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                    @foreach($comic as $comi)
                    @if($loop->first)
                    <div class="carousel-item active ">
                    <img class="d-block w-100 img-size" src="{{$comi->img}}" alt="Первый слайд">
                    <p class="d-flex justify-content-center fs-3">{{$comi->name}}</p>
                    </div>
                    @else
                    <div class="carousel-item">
                    <img class="d-block w-100 img-size" src="{{$comi->img}}" alt="Второй слайд">
                    <p class="d-flex justify-content-center fs-3">{{$comi->name}}</p>
                    </div>
                    @endif
                    @endforeach
                
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
                </div>
            </div>
        </div>
    </section>
@endsection