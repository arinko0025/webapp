@extends('app')
@section('title','cart')
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
				<th>合計金額</th>
			</tr>
			<tr>
				<td style="position: relative;">
					<img src="" height="100" width="150" alt="" style="
								margin: auto;
								top: 0;
								bottom: 0;
								left: 0;
								right: 0;
								position: absolute;
							">
				</td>
				<td style="text-align:center;vertical-align:middle">xxxxx</td>
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
				<td>￥</td>
				<td></td>
				<td>￥</td>
			</tr>
		</tbody>
	</table>


</center>
@endsection
