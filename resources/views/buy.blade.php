@extends('app')
@section('title','buy')
@section('content')

<center>

<h3>buy</h3>
<table class="cartdata">
  <tbody>
    <tr>
      <th>商品画像</th>
      <th>商品</th>
      <th>数量</th>
      <th>小計</th>
    </tr>
    @foreach ($item as $key => $value)
    <tr>
      <td width="200" style="position: relative;">
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
        <select class="select-box02" name="num" style="display:inline-block;">
          @foreach (range(1,9) as $num)
            <option value="{{$num}}">{{$num}}</option>
          @endforeach
        </select>
    </td>
      <td>￥{{$value->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>




<table class="userdata">
  <caption>お届け先情報</caption>
    <tr>
      <th>お名前</th>
      <td>{{$user->name}}</td>
    </tr>
    <tr>
      <th>住所</th>
      <td>{{$user->address}}</td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td>{{$user->tel}}</td>
    </tr>
  </table>

  <div class="buysub">
  		<div class="buybtn">
  				<div class="cartbutton">
  				    <a href="/cart" class="button" name="cartbutton">戻る</a>
  				</div>
  				<div class="buybutton">
  				    <a href="/completion" class="button" name="buybutton">購入</a>
  				</div>
  		</div>
  </div>

</center>

@endsection
