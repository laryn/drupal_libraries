<?php

/**
 * @file
 * Contains \Drupal\libraries\ExternalLibrary\PhpFile\PhpFileLibraryInterface.
 */

namespace Drupal\libraries\ExternalLibrary\PhpFile;

use Drupal\libraries\ExternalLibrary\ExternalLibraryInterface;

/**
 * Provides an interface for libraries which can be loaded.
 *
 * @see \Drupal\libraries\ExternalLibrary\PhpFile\PhpFileLoaderInterface
 */
interface PhpFileLibraryInterface extends ExternalLibraryInterface {

  /**
   * Returns the PHP files of this library.
   *
   * @return string[]
   *   An array of absolute file paths of PHP files.
   */
  public function getPhpFiles();

}
