@extends('app')
@section('title','buy')
@section('content')

<center>

<h3>buy</h3>

<table class="cartdata">
  <caption>購入商品</caption>
  <tbody>
    <tr>
      <th>商品画像</th>
      <th>商品</th>
      <th>数量</th>
      <th>金額</th>
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
      <td>￥</td>
    </tr>
  </tbody>
</table>

<table class="userdata">
  <caption>お届け先情報</caption>
    <tr>
      <th>お名前</th>
      <td></td>
    </tr>
    <tr>
      <th>住所</th>
      <td></td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td></td>
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
