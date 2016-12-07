@extends('app')
@section('title','商品一覧')
@section('content')
  <style media="screen">
    .tiles article {
      width: calc(25% - 2.5em);
    }
  </style>
  <div id="main">
    <div class="inner">
      <header>
        <h1></h1>
        <p></p>
      </header>
      <section class="tiles">
        @foreach ($item as $key => $value)
        <article class="style1">
          <span class="image"><img src="{{$value->Img[0]->url}}" height="250" width="50" alt="" /></span>
          <a href="/detail?id={{$value->id}}">
            <h2></h2>
            <div class="content">
              <p>{{$value->name}}</p>
              <p>￥{{$value->price}}</p>
            </div>
          </a>
        </article>
          @endforeach
      </section>
    </div>
  </div>
</div>


@endsection
