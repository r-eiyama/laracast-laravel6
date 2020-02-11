@extends('layout')

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.min.css" rel="stylesheet"/>
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
                    <input class="input @error('title') is-danger @enderror"
                           id="title"
                           name="title"
                           type="text"
                           value="{{old('title')}}"
                    >
                    @error('title')
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea
                        class="textarea @error('excerpt') is-danger @enderror"
                        id="excerpt"
                        name="excerpt"
                        value="{{old('excerpt')}}"
                    ></textarea>
                </div>
                @error('excerpt')
                <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea @error('body') is-danger @enderror"
                              id="body"
                              name="body"
                              value="{{old('body')}}"
                    ></textarea>
                </div>
                @error('body')
                <p class="help is-danger">{{ $errors->first('body') }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>

            </div>
        </form>
    </div>
@endsection
