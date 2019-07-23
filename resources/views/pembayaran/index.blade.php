		@extends('dashboard.master')
		@section('content')
		<section id="two">
			<div class="inner">
				<h1>Tunaikan Zakat</h1>
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
										<h3>Menu Pembayaran</h3>
										<div class="9u 6u(small) 12u$(xsmall)">
											<ul class="actions vertical">
												<li><a href="{{url('/pembayaran')}}" class="button special fit">Bayar Zakat</a></li>
												<li><a href="{{url('/daftarpembayaran')}}" class="button special fit">Daftar Pembayaran</a></li>
											</ul>
										</div>
									</div>
									<div class="7u$ 12u$(xsmall)">
										<section>
											<!-- Form -->
											<section>
												<h3>Bersihkan hartamu dengan berzakat</h3>
												<form action="/pembayaran/store" method="post">
													{{ csrf_field() }}
													<div class="row uniform 50%">
														<div class="12u$">
															<input type="text" name="atas_nama" required="required"  placeholder="Atas Nama" />
														</div>
														<div class="12u$">
															<div class="select-wrapper">
																<select name="jenis_zakat" required="required">
																	<option value="">- Jenis Zakat -</option>
																	@foreach($zakats as $z)
																	<tr>
																		<option value="{{ $z->id }}">{{ $z->nama_zakat }}</option>
																	</tr>
																	@endforeach
																</select>
															</div>
														</div>
														<div class="12u$">
															<input type="text" name="jumlah" class="input_angka"required="required" onkeyup="validasiAngka(this);" onblur="validasi_numstring(this);" placeholder="Jumlah Zakat" />
														</div>
														<div class="12u$">
															<input type="hidden" name="user_id" value="{{ Auth::user()->id }}"required="required"/>
														</div>
														<div class="12u$">
															<ul class="actions">
																<li><input type="submit" value="Tunaikan" class="special" /></li>
															</ul>
														</div>
													</div>
												</form>
											</section>
										</section>
									</div>
								</div>
							</section>
						</section>
				</div>
		</section>
		@endsection