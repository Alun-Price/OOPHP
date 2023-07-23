<?php

abstract class DataModel // abstract means you can't set up an instance of the class
{
    protected string $tableName = 'random-table-name'; 
    public function save()
    {
      print_r('Saving data to table: '.$this->tableName);
    }
}