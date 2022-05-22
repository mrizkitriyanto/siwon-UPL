@extends('dashboard.layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Program</h1>
        <p class="mb-4">Menampilkan daftar program yang telah diterbitkan.</p>

        <a href="/dashboard/program/create" class="btn btn-primary mb-3">+ Tambah Program</a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Program</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Cover</th>
                                <th>Poster</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($programs as $row)
                                <tr>
                                    @php
                                        echo '<td>' . $i++ . '</td>';
                                    @endphp
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->category->title }}</td>
                                    <td><img src="{{ asset('assets/images/program/cover/' . $row->photo) }}" alt=""
                                            width="100px"></td>
                                    <td><img img src="{{ asset('assets/images/program/poster/' . $row->poster) }}" alt=""
                                            width="100px"></td>
                                    <td>
                                        <a class="btn btn-secondary" href="/programs/{{ $row->slug }}"><i class="fas fa-eye"></i></a>
                                        <form class="d-inline" action="/dashboard/program/{{ $row->slug }}/edit"
                                            method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-info">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </form>
                                        <form class="d-inline" action="/dashboard/program/{{ $row->slug }}"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return alert('Yakin untuk menghapus program?')"><i
                                                    class="fas fa-trash"></i></button>
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
