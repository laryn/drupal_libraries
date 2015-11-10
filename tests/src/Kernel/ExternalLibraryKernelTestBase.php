<?php

/**
 * @file
 * Contains \Drupal\Tests\libraries\Kernel\KernelTestBase.
 */

namespace Drupal\Tests\libraries\Kernel;

use Drupal\Component\FileCache\ApcuFileCacheBackend;
use Drupal\Component\FileCache\FileCache;
use Drupal\Component\FileCache\FileCacheFactory;
use Drupal\KernelTests\KernelTestBase as CoreKernelTestBase;
use Drupal\Core\Site\Settings;

/**
 * Provides an improved version of the core kernel test base class.
 */
abstract class ExternalLibraryKernelTestBase extends CoreKernelTestBase {

  /**
   * The absolute path to the Libraries API module.
   *
   * @var string
   */
  protected $modulePath;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    /** @var \Drupal\Core\Extension\ModuleHandlerInterface $module_handler */
    $root = $this->container->get('app.root');
    $module_handler = $this->container->get('module_handler');
    $this->modulePath = "$root/" . $module_handler->getModule('libraries')->getPath();

    $this->installConfig('libraries');
    /** @var \Drupal\Core\Config\ConfigFactoryInterface $config_factory */
    $config_factory = $this->container->get('config.factory');
    $config_factory->getEditable('libraries.settings')
      ->set('library_definitions.local.path', "{$this->modulePath}/tests/library_definitions")
      ->save();
  }

}
