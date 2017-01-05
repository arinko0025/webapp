@extends('app')
@section('title','top')
@section('content')
	
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header>
					<h1></h1>
					<p></p>
				</header>
				<section class="tiles">
					@foreach ($category as $key => $value)
					<article class="style1">
						<span class="image"><img src="{{$value->images}}" height="300" width="246" alt="" /></span>
						<a href="/item?id={{$value->id}}">
							<h2></h2>
							<div class="content">
								<p>{{$value->name}}</p>
							</div>
						</a>
					</article>
					@endforeach
				</section>
			</div>
		</div>
	</div>


@endsection
