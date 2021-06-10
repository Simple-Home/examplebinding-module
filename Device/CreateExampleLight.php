<?php
namespace Modules\DeviceTypes\Device;

use App\Models\Device;
/**
 * Class CreateExampleLight
 */
class CreateExampleLight
{
    /**
     * @var
     */
    private $data;
   
    /**
     * CreateExampleLight constructor.
     */
    public function __construct($data){
        $this->data = $data;
    }

    /**
     * Creates Device
     */
    public function create(){
        $deviceName = $this->data['devicename'];
        $deviceType = 'BasicSwitch';
        $binding = $this->data['binding'];
        $roomID = $this->data['room'];
        $json = json_encode($this->data['json']);
        
        $device = new Device;
        $device->device = $deviceName;
        $device->deviceType = $deviceType;
        $device->binding = $binding;
        $device->room_id = $roomID;
        $device->status = '{"state":"OFF", "deviceSettings": '.$json.'}';
        
        $device->save();
    }
}
