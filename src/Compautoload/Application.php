<?php
namespace CompAutoload;

use Symfony\Component\Console\Application as BaseApplication;

/**
 * Class Application
 * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
 * @package CompAutoload
 */
class Application extends BaseApplication
{
    private static $logo = '   ______                                                                    __
  / ____/___  ____ ___  ____  ____  __    _____  ____  __   ____  ____  ____/ /
 / /   / __ \/ __ `__ \/ __ \/ __ \/ / /\/__  _\/ __ \/ /  / __ \/ __ \/ __  /
/ /___/ /_/ / / / / / / /_/ / /_/ / /_/ /  / / / /_/ / /__/ /_/ / /_/ / /_/ /
\____/\____/_/ /_/ /_/ .___/_/ /_/\____/  /_/  \____/____/\____/_/ /_/____ /
                    /_/
';
}