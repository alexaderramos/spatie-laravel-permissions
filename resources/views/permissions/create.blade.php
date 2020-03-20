@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Permissions</div>

                    <div class="card-body">
                        <form action="{{route('permissions.store')}}" method="post" class="form">
                            @component('permissions.partials.form')
                            @endcomponent
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

