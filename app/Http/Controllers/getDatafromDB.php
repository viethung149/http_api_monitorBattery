<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class getDatafromDB extends Controller
{
    public function getValue($array, $key){
        $result = array();
        foreach($array as $item){
            array_push($result,((array)$item)[$key]);
        }
        return $result;
    }
    public function getCellInformation($id,$isVoltage,$isTemperature,$from,$to){
        // $array_cell_voltage;
        // $array_cell_temperature;
        // $array_time;
        // if($isVoltage){
        //     $array_cell_voltage = DB::select('SELECT VoltageCell_{$id} from Posts where');
        // }
        // if($isTemperature){
        //     $array_cell_temperature = DB::select('SELECT TemperatureCell_{$id} from Posts');
        // }
        // $array_time = DB::select('SELECT updated_at');
        // var_dump($id);
        // var_dump($isVoltage);
        // var_dump($isTemperature);
        // var_dump($from);
        // var_dump($to);
        $isV = $isVoltage == 'true'?true:false;
        $isT = $isTemperature === 'true'?true:false;
        $fromTime = "'".$from."'";
        $toTime = "'".$to."'";
        $voltageCell = "\""."VoltageCell_".$id. "\"";
        $temperatureCell =  "\""."TemperatureCell_".$id. "\"";
        $updateTime = "updated_at";
        $query_cell_voltage = "SELECT ".$voltageCell. " from Posts where updated_at between ".$fromTime." and ".$toTime;
        $query_cell_temperature = "SELECT ".$temperatureCell. " from Posts where updated_at between ".$fromTime." and ".$toTime;
        $query_update_time = "SELECT ".$updateTime. " from Posts where updated_at between ".$fromTime." and ".$toTime;

        if($isV && $isT){
            $array_V = DB::select($query_cell_voltage);
            $voltage_value = getDatafromDB::getValue($array_V,"VoltageCell_".$id);
            $array_T = DB::select($query_cell_temperature);
            $temperature_value = getDatafromDB::getValue($array_T,"TemperatureCell_".$id);
            $array_Time = DB::select($query_update_time);
            $time_value = getDatafromDB::getValue($array_Time,"updated_at");
            $array = [
                "voltage" => $voltage_value,
                "temperature" => $temperature_value,
                "time" => $time_value
            ];
            $object = json_encode($array);
            //var_dump($object);
            return $object;
        }
        else if($isV){
            $array_V = DB::select($query_cell_voltage);
            $voltage_value = getDatafromDB::getValue($array_V,"VoltageCell_".$id);
            $array_Time = DB::select($query_update_time);
            $time_value = getDatafromDB::getValue($array_Time,"updated_at");
            $array = [
                "voltage" => $voltage_value,
                "time" => $time_value
            ];
            $object = json_encode($array);
            //var_dump($object);
            return $object;
        }
        else if($isT){
            $array_T = DB::select($query_cell_temperature);
            $temperature_value = getDatafromDB::getValue($array_T,"TemperatureCell_".$id);
            $array_Time = DB::select($query_update_time);
            $time_value = getDatafromDB::getValue($array_Time,"updated_at");
            $array = [
                "temperature" => $temperature_value,
                "time" => $time_value
            ];
            $object = json_encode($array);
            //var_dump($object);
            return $object;
        }
    }
    public function getInformationPackage($id, $isVoltage, $isTemperature, $isCurrent, $from, $to){
        $isV = $isVoltage == 'true'?true:false;
        $isT = $isTemperature === 'true'?true:false;
        $isC = $isCurrent ==='true'?true:false;
        $fromTime = "'".$from."'";
        $toTime = "'".$to."'";
        $voltagePackage = "\""."VoltagePackage_".$id. "\"";
        $temperaturePackage =  "\""."TemperaturePackage_".$id. "\"";
        $currentPackage ="\""."CurrentPackage_".$id."\"";
        $updateTime = "updated_at";
        $query_package_voltage = "SELECT ".$voltagePackage. " from Posts where updated_at between ".$fromTime." and ".$toTime;
        $query_package_temperature = "SELECT ".$temperaturePackage. " from Posts where updated_at between ".$fromTime." and ".$toTime;
        $query_package_current = "SELECT ".$currentPackage." from Posts where updated_at between ".$fromTime." and ".$toTime;
        $query_update_time = "SELECT ".$updateTime. " from Posts where updated_at between ".$fromTime." and ".$toTime;
        if($isV && $isT && $isC){
            $array_V = DB::select($query_package_voltage);
            $voltage_value = getDatafromDB::getValue($array_V,"VoltagePackage_".$id);

            $array_T = DB::select($query_package_temperature);
            $temperature_value = getDatafromDB::getValue($array_T,"TemperaturePackage_".$id);

            $array_C = DB::select($query_package_current);
            $current_value = getDatafromDB::getValue($array_C,"CurrentPackage_".$id);

            $array_Time = DB::select($query_update_time);
            $time_value = getDatafromDB::getValue($array_Time,"updated_at");
            $array = [
                "voltage" => $voltage_value,
                "temperature" => $temperature_value,
                "current" => $current_value,
                "time" => $time_value
            ];
            $object = json_encode($array);
            //var_dump($object);
            return $object;
        }
        else if($isV && $isT){
            $array_V = DB::select($query_package_voltage);
            $voltage_value = getDatafromDB::getValue($array_V,"VoltagePackage_".$id);

            $array_T = DB::select($query_package_temperature);
            $temperature_value = getDatafromDB::getValue($array_T,"TemperaturePackage_".$id);

            $array_Time = DB::select($query_update_time);
            $time_value = getDatafromDB::getValue($array_Time,"updated_at");
            $array = [
                "voltage" => $voltage_value,
                "temperature" => $temperature_value,
                "time" => $time_value
            ];
            $object = json_encode($array);
            //var_dump($object);
            return $object;
        }
        else if($isV && $isC){
            $array_V = DB::select($query_package_voltage);
            $voltage_value = getDatafromDB::getValue($array_V,"VoltagePackage_".$id);

            $array_C = DB::select($query_package_current);
            $current_value = getDatafromDB::getValue($array_C,"CurrentPackage_".$id);

            $array_Time = DB::select($query_update_time);
            $time_value = getDatafromDB::getValue($array_Time,"updated_at");
            $array = [
                "voltage" => $voltage_value,
                "current" => $current_value,
                "time" => $time_value
            ];
            $object = json_encode($array);
            //var_dump($object);
            return $object;
        }
        else if ($isT && $isC){
            $array_T = DB::select($query_package_temperature);
            $temperature_value = getDatafromDB::getValue($array_T,"TemperaturePackage_".$id);

            $array_C = DB::select($query_package_current);
            $current_value = getDatafromDB::getValue($array_C,"CurrentPackage_".$id);

            $array_Time = DB::select($query_update_time);
            $time_value = getDatafromDB::getValue($array_Time,"updated_at");
            $array = [
                "temperature" => $temperature_value,
                "current" => $current_value,
                "time" => $time_value
            ];
            $object = json_encode($array);
            //var_dump($object);
            return $object;
        }
        else if($isV){
            $array_V = DB::select($query_package_voltage);
            $voltage_value = getDatafromDB::getValue($array_V,"VoltagePackage_".$id);

            $array_Time = DB::select($query_update_time);
            $time_value = getDatafromDB::getValue($array_Time,"updated_at");
            $array = [
                "voltage" => $voltage_value,
                "time" => $time_value
            ];
            $object = json_encode($array);
            //var_dump($object);
            return $object;
        }
        else if($isT){
            $array_T = DB::select($query_package_temperature);
            $temperature_value = getDatafromDB::getValue($array_T,"TemperaturePackage_".$id);

            $array_Time = DB::select($query_update_time);
            $time_value = getDatafromDB::getValue($array_Time,"updated_at");
            $array = [
                "temperature" => $temperature_value,
                "time" => $time_value
            ];
            $object = json_encode($array);
            //var_dump($object);
            return $object;
        }
        else if($isC){
            $array_C = DB::select($query_package_current);
            $current_value = getDatafromDB::getValue($array_C,"CurrentPackage_".$id);

            $array_Time = DB::select($query_update_time);
            $time_value = getDatafromDB::getValue($array_Time,"updated_at");
            $array = [
                "current" => $current_value,
                "time" => $time_value
            ];
            $object = json_encode($array);
            //var_dump($object);
            return $object;
        }
    }

    public function getfromDB() {
        $array = DB::select('SELECT * FROM Posts ORDER BY id DESC LIMIT 1');
        $array_new = json_encode($array,JSON_FORCE_OBJECT);
        $json = json_decode($array_new, TRUE);
        return response($json);
    }

    public function getCellTableDB(){
        $query = 'SELECT "VoltageCell_1",
                         "VoltageCell_2",
                         "VoltageCell_3",
                         "VoltageCell_4",
                         "VoltageCell_5",
                         "VoltageCell_6",
                         "VoltageCell_7",
                         "VoltageCell_8",
                         "TemperatureCell_1",
                         "TemperatureCell_2",
                         "TemperatureCell_3",
                         "TemperatureCell_4",
                         "TemperatureCell_5",
                         "TemperatureCell_6",
                         "TemperatureCell_7",
                         "TemperatureCell_8",
                         "VoltageStatus_1",        
                         "VoltageStatus_2",        
                         "VoltageStatus_3",        
                         "VoltageStatus_4",        
                         "VoltageStatus_5",        
                         "VoltageStatus_6",        
                         "VoltageStatus_7",        
                         "VoltageStatus_8",
                         "TemperatureStatus_1",
                         "TemperatureStatus_2",
                         "TemperatureStatus_3",
                         "TemperatureStatus_4",
                         "TemperatureStatus_5",
                         "TemperatureStatus_6",
                         "TemperatureStatus_7",
                         "TemperatureStatus_8",
                         updated_at
                          FROM Posts ORDER BY id DESC LIMIT 1';
        $array = DB::select($query);
        $array_new = json_encode($array);
        $array_trim1 = trim($array_new,'[');
        $array_trim2 = trim($array_trim1,"]");
        //$json = json_decode($array_new, TRUE);
        return response($array_trim2);               
    }
    public function getPackageTableDB(){
        $query = 'SELECT 
                "VoltagePackage_1",
                "VoltagePackage_2",
                "VoltagePackage_3",
                "TemperaturePackage_1",
                "TemperaturePackage_2",
                "TemperaturePackage_3",
                "CurrentPackage_1",
                "CurrentPackage_2",
                "CurrentPackage_3",
                "ConnectPackage_1",
                "ConnectPackage_2",
                "ConnectPackage_3",
                "StatusVoltagePackage_1",
                "StatusVoltagePackage_2",
                "StatusVoltagePackage_3",
                "StatusTemperaturePackage_1",
                "StatusTemperaturePackage_2",
                "StatusTemperaturePackage_3",
                updated_at
                FROM posts ORDER BY id DESC LIMIT 1';
        $array = DB::select($query);
        $array_new = json_encode($array);
        $array_trim1 = trim($array_new,'[');
        $array_trim2 = trim($array_trim1,"]");
        //$json = json_decode($array_new, TRUE);
        return response($array_trim2);  
    }
    public function getPeripheralTableDB(){
        $query = 'SELECT 
                "Peripheral_1",
                "Peripheral_2",
                "Peripheral_3",
                "Peripheral_4",
                updated_at
                FROM posts ORDER BY id DESC LIMIT 1';
         $array = DB::select($query);
         $array_new = json_encode($array);
         $array_trim1 = trim($array_new,'[');
         $array_trim2 = trim($array_trim1,"]");
         //$json = json_decode($array_new, TRUE);
         return response($array_trim2); 
    }
}
