@extends('layouts.guest')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-primary">
                        Welcome!
                    </h1>
                    <br>
                    La welcome page è una pagina pubblica (NON protetta)
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <h1 class="text-center text-primary">
                I nostri progetti
            </h1>
        </div>

        @foreach ($projects as $project)
            <div class="col-12 col-xs-6 col-sm-4 col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4>
                            {{ $project->title }}
                        </h4>

                        <a href="{{ route('posts.show', ['project' => $project->slug]) }}" class="btn btn-primary">
                            More
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
@endsection
