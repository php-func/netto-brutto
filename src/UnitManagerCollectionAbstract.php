<?php


namespace phpfunc\nettobrutto;


abstract class UnitManagerCollectionAbstract implements \Iterator
{
    /**
     * @var UnitItemCollection
     */
    protected $collection;

    /**
     * @var int Stores the current traversal position. An iterator may have a
     * lot of other fields for storing iteration state, especially when it is
     * supposed to work with a particular kind of collection.
     */
    protected $position = 0;


    /**
     * UnitManagerCollectionAbstract constructor.
     * @param $collection
     */
    public function __construct($collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    /**
     * @return bool|float|int|string|null
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }

}