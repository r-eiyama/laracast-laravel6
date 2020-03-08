@extends('layout')

@section('header')
@endsection

@section('content')

    <div>
        @auth
            <a class="h3" href="{{ url('/home') }}">Home</a>
            <p>ログイン中です。 {{ auth()->user()->name }}さん</p>
            <a class="h3" href="{{ url('payments/create') }}">決済登録</a>
        @else
            <a class="h3" href="{{route('login')}}">Login</a>

            @if (Route::has('register'))
                <a class="h3 pl-3"  href="{{ route('register') }}">Register</a>
            @endif
        @endauth

        @guest
            <p>
                ログインまたは登録してください
            </p>
            @endguest
    </div>
@endsection
