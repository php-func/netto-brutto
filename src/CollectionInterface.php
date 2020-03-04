<?php


namespace phpfunc\nettobrutto;


interface CollectionInterface
{

    public function clear();

    public function copy();

    public function isEmpty();

    public function toArray();

}