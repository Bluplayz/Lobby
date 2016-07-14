<?php

namespace Lobby;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase {
  
  public function onEnable(){
    $this->getLogger()->info(C::GREEN."Aktiviert!");
  }
