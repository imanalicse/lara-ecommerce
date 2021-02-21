@extends('layouts.app')

@section('content')
    <div class="vertical-center">
        <h1>{{$title}}</h1>
        <p>
            To request and buy items, please <a href="#" class="test-click">click here</a>.
        </p>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
@endsection
