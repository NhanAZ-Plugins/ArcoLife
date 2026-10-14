<?php

declare(strict_types=1);

namespace CodersBr;

final class HealthPopupFormatter{
	public static function format(string $victimName, float $health, float $maxHealth) : string{
		return "§l§b⚔" . $victimName . " §aCòn Lại §b" . self::number($health) . "§f/§b" . self::number($maxHealth) . " §cMáu§b⚔";
	}

	private static function number(float $value) : string{
		$formatted = rtrim(rtrim(number_format(max(0.0, $value), 2, ".", ""), "0"), ".");
		return $formatted === "" ? "0" : $formatted;
	}
}
