
@extends("layouts.dashboard")
@push("style")
<!-- Select2 -->
<link rel="stylesheet" href="/admin/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush

@section("content")
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Pegawai</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="/pegawai/{{ $pegawai->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}">
            </div>
            @error('nama')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Jabatan</label>
                <select class="form-control" name="jabatan" id="jabatan">
                    @if ($pegawai->jabatan == "anggota")
                        <option value="anggota" selected>Anggota</option>
                        <option value="driver">Driver</option>
                    @else
                    <option value="anggota">Anggota</option>
                    <option value="driver" selected>Driver</option>
                    @endif
                    
              </select>
            </div>

              @error('jabatan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/pegawai" class="btn btn-secondary">Kembali</a>
        </div>
      </form>
    </div>
  </div>
@endsection
@push("scripts")
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
   // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endpush