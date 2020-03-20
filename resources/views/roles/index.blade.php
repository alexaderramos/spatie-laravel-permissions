@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Roles
                        <div class="float-right">
                            <a href="{{route('roles.create')}}">Nuevo</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if(count($roles))
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>PERMISSIONS</th>
                                    <th>OPTIONS</th>
                                </tr>
                                </thead>
                                <tbody>


                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{$role->id}}</td>
                                            <td>{{$role->name}}</td>
                                            <td>
                                                <ul>
                                                    @if($role->permissions->count())
                                                        @foreach($role->permissions as $permission)
                                                            <li>{{$permission->name}}</li>
                                                        @endforeach
                                                    @else
                                                        <b class="text-danger">Not found permissions</b>
                                                    @endif
                                                </ul>
                                            </td>
                                            <td style="width: 150px;"  >
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <a type="button" class="btn btn-info text-white" href=""><i class="icon-eye"></i></a>
                                                    <a type="button" class="btn btn-warning text-white" href="{{route('roles.edit',$role)}}"><i class="icon-pencil-1"></i></a>
                                                    <a type="button" class="btn btn-danger text-white"><i class="icon-trashcan"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="mx-auto">
                                    {{--$roles->links()--}}
                                </div>
                            </div>
                        @else
                            No hay registro
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

