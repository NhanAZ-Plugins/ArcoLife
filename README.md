# ArcoLife

ArcoLife shows the target's remaining health to a player who damages it with a projectile. The popup is sent after the damage event is resolved, so the displayed value reflects the resulting health rather than the pre-hit value. It only handles projectile damage attributed to a connected player and ignores cancelled damage events.

## Compatibility

The manifest requires Axolotl-PM API 5.0.0. PHPStan max and PHAR builds are checked against the pinned API 5.0.0 and 5.49.1 source revisions. Those exact tests do not establish compatibility with every Axolotl-PM 5.x release.

## History and distribution

The plugin retains the CodersBr, YTkaio and zM360 credits. An earlier commit ran a privileged console permission command at startup; the current source does not contain that behavior. Do not deploy PHARs built from earlier revisions.

There is no LICENSE file or verified grant for redistribution of a modified build. No license was added and no stable release was published.

For questions about the NhanAZ ecosystem, use [NhanAZ Discord](https://discord.gg/j2X83ujT6c).
