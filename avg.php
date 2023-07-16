<?php 

class Student {
  public $name;

  function __construct($name)
  {
    $this->name = $name;
  }

  function cal_avg($datas) {
    $sum = 0;
    foreach($datas as $data) {
      $sum += $data;
    }
    $avg = $sum / count($datas);
    return $avg;
  }

  function judge($result) {
    $high = 70;
    if($result >= $high) {
      echo "あなたの平均点は{$result}点です。<br>素晴らしい";
    } else {
      echo "あなたの平均点は{$result}点です。<br>頑張りましょう";
    }
  }
}

$tim = new Student('tim');
$datas = [70, 80, 50, 80, 30];
$result = $tim->cal_avg($datas);
$tim->judge($result);