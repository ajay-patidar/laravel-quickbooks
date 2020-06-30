<?php

namespace AjayPatidar\LaravelQuickBooks;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

/**
 * Class QuickBooksEntity
 *
 * @package AjayPatidar\LaravelQuickBooks
 * @property string $quickbooks_id
 */
abstract class QuickBooksEntity extends Model implements QuickBookable
{
    use SyncsToQuickBooks;

    /**
     * Database column name
     *
     * @var string
     */
    protected $quickBooksIdColumn = 'quickbooks_id';

    /**
     * The resource class from AjayPatidar\LaravelQuickBooks\Resources.
     *
     * @var string
     */
    protected $quickBooksResource;
}