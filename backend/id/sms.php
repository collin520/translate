<?php 

 return [
     "shop-order-payment" => [
     "title" => "Terima pembayaran",
     "sample" => "Pembayaran $ 267 Anda berhasil diselesaikan.<br> Pesanan: SM-425<br> Terima kasih, <b>nama toko Anda</b> .<br> Selesai",
     "body" => "Pembayaran :param2 Anda berhasil diselesaikan. Pesan: :param1 Terima kasih, :param3. Selesai",
     "description" => "Kirim pesan ke pelanggan toko untuk menginformasikan tentang pembayaran yang berhasil.",
],
     "shop-order-payment-admin" => [
     "title" => "Terima pembayaran",
     "sample" => "Pembayaran $ 267 baru berhasil diselesaikan.<br> Pesanan: SM-425<br> Terima kasih, <b>nama toko Anda</b> .<br> Selesai",
     "body" => "Baru :param2 pembayaran berhasil diselesaikan. Pesan: :param1 Terima kasih, :param3. Selesai",
     "description" => "Kirim pesan ke pemilik toko untuk memberi tahu mereka tentang pembayaran yang berhasil.",
],
     "vendor-new-order" => [
     "title" => "Vendor Pesanan Baru",
     "sample" => "Anda menerima pesanan baru sebesar $200.<br> Pesanan: SM-870 dari <b>Nama vendor</b> .",
     "body" => "Anda menerima pesanan :param2 baru. Pesanan: :param1 untuk :param3.",
     "description" => "Kirim pesan ke vendor untuk memberi tahu mereka tentang pesanan baru.",
],
     "shop-login" => [
     "title" => "Kode verifikasi masuk",
     "sample" => "Kode login Anda adalah: <b>123456</b><br> <b>Nama toko Anda</b><br> Selesai",
     "body" => "Kode login Anda adalah: :param1 :param2 Selldone",
     "description" => "Kirim kode login ke pelanggan untuk masuk ke toko.",
],
     "user-login" => [
     "title" => "Pesan Sukses Masuk",
     "sample" => "<b>Nama</b> yang Terhormat,<br> Anda telah masuk ke akun Anda dengan <b>iPhone 165.250.300.1</b> pada <b>5/8/2021 9:14AM</b> .<br> Selesai",
     "body" => "Yang terhormat :param1, Anda telah masuk ke akun Anda dengan :param2 di :param3. Selesai",
     "description" => "Kirim pesan setelah pelanggan masuk ke toko.",
],
     "avocado-order-submit" => [
     "title" => "Alpukat pesanan baru dikirim kirim ke pembeli",
     "sample" => "<b>Nama toko Anda</b><br> Sayang <b>Namamu</b> ,<br> Kami telah menerima pesanan Anda dan kami sedang meninjaunya.<br> Pesanan #: <b>AVO-246</b><br> Selesai",
     "body" => ":param3 Yang terhormat :param1, Kami telah menerima pesanan Anda dan kami sedang meninjaunya. Pesanan #: :param2 Selldone",
     "description" => "Kirim pesan kepada pelanggan setelah memesan Alpukat.",
],
     "avocado-order-submit-seller" => [
     "title" => "Alpukat menerima pesanan baru kirim ke penjual",
     "sample" => "Anda menerima pesanan alpukat:<br> Toko: <b>Nama toko Anda</b><br> Pembeli: <b>Nama pembeli</b><br> Pesanan: <b>AVO-246</b><br> Selesai",
     "body" => "Anda menerima pesanan alpukat: Toko: :param1 Pembeli: :param2 Pesanan: :param3 Selldone",
     "description" => "Kirim pesan ke pemilik toko untuk memberi tahu mereka tentang penerimaan pesanan Alpukat baru.",
],
     "avocado-ready-to-pay" => [
     "title" => "Pesan alpukat siap bayar",
     "sample" => "<b>Nama toko Anda</b><br> Pesanan Anda telah dikonfirmasi dan dapat dibayarkan melalui tautan berikut.<br> Pesanan #: <b>AVO-246</b><br> Tautan: <b>https://domain-anda/alpukat</b><br> Selesai",
     "body" => ":param3 Pesanan Anda telah terkonfirmasi dan dapat dibayarkan melalui link berikut. Order #: :param2 Link: :param1 Selldone",
     "description" => "Kirim pesan berisi tautan pembayaran kepada pelanggan setelah penjual menetapkan biaya dan mengonfirmasi pesanan Alpukat mereka.",
],
];