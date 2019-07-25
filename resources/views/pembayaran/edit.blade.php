@extends('dashboard.master')
@section('content')

<section id="main">
	<div class="inner">
	<h3>Ubah Pembayaran</h3>
	@foreach($pembayaran as $p)
	<form action="/pembayaran/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}">
		<!--Jenis Zakat-->
		<div class="12u$">
			Jenis Zakat
			<div class="select-wrapper">
				<select name="zakat_id" required="required">
					@foreach($pembayaran as $p)
						@foreach($zakats as $z)
							@if( $p->zakat_id == $z->id )
								<option value="{{ $z->id }}"> {{ $z->nama_zakat }} </option>
							@endif
						@endforeach
						@foreach($zakats as $z)
							<tr>
								<option value="{{ $z->id }}">{{ $z->nama_zakat }}</option>
							</tr>
						@endforeach
					@endforeach
				</select>
			</div>
		</div>
		<!--Atas Nama-->
		<div class="12u$">
			Atas Nama
			<input type="text" name="atas_nama" required="required"  value="{{ $p->atas_nama }}"/>
		</div>
		<!--Jumlah-->
		<div class="12u$">
			Jumlah
			<input type="text" name="jumlah" class="input_angka"required="required" onkeyup="validasiAngka(this);" onblur="validasi_numstring(this);" value="{{ $p->jumlah }}" />
		</div>
		<!--Status-->
		<!--Status <input type="text" required="required" name="status" value="{{ $p->status }}">-->
		
		<div class="12u$">
			Status
			<div class="select-wrapper">
				<select name="status" required="required">
					@if($p->status == 0)
						<option value="{{ $p->status }}	"> Belum Lunas </option>
					@elseif($p->status == 1)
						<option value="{{ $p->status }}	"> Lunas </option>
					@endif
					<tr>
						<option value="0"> Belum Lunas </option>
						<option value="1"> Lunas </option>
					</tr>
				</select>
			</div>
		</div>
		<br/>
		<div class="12u$">
			<ul class="actions">
				<li><input type="submit" value="Simpan Data" class="special" /></li>
			</ul>
		</div>
	</form>
@endforeach
	</div>
</section>

@endsection