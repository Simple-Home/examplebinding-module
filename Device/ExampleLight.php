<?php
namespace Modules\ExampleLight\Device;

use App\DeviceTypes\BasicSwitch\BasicSwitch;

/**
 * Class Example
 * @package App\DeviceTypes\BasicSwitch
 */
class ExampleLight extends BasicSwitch
{

    /**
     * Example constructor.
     */
    public function __construct($meta){
        $this->meta = $meta;
        $this->features = $this->getFeatures($this);
    }

    public function getApiInput($input){
        $this->input = $input;
    }

    public function state(){
        if($this->input == "ON") {
            $this->setStatus('state', 'ON');
        }elseif($this->input == "OFF"){
            $this->setStatus('state', 'OFF');
        }
    }

    public function brightness(){
        print_r($this->input);
       
        $this->setStatus('brightness', (int)$this->input->set);
    }
}
