<?php

namespace Daylaborers\Sevdeskapi\Models;

class Part extends Model
{
    public $objectName = 'Part';

    /**
     * Overr
     *
     * @return mixed
     */
    public function save()
    {
        $this->partNumber = $this->getNextSequence();

        return parent::save();
    }

    /**
     * @return mixed
     */
    public function getUnityAttribute()
    {
        return $this->attributes['unity'];
    }

    /**
     * @param int $unit
     */
    public function setUnityAttribute(int $unit)
    {
        $this->attributes['unity'] =[
            'id'         => $unit,
            'objectName' => 'Unity'
        ];
    }

    /**
     * @param string $stockNotInt
     */
    public function setPropertyReorderNotificationIntervalAttribute(string $stockNotInt)
    {
        $stockInterval = ['P1D', 'P2D', 'P3D', 'P4D', 'P5D', 'P6D', 'P7D'];

        if (in_array($stockNotInt, $stockInterval))
            $this->attributes['propertyReorderNotificationInterval'] = $stockNotInt;
    }
}