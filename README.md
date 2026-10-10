# ArcoLife

ArcoLife is a legacy PocketMine-MP plugin snapshot intended to show a player's remaining health after a projectile hit. Its [manifest](plugin.yml) declares plugin API 2.0.0 and credits CodersBr, YTkaio and zM360.

> [!WARNING]
> Do not deploy this snapshot on a live server. During startup, the [source](src/CodersBr/Main.php) dispatches `setuperm Ghast_Noob *` from the console. On a server with a matching permission command, this could grant broad permissions to that account. The command was not executed during this review.

The implementation uses historical classes including `pocketmine\Player`, `ConsoleCommandSender` and `EntityDamageByChildEntityEvent`. Axolotl-PM 5.x compatibility has not been established. There is no current build, static analysis pass, runtime test or stable release for Axolotl-PM 5.

This repository has no LICENSE file or documented grant covering distribution of a modified build. A port or release requires verified rights, removal or an authorized review of the startup command, updated event handling and isolated runtime tests. No source, manifest or original Vietnamese message was changed for this documentation update.
