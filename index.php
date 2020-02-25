<?php

include("CheckExpression.php");
include("Queue.php");

//Main program

//Part of stock
$myStack = new Stack();
$myStack->AddToStack(10);
$myStack->AddToStack(20);
$myStack->AddToStack(30);
$myStack->RemFromStack();
$myStack->ShowStack();
if(!$myStack->CheckStackEmpty()) {
    echo "Curent value item is: ".$myStack->CurrentTopStack()."<BR><BR>";
}

//Part of queue 
$myQueue = new Queue();
$myQueue->AddToQueue(10);
$myQueue->AddToQueue(20);
$myQueue->AddToQueue(30);
$myQueue->RemFromQueue();
$myQueue->ShowQueue();
if(!$myQueue->CheckQueueEmpty()) {
    echo "Curent value queue is: ".$myQueue->CurrentTopQueue()."<BR><BR>";
}


//part of validate expression
$checker = new CheckExpression();
if($checker->ExpCheck("{5+(3*3)-{5*5(2+2))}+6}", $infoError)) {
    echo "Validation was successful";   
} else {
    echo "Something wrong with brackets";
    echo $infoError;    
}


?>



