@extends("layouts.dashboard")
@push('style')
     <!-- DataTables -->
  <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section("content")
<div class="row">
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $pegawai }}</h3>
  
            <p>Pegawai</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
        </div>
      </div>
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $kendaraan }}</h3>

          <p>Kendaraan</p>
        </div>
        <div class="icon">
          <i class="ion ion-model-s"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $lokasi }}</h3>
          <p>Kantor</p>
        </div>
        <div class="icon">
          <i class="ion ion-location"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
</div>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Pesanan Kendaraan</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-striped projects">
          <thead>
              <tr>
                    <th style="width: 5%">
                        #
                    </th>
                    <th style="width: 20%">
                        Nama Pegawai
                    </th>
                    <th style="width: 20%">
                        Nama driver
                    </th>
                    <th style="width: 20%">
                        Nama Mobil
                    </th>
                    <th >
                        Status
                    </th>
                    <th >
                        Penyetuju 1
                    </th>
                    <th >
                        Penyetuju 2
                    </th>
              </tr>
          </thead>
          <tbody>
            @forelse ($tes as $key=>$item)
            <tr>
                
                <td>
                    {{ $key+1 }}
                </td>
                <td>
                    {{ $item->detail_histories[0]->pegawai->nama }}
                </td>

                <td>
                    {{ $item->detail_histories[1]->pegawai->nama }}
                </td>
                <td>
                    {{ $item->kendaraan->name}}
                </td>
                <td>
                    @if ($item->status =='0')
                        Belum Diverifikasi
                    @else
                        Terverifikasi
                    @endif
                </td>
                <td>
                    {{ $item->verifikasi[0]->users->name}}
                </td>
                <td>
                    {{ $item->verifikasi[1]->users->name}}
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
<a href="https://www.flaticon.com/free-icons/user" title="user icons">User icons created by Pixel perfect - Flaticon</a>
<a href="https://www.flaticon.com/free-icons/traffic" title="traffic icons">Traffic icons created by Freepik - Flaticon</a>
<a href="https://www.flaticon.com/free-icons/location" title="location icons">Location icons created by Freepik - Flaticon</a>
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