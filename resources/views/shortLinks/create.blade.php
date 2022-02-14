@extends('layouts.app')

@section('title', __('URL Shortener'))

@section('css')
    @parent
    <link href="{{ mix('css/shortLinks/create.css') }}" rel="stylesheet">
@show

@section('js')
    @parent
    <script src="{{ mix('js/shortLinks/create.js') }}" defer></script>
@endsection

@section('content')
    <form id="create-form" class="create-form" method="POST">
        <h1 class="create-form__header">{{ __('Create a short link') }}</h1>
        @csrf
        <div class="create-form__row">
            <label class="create-form__label">
                {{ __('URL') }}:
                <input class="create-form__input" name="url" type="url" required>
            </label>
            <button class="create-form__button">{{ __('Submit') }}</button>
        </div>
        <div class="create-form__output" data-output></div>
    </form>
@endsection
