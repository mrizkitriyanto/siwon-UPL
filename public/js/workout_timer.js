
// Di sini utk atur menit, detik, dan sepersepuluh detik kalo mau chrono berhenti
// Kalo semua nilai ini disetel ke 0, chrono ga akan berhenti otomatis
var stmints = document.getElementById('minutes').value;
var stseconds = document.getElementById('seconds').value;
var stzecsec = 0;


// function akan di eksekusi ketika chronometer dieksekusi
function toAutoStop() {
    alert('Your life goes on');
}

// inisialisasi sepersepuluh detik, detik, menit
var zecsec = 0;
var seconds = 0;
var mints = 0;

var startchron = 0;

function chronometer() {
    if (startchron == 1) {
        zecsec += 1;       // set sepersepuluh detik

        // set detik
        if (zecsec > 9) {
            zecsec = 0;
            seconds += 1;
        }

        // set menit
        if (seconds > 59) {
            seconds = 0;
            mints += 1;
        }

        // menampilkan data ke id 'showtm'
        document.getElementById('showtm').innerHTML = mints + ' : ' + seconds + '<sub>' + zecsec + '</sub>';

        // ketika chrono udah sampe waktu yg ditentukan, calls whenChrStop(), else, auto-calls chronometer()
        if (zecsec == stzecsec && seconds == stseconds && mints == stmints) toAutoStop();
        else setTimeout("chronometer()", 100);
    }
}

function startChr() { startchron = 1; chronometer(); }      // start chronometer
function stopChr() { startchron = 0; }                      // stop chronometer
function resetChr() {
    zecsec = 0; seconds = 0; mints = 0; startchron = 0;
    document.getElementById('showtm').innerHTML = mints + ' : ' + seconds + '<sub>' + zecsec + '</sub>';
}
