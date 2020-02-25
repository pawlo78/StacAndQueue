<?php

Class Queue {
    
    private $_size; //size of queue 
    private $_queue = [];

    public function __construct($size = 10) {
        $this->_size = $size;
    }

    //Add item on the queue 
    public function AddToQueue($value) {
        if(count($this->_queue) < $this->_size) {
            array_push($this->_queue, $value);
        } else {
            echo "Queue size exceeded";
            exit;
        }
    } 

    //Download item from the queue 
    public function RemFromQueue() {
        if(!$this->CheckQueueEmpty()) {
            array_shift($this->_queue);
        } else {
            echo "The queue is empty - item download error";           
            exit;
        }
    }

    //Checking if the queue is empty
    public function CheckQueueEmpty() : bool {
        if(empty($this->_queue)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }        

    //Display function
    public function ShowQueue() {
        if(!$this->CheckQueueEmpty()) {
            foreach ($this->_queue as $value) {
                echo $value."<BR>";
            }
        } else {
            echo "Queue is empty";            
        }        
    }

    //Retrieving current value 
    public function CurrentTopQueue() {
        return current($this->_queue);
    }

}

?>