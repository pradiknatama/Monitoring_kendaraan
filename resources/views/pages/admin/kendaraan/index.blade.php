@extends("layouts.dashboard")
@section("content")
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Kendaraan</h3>
    </div>
    <div class="card-body p-0">
        <a href="/kendaraan/create" class="btn btn-primary m-3">Tambah Kendaraan</a>
      <table class="table table-striped projects">
          <thead>
              <tr>
                    <th style="width: 5%">
                        #
                    </th>
                    <th style="width: 20%">
                        Nama
                    </th>
                    <th >
                        Jenis Mobil
                    </th>
                    <th style="width: 10%">
                        BBM
                    </th>
                    <th style="width: 10%">
                        Service
                    </th>
                    <th style="width: 20%">
                        Rental
                    </th>
                    <th style="width: 20%">
                        Action
                    </th>
              </tr>
          </thead>
          <tbody>
            @forelse ($kendaraan as $key=>$item)
            <tr>
                
                <td>
                    {{ $key+1 }}
                </td>
                <td>
                    {{ $item->name}}
                </td>

                <td>
                    {{ $item->jenis_mobil}}
                </td>
                <td>
                    {{ $item->bbm}}
                </td>
                <td>
                    {{ $item->service}}
                </td>
                <td>
                    {{ $item->rental}}
                </td>
                <td class="project-actions ">
                    <form action="/produk/{{ $item->id }}" method="post">
                        @csrf
                        @method('delete')
                        {{-- <a class="btn btn-primary btn-sm" href="/kategori/{{ $item->id }}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="/produk/{{ $item->id }}/edit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>

                        <button class="btn btn-danger btn-sm delete-confirm" data-name="{{ $item->nama }}" type="submit"><i class="fas fa-trash">
                        </i> 
                        Delete</button>
                    </form>
                </td>
            </tr>
            @empty
                <tr><td colspan="7"><center>Data Produk Masih Kosong</center></td></tr>
            @endforelse
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
@push("scripts")
@include('sweetalert::alert')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
    
    $('.delete-confirm').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: `Apakah anda akan menghapus produk ${name}?`,
          text: "Anda tidak akan bisa mengembalikan produk ini!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((result) => {
        if (result) {
          form.submit();
        }
      });
  });
    </script>
@endpush