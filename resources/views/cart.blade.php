@section('title','cart')
@section('content')
		<center>
			<!-- Main -->
					<header>
						<h1></h1>
						<p></p>
					</header>
					<section class="tiles">

						<table>
							<caption>
								<h3>カート</h3></caption>
							<thead>
								<tr>
									<th data-field="item">商品</th>
									<th data-field="number">数量</th>
									<th data-field="price">金額</th>
									<th data-field="delete">削除</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<img src="" height="100" width="150" alt="" />
										<p></p>
									</td>
									<td>
										<form>
											<select name="">
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

								</tr>
							</tbody>
							@endforeach
						</table>

					</section>
				</div>
			</div>

			<ul class="actions">
				<li><a href="arinko" class="button">商品一覧</a></li>
			</ul>

		</center>
		@endsection
