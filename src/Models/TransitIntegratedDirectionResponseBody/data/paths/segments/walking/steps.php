<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\walking;

use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\walking\steps\cost;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\walking\steps\polyline;
use AlibabaCloud\Tea\Model;

class steps extends Model
{
    /**
     * @var cost
     */
    public $cost;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var string
     */
    public $orientation;

    /**
     * @var polyline
     */
    public $polyline;

    /**
     * @var string
     */
    public $roadName;

    /**
     * @var string
     */
    public $stepDistanceMeter;
    protected $_name = [
        'cost'              => 'cost',
        'instruction'       => 'instruction',
        'orientation'       => 'orientation',
        'polyline'          => 'polyline',
        'roadName'          => 'roadName',
        'stepDistanceMeter' => 'stepDistanceMeter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cost) {
            $res['cost'] = null !== $this->cost ? $this->cost->toMap() : null;
        }
        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }
        if (null !== $this->orientation) {
            $res['orientation'] = $this->orientation;
        }
        if (null !== $this->polyline) {
            $res['polyline'] = null !== $this->polyline ? $this->polyline->toMap() : null;
        }
        if (null !== $this->roadName) {
            $res['roadName'] = $this->roadName;
        }
        if (null !== $this->stepDistanceMeter) {
            $res['stepDistanceMeter'] = $this->stepDistanceMeter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return steps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cost'])) {
            $model->cost = cost::fromMap($map['cost']);
        }
        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }
        if (isset($map['orientation'])) {
            $model->orientation = $map['orientation'];
        }
        if (isset($map['polyline'])) {
            $model->polyline = polyline::fromMap($map['polyline']);
        }
        if (isset($map['roadName'])) {
            $model->roadName = $map['roadName'];
        }
        if (isset($map['stepDistanceMeter'])) {
            $model->stepDistanceMeter = $map['stepDistanceMeter'];
        }

        return $model;
    }
}