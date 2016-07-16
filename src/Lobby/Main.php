<?php

namespace Lobby;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase {
  
  public function onEnable(){
    $this->getLogger()->info(C::GREEN."Activated!");
  }
  public function onDisable(){
    $this->getLogger()->info(C::RED."Deactivated!");
  }
  public function onCommand(CommandSender $s, Command $cmd,$label, array $args){
    $defaultspawn = $this->getServer()->getDefaultLevel()->getSpawnLocation();
    switch($cmd->getName()){
      case "lobby":
        if($sender instanceof Player){
           $sender->getPlayer()->teleport($defaultspawn);
        }else{
          $sender->sendMessage(C::RED."Use this command in-game!");
        break;
        }
    }
  }
}
