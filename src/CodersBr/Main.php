<?php

namespace CodersBr;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\Player;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageByChildEntityEvent;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener {

	public function onEnable() {
		$this->getLogger()->info('Đã Hoạt Động');
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onHit(EntityDamageEvent $event) {
		if ($event instanceof EntityDamageByChildEntityEvent) {
			$victim = $event->getEntity();
			$shooter = $event->getDamager();
			$shooter->sendPopup('§l§b⚔§e' . $victim->getName() . ' §aCòn Lại §b' . $victim->getHealth() . '§f/§b' . $victim->getMaxHealth() . ' §cMáu§b⚔');
		}
	}
}
