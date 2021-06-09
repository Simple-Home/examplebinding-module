<?php
namespace Modules\ExampleLight\Device;

use Modules\ExampleLight\Binding\Sender;
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
    public function __construct($meta)
    {
        $this->meta = $meta;
        $this->device = new sender();
        $this->features = $this->getFeatures($this);
    }

    public function state()
    {
        $this->setStatus('State', 'OFF');
    }
}
