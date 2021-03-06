<?php

/**
 * @file
 * Contains \Drupal\Core\TypedData\ComplexDataDefinitionBase.
 */

namespace Drupal\Core\TypedData;

/**
 * Base class for complex data definitions.
 */
abstract class ComplexDataDefinitionBase extends DataDefinition implements ComplexDataDefinitionInterface {

  /**
   * An array of data definitions.
   *
   * @var \Drupal\Core\TypedData\DataDefinitionInterface[]
   */
  protected $propertyDefinitions;

  /**
   * {@inheritdoc}
   */
  abstract public function getPropertyDefinitions();

  /**
   * {@inheritdoc}
   */
  public function getPropertyDefinition($name) {
    if (!isset($this->propertyDefinitions)) {
      $this->getPropertyDefinitions();
    }
    if (isset($this->propertyDefinitions[$name])) {
      return $this->propertyDefinitions[$name];
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getMainPropertyName() {
    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function __sleep() {
    // Do not serialize the cached property definitions.
    $vars = get_object_vars($this);
    unset($vars['propertyDefinitions']);
    return array_keys($vars);
  }

}
