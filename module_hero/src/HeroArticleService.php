<?php

namespace Drupal\module_hero;

//use Drupal\Core\Entity\Query\Null\QueryFactory
// use Drupal\Core\Config\Entity\Query\QueryFactory;
// use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Config\Entity\Query\QueryFactory;
// use Drupal\Core\Entity\Query\QueryInterface;
use Drupal\Core\Entity\EntityTypeManager;

use Psr\Container\ContainerInterface;

/**
 * Our hero article service class.
 */
// class HeroArticleService {
  
//   private $entityQuery;
//   private $entityManager;

//   public static function create(ContainerInterface $container){
//     return new static(
//       $container->get('module_hero.hero_articles');
//     );
//   }
  
//   public function __construct(QueryFactory $entityQuery, EntityTypeManager $entityManager){
//     $this->$entityQuery = $entityQuery;
//     $this->$entityManager = $entityManager;
//   }



//   /**
//    * Method for getting articles regarding heroes.
//    */
//   public function getHeroArticles(){
//     $articles = ['Hulk is green!', 'Flash is red!'];

//     kint($this->entityQuery->get('node')->condition('type', 'article')->execute());
//     kint($entityManager);
//     return $articles;
//   }

// }

// $hs = Drupal::service('module_hero.hero_articles');
// kint($hs->getHeroArticles()); die();