@extends('layuots.main')
@section('content')

    <body>
        <div class="container ">
            @foreach ($allOffers as $item)
                <div class="offer_item">
                    <p>Имя :{{ $item->manager }}</p>
                    <p>Позиция :{{ $item->position }}</p>
                    <p>Телефон : {{ $item->phone }}</p>
                    <p>Статус :{{ $item->status }}</p>

                    <button class="btn btn-primary"><a href="{{ route('api.edit', $item->id) }}" style="color: aliceblue; ">
                            Изменить </a></button>
                    <button class="btn btn-primary"><a href="{{ route('api.elementShow',$item->id) }}" style="color: aliceblue; ">
                            Посмотреть элементы подборки </a></button>
                </div>
            @endforeach
        </div>
    </body>
@endsection
