<?php

namespace FlowMessage;

use pocketmine\plugin\PluginBase as Base;
use poocketmine\Server;
use pocketmine\Player;
use pocketmine\event\Event;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends Base implements Listener{
	
	    public $cfg;
	    public function onLoad(){
	         $this->getLogger()->info("FlowMessage Plugin Activating...");
	    }
	
	    public function onEnable(){
	         $this->saveDefaultConfig();
	         $this->reloadConfig();
	         $this->getLogger()->info("FlowMessage Plugin Activated");
	         $this->getServer()->getPluginManager()->registerEvents($this,$this);
	  }
	
	  public function onJoin(PlayerJoinEvent $event){
	        $player = $event->getPlayer();
	        $msg = $this->getConfig()->get("message");
	        $msg = str_replace("{player}", $player->getName(), $msg);
	        $player->sendMessage($msg);   
		}
  }
