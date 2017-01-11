@extends('app')
@section('title','cart')

@section('header')
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')

<center>

	<h3>cart</h3>
	@if(session('error'))
	<h4 style="color:red;">カートの中身が空です</h4>
	@endif
	<table class="cartdata">

		<tbody>
			<tr>
				<th>商品画像</th>
				<th>商品</th>
				<th>金額</th>
				<th>削除</th>
			</tr>
			@foreach ($item as $key => $value)
			<tr>
				<td width=200; style="position: relative;">
					<img src="{{$value->Img[0]->url}}" height="100" width="150" alt="" style="
								margin: auto;
								top: 0;
								bottom: 0;
								left: 0;
								right: 0;
								position: absolute;
							">
				</td>
				<td style="text-align:center;vertical-align:middle">{{$value->name}}</td>
				<td>￥{{$value->price}}</td>
				<td><form class="" action="/cart/delete" method="post">
					{{csrf_field()}}
					<input type="hidden" name="item_id" value="{{$value->id}}">
					<button type="submit" class="material-icons" style="box-shadow: inherit;">delete</button></td>
				</form>
			</tr>
			@endforeach
		</tbody>
	</table>



<div class="cartsub">
		<div class="cartbtn">
				<div class="itembutton">
				    <a href="/top" class="button" name="itembutton">トップに戻る</a>
				</div>
				@if(Auth::check())
				<div class="procedurebutton">
				    <a href="/buy" class="button" name="procedurebutton">購入手続き</a>
				</div>
				@else
				<div class="procedurebutton">
						<a href="/login" class="button" name="procedurebutton">login</a>
				</div>
				@endif
		</div>
</div>

</center>
@endsection
