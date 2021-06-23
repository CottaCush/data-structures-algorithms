<?php

class SolutionOQ {

    public $front = 0;
    public $rear = -1;
    public $arr = [];

    /**
     * Push element x to the back of queue.
     * @param String $x
     * @return NULL
     */
    function push(string $x) {
        $this->rear += 1;
        $this->arr[$this->rear] = $x;
    }

    /**
     * Removes the element from in front of queue and returns that element.
     */
    function pop()
    {
        $temp = $this->front;
        $this->front += 1;
        return $this->arr[$temp];
    }

    /**
     * @param String $S
     * @param Integer $K
     * @return String
     */
    function orderlyQueue(string $S, int $K): string
    {
        if ($S == "") return "";

        $this->arr = str_split($S);
        $this->rear = count($this->arr) - 1;

        for ($i = 0; $i <= $K; $i++) {
            $x = $this->pop();
            $this->push($x);
        }
        $result = "";
        for ($i = $this->front; $i <= $this->rear; $i++) {
            $result .= $this->arr[$i];
        }
        return $result;
    }
}

$obj = new SolutionOQ();
echo $obj->orderlyQueue("cba", 1);