@extends('template.main')
@section('content')
    <section class="container text-center">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Surname</th>
                <th scope="col">First Name</th>
                <th scope="col">Age</th>
                <th scope="col">State</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->surname}}</td>
                    <td>{{$student->first}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->state == 1? "Unemployed" : "Employed"}}</td>
                </tr>
              @endforeach
             
            </tbody>
          </table>
    </section>
@endsection