<?php
use QueryBuilder\QueryBuilder;
use QueryBuilder\Interfaces\QueryInterface\Insert;
use QueryBuilder\Interfaces\QueryInterface\Select;


## INSERT INTO EXAMPLE TABLE
$insertquery = (new QueryBuilder())
    ->insert('table_name')
    ->columns("1", "2", "3")
    ->values("4", "5", "6");
echo '<br>';

## DELETE FROM TABLE EXAMPLE
$deletequery = (new QueryBuilder())
->delete('table_name')
->from('table_name')
->where('table_name');

## SELECT FROM TABLE EXAMPLE
$selectquery = (new QueryBuilder())
    ->select('table_name')
    ->from('test')
    ->groupBy('test2')
    ->orderBy('test');

## UPDATE FROM TABLE EXAMPLE
$updatequery = (new QueryBuilder())
->update('table_name')
->from('table_name')
->where('table_name');

echo '<h1>Insert Query</h1>';
echo $insertquery;
echo '<br>';

echo '<h1>Select Query</h1>';
echo $selectquery;
echo '<br>';

echo '<h1>Delete Query</h1>';
echo $deletequery;
echo '<br>';

echo '<h1>Update Query</h1>';
echo $updatequery;
echo '<br>';
