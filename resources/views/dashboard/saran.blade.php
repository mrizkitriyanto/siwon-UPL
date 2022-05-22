@extends('dashboard.layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Saran</h1>
        <p class="mb-4">Menampilkan saran yang dikirimkan oleh pengguna untuk SiWON.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Saran</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Waktu</th>
                                <th>Saran</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($suggestions as $row)
                                <tr>
                                    @php
                                        echo '<td>' . $i++ . '</td>';
                                    @endphp
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    @php
                                        $phpdate = strtotime($row->created_at);
                                        $mysqldate = date('d-m-Y H:i:s', $phpdate);
                                        echo '<td>'. $mysqldate .'</td>'
                                    @endphp
                                    <td>{{ $row->message }}</td>
                                    <td>
                                        <form class="d-inline" action="/dashboard/suggestions/{{ $row->id }}"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return alert('Yakin untuk menghapus pesan?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@section('script')
    <script src="{{ asset('assets/dashboard/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/demo/datatables-demo.js') }}"></script>
@endsection