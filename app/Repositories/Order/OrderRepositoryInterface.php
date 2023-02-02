<?php
namespace App\Repositories\Order;

use App\Repositories\RepositoryInterface;

interface OrderRepositoryInterface extends RepositoryInterface{
    public function orderBrowser();
    public function orderCancel();
    public function orderWait();
}