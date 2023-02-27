<?php

declare(strict_types=1);

namespace App\Testing\Domain\Entity\Test;


enum QuestionType: string
{
    
    case MULTIPLE_CHOICE = 'multiple_choice';
    
    case MULTIPLE_RESPONSE = 'multiple_response';
}
