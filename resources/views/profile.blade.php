@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile of <b>{{ $name }}</b></div>

                    <div class="card-body">
                        Your ID is <b>{{ $id }}</b>
                        <br />
                        And email is <b>{{ $email }}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
