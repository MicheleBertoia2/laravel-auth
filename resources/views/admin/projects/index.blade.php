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
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project )

                <tr>
                  <td>{{$project->id}}</td>
                  <td class="table-success">{{$project->title}}</td>
                  <td class="table-warning">{{$project->project_link}}</td>
                  <td class="table-danger">{{$project->collaborators}}</td>
                  <td>
                      <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success">DETTAGLIO</a>
                      <a href="#" class="btn btn-warning">MODIFICA</a>
                      <a href="#" class="btn btn-danger">ELIMINA</a>
                  </td>
                </tr>

                @endforeach

            </tbody>
          </table>

    </div>
@endsection
