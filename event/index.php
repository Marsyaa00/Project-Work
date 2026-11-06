<?php
//!-- JADWAL EVENT YANG DIATUR PENGELOLA --//
$jadwalEvent = [
    'konser' => [
        'tanggal' => '2026-11-01',
        'jam' => '19:00',
        'tempat' => 'Ballroom Event Entertaiment'
    ],
    'festival' => [
        'tanggal' => '2026-11-15',
        'jam' => '09:00',
        'tempat' => 'Gedung Serbaguna Event Entertaiment'
    ],
    'wedding' => [
        'tanggal' => '2026-11-20',
        'jam' => '10:00',
        'tempat' => 'Ballroom Event Entertaiment'
    ],
    'seminar' => [
        'tanggal' => '2026-11-22',
        'jam' => '08:00',
        'tempat' => 'Hall Festival Event Entertaiment'
    ],
    'birthday' => [
        'tanggal' => '2026-11-25',
        'jam' => '16:00',
        'tempat' => 'Gedung Serbaguna Event Entertaiment'
    ],
    'school' => [
        'tanggal' => '2026-11-28',
        'jam' => '08:00',
        'tempat' => 'Hall Festival Event Entertaiment'
    ]
];

function formatTanggalIndonesia($tanggal)
{
    $timestamp = strtotime($tanggal);

    if ($timestamp === false) {
        return 'Jadwal belum ditentukan';
    }

    $bulan = [
        1 => 'Januari', 'Februari', 'Maret',
        'April', 'Mei', 'Juni', 'Juli',
        'Agustus', 'September', 'Oktober',
        'November', 'Desember'
    ];

    return date('d', $timestamp) . ' ' .
        $bulan[(int) date('n', $timestamp)] . ' ' .
        date('Y', $timestamp);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Event - Event Entertaiment</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >

    <!-- CSS Event Entertaiment -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<main class="event-page">
    <div class="container-evofest">
        <div class="event-title">
            <p class="event-subtitle">
                EVENT ENTERTAIMENT
            </p>

            <h1>
                Event
            </h1>

            <p>
                Berbagai pilihan event yang dapat kami bantu
                untuk mewujudkan acara Anda.
            </p>
        </div>

        <!-- DAFTAR EVENT -->
        <div class="row g-4 justify-content-center">
            <!-- KONSER MUSIK -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card">
                    <div class="event-card-image">
                        <img
                            src="../assets/image/konser.jpg"
                            alt="Konser Musik"
                        >
                    </div>

                    <div class="event-card-body">
                        <h3>
                            Konser Musik
                        </h3>

                        <p>
                            Konser musik dengan panggung, sound system,
                            lighting, dan dokumentasi untuk berbagai
                            jenis acara.
                        </p>
                        <?php $detailKonser = $jadwalEvent['konser']; ?>
                        <div class="event-info">
                            <span>
                                <i class="bi bi-calendar-event"></i>
                                <?= htmlspecialchars(
                                    formatTanggalIndonesia($detailKonser['tanggal'])
                                ); ?>
                            </span>

                            <span>
                                <i class="bi bi-clock"></i>
                                <?= htmlspecialchars($detailKonser['jam']); ?> WIB
                            </span>

                            <span>
                                <i class="bi bi-geo-alt-fill"></i>
                                <?= htmlspecialchars($detailKonser['tempat']); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!--FESTIVAL BUDAYA-->
            <div class="col-md-6 col-lg-4">
                <div class="event-card">
                    <div class="event-card-image">
                        <img
                            src="../assets/image/festival.jpg"
                            alt="Festival Budaya"
                        >
                    </div>

                    <div class="event-card-body">
                        <h3>
                            Festival Budaya
                        </h3>

                        <p>
                            Festival budaya dengan konsep pertunjukan seni,
                            dekorasi, panggung, dan berbagai hiburan.
                        </p>
                        <?php $detailFestival = $jadwalEvent['festival']; ?>
                        <div class="event-info">
                            <span>
                                <i class="bi bi-calendar-event"></i>
                                <?= htmlspecialchars(
                                    formatTanggalIndonesia($detailFestival['tanggal'])
                                ); ?>
                            </span>

                            <span>
                                <i class="bi bi-clock"></i>
                                <?= htmlspecialchars($detailFestival['jam']); ?> WIB
                            </span>

                            <span>
                                <i class="bi bi-geo-alt-fill"></i>
                                <?= htmlspecialchars($detailFestival['tempat']); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WEDDING EVENT -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card">
                    <div class="event-card-image">
                        <img
                            src="../assets/image/wedding.jpg"
                            alt="Wedding Event"
                        >
                    </div>

                    <div class="event-card-body">
                        <h3>
                            Wedding Event
                        </h3>

                        <p>
                            Perencanaan acara pernikahan dengan dekorasi,
                            lighting, sound system, dan dokumentasi.
                        </p>                       
                        <?php $detailWedding = $jadwalEvent['wedding']; ?>
                        <div class="event-info">
                            <span>
                                <i class="bi bi-calendar-event"></i>
                                <?= htmlspecialchars(formatTanggalIndonesia($detailWedding['tanggal'])); ?>
                            </span>
                            <span>
                                <i class="bi bi-clock"></i>
                                <?= htmlspecialchars($detailWedding['jam']); ?> WIB
                            </span>
                            <span>
                                <i class="bi bi-geo-alt-fill"></i>
                                <?= htmlspecialchars($detailWedding['tempat']); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEMINAR & TALKSHOW -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card">
                    <div class="event-card-image">
                        <img
                            src="../assets/image/seminar.jpg"
                            alt="Seminar dan Talkshow"
                        >
                    </div>

                    <div class="event-card-body">
                        <h3>
                            Seminar & Talkshow
                        </h3>

                        <p>
                            Acara seminar dan talkshow dengan konsep profesional, 
                            dilengkapi panggung, sound system, lighting, 
                            layar presentasi, dokumentasi dan perlengkapan acara.
                        </p>
                        <?php $detailSeminar = $jadwalEvent['seminar']; ?>
                        <div class="event-info">
                            <span>
                                <i class="bi bi-calendar-event"></i>
                                <?= htmlspecialchars(formatTanggalIndonesia($detailSeminar['tanggal'])); ?>
                            </span>
                            <span>
                                <i class="bi bi-clock"></i>
                                <?= htmlspecialchars($detailSeminar['jam']); ?> WIB
                            </span>
                            <span>
                                <i class="bi bi-geo-alt-fill"></i>
                                <?= htmlspecialchars($detailSeminar['tempat']); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BIRTHDAY PARTY -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card">
                    <div class="event-card-image">
                        <img
                            src="../assets/image/birthday.jpg"
                            alt="Birthday Party"
                        >
                    </div>

                    <div class="event-card-body">
                        <h3>
                            Birthday Party
                        </h3>

                        <p>
                            Perayaan ulang tahun dengan dekorasi,
                            entertainment, lighting, dan dokumentasi
                            acara.
                        </p>
                        <?php $detailBirthday = $jadwalEvent['birthday']; ?>
                        <div class="event-info">
                            <span>
                                <i class="bi bi-calendar-event"></i>
                                <?= htmlspecialchars(formatTanggalIndonesia($detailBirthday['tanggal'])); ?>
                            </span>
                            <span>
                                <i class="bi bi-clock"></i>
                                <?= htmlspecialchars($detailBirthday['jam']); ?> WIB
                            </span>
                            <span>
                                <i class="bi bi-geo-alt-fill"></i>
                                <?= htmlspecialchars($detailBirthday['tempat']); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SCHOOL EVENT -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card">
                    <div class="event-card-image">
                        <img
                            src="../assets/image/school.jpg"
                            alt="School Event"
                        >
                    </div>

                    <div class="event-card-body">
                        <h3>
                            School Event
                        </h3>

                        <p>
                            Acara sekolah seperti pentas seni,
                            perpisahan, festival, dan berbagai
                            kegiatan siswa.
                        </p>
                        <?php $detailSchool = $jadwalEvent['school']; ?>
                        <div class="event-info">
                            <span>
                                <i class="bi bi-calendar-event"></i>
                                <?= htmlspecialchars(formatTanggalIndonesia($detailSchool['tanggal'])); ?>
                            </span>
                            <span>
                                <i class="bi bi-clock"></i>
                                <?= htmlspecialchars($detailSchool['jam']); ?> WIB
                            </span>
                            <span>
                                <i class="bi bi-geo-alt-fill"></i>
                                <?= htmlspecialchars($detailSchool['tempat']); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Bootstrap JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
</body>
</html>