<?php

namespace Drupal\custom_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CustomBlock' block.
 *
 * @Block(
 *  id = "custom_block",
 *  admin_label = @Translation("Custom block"),
 * )
 */
class CustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
      $nids = \Drupal::entityQuery('node')->condition('type','page')->execute();
      $nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);
      foreach ($nodes as $value) {
        $title[] = $value->getTitle();
      }
      $bpcount = count($title);

      $titleString = implode(", ", $title);
      $build = [
          '#theme' => 'custom_block',
          '#title' => 'List of articles',
          '#list' => "$titleString",
          '#count' => "$bpcount",
      ];
      return $build;
  }
}
