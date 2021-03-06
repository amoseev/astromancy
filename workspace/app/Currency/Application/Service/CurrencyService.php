<?php
declare(strict_types=1);

namespace Currency\Application\Service;


use Currency\Domain\Entity\Currency;
use Currency\Domain\Interfaces\CurrencyInterface;
use Currency\Infrastructure\Repository\CurrencyRepository;

class CurrencyService
{
    /**
     * @var CurrencyRepository
     */
    private $currencyRepository;

    public function __construct(CurrencyRepository $currencyRepository)
    {
        $this->currencyRepository = $currencyRepository;
    }

    /**
     * @return CurrencyInterface[]
     */
    public function getAllCurrencies(): array
    {
        return $this->currencyRepository->findAll();
    }

    /**
     * @return CurrencyInterface
     */
    public function getBaseCurrency(): CurrencyInterface
    {
        /** @var Currency $currency */
        $currency = $this->currencyRepository->find(CurrencyInterface::BASE_CURRENCY);

        return $currency;
    }
}