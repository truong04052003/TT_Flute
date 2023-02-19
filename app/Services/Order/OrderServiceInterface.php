<?php

namespace App\Services\Order;

use App\Services\ServiceInterface;

interface OrderServiceInterface extends ServiceInterface
{
    public function show($id);
    public function orderWait();
    public function orderBrowser();
    public function orderCancel();
}