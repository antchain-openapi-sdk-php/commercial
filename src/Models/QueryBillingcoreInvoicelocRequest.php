<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\COMMERCIAL\Models;

use AlibabaCloud\Tea\Model;

class QueryBillingcoreInvoicelocRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;
    protected $_name = [
        'authToken' => 'auth_token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBillingcoreInvoicelocRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }

        return $model;
    }
}
