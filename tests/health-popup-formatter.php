<?php

declare(strict_types=1);

require dirname(__DIR__) . "/src/CodersBr/HealthPopupFormatter.php";

use CodersBr\HealthPopupFormatter;

$cases = [
	["Alex", 8.0, 20.0, "§l§b⚔Alex §aCòn Lại §b8§f/§b20 §cMáu§b⚔"],
	["Skeleton", 2.5, 20.0, "§l§b⚔Skeleton §aCòn Lại §b2.5§f/§b20 §cMáu§b⚔"],
	["Target", -2.0, 20.0, "§l§b⚔Target §aCòn Lại §b0§f/§b20 §cMáu§b⚔"]
];
foreach($cases as [$name, $health, $maxHealth, $expected]){
	$actual = HealthPopupFormatter::format($name, $health, $maxHealth);
	if($actual !== $expected){
		throw new RuntimeException("Unexpected health popup format: " . $actual);
	}
}
echo "Health popup formatting checks passed.\n";
