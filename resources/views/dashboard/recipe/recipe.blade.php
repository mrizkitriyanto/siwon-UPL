@extends('dashboard.layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Resep Makanan</h1>
        <p class="mb-4">Menampilkan daftar resep makanan yang telah diterbitkan.</p>

        <a href="/dashboard/foodrecipe/create" class="btn btn-primary mb-3">+ Tambah Resep Makanan</a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Resep Makanan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Cover</th>
                                <th>Poster</th>
                                <th>Tanggal</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($recipes as $row)
                                <tr>
                                    @php
                                        echo '<td>' . $i++ . '</td>';
                                    @endphp
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->slug }}</td>
                                    <td><img src="{{ asset('assets/images/foodrecipe/cover/' . $row->photo) }}" alt=""
                                            width="100px"></td>
                                    <td><img src="{{ asset('assets/images/foodrecipe/poster/' . $row->poster) }}" alt=""
                                            width="100px"></td>
                                    @php
                                        $phpdate = strtotime($row->updated_at);
                                        $mysqldate = date('d-m-Y H:i:s', $phpdate);
                                        echo '<td>' . $mysqldate . '</td>';
                                    @endphp
                                    <td>
                                        <a class="btn btn-secondary" href="/food-recipe/{{ $row->slug }}"><i class="fas fa-eye"></i></a>
                                        <form class="d-inline"
                                            action="/dashboard/foodrecipe/{{ $row->slug }}/edit" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-info">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </form>
                                        <form class="d-inline" action="/dashboard/foodrecipe/{{ $row->slug }}"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return alert('Yakin untuk menghapus resep?')"><i
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
