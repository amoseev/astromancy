<?php
declare(strict_types=1);

namespace Domain\PredictionDaily\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Domain\PredictionDaily\Dto\PredictionDailyDto;
use Domain\Zodiac\Zodiac;

/**
 * @ORM\Entity
 * @ORM\Table(name="prediction")
 */
class Prediction
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
     * @ORM\Column(type="integer", options={"default" : 0})
     * @var int
     */
    protected $countUsages = 0;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $preferZodiacId;


    public function __construct(string $text, int $preferZodiacId)
    {
        $this->text = $text;
        $this->setPreferZodiacId($preferZodiacId);
    }

    public static function createFromDto(PredictionDailyDto $predictionDailyDto): Prediction
    {
        return new Prediction($predictionDailyDto->getText(), $predictionDailyDto->getZodiacId());
    }
    /**
     * @param int $preferZodiacId
     */
    private function setPreferZodiacId(int $preferZodiacId): void
    {
        Zodiac::check($preferZodiacId);
        $this->preferZodiacId = $preferZodiacId;
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPreferZodiacId(): int
    {
        return $this->preferZodiacId;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getCountUsages(): int
    {
        return $this->countUsages;
    }

    /**
     * @param int $countUsages
     */
    public function setCountUsages(int $countUsages): void
    {
        $this->countUsages = $countUsages;
    }
}