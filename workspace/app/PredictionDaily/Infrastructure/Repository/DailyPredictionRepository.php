<?php
declare(strict_types=1);


namespace Domain\PredictionDaily\Repository;

use App\Infrastructure\Repository\AbstractRepository;
use Domain\PredictionDaily\Entity\Prediction;

class DailyPredictionRepository extends AbstractRepository
{
    protected function getClassName(): string
    {
        return Prediction::class;
    }

}