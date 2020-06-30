<?php

namespace AjayPatidar\LaravelQuickBooks;

interface QuickBookable
{
    public function getQuickBooksIdAttribute();

    public function getQuickBooksArray();

    public function syncToQuickbooks();
}