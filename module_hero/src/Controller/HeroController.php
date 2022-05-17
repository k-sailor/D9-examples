<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 *
 * This is our hero controller
 */
class HeroController extends ControllerBase
{
  public function heroList()
  {
    $heroes = [
      ['name' => 'Hulk'],
      ['name' => 'Super Man'],
      ['name' => 'Iron Man'],
      ['name' => 'Dare Devil'],
      ['name' => 'Wolverine'],
    ];

    return [
      '#theme' => 'hero_list',
      '#items' => $heroes,
      '#title' => $this->t('Out wonderful heroes list'),
    ];
  }
}
