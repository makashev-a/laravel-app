@extends('layouts.app')

@section('title-block', $data->subject)

@section('content')
    <div class="alert alert-info">
        <h2>{{ $data->subject }}</h2>
        <p>Email: {{ $data->email }}</p>
        <p>Имя: {{ $data->name }}</p>
        <p>{{ $data->message }}</p>
        <p><small>{{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y H:i:s') }}</small></p>
        <a href="{{ route('contacts-update', $data->id) }}" class="btn btn-primary">Редактировать</a>
        <a href="{{ route('contacts-delete', $data->id) }}" class="btn btn-danger">Удалить</a>
    </div>
@endsection
