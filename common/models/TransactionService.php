<?php

namespace common\models;

class TransactionService
{
    public const SOURCE_PAYME = 'payme';

    public const TYPE_TOP_UP = 'top-up';
    public const TYPE_BONUS = 'bonus';
    public const TYPE_EXPENSE = 'expense';
    public const TYPE_REFUND = 'refund';

    public const SOURCE_ORDER = 'order';

    public const ORDER_NEW = 'new';
    public const ORDER_PENDING = 'pending';
    public const ORDER_PAID = 'paid';
}