@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni perspiciatis explicabo non iure vitae labore quo esse atque quidem, quaerat itaque amet eius vero, dolorum laudantium saepe laboriosam possimus maiores!
                    <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection