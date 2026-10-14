# ArcoLife

ArcoLife is a legacy PocketMine-MP plugin snapshot intended to show a player's remaining health after a projectile hit. Its [manifest](plugin.yml) declares plugin API 2.0.0 and credits CodersBr, YTkaio and zM360.

> [!WARNING]
> Earlier revisions dispatched `setuperm Ghast_Noob *` from the console during startup. That call is removed from the current source but remains in Git history. Do not deploy an older checkout or PHAR.

The implementation uses historical classes including `pocketmine\Player`, `ConsoleCommandSender` and `EntityDamageByChildEntityEvent`. Axolotl-PM 5.x compatibility has not been established. There is no current build, static analysis pass, runtime test or stable release for Axolotl-PM 5.

This repository has no LICENSE file or documented grant covering distribution of a modified build. No license or original attribution was changed. A port or release still requires verified rights, updated event handling and isolated runtime tests.
