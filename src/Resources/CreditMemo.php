<?php

namespace AjayPatidar\LaravelQuickBooks\Resources;

use AjayPatidar\LaravelQuickBooks\QuickBooksResource;
use QuickBooksOnline\API\Facades as QuickBooksFacades;

class CreditMemo extends QuickBooksResource
{
    /**
     * The name of this resource.
     *
     * @var string
     */
    protected $name = 'CreditMemo';

    /**
     * QuickBooks Online API Facade
     *
     * @var string
     */
    protected $facade = QuickBooksFacades\CreditMemo::class;
}