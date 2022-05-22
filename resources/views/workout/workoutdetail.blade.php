@extends('layout.main')
{{--
    Halaman detail workout yang menampilkan poster yang diambil mdari database
    Kemudian timer dibuat menggunakan javascript dengan menggunakan library easytimer
--}}

@section('content')

    <!-- Content Baris 1-->
    <div id="main-content" class="container mb-4">
        <p class="category-card text-center mt-5">
            <img src="/assets/images/workout/poster/{{ $workouts->poster }}" alt="" width="100%" class="img1" style="background-size: cover" />
        </p>
        <!--Input timer-->
        <div class="category-card text-center mt-5">
            <label for="time">Menit : </label>
            <input type="number" name="time" id="time">
        </div>

        <!--Timer-->
        <div id="chronoExample" class="category-card text-center mt-3">
            <div class="values">00:00:00</div><br>
            <div>
              <button class="btn btn-success startButton">Start</button>
              <button class="btn btn-primary pauseButton" >Pause</button>
              <button class="btn btn-danger stopButton">Stop</button>
              <button class="btn btn-warning resetButton">Reset</button>
            </div>
        </div>

        <!--Download-->
        <div class="row text-center">
            <div class="col align-self-center">
                <a href="{{ url('/download/' . $workouts->id) }}">
                    <img src="/assets/images/workout/detail_page/icon_download.png" class="img2" />
                </a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
    >
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('dist/easytimer.min.js') }}"></script>
    <script>
    var timer = new easytimer.Timer();
    var target_timer = 0;
    var inputTime = document.getElementById('time');
    inputTime.onkeyup = function() {
        target_timer = inputTime.value*60 ;
    }
    $('#chronoExample .startButton').click(function () {
        timer.start({precision: 'seconds', startValues: {seconds: 0}, target: {seconds: target_timer}});
    });
    $('#chronoExample .pauseButton').click(function () {
        timer.pause();
    });

    $('#chronoExample .stopButton').click(function () {
        timer.stop();
    });

    $('#chronoExample .resetButton').click(function () {
        timer.reset();
        timer.stop();
    });

    timer.addEventListener('secondsUpdated', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });

    timer.addEventListener('started', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });

    timer.addEventListener('reset', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });

    //$('#chronoExample .values').html(timer.getTimeValues().toString());

    timer.addEventListener('secondsUpdated', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
        $('#chronoExample .progress_bar').html($('#startValuesAndTargetExample .progress_bar').html() + '.');
    });

    timer.addEventListener('targetAchieved', function (e) {
        $('#chronoExample .progress_bar').html('COMPLETE!!');
        timer.stop();
        alert("Selesai");
    });
    </script>
@endsection