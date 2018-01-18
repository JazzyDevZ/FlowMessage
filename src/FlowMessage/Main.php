<?php

namespace FlowMessage;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

  public function onEnable(){
    $this->getLogger()->notice("FlowMessage Plugin Activated");
  }

  public function onDisable(){
		$this->getServer()->getLogger()->info("FlowMessage Plugin Activated");
  }

 //This sends a message to that player directly when they connect
  public function onPlayerJoin(PlayerJoinEvent $event){
     $p = $event->getPlayer();
     $p->sendMessage(TextFormat::GRAY."Welcome, you are using FlowMessage!"."\n". TextFormat::RED."Created by YungFlowz and DevrlyCode!");
  }
}
