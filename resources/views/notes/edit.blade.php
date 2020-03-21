@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Notes EDIT</div>

                    <div class="card-body">
                        <form action="" method="post" class="form">
                            @component('notes.partials.form')
                                @method('PUT')
                                @slot('note',$note)
                            @endcomponent
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

