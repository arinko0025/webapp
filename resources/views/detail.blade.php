@extends('app') @section('title','商品詳細') @section('head')

<!-- Latest compiled and minified JavaScript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<link href="/js/jquery.bxslider.css" rel="stylesheet" /> @endsection @section('content')
<!-- Main -->



<div id="main">
	<div class="inner">
		<center>
			<section class="tiles0">
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
							<li><img src="" alt="" height="250" width="350"></li>
						</ul>
					</div>
				</article>

				<article class="style8">
					<p></p>
					<p>価格：￥</p>

					<form action="/cart?id=" method="post">

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
