@extends('layouts.app')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Tutti i progetti
                    </h1>

                    <div>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn btn-success w-100">
                            Aggiungi
                        </a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <th scope="row">{{ $project->id }}</th>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->slug }}</td>
                                        <td>{{ $project->content }}</td>
                                        <td>{{ $project->status }}</td>
                                        <td>
                                            <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}" class="btn btn-xs btn-primary">
                                                Mostra
                                            </a>
                                            <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}" class="btn btn-warning mb-2">
                                                Modifica
                                            </a>

                                            <form
                                            onsubmit="return confirm('Sicuro di voler eliminare questo elemento ? ...')"
                                            action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}"
                                            method="POST"
                                            class="d-inline-block">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">
                                                Elimina
                                            </button>
                                            
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection