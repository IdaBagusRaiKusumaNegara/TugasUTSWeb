
<!DOCTYPE html>
<html>
@include('Template.head')
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
@include('Template.navbar')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
      <img src="{{asset('/assets/dist/img/siwo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIAK</span>
    </a>

    @include('Template.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SISTEM INFORMASI AKADEMIK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">KRS Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel KRS Mahasiswa</h3>
              </div>
               <div class="card-tools">
                <a href="{{ route('createkrsmahasiswa') }}" style="margin-left: 20px; margin-top: 10px;" class="btn btn-success"><i class="fas fa-plus-square"></i> Tambah Data KRS</a>
               </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Mata Kuliah</th>
                    <th>Jumlah SKS</th>
                    <th>Prodi</th>
                    <th>Semester</th>
                    <th>Dosen</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($dtKrs as $item)
                    <tr>
                        <td>{{ $loop->iteration }} </td>
                        <td>{{ $item->mata_kuliah }} </td>
                        <td>{{ $item->sks }} </td>
                        <td>{{ $item->prodi['nama_prodi'] }} </td>
                        <td> {{ $item->smtr }} </td>
                        <td> {{ $item->dosen['nama_dsn'] }} </td>
                        <td>
                        <a href="{{ url('editkrsmahasiswa', $item->id) }}"><i class="fas fa-edit" style="color: gold;"></i></a> 
                        |
                        <a href="{{ url('deletekrsmahasiswa', $item->id) }}"><i class="fas fa-trash" style="color: red;"></i></a>
                        </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('Template.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('Template.script')
@include('sweetalert::alert')
</body>
</html>
