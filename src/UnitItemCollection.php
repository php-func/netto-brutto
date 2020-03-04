<?php


namespace phpfunc\nettobrutto;


class UnitItemCollection implements \IteratorAggregate
{
    private $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;

        return $this;
    }

    public function getIterator(): Iterator
    {
        return new UnitManagerCollection($this);
    }

    public function getReverseIterator(): Iterator
    {
        return new UnitManagerCollection($this, true);
    }
}