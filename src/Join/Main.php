<?php

namespace Join;

use pocketmine\player\Player;
use pocketmine\event\player\PlayerJoinEvent!
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {
  public function onEnable(): void {
    $this->getLogger()->info("Activado L");
  }
  public function onPlayerJoin(PlayerJoinEvent $event): void {
    $player = $event->getPlayer();
    $nick = $player->getName();
    $event->setJoinMessage("§l§2[ §a+§7 ] §d$nick §7se a unido al servidor");
  }

  public function onPlayerQuit(PlayerQuitEvent $event): void {
    $player = $event->getPlayer();
    $nick = $player->getName();
    $event->setQuitMessage("§l§1[ §5-§1 ] §5$nick §lleft the server");
  }
}