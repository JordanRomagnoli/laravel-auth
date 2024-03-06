@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @if ($stringaSalutaUtente != null)
                        <h1 class="text-center text-success">
                            {{ $stringaSalutaUtente }}
                            <span>
                                Sei loggato!
                            </span>
                        </h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
