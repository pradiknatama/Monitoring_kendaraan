
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
        <h3 class="card-title">Create Pesanan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="/pesanan" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pegawai</label>
                <select class="form-control" name="pegawai" id="">
                    @foreach ($pegawai as $row)
                        <option value="{{ $row->id }}">{{ $row->nama }}</option>
                    @endforeach
                </select>
            </div>
              @error('pegawai')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Driver</label>
                <select class="form-control" name="driver" id="">
                    @foreach ($driver as $row)
                        <option value="{{ $row->id }}">{{ $row->nama }}</option>
                    @endforeach
                </select>
            </div>
              @error('driver')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="exampleInputEmail1">Kendaraan</label>
                <select class="form-control" name="kendaraan" id="">
                    @foreach ($kendaraan as $row)
                        <option value="{{ $row->id}}">{{ $row->name }}</option>
                    @endforeach
                </select>
            </div>
              @error('kendaraan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="exampleInputEmail1">Penyetuju 1</label>
                <select class="form-control" name="penyetuju1" id="penyetuju1">
                  @foreach ($staf as $row)
                      <option value="{{ $row->id }}">{{ $row->name }}</option>
                  @endforeach
              </select>
              </div>
              @error('penyetuju1')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="exampleInputEmail1">Penyetuju 2</label>
                <select class="form-control" name="penyetuju2" id="penyetuju2">
                  @foreach ($staf as $row)
                      <option value="{{ $row->id}}">{{ $row->name }}</option>
                  @endforeach
              </select>
              </div>
              @error('penyetuju2')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/pesanan" class="btn btn-secondary">Kembali</a>
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