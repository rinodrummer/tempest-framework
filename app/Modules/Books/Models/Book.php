<?php

declare(strict_types=1);

namespace App\Modules\Books\Models;

use Tempest\Interface\Model;
use Tempest\ORM\BaseModel;
use Tempest\Validation\Rules\Length;

class Book implements Model
{
    use BaseModel;

    #[Length(min: 1, max: 120)]
    public string $title;

    public ?Author $author = null;

    /** @var \App\Modules\Books\Models\Chapter[] */
    public array $chapters = [];
}
