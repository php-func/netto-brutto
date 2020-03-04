<?php


namespace phpfunc\nettobrutto;


interface CollectionItemInterface
{

    public function add();

    public function remove();

    public function isEmpty();

    public function toArray();

}