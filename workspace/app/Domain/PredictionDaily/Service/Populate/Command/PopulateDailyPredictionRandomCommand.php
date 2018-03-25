<?php
declare(strict_types=1);

namespace Domain\PredictionDaily\Service\Populate\Command;

use Domain\PredictionDaily\Dto\PredictionDailyDto;
use Domain\PredictionDaily\Service\Populate\PredictionPopulateService;
use Domain\Zodiac\Zodiac;

class PopulateDailyPredictionRandomCommand
{
    /**
     * @var PredictionPopulateService
     */
    private $predictionPopulateService;

    public function __construct(PredictionPopulateService $predictionPopulateService)
    {
        $this->predictionPopulateService = $predictionPopulateService;
    }

    public function execute(int $count = 1)
    {
        $faker = \Faker\Factory::create();

        $predictions = [];
        for ($i =0; $i < $count; $i++) {
            $predictions [] = new PredictionDailyDto($faker->sentence(12), Zodiac::getRandom());
        }

        $this->predictionPopulateService->populateBatch($predictions);
    }
}