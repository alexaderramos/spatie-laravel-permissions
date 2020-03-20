@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Create</div>

                    <div class="card-body">
                        <form action="{{route('users.store')}}" method="post">
                            @component('users.partials.form')
                                @slot('roles',$roles)
                            @endcomponent
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
