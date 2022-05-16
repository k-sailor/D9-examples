<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 *
 * This is our hero controller
 */
class HeroController extends ControllerBase {
  public function heroList(){
    $heroes = [
      ['name' => 'Hulk'],
      ['name' => 'Super Man'],
      ['name' => 'Iron Man'],
      ['name' => 'Dare Devil'],
      ['name' => 'Wolverine'],
    ];

    $ourHeroes = '';

    foreach ($heroes as $hero){
      $ourHeroes .= '<li>' . $hero['name'] . '</li>';
    }

    return [
      '#type' => 'markup',
      '#markup' => '<ol>' . t($ourHeroes) . '</ol>',
    ];
  }
}
