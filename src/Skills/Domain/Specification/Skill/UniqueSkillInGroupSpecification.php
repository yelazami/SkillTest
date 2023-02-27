<?php

namespace App\Skills\Domain\Specification\Skill;

use App\Shared\Domain\Service\AssertService;
use App\Shared\Domain\Specification\SpecificationInterface;
use App\Skills\Domain\Entity\Skill\Skill;
use App\Skills\Domain\Repository\SkillRepositoryInterface;

class UniqueSkillInGroupSpecification implements SpecificationInterface
{
    public function __construct(private readonly SkillRepositoryInterface $skillRepository)
    {
    }

    public function satisfy(Skill $skill): void
    {
        foreach ($this->skillRepository->findByName($skill->getName()) as $foundSkill) {
            if ($skill->getId() === $foundSkill->getId()) {
                continue;
            }

            AssertService::notEq(
                $skill->getSkillGroup(),
                $foundSkill->getSkillGroup(),
                'A skill with a similar name already exists in the group'
            );
        }
    }
}
