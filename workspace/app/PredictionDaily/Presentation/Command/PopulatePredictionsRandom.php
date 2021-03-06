<?php
declare(strict_types=1);

namespace PredictionDaily\Presentation\Command;

use Domain\PredictionDaily\Service\Populate\Command\PopulateDailyPredictionRandomCommand;
use Illuminate\Console\Command;

class PopulatePredictionsRandom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prediction_daily:populate:random {count=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate Daily Predictions random text';

    /**
     * The drip e-mail service.
     *
     * @var PopulateDailyPredictionRandomCommand
     */
    protected $populateDailyPredictionRandomCommand;

    /**
     * Create a new command instance.
     *
     * @param  PopulateDailyPredictionRandomCommand  $populateDailyPredictionRandomCommand
     * @return void
     */
    public function __construct(PopulateDailyPredictionRandomCommand $populateDailyPredictionRandomCommand)
    {
        parent::__construct();

        $this->populateDailyPredictionRandomCommand = $populateDailyPredictionRandomCommand;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->populateDailyPredictionRandomCommand->execute((int) $this->argument('count'));
    }
}