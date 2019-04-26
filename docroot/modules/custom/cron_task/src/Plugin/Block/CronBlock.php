<?php

namespace Drupal\cron_task\Plugin\Block;

use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Queue\QueueWorkerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CronBlock' block.
 *
 * @Block(
 *  id = "cron_block",
 *  admin_label = @Translation("Cron block"),
 * )
 */
class CronBlock extends QueueWorkerBase implements ContainerFactoryPluginInterface {

  // /**
  //  *
  //  * @var \Drupal\image\ImageStyleStorageInterface
  //  */
  // protected $imageStyleStorage;

  // /**
  //  *
  //  * @param array $configuration
  //  *   Configuration array containing information about the plugin instance.
  //  * @param string $plugin_id
  //  *   Plugin_id for the plugin instance.
  //  * @param array $plugin_definition
  //  *   Plugin implementation definition.
  //  * @param \Drupal\Core\Entity\EntityStorageInterface $image_style_storage
  //  *   The image style storage.
  //  */
  // public function __construct(array $configuration, $plugin_id, array $plugin_definition, EntityStorageInterface $image_style_storage) {
  //   parent::__construct($configuration, $plugin_id, $plugin_definition);
  //   $this->imageStyleStorage = $image_style_storage;
  // }

  // /**
  //  * {@inheritdoc}
  //  */
  // public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
  //   return new static(
  //     $configuration,
  //     $plugin_id,
  //     $plugin_definition,
  //     $container->get('entity_type.manager')->getStorage('image_style')
  //   );
  // }

  // /**
  //  * {@inheritdoc}
  //  */
  // public function processItem($data) {
  //   /** @var \Drupal\file\Entity\File $entity */
  //   $entity = $data['entity'];
  //   $styles = $this->imageStyleStorage->loadMultiple();
  //   $image_uri = $entity->getFileUri();
  //   /** @var \Drupal\image\Entity\ImageStyle $style */
  //   foreach ($styles as $style) {
  //     $destination = $style->buildUri($image_uri);
  //     $style->createDerivative($image_uri, $destination);
  //   }
  // }
}