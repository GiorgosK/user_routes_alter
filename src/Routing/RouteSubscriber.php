<?php

namespace Drupal\user_routes_alter\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 * https://www.drupal.org/docs/8/api/routing-system/altering-existing-routes-and-adding-new-routes-based-on-dynamic-ones
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    // Change path '/user/login' to '/login'.
    if ($route = $collection->get('user.login')) {
      $route->setPath('/login');
    }
    
    if ($route = $collection->get('user.logout')) {
      $route->setPath('/logout');
    }
    
    if ($route = $collection->get('user.pass')) {
      $route->setPath('/password');
    }
    if ($route = $collection->get('user.register')) {
      $route->setPath('/register');
    }
  }

}
