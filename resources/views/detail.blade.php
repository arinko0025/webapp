@extends('app')
@section('title','商品詳細')
@section('head')

<!-- Latest compiled and minified JavaScript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<link href="/js/jquery.bxslider.css" rel="stylesheet" />

 @endsection
 @section('content')
<!-- Main -->



<div id="main">
	<div class="inner">
		<center>
			<section class="tiles0">
				@foreach ($item as $key => $value)
				<article class="style7">
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							$('.bxslider').bxSlider({
								moveSlides: 1,
								slideWidth: 500,
								slideMargin: 4,
								auto: true,
								speed: 1000,
								mode: 'fade',
								captions: false
							});
						});
					</script>
					<div class="slider">
						<ul class="bxslider">
							@foreach ($value->Img as $Imgvalue)
								<li><img src="{{$Imgvalue->url}}" alt="" height="250" width="350"></li>
							@endforeach
						</ul>
					</div>
				</article>

				<article class="style8">
					<p>{{$value->name}}</p>
					<p>価格：￥{{$value->price}}</p>

					<form action="/cart" method="post">
						<input type="hidden" name="item_id" value="{{$item[0]->id}}">
						{{csrf_field()}}
						<ul class="actions fit">
							<li><a href="item?id={{$value->categoryID}}" class="button fit">一覧に戻る</a></li>
							<li><input type="submit" class="button special fit" value="カートに入れる"></li>
						</ul>
					</form>
				</article>
				@endforeach
			</section>
		</center>
	</div>
</div>
</div>

@endsection
