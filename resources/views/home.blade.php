@extends('layouts.app')

@section('title-block', 'Главная страница')

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta labore saepe sed sit. Aliquid beatae corporis cum
        distinctio eligendi, error eveniet exercitationem magnam maxime minus modi mollitia, repellendus saepe
        ullam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur cum deserunt esse expedita facere
        ipsam ipsum labore mollitia necessitatibus non nostrum omnis pariatur quo quod, ratione repellendus sit, vero
        vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nihil saepe sint soluta vel? Alias
        aperiam doloremque dolores earum eos eveniet fugit necessitatibus neque nulla provident, rerum temporibus unde
        vero.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
