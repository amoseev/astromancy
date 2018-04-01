<?php
declare(strict_types=1);


namespace Domain\PredictionDaily\Service\Populate;

use Domain\PredictionDaily\Dto\PredictionDailyDto;
use Domain\PredictionDaily\Entity\Prediction;
use Domain\PredictionDaily\Repository\DailyPredictionRepository;

class PredictionPopulateService
{
    /**
     * @var DailyPredictionRepository
     */
    private $dailyPredictionRepository;

    public function __construct(DailyPredictionRepository $dailyPredictionRepository)
    {
        $this->dailyPredictionRepository = $dailyPredictionRepository;
    }

    public function populate(PredictionDailyDto $predictionDailyDto): void
    {
        $prediction = Prediction::createFromDto($predictionDailyDto);
        $this->dailyPredictionRepository->em()->persist($prediction);
        $this->dailyPredictionRepository->em()->flush($prediction);
    }

    /**
     * @param array|$predictionDailyDtoList[] $predictionDailyDtoList
     */
    public function populateBatch(array $predictionDailyDtoList): void
    {
        foreach ($predictionDailyDtoList as $predictionDailyDto) {

            $prediction = Prediction::createFromDto($predictionDailyDto);
            $this->dailyPredictionRepository->em()->persist($prediction);
        }

        $this->dailyPredictionRepository->em()->flush();
    }
}