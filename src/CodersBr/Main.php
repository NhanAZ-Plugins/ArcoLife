<?php

declare(strict_types=1);

namespace CodersBr;

use pocketmine\entity\Living;
use pocketmine\event\entity\EntityDamageByChildEntityEvent;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\ClosureTask;

final class Main extends PluginBase implements Listener{
	protected function onEnable() : void{
		$this->getLogger()->info("Đã Hoạt Động");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	/**
	 * @priority MONITOR
	 */
	public function onProjectileDamage(EntityDamageByChildEntityEvent $event) : void{
		$shooter = $event->getDamager();
		$victim = $event->getEntity();
		if(!$shooter instanceof Player || !$victim instanceof Living){
			return;
		}

		$this->getScheduler()->scheduleDelayedTask(new ClosureTask(static function() use ($shooter, $victim) : void{
			if(!$shooter->isConnected()){
				return;
			}
			$shooter->sendPopup(HealthPopupFormatter::format(
				$victim->getName(),
				max(0.0, $victim->getHealth()),
				(float) $victim->getMaxHealth()
			));
		}), 1);
	}
}
