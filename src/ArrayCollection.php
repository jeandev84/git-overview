<?php
namespace Framework;


use Framework\Exceptions\InvalidItem;

/**
 * Class ArrayCollection
 * @package Framework
 */
class ArrayCollection
{
    /**
     * @var array
     */
     private $items;


     public function __construct(array $items)
     {
          $this->items = $items;
     }

    /**
     * @param $key
     * @param $value
     */
     public function set($key, $value)
     {
         $this->items[$key] = $value;
     }


    /**
     * @param $key
     * @return bool
     */
     public function has($key)
     {
          return isset($this->items[$key]);
     }


     public function get($key)
     {
          if(!$this->has($key))
          {
             return new InvalidItem(
                 sprintf('Item %s does not setted yet', $key)
             );
         }

          return $this->items[$key];
     }
}