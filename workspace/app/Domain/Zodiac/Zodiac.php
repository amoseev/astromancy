<?php
declare(strict_types=1);

namespace Domain\Zodiac;

final class Zodiac
{
    public const OVEN = 1;
    public const TELEC = 2;
    public const BLIZNECI = 3;
    public const RAC = 4;
    public const LEV = 5;
    public const DEVA = 6;
    public const VECI = 7;
    public const SCORPION = 8;
    public const STRELEC = 9;
    public const KOZEROG = 10;
    public const VODOLEY = 11;
    public const RIBY = 12;

    public static function check(int $zodiac)
    {
        if ($zodiac < 1 || $zodiac > 12) {
            throw new \LogicException(sprintf('Worng zodiac id <%s>', $zodiac));
        }
    }
}