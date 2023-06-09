@extends('main.navbar')

@section('content')


<div class="text-center py-5 bg-black text-white">
    <h3><b>EDIT SPP</b></h3>
</div>
<div class="container mt-4">
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
                <h4><B>Edit Spp</B></h4>
            </div>
            <div>
                <a href="{{ url('spp') }}" class="btn btn-info">Kembali</a>
            </div>
        </div>
        <hr>
        <form action="{{ url('spp/update') }}" method="POST">
        @csrf
            <input type="hidden" name="id" value="{{ $spp->id }}">
        <div class="form-group">
            <label for="tahun">tahun</label>
            <input name="tahun" type="text" id="tahun" class="form-control" value="{{ $spp->tahun }}" required>
        </div>

        <div class="form-group">
            <label for="nominal">nominal</label>
            <input name="nominal" type="text" id="nominal" class="form-control" value="{{ $spp->nominal }}" required>
        </div>
        <div class="mt-3 text-end">
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>


        </form>
    </div>
</div>


@endsection
