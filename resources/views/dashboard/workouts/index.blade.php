@extends('dashboard.layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Workout</h1>
        <p class="mb-4">Menampilkan daftar workout yang telah diterbitkan.</p>

        <a href="/dashboard/workouts/create" class="btn btn-primary mb-3">+ Tambah Workout</a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Workout</h6>
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
                            @foreach ($workouts as $row)
                                <tr>
                                    @php
                                        echo '<td>' . $i++ . '</td>';
                                    @endphp
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->category->title }}</td>
                                    <td><img src="{{ asset('assets/images/workout/cover/' . $row->photo) }}" alt=""
                                            width="100px"></td>
                                    <td><img img src="{{ asset('assets/images/workout/poster/' . $row->poster) }}" alt=""
                                            width="100px"></td>
                                    <td>
                                        <a class="btn btn-secondary" href="/workout/{{ $row->slug }}" target="blank_"><i class="fas fa-eye"></i></a>
                                        <form class="d-inline" action="/dashboard/workouts/{{ $row->slug }}/edit"
                                            method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-info">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </form>
                                        <form class="d-inline" action="/dashboard/workouts/{{ $row->slug }}"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Yakin untuk menghapus ?')"><i
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
