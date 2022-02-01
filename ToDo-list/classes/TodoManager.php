<?php
    class TodoManager {
        private $_dataArray,
        $_dataArrayJson,
        $_dataName;
        public function __construct($dataName = false) {
            if ($dataName) {
                $this->_dataName = 'saves/' . $dataName;
            } else {
                $this->_dataName = "saves/data.txt";
            }
        }

        private function getTodoArray(){
            $handel = fopen($this->_dataName, "r");
            $this->_dataArrayJson = fread($handel, filesize ($this->_dataName));
            $this->_dataArray = json_decode($this->_dataArrayJson, true);
            fclose($handel);
        }

        public function setTodoArray($newData){
            // $this->_dataArrayJson = json_encode($this->_dataArray + $newData);
            echo $this->_dataArray;
            $handle = fopen($this->_dataName, "w");
            fwrite($handle, $this->_dataArrayJson);
            fclose($handle);
            self::getTodoArray();
        }

        public function insertItem($newItem){
            self::getTodoArray();
            $newData = array($newItem);
            self::setTodoArray($newData);
        }


        public function getAllItems(){
            self::getTodoArray();
            $arrayCount = count($this->_dataArray());
            $arrayKeys = array_keys($this->_dataArray);
            
            for($i=0; $i< $arrayCount; $i++){
                $newi = $i;
                echo $this->_dataArray[$i]->name;
            }
        }
    }
?>