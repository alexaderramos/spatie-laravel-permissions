@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard
                        <div class="float-right">
                            <a href="{{route('users.create')}}">Nuevo</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th>MAIL</th>
                                <th>ROLES</th>
                                <th>OPTIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <ul>
                                            @if($user->roles->count())
                                                @foreach($user->roles as $role)
                                                    <li>{{$role->name}}</li>
                                                @endforeach
                                            @else
                                                <b class="text-danger">Not found roles</b>
                                            @endif
                                        </ul>
                                    </td>
                                    <td style="width: 150px;"  >
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <a type="button" class="btn btn-info text-white" href=""><i class="icon-eye"></i></a>
                                            <a type="button" class="btn btn-warning text-white" href="{{route('users.edit',$user)}}"><i class="icon-pencil-1"></i></a>
                                            <a type="button" class="btn btn-danger text-white"><i class="icon-trashcan"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

