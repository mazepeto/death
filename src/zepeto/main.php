<?php

namespace zepeto;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\item\Item;
use pocketmine\inventory\Inventory;

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
$player = $e->getPlayer();
$name = $player->getName();

$this->data[$name] = time() + 5;
$time->data[$name] = time() + 10;
$ttime->data[$name] = time() + 15;
$ttis->data[$name] = time() + 20;

foreach($player->getInventory()->getContents() as $slot=>$item) {
   if($item->getCustomName() === "§7스폰권") {
     $item->setCount($item->getCount() - 1);
     $player->getInventory()->setItem($slot, $item);
     $player->addTitle("§l§c사망", "§r§e스폰권하나가 차감되었습니다", 10, 40, 10);
   }
    else 
        switch (mt_rand(1,7)){
        case 1:
        $player->addTitle("§l§c사망", "§r§e5초후 움직일 수 있습니다", 30, 100, 20);
        $player->addEffect(new EffectInstance(Effect::getEffect(15), 100, 1, false));
        $this->Move(PlayerMoveEvent $e);
        $this->Command(PlayerCommandPreprocessEvent $event);
        break; 
        case 2:
        $player->addTitle("§l§c사망", "§r§e10초후 움직일 수 있습니다", 30, 200, 20);
        $player->addEffect(new EffectInstance(Effect::getEffect(15), 200, 1, false));
        break;
        case 3:
        $player->addTitle("§l§c사망", "§r§e15초후 움직일 수 있습니다", 30, 300, 20);
        $player->addEffect(new EffectInstance(Effect::getEffect(15), 300, 1, false));
        $this->Move(PlayerMoveEvent $e);
        break;
        case 4:
        $player->addTitle("§l§c사망", "§r§e5초후 움직일 수 있습니다", 30, 100, 20);
        $player->addEffect(new EffectInstance(Effect::getEffect(15), 100, 1, false));
        $this->Move(PlayerMoveEvent $e);
        break;
        case 5:
        $player->addTitle("§l§c사망", "§r§e5초후 움직일 수 있습니다", 30, 100, 20);
        $player->addEffect(new EffectInstance(Effect::getEffect(15), 100, 1, false));
        $this->Move(PlayerMoveEvent $e);
        break;
        case 6:
        $player->addTitle("§l§c사망", "§r§e10초후 움직일 수 있습니다", 30, 200, 20);
        $player->addEffect(new EffectInstance(Effect::getEffect(15), 200, 1, false));
        break;
        case 7:
        $player->addTitle("§l§c사망", "§r§e20초후 움직일 수 있습니다", 30, 400, 20);
        $player->addEffect(new EffectInstance(Effect::getEffect(15), 400, 1, false));
        break;
}
}
}
}
    
    public function onCommand(CommandSender $p, Command $command, $label, array $args) :bool {
$p = $command->getName();
if ($p == "즉시스폰"){
if (!isset($args[0])){
        $StatItem = Item::get ( 339, 0, $number );
        $StatItem->setCustomName ( "§7스폰권" );
        $StatItem->setLore ( [ "§7즉시 리스폰 되게 하기 위한것" ] );
        $player->getInventory ()->addItem ( $StatItem );
    return true;
    }
    }

public function Move(PlayerMoveEvent $e){

$player = $e->getPlayer();
$name = $player->getName();

if(!isset($this->data[$name])) return true;

if($this->data[$name] >= time()){

$player->sendMessage("5초간 움직일 수 없습니다.");
$player->sendMessage("남은시간 : ".$this->data[$name] - time() + 1);
}
}

public function Command(PlayerCommandPreprocessEvent $event){

$player = $e->getPlayer();
$name = $player->getName();

if(!isset($this->data[$name])) return true;

if($this->data[$name] >= time()){

$player->sendMessage("5초간 명령어를 사용하실 수 없습니다");
$player->sendMessage("남은시간 : ".$this->data[$name] - time() + 1);
}
}

    
    public function onDisable(){
    }
}
