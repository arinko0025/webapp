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
      <dd>xxxx</dd>
    </div>

    <div class="mypage">
      <div class="Member_information">
          <table class="main_data">
              <tr class="member">
                  <th>お客様情報</th>
                  <td>
                      <li>ID：</li>
                      <li>名前：</li>
                      <li>メールアドレス：</li>
                      <li>郵便番号：〒</li>
                      <li>住所：</li>
                      <li>電話番号：</li>
                  </td>
              </tr>
          </table>
      </div>
    </div>
  </div>
</main>

@endsection
