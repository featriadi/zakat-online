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
										Untuk menghitung zakat harta yang telah tersimpan selama <strong>1 tahun hijriyah</strong>. Metode perhitungannya sama dengan zakat emas atau perak. Yaitu, dengan nisab senilai <strong>85 gram emas atau 595 gram perak</strong>. Sedangkan zakatnya adalah sebesar <strong>2,5%</strong>.
										<br /><br />
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>NISHAB</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="label_cols">Nishab yang digunakan</td>
														<td class="value_cols">
														<select name="opsi_nisab" id="opsi_nisab" onchange="zc_mal_nisab(); zc_mal_hitung();">
															<option value="emas" selected="selected">Emas</option>
															<option value="perak">Perak</option>
														</select>
														</td>
													</tr>
													<tr>
														<td class="label_cols">Harga 1 gram emas</td>
														<td class="value_cols">Rp <input type="text" id="harga_emas" class="input_angka" onkeyup="validasiAngka(this); zc_mal_nisab(); zc_mal_hitung();" onblur="validasi_numstring(this);" value="737.000,00" /></td>
													</tr>
													<tr>
														<td class="label_cols">Harga 1 gram perak</td>
														<td class="value_cols">Rp <input type="text" id="harga_perak" class="input_angka" onkeyup="validasiAngka(this); zc_mal_nisab(); zc_mal_hitung();" onblur="validasi_numstring(this);" value="13.200,00" disabled="disabled" /></td>
													</tr>
													<tr>
														<td class="label_cols"><strong>Nishab</strong></td>
														<td class="value_cols">Rp <input type="text" id="nisab" class="input_angka" disabled="disabled" value="51.000.000,00" /> <input type="hidden" id="nisab_float" value="51000000.00" /></td>
													</tr>
												</tbody>
												<thead>
													<tr>
														<th>HARTA</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="label_cols">Uang tunai dan tabungan</td>
														<td class="value_cols">Rp <input type="text" id="uang_tabungan" class="input_angka" onkeyup="validasiAngka(this); zc_mal_total_harta();" onblur="validasi_numstring(this);" /></td>
													</tr>
													<tr>
														<td class="label_cols">Saham dan surat berharga lainnya</td>
														<td class="value_cols">Rp <input type="text" id="saham" class="input_angka" onkeyup="validasiAngka(this); zc_mal_total_harta();" onblur="validasi_numstring(this);" /></td>
													</tr>
													<tr>
														<td class="label_cols">Piutang</td>
														<td class="value_cols">Rp <input type="text" id="piutang" class="input_angka" onkeyup="validasiAngka(this); zc_mal_total_harta();" onblur="validasi_numstring(this);" /></td>
													</tr>
													<tr>
														<td class="label_cols"><strong>Total Harta</strong></td>
														<td class="value_cols">Rp <input type="text" id="total_harta" class="input_angka" disabled="disabled" /> <input type="hidden" id="total_harta_float" /></td>
													</tr>
												</tbody>
												<thead>
													<tr>
														<th>KEWAJIBAN</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="label_cols">Hutang</td>
														<td class="value_cols">Rp <input type="text" id="hutang" class="input_angka" onkeyup="validasiAngka(this); zc_mal_total_kewajiban();" onblur="validasi_numstring(this);" /></td>
													</tr>
													<tr>
														<td class="label_cols"><strong>Total Kewajiban</strong></td>
														<td class="value_cols">Rp <input type="text" id="total_kewajiban" class="input_angka" disabled="disabled" /> <input type="hidden" id="total_kewajiban_float" /></td>
													</tr>
												</tbody>
												<thead>
													<tr>
														<th colspan="2" class="tableheader"><strong>Zakat</strong></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="label_cols">Selisih harta dan kewajiban</td>
														<td class="value_cols">Rp <input type="text" id="selisih_harta" class="input_angka" disabled="disabled" /></td>
													</tr>
													<tr>
														<td class="label_cols"><strong>Zakat</strong></td>
														<td class="value_cols">Rp <input type="text" id="zakat_harta" class="input_angka" disabled="disabled" /></td>
													</tr>
												</tbody>
												<tr>
													<th colspan="2" class="tableheader" id="keterangan">&nbsp;</th>
												</tr>
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