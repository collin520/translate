<?php 

 return [
     "shop-order-payment" => [
     "title" => "Prijmite platbu",
     "sample" => "Vaša platba 267 $ bola úspešne uhradená.<br> Objednávka: SM-425<br> Ďakujem, <b>názov vášho obchodu</b> .<br> Predané",
     "body" => "Vaša platba :param2 bola úspešne uhradená. Objednávka: :param1 Ďakujem, :param3. Predané",
     "description" => "Pošlite správu zákazníkovi obchodu a informujte ho o úspešnej platbe.",
],
     "shop-order-payment-admin" => [
     "title" => "Prijmite platbu",
     "sample" => "Nová platba 267 $ bola úspešne uhradená.<br> Objednávka: SM-425<br> Ďakujem, <b>názov vášho obchodu</b> .<br> Predané",
     "body" => "Nová platba :param2 bola úspešne uhradená. Objednávka: :param1 Ďakujem, :param3. Predané",
     "description" => "Pošlite správu majiteľovi obchodu, aby ste ho informovali o úspešnej platbe.",
],
     "vendor-new-order" => [
     "title" => "Predajca Nová objednávka",
     "sample" => "Dostali ste novú objednávku v hodnote 200 USD.<br> Objednávka: SM-870 od <b>dodávateľa</b> .",
     "body" => "Dostali ste novú objednávku :param2. Poradie: :param1 pre :param3.",
     "description" => "Pošlite správu predajcovi a informujte ho o novej objednávke.",
],
     "shop-login" => [
     "title" => "Prihlasovací overovací kód",
     "sample" => "Váš prihlasovací kód je: <b>123456</b><br> <b>Názov vášho obchodu</b><br> Predané",
     "body" => "Váš prihlasovací kód je: :param1 :param2 Predané",
     "description" => "Pošlite prihlasovací kód zákazníkovi na prihlásenie do obchodu.",
],
     "user-login" => [
     "title" => "Správa o úspešnom prihlásení",
     "sample" => "milé <b>meno</b> ,<br> Do svojho účtu ste sa prihlásili pomocou <b>iPhone 165.250.300.1</b> <b>dňa 8.5.2021 9:14</b> .<br> Predané",
     "body" => "Vážený :param1, do svojho účtu ste sa prihlásili pomocou :param2 na :param3. Predané",
     "description" => "Po prihlásení zákazníka do obchodu odošlite správu.",
],
     "avocado-order-submit" => [
     "title" => "Nová objednávka avokáda odoslaná kupujúcemu",
     "sample" => "<b>Názov vášho obchodu</b><br> Milé <b>Tvoje meno</b> ,<br> Vašu objednávku sme dostali a posudzujeme ju.<br> Číslo objednávky: <b>AVO-246</b><br> Predané",
     "body" => ":param3 Vážený :param1, Vašu objednávku sme dostali a posudzujeme ju. Číslo objednávky: :param2 Predané",
     "description" => "Po zadaní objednávky avokáda odošlite správu zákazníkovi.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokádo prijať novú objednávku poslať predajcovi",
     "sample" => "Dostali ste objednávku avokáda:<br> Obchod: <b>Názov vášho obchodu</b><br> Kupujúci: <b>Meno kupujúceho</b><br> Objednávka: <b>AVO-246</b><br> Predané",
     "body" => "Dostali ste objednávku avokáda: Obchod: :param1 Kupujúci: :param2 Objednávka: :param3 Predané",
     "description" => "Pošlite správu majiteľovi obchodu, aby ste ho informovali o prijatí novej objednávky avokáda.",
],
     "avocado-ready-to-pay" => [
     "title" => "Objednávka avokáda pripravená na zaplatenie",
     "sample" => "<b>Názov vášho obchodu</b><br> Vaša objednávka bola potvrdená a môžete ju zaplatiť cez nasledujúci odkaz.<br> Číslo objednávky: <b>AVO-246</b><br> Odkaz: <b>https://vaša-doména/avokádo</b><br> Predané",
     "body" => ":param3 Vaša objednávka bola potvrdená a môžete ju zaplatiť cez nasledujúci odkaz. Objednávka č: :param2 Link: :param1 Predané",
     "description" => "Pošlite správu s odkazom na platbu zákazníkovi potom, čo predajca nastavil cenu a potvrdil objednávku avokáda.",
],
];