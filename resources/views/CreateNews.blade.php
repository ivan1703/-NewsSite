<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <title>Laravel</title>
</head>
<body>
<!--навигация по сайту (bootstrap 4)-->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#">News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{asset("/")}}">Лента</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{asset("CreateNews")}}">Предложить новость</a>
            </li>
        </ul>
    </div>
</nav>
<!--end-->
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="container">
        <form class = "container" style="margin-top:24px;">
            <div class="form-group">
                <label>Название новости</label>
                <input type="text" class="form-control" placeholder="Введите название новости ">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label>Ваше имя</label>
                <input type="text" class="form-control" placeholder="Введите ваше имя">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label>Новость</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Введите новость"></textarea>
            </div>
            <button type="submit" class="btn btn-info">Отправить на модерацию</button>
        </form>
    </div>
</div>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 20.11.2018
 * Time: 10:01
 */
