@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ url('/payments')}}">
            @csrf
            <button type="submit" class="btn btn-primary">決済する</button>
        </form>
    </div>
@endsection
