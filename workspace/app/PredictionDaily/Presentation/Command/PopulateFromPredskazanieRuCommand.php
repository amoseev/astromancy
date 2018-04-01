<?php
declare(strict_types=1);


namespace PredictionDaily\Presentation\Command;

use Domain\PredictionDaily\Service\Populate\Command\PopulateDailyPredictionRandomCommand;
use Illuminate\Console\Command;

class PopulateFromPredskazanieRuCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prediction_daily:populate:predscazanieru {count=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate Daily Predictions from predskazanie.ru';

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