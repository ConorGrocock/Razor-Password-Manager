@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Passwords</div>

                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Group</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($passwords as $password)
                    <tr>
                      <td>{{ $password->name }}</td>
                      <td>{{ $password->password}}</td>
                      <td>{{ $password->group_id }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
