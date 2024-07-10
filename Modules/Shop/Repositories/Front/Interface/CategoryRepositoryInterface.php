<?php

namespace Modules\Shop\Repositories\Front\Interface;

Interface CategoryRepositoryInterface
{
    public function findAll($options = []);
    public function findBySlug($slug);
}