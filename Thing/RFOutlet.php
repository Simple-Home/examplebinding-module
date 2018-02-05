<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 06.11.17
 * Time: 20:22
 */

namespace Modules\RFOutlet\Thing;


use Modules\RFOutlet\Binding\Sender;
use App\Things\Switcher\Switcher;

/**
 * Class RFOutlet
 * @package App\Things\Switcher
 */
class RFOutlet extends Switcher
{
    /**
     * @var
     */
    private $sig_on;
    /**
     * @var
     */
    private $sig_off;

    /**
     * RFOutlet constructor.
     */
    public function __construct($meta)
    {
        $this->meta = $meta;
        $this->thing = new sender();
        $this->channels = $this->getChannels($this);
        $this->sig_on = $meta->default_on;
        $this->sig_off = $meta->default_off;
    }

    /**
     * @param null $lv_cmd
     */
    public function on()
    {
        $this->thing->codesend($this->sig_on);
        $this->setStatus('ON');
    }

    /**
     * @param null $lv_cmd
     */
    public function off()
    {
        $this->thing->codesend($this->sig_off);
        $this->setStatus('OFF');

    }

    public function output()
    {
        return $this->getStatus();
    }


    public function onSuccess()
    {
        // TODO: Implement onSuccess() method.
    }

    /**
     *
     */
    public function discover()
    {
        // TODO: Implement discover() method.
    }
}
