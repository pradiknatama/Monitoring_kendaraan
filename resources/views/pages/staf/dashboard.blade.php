@extends("layouts.dashboard")
@push('style')
     <!-- DataTables -->
  <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section("content")
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pesanan Kendaraan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nama Pegawai</th>
          <th>Nama Driver</th>
          <th>Kendaraan</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($tes as $item)
            <tr>
              <td>{{ $item->riwayat->detail_histories[0]->pegawai->nama }}</td>
              <td>{{ $item->riwayat->detail_histories[1]->pegawai->nama }}</td>
              <td>{{ $item->riwayat->kendaraan->name }}</td>
              <td>@if ($item->status =='0')
                  Belum Diverifikasi
              @else
                  Terverifikasi
              @endif</td>
              <td>
                @if ($item->status=='0')
                <form action="/verif/{{$item->id  }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-success btn-sm">Verifikasi</button>
                </form>
                @endif
              </td>
          </tr>
            @empty
                
            @endforelse
            
       
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
@push('scripts')
    <!-- DataTables  & Plugins -->
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/admin/plugins/jszip/jszip.min.js"></script>
<script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": [ "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endpush