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
        <article class="style1">
          <span class="image"><img src="" height="250" width="50" alt="" /></span>
          <a href="/product?id=">
            <h2></h2>
            <div class="content">
              <p>text</p>
              <p>￥00000</p>
            </div>
          </a>
        </article>
      </section>
    </div>
  </div>
</div>


@endsection
