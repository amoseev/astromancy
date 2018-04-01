<?php
declare(strict_types=1);


namespace Domain\PredictionDaily\Dto;


use Zodiac\Domain\Zodiac;

class PredictionDailyDto
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @var int
     */
    protected $zodiacId;

    /**
     * PredictionDailyDto constructor.
     * @param string $text
     * @param int $zodiacId
     */
    public function __construct(string $text, int $zodiacId)
    {
        Zodiac::check($zodiacId);
        $this->text = $text;
        $this->zodiacId = $zodiacId;
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
    public function getZodiacId(): int
    {
        return $this->zodiacId;
    }
}