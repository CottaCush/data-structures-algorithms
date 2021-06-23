<?php

class MyQueue {
    public $front = -1;
    public $rear = -1;
    public $arr = [];

    /**
     * Initialize your data structure here.
     */
    function __construct() {
    }

    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push(int $x) {
        if ($this->empty()) {
            $this->front = $this->rear = 0;
        } else {
            $this->rear = $this->rear + 1;
        }
        $this->arr[$this->rear] = $x;
        return null;
    }

    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop(): int
    {
        $temp = $this->front;
        if ($this->front == $this->rear) {
            $this->front = $this->rear = -1;
        } else {
            $this->front = $this->front + 1;
        }

        return $this->arr[$temp];
    }

    /**
     * Get the front element.
     * @return Integer
     */
    function peek(): int
    {
        return $this->arr[$this->front];
    }

    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty(): bool
    {
        if ($this->front == -1 && $this->rear == -1) {
            return true;
        }
        return false;
    }
}

$obj = new MyQueue();
$obj->push(1);
$obj->pop();
$obj->push(2);
//$obj->peek();
print_r($obj->peek()); exit;


