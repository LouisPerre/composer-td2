<?php

declare(strict_types=1);

namespace Louisperre\ComposerTd2;

class Api
{
    public function getRandomNumber(): int
    {
        return rand(0, 100);
    }
}