<?php

namespace zepeto;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }
    
    public function onDamage(EntityDamageEvent $event) {
$player = $event->getEntity();
if($event->getFinalDamage() >= $player->getHealth()) {
$event->setCancelled();
$player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
$player->setHealth($player->getMaxHealth());
   }
}
  
  public function title(player $playee){
    switch (mt_rand(1,6)){
        case 1:
        $player->addTitle("§l§c사망", "§r§e5초후 움직일 수 있습니다", 30, 100, 20);
        break;
        case 2:
        $player->addTitle("§l§c사망", "§r§e10초후 움직일 수 있습니다", 30, 200, 20);
        break;
        case 3:
        $player->addTitle("§l§c사망", "§r§e15초후 움직일 수 있습니다", 30, 300, 20);
        break;
        case 4:
        $player->addTitle("§l§c사망", "§r§e5초후 움직일 수 있습니다", 30, 100, 20);
        break;
        case 5:
        $player->addTitle("§l§c사망", "§r§e5초후 움직일 수 있습니다", 30, 100, 20);
        break;
        case 6:
        $player->addTitle("§l§c사망", "§r§e10초후 움직일 수 있습니다", 30, 200, 20);
        break;
        }
    }

    public function onDisable(){
    }
}