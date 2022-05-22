@extends('layout.main')

@section('content')
    <div class="containter mt-5">
        <div class="row mt-5 w-75 mx-auto">
            <h2 class="text-center mt-5">Memilih Workout</h2>
            <p class="mt-3">Workout merupakan suatu aktivitas olahraga ringan yang berguna untuk memelihara
                kebugaran tubuh yang diisi dengan beberapa kegiatan olahraga dengan durasi waktu tertentu. Workout memiliki
                tiga kategori, yakni Easy, Medium, dan Hard. Untuk memudahkan mengatur durasi waktu untuk memudahkan
                pengguna menghitung mundur waktu setiap kegiatan dalam workout, siWON akan membuat alat pengingat waktu
                (timer) dimana pengguna dapat mengeset lama waktunya, saat waktu sudah mencapai limit, maka akan ada
                notifikasi suara untuk menandakan bahwa waktu sudah habis.
            </p>
            <p>
                Kategori Easy menyediakan berbagai poster berisi informasi gerakan olahraga yang dapat diikuti pengunjung
                dengan durasi berada dalam rentang waktu 5 menit - 15 menit.
            </p>
            <p>
                Kategori Medium menyediakan berbagai poster berisi informasi gerakan olahraga yang dapat diikuti pengunjung
                dengan durasi berada dalam rentang waktu 16 menit - 30 menit.
            </p>
            <p>
                Kategori Hard menyediakan berbagai poster berisi informasi gerakan olahraga yang dapat diikuti pengunjung
                dengan durasi berada dalam rentang waktu 31 menit - 45 menit.
            </p>
        </div>
    </div>
@endsection
