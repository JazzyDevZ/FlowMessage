<?php

namespace YungFlowz\FlowMessage;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

  public function onEnable(){
    $this->getLogger()->notice("FlowMessage Plugin Activated");
  }

	public function onDisable(){
		$this->getServer()->getLogger()->info("FlowMessage Plugin Activated");
  }
  
  public funtion onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    
    $this->sendMessage(TF::RED.">". TF::GRAY. $player. TF::WHITE." Joined The Game!");
  }
 //This sends a message to that player directly when they connect
  public function onPlayerJoin(PlayerJoinEvent $event){
     $p = $event->getPlayer();
     $p->sendMessage(TF::GRAY."Welcome, you are using FlowMessage!"."\n". TF::RED."Created by YungFlowz and DevrlyCode!");
  }
}
