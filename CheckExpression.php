<?php

include("Stack.php");

//validate expression
Class CheckExpression {

    function ExpCheck($expression, &$infoError) : bool {

        $stack = new Stack();
        $flag = TRUE;      

        for ($i=0; $i < strlen($expression) ; $i++) { 
            $char = substr($expression, $i, 1);

            if($flag == TRUE)
            {
            
            switch ($char) {
                case '(':
                case '[':
                case '{':
                    $stack->AddToStack($char);                                                      
                    break;

                case ')':
                case ']':
                case '}':
                    if($stack->CheckStackEmpty()) {                   
                        $flag = FALSE;
                        $infoError = "<BR>No opening bracket to: {$char}";
                        break;
                    } else {
                        $charStack = $stack->RemFromStack();
                        //Checking if the brackets match                                        
                        if($char == ')' && $charStack != '(' || $char == ']' && $charStack != '[' ||
                        $char == '}' && $charStack != '{' ) {
                            $infoError = "<BR>Brackets do not match: {$charStack} and {$char}";
                            $flag = FALSE;                        
                            break;
                        }
                    
                        
                    } 
                }
            }
        }  
        return $flag;
    }
} 

?>