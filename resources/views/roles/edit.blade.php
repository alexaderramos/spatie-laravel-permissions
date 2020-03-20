@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Notes EDIT</div>

                    <div class="card-body">

                        <form action="{{route('roles.update',$role)}}" method="post" >
                            @method('PUT')
                            @component('roles.partials.form')
                                @slot('role',$role)
                                @slot('permissions',$permissions)
                            @endcomponent
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

