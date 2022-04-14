
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
        <h3 class="card-title">Edit Kendaraan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      
      <form action="/kendaraan/{{ $kendaraan->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{ $kendaraan->name }}">
            </div>
            @error('nama')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Mobil</label>
              <select class="form-control" name="j_mobil" id="j_mobil">
                  @if ($kendaraan->jenis_mobil=='perusahaan')
                    <option value="perusahaan" selected>Perusahaan</option>
                    <option value="sewa" >Sewa</option>
                  @else
                    <option value="sewa" selected>Sewa</option>
                    <option value="perusahaan" >Perusahaan</option>
                  @endif
              </select>
            </div>
              @error('j_mobil')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="exampleInputEmail1">BBM </label>
                <input type="text" class="form-control" id="bbm" name="bbm" value="{{ $kendaraan->bbm }}">
              </div>
              @error('bbm')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="exampleInputEmail1">Service</label>
                  <input class="form-control digits" id="servis" name="servis" type="date" value="{{ $kendaraan->service }}">

              </div>
              @error('service')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="exampleInputEmail1">Lokasi mobil </label>
                <select class="form-control" name="location" id="location">
                    @foreach ($loc as $item)
  
                            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>

                     @endforeach
                </select>
              </div>
                @error('location')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              <div class="form-group">
                <label for="exampleInputEmail1">Rental</label>
                <input type="text" class="form-control" id="rental" name="rental" value="{{ $kendaraan->rental }}">
              </div>
              @error('rental')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/kendaraan" class="btn btn-secondary">Kembali</a>
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