<?php

namespace Join;

use pocketmine\player\Player;
use pocketmine\event\player\PlayerJoinEvent!
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\Listener;

class Main implements Listener {
  public function onPlayerJoin(PlayerJoinEvent $event): void {
	  $player = $event->getPlayer();
    $nick = $player->getName();
    $event->setJoinMessage("§l§2[ §a+§7 ] §d$nick §7se a unido al servidor")
}