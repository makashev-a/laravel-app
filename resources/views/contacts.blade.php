@extends('layouts.app')

@section('title-block', 'Контакты')

@section('content')
    <h1>Контакты</h1>

    <form action="{{ route('contacts-form') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Ваше имя</label>
            <input type="text" name="name" placeholder="Ввведите имя" id="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Ваша электронная почта</label>
            <input type="email" name="email" placeholder="Ввведите email" id="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Ввведите тему сообщения" id="subject" class="form-control">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Сообщение</label>
            <textarea type="text" name="message" placeholder="Ввведите сообщение" id="message"
                      class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
