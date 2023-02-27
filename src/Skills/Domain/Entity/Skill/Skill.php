<?php

declare(strict_types=1);

namespace App\Skills\Domain\Entity\Skill;

use App\Shared\Domain\Service\AssertService;
use App\Shared\Domain\Service\UlidService;
use App\Skills\Domain\Specification\Skill\SkillSpecification;

class Skill
{
    public const NAME_MIN_LENGTH = 2;

    public const NAME_MAX_LENGTH = 100;

    private string $id;

    private string $name;

    private SkillGroup $skillGroup;

    private SkillSpecification $skillSpecification;

    public function __construct(
        string $name,
        SkillGroup $skillGroup,
        SkillSpecification $skillSpecification
    ) {
        $this->id = UlidService::generate();
        $this->setName($name);
        $this->setSkillGroup($skillGroup);
        $this->skillSpecification = $skillSpecification;
    }

    public function setName(string $name): void
    {
        AssertService::lengthBetween(
            $name,
            self::NAME_MIN_LENGTH,
            self::NAME_MAX_LENGTH,
            'Do not add a confirmation with the same test has been added before'
        );

        $this->name = $name;
        $this->skillSpecification
            ->uniqueSkillInGroupSpecification
            ->satisfy($this);
    }

    public function setSkillGroup(SkillGroup $skillGroup): void
    {
        $this->skillGroup = $skillGroup;
        $this->skillSpecification
            ->uniqueSkillInGroupSpecification
            ->satisfy($this);
    }

    public function getSkillGroup(): SkillGroup
    {
        return $this->skillGroup;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
