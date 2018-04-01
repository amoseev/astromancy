<?php
declare(strict_types=1);

namespace Currency\Infrastructure\Repository;

use App\Infrastructure\Repository\AbstractRepository;
use Domain\Currency\Entity\Currency;

class CurrencyRepository extends AbstractRepository
{

    protected function getClassName(): string
    {
        return Currency::class;
    }
}