@extends('layouts.app')

@section('title-block', 'Все сообщения')

@section('content')
    <h1>Все сообщения</h1>
    @foreach($data as $item)
        <div class="alert alert-info">
            <h3>{{ $item->subject }}</h3>
            <p>{{ $item->email }}</p>
            <p><small>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s') }}</small></p>
            <a href="#" class="btn btn-warning">Подробнее</a>
        </div>
    @endforeach
@endsection
