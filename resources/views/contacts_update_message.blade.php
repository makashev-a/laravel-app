@extends('layouts.app')

@section('title-block', 'Обновление сообщения')

@section('content')
    <h1>Обновление сообщения</h1>

    <form action="{{ route('contacts-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Ваше имя</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Ввведите имя" id="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Ваша электронная почта</label>
            <input type="email" name="email" value="{{ $data->email }}" placeholder="Ввведите email" id="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Тема сообщения</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Ввведите тему сообщения" id="subject" class="form-control">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Сообщение</label>
            <textarea type="text" name="message" placeholder="Ввведите сообщение" id="message"
                      class="form-control">{{ $data->subject }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
@endsection
