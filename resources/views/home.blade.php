@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  @if($Groups->isEmpty())
                    <h2 style="text-align:center;">Sorry, you dont belong to any groups</h2>
                    <h5 style="text-align:center;">Create one by clicking the new group button, Which can be found by clicking on your username in the top right corner</h5>
                  @endif
                  <ul>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Group</th>
                          <th>Users</th>
                          <th>Passwords</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($Groups as $group)
                        <tr>
                          <td><a href="/group/show/{{ $group->id }}">{{ $group->name }}</a></td>
                          <td>{{ $group->users()->count() }}</td>
                          <td>{{ $group->passwords()->count() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
