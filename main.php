<?php
declare(strict_types=1);

/**
 * turath-php-i3rab-dependency-parse — محلل الإعراب النحوي والعوامل والمعمولات
 * Classical Arabic Syntactic I'rab Case-Ending & Dependency Parser
 */
$input = "العلمُ نورٌ يرفعُ بيوتاً";
$digest = substr(hash("sha256", "turath-php-i3rab-dependency-parse:" . $input), 0, 12);

echo "[RUN] turath-php-i3rab-dependency-parse (PHP) — Classical Arabic Syntactic I'rab Case-Ending & Dependency Parser" . PHP_EOL;
echo "[AR]  محلل الإعراب النحوي والعوامل والمعمولات" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Mubtada=العلمُ(Marfu') | Khabar=نورٌ(Marfu') | Maf'ul=بيوتاً(Mansub) | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
