@extends('layout.main')

@section('content')
    <div class="container mt-5">
        <div class="row mx-auto mt-5 w-75">
            <h1 class="mt-5"></h1>
            <h2 class="text-center my-4">Selamat Datang</h2>
            <p>Selamat datang di SiWON. SiWON merupakan website yang bertujuan untuk membantu masyarakat menerapkan pola
                hidup sehat dimanapun dan kapanpun. Aplikasi SiWON memiliki sasaran seluruh masyarakat Indonesia terutama
                pada masyarakat yang memiliki ketertarikan pada bidang olahraga dan pola hidup sehat. Dengan adanya aplikasi
                ini harapannya pengguna dapat melakukan olahraga tanpa terbatas waktu dan tempat, serta dapat menerapkan
                pola makanan sehat.</p>
            <p>Berikut adalah rangkuman panduan penggunaan aplikasi SiWON:</p>

            <h2 class="text-center mt-5">Programs</h2>
            <p class="mt-4">Programs merupakan program olahraga rutin yang dapat diikuti pengunjung dengan durasi
                tertentu untuk
                menyelesaikannya. Program memiliki tiga tingkat kemahiran, yaitu Beginner, Intermediate, dan Advanced.
                Pada tingkat kemahiran Beginner, disediakan program olahraga yang dapat diikuti pengunjung secara rutin
                selama 1 minggu. Gerakan olahraga yang disediakan pun masih terbilang cukup sederhana dan mudah diikuti.
                Pada tingkat kemahiran Intermediate, disediakan program olahraga yang dapat diikuti pengunjung secara rutin
                selama 1 bulan. Gerakan olahraga yang disediakan tentu akan lebih berbobot jika dibandingkan dengan program
                dalam kategori Beginner.
                Pada tingkat kemahiran Advanced, disediakan program olahraga yang dapat diikuti pengunjung secara rutin
                selama 3 bulan. Gerakan olahraga yang disediakan dalam kategori ini pun dapat dikatakan lebih intens
                dibanding dengan kedua kategori yang lain.
            </p>

            <h2 class="text-center mt-5">Workout</h2>
            <p class="mt-4">Workout merupakan suatu aktivitas olahraga ringan yang berguna untuk memelihara
                kebugaran tubuh yang diisi
                dengan beberapa kegiatan olahraga dengan durasi waktu tertentu. Workout memiliki tiga kategori, yakni Easy,
                Medium, dan Hard. Untuk memudahkan mengatur durasi waktu untuk memudahkan pengguna menghitung mundur waktu
                setiap kegiatan dalam workout, siWON akan membuat alat pengingat waktu (timer) dimana pengguna dapat
                mengeset lama waktunya, saat waktu sudah mencapai limit, maka akan ada notifikasi suara untuk menandakan
                bahwa waktu sudah habis.
                Kategori Easy menyediakan berbagai poster berisi informasi gerakan olahraga yang dapat diikuti pengunjung
                dengan durasi berada dalam rentang waktu 5 menit - 15 menit.
                Kategori Medium menyediakan berbagai poster berisi informasi gerakan olahraga yang dapat diikuti pengunjung
                dengan durasi berada dalam rentang waktu 16 menit - 30 menit.
                Kategori Hard menyediakan berbagai poster berisi informasi gerakan olahraga yang dapat diikuti pengunjung
                dengan durasi berada dalam rentang waktu 31 menit - 45 menit.
            </p>

            <h2 class="text-center mt-5">Healthy Foods</h2>
            <p class="mt-4">Healthy Foods merupakan kumpulan informasi tentang makanan sehat. Dalam menu Healthy
                Foods, terdapat 2 kategori yakni meal plan dan resep </p>

            <h4 class="mt-2 text-center">Meal Plan</h4>
            <p class="mt-4">Meal plan merupakan kategori dari Healthy Foods yang bertujuan untuk membantu user dalam merencanakan makanan
                sehat. Di mana pada kategori Meal Plan menyediakan berbagai informasi mengenai rencana makanan sehat yang
                dapat diikuti pengguna dengan mudah.
            </p>

            <h4 class="mt-2 text-center">Resep Makanan Sehat</h4>
            <p class="mt-4">Resep makanan sehat merupakan kategori dari halaman Healthy Foods yang bertujuan untuk membantu pengunjung
                dalam membuat makanan sehat. Pada halaman Resep Makanan Sehat disediakan berbagai informasi mengenai resep
                makan sehat yang tentunya mudah diikuti pengguna.
            </p>
        </div>
    </div>
@endsection
