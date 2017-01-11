@extends('app')
@section('title','buy')
@section('content')

<center>

<h3>buy</h3>

<form class="" action="/buy" method="post">
{{csrf_field()}}
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
        <select class="select-box02 item{{$value->id}}" name="num[{{$value->id}}]" style="display:inline-block;">
          @foreach (range(1,9) as $num)
            <option value="{{$num}}">{{$num}}</option>
          @endforeach
        </select>
    </td>
      <td><input type="text" value="￥{{$value->price}}"  class="itemprice{{$value->id}}" disabled></td>
    </tr>
    @endforeach
  </tbody>
</table>
<table class="userdata">
  <tr>
    <th>合計金額</th>
    <td><input style="text-align:center;" class="sumprice" type="text" value="0" disabled></td>
  </tr>
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

  <p>お支払い：代引きとなります</p>

  <div class="buysub">
  		<div class="buybtn">
  				<div class="cartbutton">
  				    <a href="/cart" class="button" name="cartbutton">戻る</a>
  				</div>
  				<div class="buybutton">
  				    <input type="submit" class="button" value="購入">
  				</div>
  		</div>
  </div>
</form>
</center>
	<script src="/js/jquery.min.js"></script>
<script type="text/javascript">
  +function(){
    var itemdata = [];
    var itemprice = [];
    var sumprice = 0;

    @foreach ($item as $key => $value)
      itemdata.push( {{$value->id}} );
      itemprice.push( {{$value->price}} );
      sumprice += {{$value->price}} ;
    @endforeach

    $(".sumprice").val("￥"+sumprice);

    $("select").change(function() {
      sumprice = 0;

      itemdata.forEach(function(value,index){
        cnt = $(".item" + value).val();
        $(".itemprice" + value).val( "￥" + (cnt * itemprice[index]));
        sumprice += cnt * itemprice[index];
      });

      $(".sumprice").val("￥"+sumprice);

    });

  }();
</script>
@endsection
