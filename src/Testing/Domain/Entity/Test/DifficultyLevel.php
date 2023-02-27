<?php

declare(strict_types=1);

namespace App\Testing\Domain\Entity\Test;

enum DifficultyLevel: string
{
    case EASY = 'easy';
 
    case MEDIUM = 'medium';
 
    case HARD = 'hard';
}
