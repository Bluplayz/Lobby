<?php

namespace Lobby;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase {
  
  public function onEnable(){
    $this->getLogger()->notice(C::GREEN."Aktiviert!");
  }
  public function onDisable(){
    $this->getLogger()->notice(C::RED."Deaktiviert!");
  }
  public function onCommand(CommandSender $s, Command $cmd,$label, array $args){
    $defaultspawn = $this->getServer()->getDefaultLevel()->getSpawnLocation();
    switch($cmd->getName()){
      case "lobby":
      case "spawn":
      case "hub":
      case "l":
        if($sender instanceof Player){
           $sender->getPlayer()->teleport($defaultspawn);
        }else{
          $sender->sendMessage(TextFormat::RED . "Use this command in-game!");
        break;
      }
    }
  }
}
