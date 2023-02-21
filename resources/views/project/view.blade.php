@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">{{ $project->name }}</div>

                            <div class="card-body">
                                <img src="{{ $project->icon_url }}" alt="" srcset="" class="img-fluid">
                                <h5 class="card-title">
                                    {{ $project->name }}
                                </h5>
                                <p class="card-text">
                                    {{ $project->description }}
                                </p>
                                <form method="post" action="">
                                    @csrf
                                    <input type="submit" value="Deploy Project" name="deploy_project"
                                        class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ $project->name }}</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $project->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="server">Server IP</label>
                                            <input type="text" class="form-control" id="server" name="server"
                                                value="{{ $project->server }}" placeholder="Server IP">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="port">Port</label>
                                            <input type="text" class="form-control" id="port" name="port"
                                                value="{{ $project->port }}" placeholder="Port">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="port"
                                                value="{{ $project->username }}" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control" id="password" name="port"
                                                value="{{ $project->password }}" placeholder="Password">
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="comment">Comment</label>
                                            <textarea class="form-control" id="comment" name="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
