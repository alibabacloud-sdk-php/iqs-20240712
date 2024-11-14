<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\CircleTrafficStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class evaluation extends Model
{
    /**
     * @example 0.00%
     *
     * @var string
     */
    public $blockedPercentage;

    /**
     * @example 54.55%
     *
     * @var string
     */
    public $clearPercentage;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 18.18%
     *
     * @var string
     */
    public $heavyPercentage;

    /**
     * @example RUNNING_EXECUTION
     *
     * @var string
     */
    public $status;

    /**
     * @example 27.27%
     *
     * @var string
     */
    public $unknownPercentage;
    protected $_name = [
        'blockedPercentage' => 'blockedPercentage',
        'clearPercentage'   => 'clearPercentage',
        'description'       => 'description',
        'heavyPercentage'   => 'heavyPercentage',
        'status'            => 'status',
        'unknownPercentage' => 'unknownPercentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockedPercentage) {
            $res['blockedPercentage'] = $this->blockedPercentage;
        }
        if (null !== $this->clearPercentage) {
            $res['clearPercentage'] = $this->clearPercentage;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->heavyPercentage) {
            $res['heavyPercentage'] = $this->heavyPercentage;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->unknownPercentage) {
            $res['unknownPercentage'] = $this->unknownPercentage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['blockedPercentage'])) {
            $model->blockedPercentage = $map['blockedPercentage'];
        }
        if (isset($map['clearPercentage'])) {
            $model->clearPercentage = $map['clearPercentage'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['heavyPercentage'])) {
            $model->heavyPercentage = $map['heavyPercentage'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['unknownPercentage'])) {
            $model->unknownPercentage = $map['unknownPercentage'];
        }

        return $model;
    }
}