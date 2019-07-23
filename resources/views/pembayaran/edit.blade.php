@extends('dashboard.master')
@section('content')

<section id="main">
	<div class="inner">
@foreach($pembayaran as $p)
	<form action="/pembayaran/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		<!--<div class="12u$">
			<div class="select-wrapper">
				<select name="jenis_zakat" required="required">
					<option value="{{ $p->zakat_id }}"> {{ $p->zakat_id }} </option>
					@foreach($zakats as $z)
					<tr>
						<option value="{{ $z->id }}">{{ $z->nama_zakat }}</option>
					</tr>
					@endforeach
				</select>
			</div>
		</div>-->
		Jenis Zakat <input type="text"  name="zakat_id" value="{{ $p->zakat_id }}"> <br/>
		Atas Nama <input type="text" required="required" name="atas_nama" value="{{ $p->atas_nama }}"> <br/>
		Jumlah <input type="number" required="required" name="jumlah" value="{{ $p->jumlah }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $p->status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endforeach
	</div>
</section>

@endsection