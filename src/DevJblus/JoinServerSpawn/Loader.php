<?php

namespace DevJblus\JoinServerSpawn;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\plugin\PluginBase as Plugin;

use CustomAlerts\Commands\Commands;
use CustomAlerts\Events\CustomAlertsMotdUpdateEvent;

class Loader extends Plugins implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info("Plugins Enable by DevJblus !");
	}

	public function onPlayerLogin(PlayerLoginEvent $event){
		$event->getPlayer()->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
	}
}