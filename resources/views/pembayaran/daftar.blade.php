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
												@if(Auth::user()->role == 'member')
													<li><a href="{{url('/pembayaran')}}" class="button special fit">Bayar Zakat</a></li>
												@endif
													<li><a href="{{url('/daftarpembayaran')}}" class="button special fit">Daftar Pembayaran</a></li>
											</ul>
										</div>
									</div>
									<div class="7u$ 12u$(xsmall)">
										<section>
											@if(Auth::user()->role == 'member')
												<h3>Daftar Pembayaran Anda</h3>
											@elseif(Auth::user()->role == 'admin')
												<h3>Daftar Pembayaran Member</h3>
											@endif
											<table border="1">
											<tr>
												<th>No</th>
												<th>Jenis Zakat</th>
												<th>Atas Nama</th>
												<th>Jumlah</th>
												<th>Status</th>
												@if(Auth::user()->role == 'admin')
												<th>Action</th>
												@endif
											</tr>
											<?php $hitung = 1; ?>
											@foreach($pembayaran as $p)
											<tr>
												<td>{{ $hitung }}</td>
												<td>{{ $p->zakat_id }}</td>
												<td>{{ $p->atas_nama }}</td>
												<td>{{ $p->jumlah }}</td>
												<td>{{ $p->status }}</td>
												@if(Auth::user()->role == 'admin')
												<td>
													<a href="/pembayaran/edit/{{ $p->id }}">Edit</a>
													<a href="/pembayaran/hapus/{{ $p->id }}">Delete</a>
												</td>
												@endif
											</tr>
											<?php $hitung++; ?>
											@endforeach
										</table>
										</section>
									</div>
								</div>
							</section>
						</section>
				</div>
		</section>
		@endsection