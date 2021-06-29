<?php
namespace Modules\ExampleBinding\Properties\speaker;

use App\PropertyTypes\speaker\speaker;
use App\Helpers\SettingManager;

/**
 * Class Example
 * @package App\PropertyTypes\speaker
 */
class ExampleBinding extends speaker
{
    public $supportedAttributes = ["wifi","battery","uptime", "s/n", "model"];

    public function __construct($meta){
        $this->meta = $meta;
        $this->features = $this->getFeatures($this);

        //Set property properties, these can be anything!
        $this->setAttributes('s/n', "DMRM36078");
        $this->setAttributes('model', "MX250");
    }

    //API (GET): http://localhost/api/v2/device/(hostname)/state/(value)?volume=red
    public function state($value, $args) {
        //This is where you control the speaker

        //This is how you notify Simple Home of the state change
        $this->setState('state', $value);
    }

    //API (GET): http://localhost/api/v2/device/(hostname)/play
    public function play() {
        //This is where you control the speaker

        //This is how you notify Simple Home of the state change
        $this->setState('playing', '');
    }

    //API (GET): http://localhost/api/v2/device/(hostname)/pause
    public function pause() {
        //This is where you control the speaker

        //This is how you notify Simple Home of the state change
        $this->setState('playing', '');
    }

    //API (GET): http://localhost/api/v2/device/(hostname)/next
    public function next() {
        //This is where you control the speaker
    }

    //API (GET): http://localhost/api/v2/device/(hostname)/back
    public function back() {
        //This is where you control the speaker
    }

    //API (GET): http://localhost/api/v2/device/(hostname)/forward
    public function forward() {
        //This is where you control the speaker
    }

    //API (GET): http://localhost/api/v2/device/(hostname)/reverse
    public function reverse() {
        //This is where you control the speaker
    }

    //API (GET): http://localhost/api/v2/device/(hostname)/mute/(value)
    public function mute($value) {
        //This is where you control the speaker
    }

    //API (GET): http://localhost/api/v2/device/(hostname)/volume/(value)
    public function volume($value) {
        //This is where you control the light

        //This is how you notify Simple Home of the state change
        $this->setState('volume', $value);
    }
}
