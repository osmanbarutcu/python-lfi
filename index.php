<?php
$mesai = array(
	array(
		"ID" => 1715,
		"Kullanici_ID" => 66241835,
		"Vardiya" => 1,
		"MesaiBaslamaTarihi" => "2023-09-04 11:11:00",
		"MesaiBitisTarihi" => "2023-09-04 18:41:00",
		"MesaiSuresi" => "07:30:00",
		"AtananMesaiBaslamaTarihi" => "2023-09-04 08:00:00",
		"AtananMesaiBitisTarihi" => "2023-09-04 17:00:00",
		"BaslamaIP" => "195.155.168.9",
		"BitisIP" => "195.155.168.245",
		"Taahhut" => 1,
		"MesaiCount" => 3,
		"Durum" => 1,
		"Aciklama" => "Sistem geç başlatildi",
		"Harita" => "40.1981981981982,28.94427279123041",
		"BitisHarita" => "40.234234234234236,28.841659589821862",
		"DateCreated" => "2023-09-04 11:08:52",
	),
	array(
		"ID" => 1716,
		"Kullanici_ID" => 66241835,
		"Vardiya" => 1,
		"MesaiBaslamaTarihi" => "2023-09-05 09:34:00",
		"MesaiBitisTarihi" => "2023-09-05 22:58:00",
		"MesaiSuresi" => "13:24:00",
		"AtananMesaiBaslamaTarihi" => "2023-09-05 08:00:00",
		"AtananMesaiBitisTarihi" => "2023-09-05 17:00:00",
		"BaslamaIP" => "195.155.168.9",
		"BitisIP" => "195.155.168.9",
		"Taahhut" => 1,
		"MesaiCount" => 3,
		"Durum" => 1,
		"Aciklama" => " ",
		"Harita" => "40.1981981981982,28.94427279123041",
		"BitisHarita" => "40.18018018018018,28.936584788845742",
		"DateCreated" => "2023-09-04 11:08:52",
	),
	array(
		"ID" => 1717,
		"Kullanici_ID" => 66241835,
		"Vardiya" => 1,
		"MesaiBaslamaTarihi" => "2023-09-06 09:16:00",
		"MesaiBitisTarihi" => "2023-09-06 23:00:00",
		"MesaiSuresi" => "13:44:00",
		"AtananMesaiBaslamaTarihi" => "2023-09-06 08:00:00",
		"AtananMesaiBitisTarihi" => "2023-09-06 17:00:00",
		"BaslamaIP" => "195.155.168.9",
		"BitisIP" => "188.57.94.138",
		"Taahhut" => 1,
		"MesaiCount" => 3,
		"Durum" => 1,
		"Aciklama" => " ",
		"Harita" => "40.1981981981982,28.94427279123041",
		"BitisHarita" => "40.18018018018018,28.936584788845742",
		"DateCreated" => "2023-09-04 11:08:52",
	),
	array(
		"ID" => 1718,
		"Kullanici_ID" => 66241835,
		"Vardiya" => 1,
		"MesaiBaslamaTarihi" => "2023-09-07 09:12:00",
		"MesaiBitisTarihi" => "2023-09-07 22:19:00",
		"MesaiSuresi" => "13:07:00",
		"AtananMesaiBaslamaTarihi" => "2023-09-07 08:00:00",
		"AtananMesaiBitisTarihi" => "2023-09-07 17:00:00",
		"BaslamaIP" => "188.57.94.138",
		"BitisIP" => "195.155.168.9",
		"Taahhut" => 1,
		"MesaiCount" => 3,
		"Durum" => 1,
		"Aciklama" => " ",
		"Harita" => "40.1981981981982,28.94427279123041",
		"BitisHarita" => "40.18018018018018,28.936584788845742",
		"DateCreated" => "2023-09-04 11:08:52",
	),
	array(
		"ID" => 1719,
		"Kullanici_ID" => 66241835,
		"Vardiya" => 3,
		"MesaiBaslamaTarihi" => "2023-09-08 09:01:00",
		"MesaiBitisTarihi" => "2023-09-08 19:10:00",
		"MesaiSuresi" => "10:09:00",
		"AtananMesaiBaslamaTarihi" => "2023-09-08 23:00:00",
		"AtananMesaiBitisTarihi" => "2023-09-09 08:00:00",
		"BaslamaIP" => "46.106.246.79",
		"BitisIP" => "195.155.168.9",
		"Taahhut" => 1,
		"MesaiCount" => 3,
		"Durum" => 1,
		"Aciklama" => " ",
		"Harita" => "40.2187372,28.871597",
		"BitisHarita" => "40.1873011,28.9371842",
		"DateCreated" => "2023-09-04 11:08:52",
	),
);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesai Verileri Analizi</title>
    <!-- Bootstrap CSS dosyasını dahil edin -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Mesai Verileri Analizi</h1>
    <!-- Mesai Süresi Dağılımı -->
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Mesai Süresi Dağılımı</h5>
            <canvas id="mesaiSuresiGrafik"></canvas>
        </div>
    </div>

    <!-- Başlama ve Bitiş Saatleri Arasındaki Fark -->
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Başlama ve Bitiş Saatleri Arasındaki Fark</h5>
            <canvas id="saatFarkiGrafik"></canvas>
        </div>
    </div>
</div>

<!-- Bootstrap ve Chart.js için gerekli JavaScript dosyalarını dahil edin -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- JavaScript Kodları -->
<script>
    // Mesai verilerini PHP'den alın
    var mesaiVerileri = <?php echo json_encode($mesai); ?>;

    // Mesai süreleri ve saat farklarını hesaplamak için boş diziler oluşturun
    var mesaiSuresiVerileri = [];
    var saatFarkiVerileri = [];

    // Mesai verilerini dönün
    for (var i = 0; i < mesaiVerileri.length; i++) {
        var mesai = mesaiVerileri[i];

        // Mesai süresini hesapla (başlangıç ve bitiş saatleri arasındaki fark)
        var mesaiBaslangic = new Date(mesai.MesaiBaslamaTarihi);
        var mesaiBitis = new Date(mesai.MesaiBitisTarihi);
        var mesaiSuresi = (mesaiBitis - mesaiBaslangic) / 3600000; // Saat cinsinden süre

        mesaiSuresiVerileri.push(mesaiSuresi);

        // Başlama ve bitiş saatleri arasındaki farkı hesapla
        var atanilanBaslangic = new Date(mesai.AtananMesaiBaslamaTarihi);
        var atanilanBitis = new Date(mesai.AtananMesaiBitisTarihi);
        var saatFarki = (atanilanBitis - atanilanBaslangic) / 3600000; // Saat cinsinden fark

        saatFarkiVerileri.push(saatFarki);
    }

    // Mesai süreleri grafiği
    var mesaiSuresiGrafik = new Chart(document.getElementById('mesaiSuresiGrafik'), {
        type: 'bar',
        data: {
            labels: ['Mesai 1', 'Mesai 2', 'Mesai 3', 'Mesai 4', 'Mesai 5'],
            datasets: [{
                label: 'Mesai Süresi (saat)',
                data: mesaiSuresiVerileri,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Süre (saat)'
                    }
                }
            }
        }
    });

    // Başlama ve bitiş saatleri arasındaki fark grafiği
    var saatFarkiGrafik = new Chart(document.getElementById('saatFarkiGrafik'), {
        type: 'bar',
        data: {
            labels: ['Mesai 1', 'Mesai 2', 'Mesai 3', 'Mesai 4', 'Mesai 5'],
            datasets: [{
                label: 'Saat Farkı (saat)',
                data: saatFarkiVerileri,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Fark (saat)'
                    }
                }
            }
        }
    });
</script>
</body>
</html>
