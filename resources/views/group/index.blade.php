@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Groups</div>

                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>User count</th>
                        <th>Join</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($groups as $group)
                    <tr>
                      <td>{{ $group->name }}</td>
                      <td>{{ $group->users->count() }}</td>
                      <td><button type="button" class="btn btn-info" onclick="">Join</button></td>
                    </tr>
                    @endforeach
                  </tbody>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
