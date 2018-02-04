<?php
namespace Modules\RFOutlet\Thing;

use App\Models\Thing;
use App\Models\Room;
/**
 * Class CreateRFOutlet
 */
class CreateRFOutlet 
{
    /**
     * @var
     */
    private $data;
   
    /**
     * CreateRFOutlet constructor.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Creates Thing
     */
    public function create(){
        $thingName = $this->data['thingname'];
        $thingType = 'Switcher';
        $binding = $this->data['binding'];
        $roomID = $this->data['room'];
        $json = json_decode($this->data['json']);
        $protocol = 'rf';

        if(is_null($json->default_on) || is_null($json->default_off)){
            return "Arguments missing";
        }
        
        $thing = new Thing;

        $thing->thing = $thingName;
        $thing->thingType = $thingType;
        $thing->binding = $binding;
        $thing->default_on = $json->default_on;
        $thing->default_off = $json->default_off;
        $thing->protocol = $protocol;
        $thing->room_id = $roomID;
        $thing->state = 'OFF';
        
        $thing->save();

    }
}
