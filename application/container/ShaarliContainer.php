<?php

declare(strict_types=1);

namespace Shaarli\Container;

use Shaarli\Bookmark\BookmarkServiceInterface;
use Shaarli\Config\ConfigManager;
use Shaarli\History;
use Shaarli\Plugin\PluginManager;
use Shaarli\Render\PageBuilder;
use Shaarli\Security\LoginManager;
use Shaarli\Security\SessionManager;
use Slim\Container;

/**
 * Extension of Slim container to document the injected objects.
 *
 * @property ConfigManager            $conf
 * @property SessionManager           $sessionManager
 * @property LoginManager             $loginManager
 * @property History                  $history
 * @property BookmarkServiceInterface $bookmarkService
 * @property PageBuilder              $pageBuilder
 * @property PluginManager            $pluginManager
 */
class ShaarliContainer extends Container
{

}
