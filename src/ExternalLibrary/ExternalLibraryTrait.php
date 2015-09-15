<?php

/**
 * @file
 * Contains \Drupal\libraries\ExternalLibrary\ExternalLibraryTrait.
 */

namespace Drupal\libraries\ExternalLibrary;

/**
 * Provides a base external library implementation.
 */
trait ExternalLibraryTrait {

  /**
   * The library ID.
   *
   * @var string
   */
  protected $id;

  /**
   * Construct an external library.
   *
   * @param string $id
   *   The library ID.
   */
  public function __construct($id) {
    $this->id = (string) $id;
  }

  /**
   * Returns the ID of the library.
   *
   * @return string
   *   The library ID. This must be unique among all known libraries.
   *
   * @see \Drupal\libraries\ExternalLibrary\ExternalLibraryInterface::getId()
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Returns the currently installed version of the library.
   *
   * @return string
   *   The version string, for example 1.0, 2.1.4, or 3.0.0-alpha5.
   *
   * @see \Drupal\libraries\ExternalLibrary\ExternalLibraryInterface::getVersion()
   */
  public function getVersion() {
    // @todo Turn into something useful and split into some other trait.
    return '1.0';
  }

  /**
   * Returns the libraries dependencies, if any.
   *
   * @return array
   *   An array of library IDs of libraries that the library depends on.
   *
   * @see \Drupal\libraries\ExternalLibrary\ExternalLibraryInterface::getDependencies()
   */
  public function getDependencies() {
    // @todo Turn into something useful and split into some other trait.
    return [];
  }

}
