@extends('layuots.main')
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('admine') }}">перейти в панель администратора</a>
          </li>
          

        </ul>
      </div>
    </div>
  </nav>
<form action="{{route('logout')}}" method="POST" class="mt-3">
    @csrf
    <input type="submit" class="btn btn-primary"value="Выйти">

</form>
</div>
@section('content')

    <body>
        <div class="container">
            <div class="apartments">

                @foreach ($data as $item)
                    <div class="apartment-card">
                        <div class="apartment-card__header">
                            <div class="apartment-card__header--left">
                                <div class="apartment-card__name">{{ $item->square }} м²</div>
                                <div class="apartment-card__location">{{ $item->complex }},{{ $item->house }}</div>
                            </div>
                            <div class="apartment-card__header--right">
                                <div class="apartment-card__price">5 320 000 ₽</div>
                            </div>
                        </div>
                        <div class="apartment-card__body">
                            <div class="row">
                                <div class="col-12 col-xl-8">
                                    <div
                                        class="chocolat-parent apartment-card__gallery owl-carousel owl-carousel--theme-psk owl-carousel-init-apartment-card-main owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage" style="width: 740px">
                                                <div class="owl-item active center"
                                                    style="width: 729.333px; margin-right: 10px">
                                                    <a href="  {{  json_decode($item->images,true)[1]}} "
                                                        class="apartment-card__picture apartment-card__picture--main chocolat-image">
                                                        <img class="img-fluid" src="{{  json_decode($item->images,true)[1]}}" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <div class="apartment-card__content">
                                        <div class="row row--around">
                                            <div class="col-12 d-none d-xl-block"></div>
                                            <div class="col-12 col-md-7 col-xl-12">
                                                <div class="apartment-card__description">
                                                    <div class="collapse-block collapse-block--type-apartment-card">
                                                        <div class="collapse-block__content">
                                                            <div
                                                                class="collapsing collapsing--type-apartment-card collapsing--color-white">
                                                                <div class="typography">
                                                                    {{ $item->description }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5 col-xl-12">
                                                <div class="apartment-card__controls">
                                                    <div class="apartment-card__buttons order-1 order-xl-0">
                                                        <div class="apartment-card__button">
                                                            <a href="#" class="button button--color-red">
                                                                <span class="button__text">Позвонить</span>
                                                            </a>
                                                        </div>
                                                        <div class="apartment-card__button">
                                                            <a href="#" class="button button--color-white">
                                                                <span class="button__text">Написать</span>
                                                            </a>
                                                        </div>
                                                            <form action="{{route( 'api.elementDestroy',$item->id)}} " method="POST" >
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit " 
                                                                style="padding-left: 30px;
                                                                padding-right: 30px;
                                                                padding-bottom: 5px;
                                                                padding-top: 5px;
                                                                margin-left: 20px;"
                                                                >Удалить</button>
                                                            </form>
                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </body>
@endsection
