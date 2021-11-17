<?php
declare(strict_types=1);

namespace App\Domain\Post;

use JsonSerializable;

class Post implements JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;


    public function __construct(int $id, string $title, string $body){
       $this->id = $id;
       $this->title = $title;
       $this->body = $body;
    }

    /**
     * @return int
     */
    
    public function getId(): int{
      return $this->id;
    }

    /**
     * @return string
     */

    public function getTitle(): string {
      return $this->title;
    }

    
}