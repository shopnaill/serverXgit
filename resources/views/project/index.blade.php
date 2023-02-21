@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body row">
                        @foreach ($projects as $project)
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">{{ $project->name }}</div>

                                    <div class="card-body">
                                        <img src="{{ $project->icon_url }}" alt="" srcset="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
