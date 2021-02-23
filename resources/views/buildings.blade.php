@extends('template.main')
@section('content')
    <section class="container text-center">
        <h1 class="h1 text-primary">{{$building->name}}</h1>
        <p class="border-top border-secondary">{{$building->description}}</p>
    </section>
@endsection