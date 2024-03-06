@extends('layouts.app')

@section('page-title', '{{ $project->title }}')

@section('main-content')
<section id="show-guest">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-3">
                        {{ $project->title }}
                    </h1>

                    <p>
                        {{ $project->content }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection