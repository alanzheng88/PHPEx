<?php 
    
require 'functions.php';


// style: class and method braces go on next line
class Task
{
    public $description;

    // style: use lowercase for boolean values (to support json usage)
    protected $completed = false;

    public function __construct($description)
    {
        // automatically triggered on instantiation
        $this->description = $description;
        // dd($this);
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}


$task = new Task('Go to the store');
$task->complete();
// note the arrow syntax when calling methods on a class object
echo "Completed: ". (($task->isComplete()) ? 'yes' : 'no');

$tasks = [
    
    new Task('Go to the store'),

    new Task('Finish my screencast'),

    new Task('Clean my room')

];

$tasks[1]->complete();


include 'index.view.php';
