<?php

namespace App\Dto\Publication;

use Symfony\Component\Validator\Constraints as Assert;

final class CreateDto
{
    #[Assert\NotBlank]
    #[Assert\Length(min: 1, max: 255)]
    public ?string $content = null;

    #[Assert\NotBlank]
    #[Assert\DateTime]
    public ?\DateTimeInterface $date = null;
    
    #[Assert\NotBlank]
    public ?int $author = null;
}