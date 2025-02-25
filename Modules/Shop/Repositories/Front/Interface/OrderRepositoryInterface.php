<?php

namespace Modules\Shop\Repositories\Front\Interface;

use App\Models\User;
use Modules\Shop\Entities\Address;
use Modules\Shop\Entities\Cart;
use Modules\Shop\Entities\Order;

interface OrderRepositoryInterface {
    public function create(User $user, Cart $cart, Address $address, $shipping = []) :Order;
}