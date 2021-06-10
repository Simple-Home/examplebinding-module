<?php
namespace Modules\DeviceTypes\Device;

use App\Models\Device;

/**
 * Class UpdateExampleLight
 */
class UpdateExampleLight
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
     * Updates Device
     */
    public function update(){
        $deviceID = $this->data['deviceID'];
        $deviceName = $this->data['devicename'];
        $deviceType = 'BasicSwitch';
        $binding = $this->data['binding'];
        $roomID = $this->data['room'];
        $json = $this->data['json'];

        Thing::where('id', $thingID)
            ->update(
                [
                    'thing' => $deviceName,
                    'thingType' => $deviceType,
                    'binding' => $binding,
                    'room_id' => $roomID
                ]);
                return;
    }
}
