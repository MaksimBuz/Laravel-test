
@extends('layuots.main')
@section('content')
  <body>
    <div class="container">

    
    <h1>Создание елемента подборки</h1>
    <form action="{{route('api.elementStore')}}">
      @csrf
      <input class="form_input" type="text" name='offer_id' placeholder="offer_id">
      <input class="form_input" type="text" name='cid' placeholder="cid">
      <input class="form_input" type="text" name='type' placeholder="type">
      <input class="form_input" type="text" name='square'  placeholder="square">
      <input class="form_input" type="text" name='complex'  placeholder="complex">
      <input class="form_input" type="text" name='house'  placeholder="house">
      
      <input class="form_input" type="text" name='description'  placeholder="description">
      <input class="form_input" type="text" name='images'  placeholder="images">
      <button type="submit" class="btn btn-primary mt-4">Добавить</button>
    </form>
</div>
  </body>

@endsection
