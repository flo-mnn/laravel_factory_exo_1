@extends('template.main')
@section('content')
    <section class="container text-center">
        @foreach ($formations as $formation)
            <div class="p-5 {{$loop->iteration %2 == 0? 'bg-light' : 'bg-secondary text-white'}}">
                <h1 class="h1 text-danger">{{$formation->name}}</h1>
                <p class="border-top border-secondary">{{$formation->description}}</p>
            </div>
            <hr>     
        @endforeach
    </section>
@endsection