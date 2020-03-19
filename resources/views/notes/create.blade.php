@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Notes</div>

                    <div class="card-body">
                        @component('notes.partials.form')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

