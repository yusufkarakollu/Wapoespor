<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa-Wapo Esports</title>
</head>

<body>
    <?php
    include "./pages/head.php"
    ?>
    <?php
    include "./pages/nav.php"
    ?>
    <p clas></p>
    <center>
        <h2 style="margin-top: 50px;">Wapo Esports Başvuru Formu</h2>
    </center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isim = $_POST["isim"];
        $soyisim = $_POST["soyisim"];
        $email = $_POST["email"];
        $oyunAdi = $_POST["oyun_adi"];
        $rank = $_POST["rank"];
        $yas = $_POST["yas"];

        // E-posta konusu
        $subject = "Wapo Esports Başvuru";

        // E-posta içeriği
        $message = "İsim: $isim\nSoyisim: $soyisim\nE-posta: $email\nOyun İçi Ad: $oyunAdi\nRank: $rank\nYaş: $yas";

        // E-posta gönderimi
        mail("karakolluyusuf34@gmail.com", $subject, $message);
    }
    ?>

    <form id="basvurFormu" method="post" style="margin-top: 100px; margin-left: 400px;">
        <input type="text" name="isim" placeholder="İsim" required><br><br>
        <input type="text" name="soyisim" placeholder="Soyisim" required><br><br>
        <input type="email" name="email" placeholder="Email Adresi" required><br><br>
        <input type="text" name="oyun_adi" placeholder="Nick" required><br><br>
        <input type="text" name="rank" placeholder="Rank" required><br><br>
        <input type="number" name="yas" placeholder="Yaş" required><br><br>
        <input type="submit" value="Başvur">
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("basvurFormu").addEventListener("submit", function(event) {
                event.preventDefault(); // Formu normal submit etmeyi engelle

                // Form verilerini burada işleyebilirsiniz (örneğin AJAX ile sunucuya gönderme)

                // Uyarı kutusu göster
                alert("Başvuru formunuz gönderilmiştir.");

                // Formu sıfırla
                this.reset();
            });
        });
    </script>
</body>

</html>