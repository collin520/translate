<?php 

 return [
     "shop-order-payment" => [
     "title" => "Narima pamayaran",
     "sample" => "Pamayaran $ 267 anjeun parantos réngsé.<br> Urutan: SM-425<br> Hatur nuhun, <b>nami toko anjeun</b> .<br> Seldone",
     "body" => "Pamayaran :param2 anjeun hasil dilunasan. Pesenan: :param1 Hatur nuhun, :param3. Seldone",
     "description" => "Kirim pesen ka palanggan toko pikeun nginpokeun ngeunaan pamayaran anu suksés.",
],
     "shop-order-payment-admin" => [
     "title" => "Narima pamayaran",
     "sample" => "pamayaran 267$ anyar hasil dilunasan.<br> Urutan: SM-425<br> Hatur nuhun, <b>nami toko anjeun</b> .<br> Seldone",
     "body" => "Anyar :param2 mayar hasil dilunasan. Pesenan: :param1 Hatur nuhun, :param3. Seldone",
     "description" => "Kirim pesen ka anu gaduh toko pikeun nginpokeun aranjeunna ngeunaan pamayaran anu suksés.",
],
     "vendor-new-order" => [
     "title" => "Vendor Orde Baru",
     "sample" => "Anjeun nampi pesenan $200 anyar.<br> Pesenan: SM-870 tina <b>ngaran Vendor</b> .",
     "body" => "Anjeun nampi pesenan anyar:param2. Urutan::param1 pikeun:param3.",
     "description" => "Kirim pesen ka anu ngajual pikeun nginpokeun aranjeunna ngeunaan pesenan énggal.",
],
     "shop-login" => [
     "title" => "Kodeu verifikasi login",
     "sample" => "Kode login anjeun nyaéta: <b>123456</b><br> <b>Ngaran toko Anjeun</b><br> Seldone",
     "body" => "Kode login anjeun nyaéta:: param1: param2 Selldone",
     "description" => "Kirim kode login ka nasabah pikeun asup ka toko.",
],
     "user-login" => [
     "title" => "Pesen Kasuksesan Login",
     "sample" => "<b>Ngaran</b> Dear,<br> Anjeun parantos lebet kana akun anjeun ku <b>iPhone 165.250.300.1</b> di <b>5/8/2021 9:14AM</b> .<br> Seldone",
     "body" => "Dear :param1, Anjeun parantos lebet kana akun anjeun ku:param2 di:param3. Seldone",
     "description" => "Kirim pesen saatos palanggan login ka toko.",
],
     "avocado-order-submit" => [
     "title" => "Alpukat pesenan anyar dikintunkeun kirimkeun ka nu meuli",
     "sample" => "<b>Ngaran toko Anjeun</b><br> Dear <b>ngaran anjeun</b> ,<br> Kami parantos nampi pesenan anjeun sareng kami pariksa deui.<br> Urutan #: <b>AVO-246</b><br> Seldone",
     "body" => ":param3 Dear:param1, Kami geus narima pesenan anjeun sarta kami marios eta. Urutan #: :param2 Seldone",
     "description" => "Kirim pesen ka palanggan saatos nempatkeun pesenan Alpukat.",
],
     "avocado-order-submit-seller" => [
     "title" => "Alpukat nampi pesenan énggal kirimkeun ka anu ngajual",
     "sample" => "Anjeun nampi pesenan alpukat:<br> Toko: <b>Ngaran toko anjeun</b><br> Nu meuli: <b>Ngaran pembeli</b><br> Urutan: <b>AVO-246</b><br> Seldone",
     "body" => "Anjeun nampi pesenan alpukat: Toko:: param1 Meuli::param2 Pesanan::param3 Selldone",
     "description" => "Kirim pesen ka anu gaduh toko pikeun nginpokeun aranjeunna ngeunaan nampi pesenan Alpukat énggal.",
],
     "avocado-ready-to-pay" => [
     "title" => "pesenan alpuket siap mayar",
     "sample" => "<b>Ngaran toko Anjeun</b><br> Pesenan anjeun parantos dikonfirmasi sareng tiasa dibayar ngalangkungan tautan ieu.<br> Urutan #: <b>AVO-246</b><br> Tumbu: <b>https://your-domain/alpukat</b><br> Seldone",
     "body" => ": param3 Pesenan anjeun parantos dikonfirmasi sareng tiasa dibayar ngalangkungan tautan di handap ieu. Urutan #: :param2 Link: :param1 Selldone",
     "description" => "Kirim pesen sareng tautan pamayaran ka nasabah saatos seller nyetél biaya sareng mastikeun pesenan Alpukatna.",
],
];