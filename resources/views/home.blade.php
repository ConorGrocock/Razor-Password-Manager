@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <ul>
                  @foreach ($Groups as $group)
                    <li> <a href="/group/show/{{$group->id}}">{{ $group->name }}</a>
                      <ul>
                          <li>Users</li>
                          <ul>
                            @foreach ($group->users as $user)
                              <li>{{ $user->name }}</li>
                            @endforeach
                          </ul>
                        </li>
                      </ul>
                        <ul>
                            <li>Passwords</li>
                            <ul>
                              @foreach ($group->passwords as $passwords)
                                <li>{{ $passwords->name }}</li>
                              @endforeach
                            </ul>
                          </li>
                        </ul>
                    </li>
                  @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
