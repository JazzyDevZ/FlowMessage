<?php

//Property of DevrlyCode & YungFlowz, you do not have permission to copy this plugin.

namespace FlowMessage;
 
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
      
class Main extends PluginBase implements Listener{
     public function onEnable(){
     $this->getServer()->getPluginManager->registerEvents($this);
     $this->getLogger()->info("FlowMessage enabled!");
     }
	
     public function onPlayerJoin(PlayerJoinEvent $event){
     $p = $event->getPlayer();
     $p->sendMessage("Welcome to my server!");
     }
}
