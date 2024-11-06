<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody;

use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\cost;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var cost
     */
    public $cost;

    /**
     * @example 5
     *
     * @var string
     */
    public $count;

    /**
     * @example 39.995197
     *
     * @var string
     */
    public $destinationLatitude;

    /**
     * @example 116.46424
     *
     * @var string
     */
    public $destinationLongitude;

    /**
     * @example 445
     *
     * @var string
     */
    public $distanceMeter;

    /**
     * @example 39.995197
     *
     * @var string
     */
    public $originLatitude;

    /**
     * @example 116.466485
     *
     * @var string
     */
    public $originLongitude;

    /**
     * @var paths[]
     */
    public $paths;
    protected $_name = [
        'cost'                 => 'cost',
        'count'                => 'count',
        'destinationLatitude'  => 'destinationLatitude',
        'destinationLongitude' => 'destinationLongitude',
        'distanceMeter'        => 'distanceMeter',
        'originLatitude'       => 'originLatitude',
        'originLongitude'      => 'originLongitude',
        'paths'                => 'paths',
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
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->destinationLatitude) {
            $res['destinationLatitude'] = $this->destinationLatitude;
        }
        if (null !== $this->destinationLongitude) {
            $res['destinationLongitude'] = $this->destinationLongitude;
        }
        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }
        if (null !== $this->originLatitude) {
            $res['originLatitude'] = $this->originLatitude;
        }
        if (null !== $this->originLongitude) {
            $res['originLongitude'] = $this->originLongitude;
        }
        if (null !== $this->paths) {
            $res['paths'] = [];
            if (null !== $this->paths && \is_array($this->paths)) {
                $n = 0;
                foreach ($this->paths as $item) {
                    $res['paths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cost'])) {
            $model->cost = cost::fromMap($map['cost']);
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['destinationLatitude'])) {
            $model->destinationLatitude = $map['destinationLatitude'];
        }
        if (isset($map['destinationLongitude'])) {
            $model->destinationLongitude = $map['destinationLongitude'];
        }
        if (isset($map['distanceMeter'])) {
            $model->distanceMeter = $map['distanceMeter'];
        }
        if (isset($map['originLatitude'])) {
            $model->originLatitude = $map['originLatitude'];
        }
        if (isset($map['originLongitude'])) {
            $model->originLongitude = $map['originLongitude'];
        }
        if (isset($map['paths'])) {
            if (!empty($map['paths'])) {
                $model->paths = [];
                $n            = 0;
                foreach ($map['paths'] as $item) {
                    $model->paths[$n++] = null !== $item ? paths::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}