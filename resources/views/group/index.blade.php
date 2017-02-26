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
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($groups as $group)
                    <tr>
                      <td>{{ $group->name }}</td>
                      <td>{{ $group->users->count() }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
