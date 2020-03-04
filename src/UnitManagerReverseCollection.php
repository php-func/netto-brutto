<?php


namespace phpfunc\nettobrutto;

/**
 * Class UnitManagerReverseCollection
 * @package phpfunc\nettobrutto
 */
class UnitManagerReverseCollection extends UnitManagerCollectionAbstract
{

    /**
     * @return $this|void
     */
    public function rewind()
    {
        $this->position = count($this->collection->getItems()) - 1;

        return $this;
    }

    /**
     * @return $this|void
     */
    public function next()
    {
        $this->position = $this->position -1;

        return $this;
    }

}