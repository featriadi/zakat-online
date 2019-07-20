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
											<article>
												<h3>Zakat Pertanian</h3>
												Nishab untuk jenis zakat ini adalah sebesar <strong>750 kg</strong>. Dikeluarkan <strong>saat panen</strong> sebesar <strong>5% jika irigasinya menggunakan biaya/beban</strong>, atau <strong>10% jika diairi dengan air hujan/sungai (tanpa biaya)</strong>.
											</article>
											<br/>
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>HARTA YANG DIMILIKI</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Hasil Panen</td>
														<td class="value_cols"><input type="text" id="panen" class="input_angka" style="width:150px" onkeyup="validasiAngka(this); zc_pertanian();" /> kg</td>
													</tr>
													<tr>
														<td class="label_cols">Jenis Pengairan</td>
														<td class="value_cols">
														<select id="persen_zakat" onchange="zc_pertanian();">
															<option value="0.1">tanpa biaya</option>
															<option value="0.05">dengan biaya</option>
														</select>
														</td>
													</tr>
												</tbody>
												<thead>
													<tr>
														<th class="label_cols">ZAKAT</th>
														<th class="value_cols"><br><input type="text" id="zakat" class="input_angka" style="width:150px" disabled="disabled" />kg</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td colspan="2" class="tableheader" id="keterangan">&nbsp;</td>
													</tr>
												</tbody>
											</table>
										</div>
									</section>
									</div>
								</div>
							</section>
						</section>
				</div>
		</section>
		@endsection