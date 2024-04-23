<?php
/**
 * @file
 * Insert method for SQLbuilder
 */
namespace QueryBuilder;

use QueryBuilder\Interfaces\QueryInterface;

class Insert implements QueryInterface{
    private $_table;
    private $columns = [];
    private $values = [];
    public function __construct(string $table){
        $this->_table = $table;
    }

    public function __toString(): string{
        return 'INSERT INTO ' . $this->_table
            . ' (' . implode(', ',$this->columns) . ') VALUES (' . implode(', ',$this->values) . ')';
    }
    public function columns(string ...$columns): self{
        $this->columns = $columns;
        return $this;
    }
    public function values(string ...$values): self{
        $this->values = $values;
        return $this;
    }
}
