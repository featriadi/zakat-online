		@extends('dashboard.master')
		@section('content')
		<!-- Main -->
		<section id="main">
				<div class="inner">
						<section>
							<h2>Kalkulator Zakat</h2>
							<!-- content -->
							<h2>Zakat Emas dan Perak</h2>
							<table class="form_perhitungan">

							<tr>
								<th colspan="2" class="tableheader"><strong>Yang dimiliki</strong></th>
							</tr>
							<tr>
								<th class="label_cols">Emas</th>
								<th class="value_cols"><input type="text" id="emas" class="input_angka" style="width:100px" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" /> gram</th>
							</tr>
							<tr>
								<th class="label_cols">Perak</th>
								<th class="value_cols"><input type="text" id="perak" class="input_angka" style="width:100px" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" /> gram</th>
							</tr>
							<tr>
								<th colspan="2" class="tableheader"><strong>Zakat</strong></th>
							</tr>
							<tr>
								<th class="label_cols">.:. Zakat Emas</th>
								<th class="value_cols"><input type="text" id="zakat_emas" class="input_angka" style="width:100px" disabled="disabled" /> gram</th>
							</tr>
							<tr>
								<th class="label_cols">.:. Zakat Perak</th>
								<th class="value_cols"><input type="text" id="zakat_perak" class="input_angka" style="width:100px" disabled="disabled" /> gram</th>
							</tr>
							<tr>
								<th colspan="2" class="tableheader"><strong>Zakat (jika dibayar dengan uang)</strong></th>
							</tr>
							<tr>
								<th class="label_cols">Harga 1 gram emas</th>
								<th class="value_cols">Rp <input type="text" id="harga_emas" class="input_angka" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" value="737.000,00" /></th>
							</tr>
							<tr>
								<th class="label_cols">Harga 1 gram perak</th>
								<th class="value_cols">Rp <input type="text" id="harga_perak" class="input_angka" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" value="13.200,00" /></th>
							</tr>
							<tr>
								<th class="label_cols">Zakat Emas</th>
								<th class="value_cols">Rp <input type="text" id="zakat_emas_uang" class="input_angka" disabled="disabled" /></th>
							</tr>
							<tr>
								<th class="label_cols">Zakat Perak</th>
								<th class="value_cols">Rp <input type="text" id="zakat_perak_uang" class="input_angka" disabled="disabled" /></th>
							</tr>
							<tr>
								<th class="label_cols">.:. Total</th>
								<th class="value_cols">Rp <input type="text" id="zakat_total_uang" class="input_angka" disabled="disabled" /></th>
							</tr>
							<tr>
								<th colspan="2" class="tableheader" id="keterangan">&nbsp;</th>
							</tr>
							</table>
							<!-- end of content -->
						</section>
				</div>
		</section>
		@endsection