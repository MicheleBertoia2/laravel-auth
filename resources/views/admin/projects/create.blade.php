@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Aggiungi un nuovo progetto</h1>

        @if ($errors->any()){
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        }
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo Progetto (*)</label>
                <input
                  type="text"
                  class="form-control @error('title') is-invalid @enderror"
                  id="title"
                  name="title"
                  value="{{ old('title') }}">
                  @error('title')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione Progetto (*)</label>
                <textarea
                  type="text"
                  class="form-control @error('description') is-invalid @enderror"
                  id="description"
                  name="description"
                >
                    {{ old('description') }}
                </textarea>
                  @error('description')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
            </div>

            <button type="submit" class="btn btn-primary">Crea!</button>


        </form>



    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
