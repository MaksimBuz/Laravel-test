@extends('layuots.main')
@section('content')

    <body>
        <div class="container">
            <h1>Создание подборки</h1>
            <form action="{{ route('api.store') }}">
                @csrf
                <input class="form_input" type="text" name='b24_manager_id' placeholder="b24_manager_id">
                <input class="form_input" type="text" name='manager' placeholder="manager">
                <input class="form_input" type="text" name='position' placeholder="position">
                <input class="form_input" type="date" name='date_end' placeholder="date_end">
                <input class="form_input" type="text" name='avatar' placeholder="avatar">
                <button type="submit" class="btn btn-primary mt-4">Добавить</button>
            </form>
        </div>
    </body>
@endsection
