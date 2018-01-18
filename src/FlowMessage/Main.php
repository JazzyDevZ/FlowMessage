<?php

namespace FlowMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getserver()->getLogger()->info("FlowMessage Plugin Activated")
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onDisable(){
		$this->getserver()->getLogger()->info("FlowMessage Plugin Deactivated")
	}
	
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPLayer();
		$player->sendMessage(TF::RED . ">" . TF::GRAY . "Welcome, you are using FlowMessage \n Made by DevrlyCode and YungFlowz!";
		{
