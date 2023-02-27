<?php

namespace App\Skills\Domain\Entity\Specialist;

enum Level: int
{
    case DONT_KNOW = 0;
    
    case KNOW = 2;
    
    case USE = 4;
    
    case EXPERT = 8;
}
