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
										<h3>Zakat Penghasilan</h3>
										Standar nishab yang digunakan adalah sebesar Rp5.240.000,- per bulan.
										<br /><br />
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>GAJI YANG DIDAPAT</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Perbulan</td>
														<td class="value_cols">Rp<input type="text" id="gaji" class="input_angka" onkeyup="validasiAngka(this); zc_penghasilan();" onblur="validasi_numstring(this);"/></td>
													</tr>
												</tbody>
												<thead>
												<tr>
													<th class="label_cols">Total</th>
													<th class="value_cols">Rp <input type="text" id="zakat_gaji" class="input_angka" disabled="disabled" /></th>
												</tr>
												</thead>
												<tbody>
													<tr>
														<td colspan="2" class="tableheader" id="keterangan_gaji">&nbsp;</td>
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