<?php

class Utilities
{
    use Model;

    protected $table = 'utilities';
    protected $allowedColumns = ['type', 'value', 'order_id'];

    public function findAllByOrder($order_id)
    {
        return $this->where(['order_id' => $order_id]);
    }
}
