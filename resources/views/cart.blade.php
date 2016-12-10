@extends('app')
@section('title','cart')

@section('header')
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')

<center>

	<h3>cart</h3>
	<table class="cartdata">

		<tbody>
			<tr>
				<th>商品画像</th>
				<th>商品</th>
				<th>数量</th>
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
				<td>
					<form>
						<select class="select-box02">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>
					</form>
				</td>
				<td>￥{{$value->price}}</td>
				<td><a href="" class="material-icons" name="delete">delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<table class="sumprice">
		<tr>
			<th>合計金額</th>
			<td>￥</td>
		</tr>
	</table>

<div class="cartsub">
		<div class="cartbtn">
				<div class="itembutton">
				    <a href="/top" class="button" name="itembutton">トップに戻る</a>
				</div>
				<div class="procedurebutton">
				    <a href="/buy" class="button" name="procedurebutton">購入手続き</a>
				</div>
		</div>
</div>

</center>
@endsection
