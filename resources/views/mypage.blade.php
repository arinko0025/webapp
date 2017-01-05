@extends('app')
@section('title','mypage')
@section('content')
<main>
  <center>
  <h3>mypage</h3>
  </center>

  <div class="main">
    <div class="sideber">
      <dt>mypage</dt>
      <dd>{{$user->name}}</dd>
    </div>

    <div class="mypage">
      <div class="Member_information">
          <table class="main_data">
              <tr class="member">
                  <th>お客様情報</th>
                  <td>
                      <li>ID：{{$user->id}}</li>
                      <li>名前：{{$user->name}}</li>
                      <li>性別：{{config("column.sex.$user->sex")}}</li>
                      <li>メールアドレス：{{$user->email}}</li>
                      <li>住所：{{$user->address}}</li>
                      <li>電話番号：{{$user->tel}}</li>
                  </td>
              </tr>
          </table>
      </div>
    </div>
  </div>
</main>

@endsection
