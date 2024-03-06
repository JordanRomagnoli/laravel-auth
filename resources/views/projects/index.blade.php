@extends('layouts.guest')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <section id="index-guest">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center text-success">
                            I nostri progetti
                        </h1>

                        <div>
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
                                                <a href="{{ route('projects.show', ['project' => $project->slug]) }}" class="btn btn-xs btn-primary mb-2">
                                                    Mostra
                                                </a>
                                                
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
    </section>
@endsection