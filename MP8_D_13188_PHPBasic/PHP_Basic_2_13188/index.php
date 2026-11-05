<?php

if ($_POST) {
    $bayaran = $_POST['bayaran'] ?? '';
    $kode = $_POST['kode'] ?? '';
    $harga = 50000;
    $message = array();
    $message2 = "";
    $bayarankembali = 0;

        if(empty($bayaran) || empty($kode)) {
            $message[] = "Harap lengkapi semua data.";
        }

        if(!preg_match("/^[0-9]*$/", $bayaran)) {
            $message[] = "Jumlah bayaran hanya boleh mengandung angka.";
        }

        if(!preg_match("/^[a-zA-Z ]*$/", $kode)) {
            $message[] = "Kode pembayaran hanya boleh mengandung huruf.";
        }

        if(!empty($message)) {
            foreach($message as $msg) {
                echo "<p style='color:red'>!! " . htmlspecialchars($msg) . " !!</p>";
            }
        }else{

            function kodeDiskon($kode) {
                switch(strtolower($kode)) {
                    case 'p':
                        $diskon = 0.05;
                        break;
                    case 'w':
                        $diskon = 0.02;
                        break;
                    case 'd':
                        $diskon = 0.10;
                        break;
                    default:
                        $diskon = 0;
                }
                return $diskon;
            }

            $diskon = kodeDiskon($kode);

            function totalBayar($harga, $diskon) {
                return $harga - ($harga, $diskon);
            }
        }
}