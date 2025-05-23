<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Dara\Model;

class TransitIntegratedDirectionRequest extends Model
{
    /**
     * @var string
     */
    public $destinationCity;

    /**
     * @var string
     */
    public $destinationLatitude;

    /**
     * @var string
     */
    public $destinationLongitude;

    /**
     * @var string
     */
    public $originCity;

    /**
     * @var string
     */
    public $originLatitude;

    /**
     * @var string
     */
    public $originLongitude;

    /**
     * @var bool
     */
    public $showPolyline;
    protected $_name = [
        'destinationCity' => 'destinationCity',
        'destinationLatitude' => 'destinationLatitude',
        'destinationLongitude' => 'destinationLongitude',
        'originCity' => 'originCity',
        'originLatitude' => 'originLatitude',
        'originLongitude' => 'originLongitude',
        'showPolyline' => 'showPolyline',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationCity) {
            $res['destinationCity'] = $this->destinationCity;
        }

        if (null !== $this->destinationLatitude) {
            $res['destinationLatitude'] = $this->destinationLatitude;
        }

        if (null !== $this->destinationLongitude) {
            $res['destinationLongitude'] = $this->destinationLongitude;
        }

        if (null !== $this->originCity) {
            $res['originCity'] = $this->originCity;
        }

        if (null !== $this->originLatitude) {
            $res['originLatitude'] = $this->originLatitude;
        }

        if (null !== $this->originLongitude) {
            $res['originLongitude'] = $this->originLongitude;
        }

        if (null !== $this->showPolyline) {
            $res['showPolyline'] = $this->showPolyline;
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
        if (isset($map['destinationCity'])) {
            $model->destinationCity = $map['destinationCity'];
        }

        if (isset($map['destinationLatitude'])) {
            $model->destinationLatitude = $map['destinationLatitude'];
        }

        if (isset($map['destinationLongitude'])) {
            $model->destinationLongitude = $map['destinationLongitude'];
        }

        if (isset($map['originCity'])) {
            $model->originCity = $map['originCity'];
        }

        if (isset($map['originLatitude'])) {
            $model->originLatitude = $map['originLatitude'];
        }

        if (isset($map['originLongitude'])) {
            $model->originLongitude = $map['originLongitude'];
        }

        if (isset($map['showPolyline'])) {
            $model->showPolyline = $map['showPolyline'];
        }

        return $model;
    }
}
