<?php
spl_autoload_register();

[$fnStudent, $lnStudent, $facultyNumber] = explode(' ', readline());
[$fnWorker, $lnWorker, $salary, $hours] = explode(' ', readline());

try {
    $student = new Student($fnStudent, $lnStudent, $facultyNumber);
    $worker = new WorkPerson($fnWorker, $lnWorker, floatval($salary), floatval($hours));
    echo $student.PHP_EOL;
    echo $worker;
} catch (Exception $e) {
    echo $e->getMessage().PHP_EOL;
}