<?php
namespace Modules\RFOutlet\Thing;

use App\Models\Thing;
use App\Models\Room;
/**
 * Class UpdateRFOutlet
 */
class UpdateRFOutlet 
{
    /**
     * @var
     */
    private $data;
   
    /**
     * CreateSonos constructor.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Updates Thing
     */
    public function update(){
        $thingID = $this->data['thingID'];
        $thingName = $this->data['thingname'];
        $thingType = 'Switcher';
        $binding = $this->data['binding'];
        $roomID = $this->data['room'];
        $json = $this->data['json'];
        $protocol = 'rf';


        if(empty($json->default_on) || empty($json->default_off) ){
            Thing::where('id', $thingID)
                ->update(
                    [
                        'thing' => $thingName,
                        'thingType' => $thingType,
                        'binding' => $binding,
                        'protocol' => $protocol,
                        'room_id' => $roomID
                    ]);
                    return;
        }
        
        Thing::where('id', $thingID)
                ->update(
                    [
                        'thing' => $thingName,
                        'thingType' => $thingType,
                        'binding' => $binding,
                        'default_on' => $json->default_on,
                        'default_off' => $json->default_off,
                        'protocol' => $protocol,
                        'room_id' => $roomID
                    ]);
    }
}
