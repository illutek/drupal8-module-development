<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 11/13/17
 * Time: 2:11 PM
 */

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the salutation message
 */

class HelloWorldController extends ControllerBase {
    /**
     * Hello World
     * the function helloWorld comes from HelloWorldController.php (_controller)
     * @return string
     */
    public function helloWorld() {
        return [
          '#markup' => $this->t('Hello World')
        ];
    }
}