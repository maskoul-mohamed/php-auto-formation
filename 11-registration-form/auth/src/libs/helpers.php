<?php
    function view(string $filename, array $data=[]): void {
        foreach($data as $key => $value){
            $$key = $value;
        }

        require_once __DIR__ . '/../inc/' . $filename . '.php';
    }
?>