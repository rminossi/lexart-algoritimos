<?php
class Calc
{
    public $nums = [];
    public $op = null;
    public function __construct(array $nums, int $op)
    {
        $this->nums = $nums;
        $this->op = $op;
    }
}


class CalcService
{
    // public $operator; // it is not required, this value has a short life.
    public static function calculator($op, $nums)
    {
        switch ($op) {
            case 1:
                $result = array_sum($nums);
                return $result;
                break;
            case 2:
                $result = $nums[0];
                for ($i = 1; $i < count($nums); $i++) {
                    $result -= $nums[$i];
                }
                return $result;
                break;
            case 3:
                if (count($nums) > 2 || $nums[0] == 0) {
                    return "Invalid numbers";
                }
                $result = $nums[0] / $nums[1];
                return $result;
                break;
            case 4:
                $result = array_product($nums);
                return $result;
                break;
        }
    }
}

$calculator = new CalcService();
echo $calculator->calculator(1, [1, 2, 3]);
echo $calculator->calculator(2, [1, 2, 3]);
echo $calculator->calculator(3, [1, 2, 3]);
echo $calculator->calculator(3, [1, 2]);
echo $calculator->calculator(3, [1, 0]);
echo $calculator->calculator(3, [0, 1]);
echo $calculator->calculator(4, [1, 2, 8]);
