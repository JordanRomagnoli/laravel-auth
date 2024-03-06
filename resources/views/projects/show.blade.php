@extends('layouts.app')

@section('page-title', '{{ $project->title }}')

@section('main-content')
<section id="show-guest">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="my-show-card">
                <div class="my-show-card-body">
                    <h1 class="text-center mb-5">
                        {{ $project->title }}
                    </h1>

                    <p class="mb-3">
                        {{ $project->content }}
                    </p>

                    <div>
                        Creato il: 
                        <span class="text-success">
                            {{ $project->created_at->format('d/m/Y') }}
                        </span>
                        <br>
                        Alle: 
                        <span>
                            {{ $project->created_at->format('H:i')  }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection