
@extends('layuots.main')
@section('content')
  <body>
    <h1>Изменение подборки</h1> 
    <form action="{{route('api.update',$id)}}"  method="POST">
     
      @csrf
      @method('PATCH')
      <input type="text" name='b24_manager_id' placeholder="b24_manager_id">
      <input type="text" name='manager'  placeholder="manager">
      <input type="text" name='position'  placeholder="position">
      
      <input type="text" name='status'  placeholder="status">
      <input type="date" name='date_end'  placeholder="date_end">

      <input type="text" name='avatar'  placeholder="avatar">
      <button type="submit" class="btn btn-primary mt-4">Добавить</button>
    </form>

  </body>

@endsection
