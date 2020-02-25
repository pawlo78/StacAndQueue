<?php

Class Stack {

    private $_size; //size of stack 
    private $_stack = [];

    public function __construct($size = 10) {
        $this->_size = $size;
    }

    //Add item on the stack
    public function AddToStack($value) {
        if(count($this->_stack) < $this->_size) {
            array_unshift($this->_stack, $value);
        } else {
            echo "Stack size exceeded";
            exit;
        }
    } 

    //Remove item from the stack
    public function RemFromStack() {
        if(!$this->CheckStackEmpty()) {
            return array_shift($this->_stack);
        } else {
            echo "The stack is empty - item download error";            
            exit;
        }
    }

    //Checking if the stack is empty
    public function CheckStackEmpty() : bool {
        if(empty($this->_stack)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }        

    //Display function
    public function ShowStack() {
        if(!$this->CheckStackEmpty()) {
            foreach ($this->_stack as $value) {
                echo $value."<BR>";
            }
        } else {
            echo "The stack is empty";            
        }        
    }

    //Retrieving current value
    public function CurrentTopStack() {
        return current($this->_stack);
    }

}

?>