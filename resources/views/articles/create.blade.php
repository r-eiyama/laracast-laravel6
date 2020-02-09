@extends('layout')

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight is-size-4">New Article</h1>
        </div>

        <form method="post" action="/articles">
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" id="title" name="title" type="text">
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" id="excerpt" name="excerpt"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" id="body" name="body"></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>

            </div>
        </form>


    </div>

@endsection
