<?php
declare(strict_types=1);

namespace Domain\PredictionDaily\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Zodiac\Domain\Zodiac;

/**
 * @ORM\Entity
 * @ORM\Table(name="prediction_date")
 */
class DatePrediction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="text", length=5000)
     * @var string
     */
    protected $text;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $zodiacId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $predictionId;

    /**
     * @ORM\Column(type="date_immutable")
     */
    protected $date;


    public function __construct(Prediction $prediction, int $zodiac, \DateTime $date)
    {
        $this->predictionId = $prediction->getId();
        $this->text = $prediction->getText();
        $this->setZodiacId($zodiac);
        $this->date = $date;
    }

    private function setZodiacId(int $zodiac)
    {
        Zodiac::check($zodiac);
        $this->zodiacId = $zodiac;
    }

}