@section('title','商品詳細')
@section('content')
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<center>
					<section class="tiles0">
						<article class="style7">
							<span class="image"><img src="{{$items->images}}" height="300" width="246" alt="" /></span>
						</article>

						<article class="style8">
							<p>{{$items->name}}</p>
							<p>価格：￥{{$items->price}}</p>

							<form action="/cart_c?id={{$items->id}}" method="post">
								{{ csrf_field() }}
								<ul class="actions fit">
									<li><a href="arinko" class="button fit">一覧に戻る</a></li>
									<li><input type="submit" class="button special fit" value="カートに入れる"></li>
								</ul>
							</form>
						</article>
					</section>
				</center>
			</div>
		</div>
	</div>

@endsection
