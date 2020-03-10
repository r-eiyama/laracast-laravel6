@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach($notifications as $notification)
                <li>{{ $notification->type }}</li>
                <li>{{ $notification->data['amount'] }}</li>
            @endforeach
        </ul>

    </div>
@endsection
