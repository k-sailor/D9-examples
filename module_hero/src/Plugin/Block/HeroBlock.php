<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block called "Example hero block".
 * 
 * @Block(
 *  id = "module_hero_hero",
 *  admin_label = @Translation("Example hero block")
 * )
 */

class HeroBlock extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {

    $heroes = [
      ['name' => 'Hulk', 'real_name' => 'David Banner'],
      ['name' => 'Thor', 'real_name' => 'Thor Odinson'],
      ['name' => 'Iron Man', 'real_name' => 'Tony Stark'],
      ['name' => 'Luke Cage', 'real_name' => 'Carl Lucas'],
      ['name' => 'Black Widow', 'real_name' => 'Natalia Romanova'],
      ['name' => 'Dare Devil', 'real_name' => 'Matthew Murdock'],
      ['name' => 'Captain America', 'real_name' => 'Steven Rogers'],
      ['name' => 'Wolverine', 'real_name' => 'James Howlett'],
    ];

    $table = [
      '#type' => 'table',
      '#header' => [
        $this->t('Name'),
        $this->t('Real name'),
      ]
    ];

    foreach ($heroes as $hero) {
      $table[] = [
        'hero_name' => [
          '#type' => 'markup',
          '#markup' => $hero['name'],
        ],
        'real_name' => [
          '#type' => 'markup',
          '#markup' => $hero['real_name'],
        ],
      ];
    }
  }
}
