<?php
namespace Drupal\test_cron_example\Plugin\QueueWorker;
use Drupal\Core\Queue\QueueWorkerBase;
/**
 * Sample Queue Worker.
 *
 * @QueueWorker(
 *   id = "node_queue_worker",
 *   title = @Translation("Sample Queue Worker: Node"),
 *   cron = {"time" = 180}
 * )
 */
class NodeQueueWorker extends QueueWorkerBase {
  public function processItem($item) {
//    $time = \Drupal::time()
//        ->getCurrentTime();
//    if( date('G', $time) == 19) { // At 19'o clock
        \Drupal::database()->delete('users_field_data')
            ->condition('status',0)
            ->execute();
        drupal_flush_all_caches();
//    }
  }
}
