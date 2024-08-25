<?php 

 return [
     "shop-order-payment" => [
     "title" => "Prano pagesën",
     "sample" => "Pagesa juaj prej 267$ u pagua me sukses.<br> Porosi: SM-425<br> Faleminderit, <b>emri i dyqanit tuaj</b> .<br> I shitur",
     "body" => "Pagesa juaj :param2 u pagua me sukses. Rendit: :param1 Faleminderit, :param3. I shitur",
     "description" => "Dërgoni një mesazh klientit të dyqanit për të informuar për pagesën e suksesshme.",
],
     "shop-order-payment-admin" => [
     "title" => "Prano pagesën",
     "sample" => "Pagesa e re prej 267$ u pagua me sukses.<br> Porosi: SM-425<br> Faleminderit, <b>emri i dyqanit tuaj</b> .<br> I shitur",
     "body" => "Pagesa e re :param2 u pagua me sukses. Rendit: :param1 Faleminderit, :param3. I shitur",
     "description" => "Dërgoni një mesazh pronarit të dyqanit për t'i informuar ata për pagesën e suksesshme.",
],
     "vendor-new-order" => [
     "title" => "Shitësi porosi e re",
     "sample" => "Ke marrë një porosi të re prej 200 dollarësh.<br> Porosit: SM-870 nga <b>emri i shitësit</b> .",
     "body" => "Ju morët një porosi të re :param2. Rendit: :param1 për :param3.",
     "description" => "Dërgoni një mesazh shitësit për t'i informuar ata për një porosi të re.",
],
     "shop-login" => [
     "title" => "Kodi i verifikimit të hyrjes",
     "sample" => "Kodi juaj i hyrjes është: <b>123456</b><br> <b>Emri i dyqanit tuaj</b><br> I shitur",
     "body" => "Kodi juaj i hyrjes është: :param1 :param2 Shitet",
     "description" => "Dërgojini klientit kodin e hyrjes për të hyrë në dyqan.",
],
     "user-login" => [
     "title" => "Mesazhi i suksesit të hyrjes",
     "sample" => "<b>Emri</b> i dashur,<br> Jeni identifikuar në llogarinë tuaj me <b>iPhone 165.250.300.1</b> në <b>08.05.2021 9:14 AM</b> .<br> I shitur",
     "body" => "I dashur :param1, ju jeni identifikuar në llogarinë tuaj nga :param2 në :param3. I shitur",
     "description" => "Dërgoni një mesazh pas hyrjes së klientit në dyqan.",
],
     "avocado-order-submit" => [
     "title" => "Porosia e re e avokados u dërgua tek blerësi",
     "sample" => "<b>Emri i dyqanit tuaj</b><br> I dashur <b>emri juaj</b> ,<br> Ne kemi marrë porosinë tuaj dhe po e shqyrtojmë atë.<br> Porosia #: <b>AVO-246</b><br> I shitur",
     "body" => ":param3 E dashur :param1, e kemi marr porosinë tuaj dhe po e shqyrtojmë. Porosia #: :param2 Shitet",
     "description" => "Dërgoni një mesazh te klienti pasi të keni bërë një porosi Avokado.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokado merr porosi të re, dërgohet tek shitësi",
     "sample" => "Keni marrë një porosi avokadoje:<br> Dyqani: <b>Emri i dyqanit tuaj</b><br> Blerësi: <b>Emri i blerësit</b><br> Porosit: <b>AVO-246</b><br> I shitur",
     "body" => "Ju morët një porosi avokadoje: Dyqani: :param1 Blerësi: :param2 Porosi: :param3 Shitet",
     "description" => "Dërgojini një mesazh pronarit të dyqanit për ta informuar për marrjen e porosisë së re të Avokados.",
],
     "avocado-ready-to-pay" => [
     "title" => "Porosia e avokados gati për t'u paguar",
     "sample" => "<b>Emri i dyqanit tuaj</b><br> Porosia juaj është konfirmuar dhe mund të paguhet në linkun e mëposhtëm.<br> Porosia #: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> I shitur",
     "body" => ":param3 Porosia juaj eshte konfirmuar dhe mund te paguhet ne linkun e meposhtem. Porosit #: :param2 Link: :param1 Shitet",
     "description" => "Dërgojini klientit një mesazh me lidhjen e pagesës pasi shitësi të caktojë koston dhe të konfirmojë porosinë e tij të Avokados.",
],
];