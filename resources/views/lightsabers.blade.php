@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Spade laser amazing collection</h1>
        <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos molestiae, nam perferendis blanditiis distinctio, soluta facilis magni odio necessitatibus vero aut nisi iusto quos veniam ratione inventore. Sunt, rerum saepe.</p>
        <button class="btn btn-primary btn-lg" type="button">View all sabers</button>
    </div>
</div>
<div class="container">


    <section class="py-5">
        <div class="row row-cols-1 row-cols-lg-3 g-4">

            @forelse ($sabers as $saber)
            <div class="col">
                <div class="card">
                    <img src="{{$saber->image}}" alt="{{$saber->name}}" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">{{$saber->name}}</h3>
                        <p>{{$saber->price}} €</p>
                        <button class="btn btn-danger">Buy now</button>
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <p>Sorry all sabers were stolen.</p>
            </div>
            @endforelse

        </div>

    </section>
</div>


@endsection