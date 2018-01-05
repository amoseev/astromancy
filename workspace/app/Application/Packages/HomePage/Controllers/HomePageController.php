<?php
declare(strict_types=1);

namespace Application\Packages\HomePage\Controllers;

use Application\Http\Controller;
use Domain\Currency\Service\CurrencyService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomePageController extends Controller
{

    /**
     * @var CurrencyService
     */
    private $currencyService;

    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    public function index(Request $request)
    {
        return view('HomePage::main');
        $currency = $this->currencyService->getBaseCurrency();
    }
}