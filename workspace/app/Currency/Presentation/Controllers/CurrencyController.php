<?php
declare(strict_types=1);

namespace Currency\Presentation\Controllers;

use App\Presentation\Http\Controller;
use Currency\Application\Service\CurrencyService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CurrencyController extends Controller
{

    /**
     * @var CurrencyService
     */
    private $currencyService;

    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    public function index(Request $request): Response
    {
        $currency = $this->currencyService->getBaseCurrency();
        dd($currency);
    }
}