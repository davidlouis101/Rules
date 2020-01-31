<?php
namespace SuperBaronDEV\rules; 
use pocketmine\plugin\PluginBase; 
use pocketmine\command\Command;
use pocketmine\command\ComamndSender;
class Rules expands PluginBase{
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "Regeln"){
      $sender->sendMessage("§eRegeln§6-§71.Nicht Spamen    2.Nicht Gri    §73.Schreibe keine Bosen Worter    4.Frage nicht nach Op");
      return false;
    }
    return false;
  }
}
