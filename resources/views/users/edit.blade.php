@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Notes EDIT</div>

                    <div class="card-body">
                        <form action="{{route('users.update',$user)}}" method="post">
                            @method('PUT')
                            @component('users.partials.form')
                                @slot('user',$user)
                                @slot('roles',$roles)
                            @endcomponent
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
