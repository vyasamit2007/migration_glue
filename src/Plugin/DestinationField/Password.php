<?php

namespace Drupal\migration_glue\Plugin\DestinationField;

use Drupal\Core\Form\FormStateInterface;
use Drupal\migration_mapper\DestinationFieldBase;

/**
 * Provides support for password.
 *
 * @DestinationField(
 *   id = "password",
 *   name = @Translation("User Password"),
 *   fieldTypes = {
 *     "password"
 *   },
 *   combinePlugin = FALSE,
 * )
 */
class Password extends DestinationFieldBase {

}
