<?php
declare(strict_types=1);


namespace Domain\PredictionDaily\Repository;


use Domain\PredictionDaily\Entity\Prediction;
use Infrastructure\Repository\AbstractRepository;

class DailyPredictionRepository extends AbstractRepository
{
    protected function getClassName(): string
    {
        return Prediction::class;
    }

}