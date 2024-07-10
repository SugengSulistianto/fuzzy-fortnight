<?php

namespace Modules\Shop\Repositories\Front\Interface;

Interface ProductRepositoryInterface
{
    public function findAll($options = []);
    public function findBySKU($sku);
    public function findByID($id);
}