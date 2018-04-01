<?php
declare(strict_types=1);

namespace Domain\PredictionDaily\Service\Populate\Command;

use Domain\PredictionDaily\Dto\PredictionDailyDto;
use Domain\PredictionDaily\Entity\Populate\PredscazanieRuPredictionParseResult;
use Domain\PredictionDaily\Service\Populate\PredictionPopulateService;
use Domain\Zodiac\Zodiac;

class PopulateDailyFromPredscazanieRuCommand
{
    /**
     * @var PredictionPopulateService
     */
    private $predictionPopulateService;

    public function __construct(
        PredictionPopulateService $predictionPopulateService
    ) {
        $this->predictionPopulateService = $predictionPopulateService;
    }

    public function execute(int $count = 1)
    {
        $faker = \Faker\Factory::create();

        $predictions = [];

            $predictions [] = new PredscazanieRuPredictionParseResult($faker->sentence(12), Zodiac::getRandom());


        $this->predictionPopulateService->populateBatch($predictions);
    }
}