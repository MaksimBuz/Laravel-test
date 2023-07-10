
@extends('layuots.main')
@section('content')
<div class="container">


<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary"><a style="color: aliceblue; " href="{{route('api.create')}}">Создать подборку</a></button>
    <button type="button" class="btn btn-primary"><a style="color: aliceblue; "  href="{{route('api.elementCreate')}}">Создать елемент подборки</a></button>
    <button type="button" class="btn btn-primary"><a style="color: aliceblue; "  href="{{route('main.index')}}">Перейти на сайт</a></button>
    <button type="button" class="btn btn-primary"><a style="color: aliceblue; "  href="{{route('api.show')}}">Посмотреть сотрудников</a></button>
</div>

<ol class="list-group list-group-numbered mt-3">
    <li class="list-group-item">Статистика посещений :{{$Count}}</li>
    <li class="list-group-item">Статистика отметок “Нравится” :{{$LikesCount}}</li>
  </ol>

<form action="{{route('logout')}}" method="POST" class="mt-3">
    @csrf
    <input type="submit" class="btn btn-primary"value="Выйти">

</form>
</div>
@endsection
