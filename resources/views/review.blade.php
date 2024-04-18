@extends('layout')

@section('title')
    Отзывы
@endsection

@section('main_content')
    <div class="container mt-4">
        <h1>Оставьте свой отзыв</h1>
        <form class="mt-4" method="post" action="/review/check">
            <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
            <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>

@endsection
