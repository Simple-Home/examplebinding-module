<?php
namespace Modules\ExampleBinding\Properties\toggle;

use App\PropertyTypes\toggle\toggle;
use App\Helpers\SettingManager;

/**
 * Class Example
 * @package App\PropertyTypes\toggle
 */
class ExampleBinding extends toggle
{
    public $supportedAttributes = ["wifi","battery","uptime", "s/n", "model"];

    public function __construct($meta){
        $this->meta = $meta;
        $this->features = $this->getFeatures($this);

        //Set property properties, these can be anything!
        $this->setAttributes('s/n', "DMRM36078");
        $this->setAttributes('model', "MX250");
    }

    //API (GET): http://localhost/api/v2/device/(hostname)/state/(value)
    public function state($value){
        //This is where you control the light

        //This is how you notify Simple Home of the state change
        $this->setState('state', $value);
    }
}
