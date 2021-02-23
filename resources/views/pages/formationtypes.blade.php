@extends('template.main')
@section('content')
    <section class="container text-center">
        <table class="table">
            <thead>
              <tr>
                <th scope="col" class="bg-dark text-white">Formation Title</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($formation_types as $formation_type)
                    <tr>
                    <th scope="row">{{$formation_type->name}}</th>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </section>
@endsection