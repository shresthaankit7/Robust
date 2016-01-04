<?php namespace Ankit\Userpackage\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Userpackage extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'userpackage'; }
 
}