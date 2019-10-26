<?php
namespace App\Repository;


use App\Entity\Post;

/**
 * Class PostRepository
 * @package App\Repository
 */
class PostRepository
{
    protected $entity;

    /**
     * PostRepository constructor.
     */
    public function __construct()
    {
          $this->entity = Post::class;
    }
}