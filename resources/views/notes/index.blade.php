@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Notes
                        <div class="float-right">
                            <a href="{{route('notes.create')}}">Nuevo</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if(count($notes))
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>AUTHOR</th>
                                    <th>TITLE</th>
                                    <th>CONTENT</th>
                                    <th>OPTIONS</th>
                                </tr>
                                </thead>
                                <tbody>


                                    @foreach($notes as $note)
                                        <tr>
                                            <td>{{$note->id}}</td>
                                            <td>{{$note->user->name}}</td>
                                            <td>{{$note->title}}</td>
                                            <td>{{$note->description}}</td>
                                            <td style="width: 150px;"  >
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <a type="button" class="btn btn-info text-white" href=""><i class="icon-eye"></i></a>
                                                    <a type="button" class="btn btn-warning text-white" href="{{route('notes.edit',$note)}}"><i class="icon-pencil-1"></i></a>
                                                    <a type="button" class="btn btn-danger text-white"><i class="icon-trashcan"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="mx-auto">
                                    {{$notes->links()}}
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

