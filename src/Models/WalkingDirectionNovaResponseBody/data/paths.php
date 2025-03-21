<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\WalkingDirectionNovaResponseBody\data;

use AlibabaCloud\SDK\IQS\V20240712\Models\WalkingDirectionNovaResponseBody\data\paths\cost;
use AlibabaCloud\SDK\IQS\V20240712\Models\WalkingDirectionNovaResponseBody\data\paths\steps;
use AlibabaCloud\Tea\Model;

class paths extends Model
{
    /**
     * @var cost
     */
    public $cost;

    /**
     * @example 12000
     *
     * @var string
     */
    public $distanceMeter;

    /**
     * @example 39223
     *
     * @var string
     */
    public $durationSecond;

    /**
     * @var string
     */
    public $restriction;

    /**
     * @var steps[]
     */
    public $steps;
    protected $_name = [
        'cost'           => 'cost',
        'distanceMeter'  => 'distanceMeter',
        'durationSecond' => 'durationSecond',
        'restriction'    => 'restriction',
        'steps'          => 'steps',
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
        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }
        if (null !== $this->durationSecond) {
            $res['durationSecond'] = $this->durationSecond;
        }
        if (null !== $this->restriction) {
            $res['restriction'] = $this->restriction;
        }
        if (null !== $this->steps) {
            $res['steps'] = [];
            if (null !== $this->steps && \is_array($this->steps)) {
                $n = 0;
                foreach ($this->steps as $item) {
                    $res['steps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cost'])) {
            $model->cost = cost::fromMap($map['cost']);
        }
        if (isset($map['distanceMeter'])) {
            $model->distanceMeter = $map['distanceMeter'];
        }
        if (isset($map['durationSecond'])) {
            $model->durationSecond = $map['durationSecond'];
        }
        if (isset($map['restriction'])) {
            $model->restriction = $map['restriction'];
        }
        if (isset($map['steps'])) {
            if (!empty($map['steps'])) {
                $model->steps = [];
                $n            = 0;
                foreach ($map['steps'] as $item) {
                    $model->steps[$n++] = null !== $item ? steps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
