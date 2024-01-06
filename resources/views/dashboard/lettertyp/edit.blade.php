@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-0 border-bottom">
    <h1 class="h2">Edit Data Klasifikasi Surat<h1>
</div>
<div class="col-lg-8 mt-3">
    <form method="POST" action="{{ route('lettertyp.update', $letter_type['id']) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')


        <div class="mb-3">
            <label for="letter_code" class="form-label">Kode Surat</label>
            <input type="number" class="form-control" id="letter_code" name="letter_code"
                value="{{ $letter_type['letter_code'] }}">
        </div>
        <div class="mb-3">
            <label for="name_type" class="form-label">Klasifikasi Surat </label>
            <input type="text" class="form-control" id="name_type" name="name_type"
                value="{{ $letter_type['name_type'] }}">
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection