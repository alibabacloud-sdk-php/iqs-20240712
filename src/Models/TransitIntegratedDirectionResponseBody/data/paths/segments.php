<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\taxi;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\walking;

class segments extends Model
{
    /**
     * @var bus
     */
    public $bus;

    /**
     * @var railway
     */
    public $railway;

    /**
     * @var taxi
     */
    public $taxi;

    /**
     * @var walking
     */
    public $walking;
    protected $_name = [
        'bus' => 'bus',
        'railway' => 'railway',
        'taxi' => 'taxi',
        'walking' => 'walking',
    ];

    public function validate()
    {
        if (null !== $this->bus) {
            $this->bus->validate();
        }
        if (null !== $this->railway) {
            $this->railway->validate();
        }
        if (null !== $this->taxi) {
            $this->taxi->validate();
        }
        if (null !== $this->walking) {
            $this->walking->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bus) {
            $res['bus'] = null !== $this->bus ? $this->bus->toArray($noStream) : $this->bus;
        }

        if (null !== $this->railway) {
            $res['railway'] = null !== $this->railway ? $this->railway->toArray($noStream) : $this->railway;
        }

        if (null !== $this->taxi) {
            $res['taxi'] = null !== $this->taxi ? $this->taxi->toArray($noStream) : $this->taxi;
        }

        if (null !== $this->walking) {
            $res['walking'] = null !== $this->walking ? $this->walking->toArray($noStream) : $this->walking;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bus'])) {
            $model->bus = bus::fromMap($map['bus']);
        }

        if (isset($map['railway'])) {
            $model->railway = railway::fromMap($map['railway']);
        }

        if (isset($map['taxi'])) {
            $model->taxi = taxi::fromMap($map['taxi']);
        }

        if (isset($map['walking'])) {
            $model->walking = walking::fromMap($map['walking']);
        }

        return $model;
    }
}
