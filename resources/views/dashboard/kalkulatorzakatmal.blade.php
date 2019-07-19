		@extends('dashboard.master')
		@section('content')
		<section id="two">
			<div class="inner">
				<h1>Kalkulator Zakat</h1>
			</div>
		</section>
		<!-- Main -->
		<section id="main">
				<div class="inner">
						<section>
							<!-- Lists -->
							<section>
								<div class="row">
									<div class="5u 12u$(xsmall)">
										<h3>Jenis Zakat</h3>
										<div class="9u 6u(small) 12u$(xsmall)">
											<ul class="actions vertical">
												<li><a href="{{url('/kalkulatorzakat/mal')}}" class="button special fit">Zakat Mal</a></li>
												<li><a href="{{url('/kalkulatorzakat/fitrah')}}" class="button special fit">Zakat Fitrah</a></li>
												<li><a href="{{url('/kalkulatorzakat/penghasilan')}}" class="button special fit">Zakat Penghasilan</a></li>
												<li><a href="{{url('/kalkulatorzakat/pertanian')}}" class="button special fit">Zakat Pertanian</a></li>
												<li><a href="{{url('/kalkulatorzakat/emas')}}" class="button special fit">Zakat Emas/Perak</a></li>
											</ul>
										</div>
									</div>
									<div class="7u$ 12u$(xsmall)">
										<section>
										<h3>Zakat Mal</h3>
										<!--
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>HARTA YANG DIMILIKI</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Emas</td>
														<td class="value_cols"><input type="text" id="emas" class="input_angka" style="width:100px" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" /> gram</td>
													</tr>
													<tr>
														<td>Perak</td>
														<td class="value_cols"><input type="text" id="perak" class="input_angka" style="width:100px" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" /> gram</td>
													</tr>
												</tbody>
												<thead>
													<tr>
														<th>ZAKAT EMAS/PERAK</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Zakat Emas</td>
														<td class="value_cols"><input type="text" id="zakat_emas" class="input_angka" style="width:100px" disabled="disabled" /> gram</td>
													</tr>
													<tr>
														<td>Zakat Perak</td>
														<td class="value_cols"><input type="text" id="zakat_perak" class="input_angka" style="width:100px" disabled="disabled" /> gram</td>
													</tr>
												</tbody>
												<thead>
													<tr>
														<th>ZAKAT UANG</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Harga 1 gram emas</td>
														<td class="value_cols">Rp <input type="text" id="harga_emas" class="input_angka" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" value="737.000,00" /></td>
													</tr>
													<tr>
														<td>Harga 1 gram perak</td>
														<td class="value_cols">Rp <input type="text" id="harga_perak" class="input_angka" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" value="13.200,00" /></td>
													</tr>
													<tr>
														<td>Zakat Emas</td>
														<td class="value_cols">Rp <input type="text" id="zakat_emas_uang" class="input_angka" disabled="disabled" /></td>
													</tr>
													<tr>
														<td>Zakat Perak</td>
														<td class="value_cols">Rp <input type="text" id="zakat_perak_uang" class="input_angka" disabled="disabled" /></td>
													</tr>
												</tbody>
												<thead>
												<tr>
													<th class="label_cols">Total</th>
													<th class="value_cols">Rp <input type="text" id="zakat_total_uang" class="input_angka" disabled="disabled" /></th>
												</tr>
												</thead>
											</table>
										</div>
										-->
									</section>
									</div>
								</div>
							</section>
						</section>
				</div>
		</section>
		@endsection