<?php

namespace App\DTO;

use DateTime;
use Exception;
use stdClass;

class BasicDTO extends stdClass
{
    /**
     * @param $propertyName
     * @param $propertyValue
     * @throws Exception
     */
    public function __set($propertyName, $propertyValue)
    {
        if (property_exists($this, $propertyName)) {
            $this->{$propertyName} = $propertyValue;
        }
    }

    public function __get($propertyName)
    {
        if (property_exists($this, $propertyName)) {
            return $this->{$propertyName};
        } else {
            return null;
        }
    }

    public function validateDate(string $date): ?DateTime
    {
        try {
            return new DateTime($date);
        } catch (Exception $e) {
            return null;
        }
    }
}
