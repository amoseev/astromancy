<?php
declare(strict_types=1);

namespace Domain\PredictionDaily\Entity\Populate;

use Zodiac\Domain\Zodiac;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="parse_prediction_predscazanie")
 */
class PredscazanieRuPredictionParseResult
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
     * @var \DateTimeImmutable
     * @ORM\Column(type="date_immutable")
     */
    protected $date;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $zodiacId;


    public function __construct(string $text, int $zodiacId, \DateTimeImmutable $date)
    {
        $this->text = $text;
        $this->setZodiacId($zodiacId);
        $this->date = $date;
    }

    /**
     * @param int $zodiacId
     */
    private function setZodiacId(int $zodiacId): void
    {
        Zodiac::check($zodiacId);
        $this->preferZodiacId = $zodiacId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getZodiacId(): int
    {
        return $this->zodiacId;
    }
}