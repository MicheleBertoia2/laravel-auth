@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Elenco progetti</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Repo Link</th>
                <th scope="col">Collaboratori</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project )

                <tr>
                  <td>{{$project->id}}</td>
                  <td>{{$project->title}}</td>
                  <td>{{$project->project_link}}</td>
                  <td>{{$project->collaborators}}</td>
                </tr>

                @endforeach

            </tbody>
          </table>

    </div>
@endsection
