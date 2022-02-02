<?php
    class TodoManager {
        private $_dataArray,
        $_dataArrayJson,
        $_dataName;
        public function __construct($dataName = false) {
            if ($dataName) {
                $this->_dataName = 'saves/' . $dataName;
            } else {
                $this->_dataName = "saves/data.json";
            }
        }

        private function getTodoArray(){
            $this->_dataArrayJson= file_get_contents($this->_dataName);
            // $handel = fopen($this->_dataName, "r");
            // $this->_dataArrayJson = fread($handel, filesize ($this->_dataName));
            $this->_dataArray = json_decode($this->_dataArrayJson, true);
            // fclose($handel);
        }

        

        public function insertItem($newItem){
            self::getTodoArray();
            array_push($this->_dataArray, $newItem);
            $this->_dataArrayJson = json_encode($this->_dataArray);
            file_put_contents($this->_dataName, $this->_dataArrayJson);
            self::getTodoArray();
        }


        public function getAllItems(){
            self::getTodoArray();
            $arrayCount = count($this->_dataArray);
            
            
            for($i=0; $i< $arrayCount; $i++){
                $newi = $i;
                echo '<p> Title: ' . $this->_dataArray[$i]['title'] .
                 ' name: ' . $this->_dataArray[$i]['name'] . '</p>';
            }
        }
    }
?>