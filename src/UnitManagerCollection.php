<?php


namespace phpfunc\nettobrutto;

/**
 * Class UnitManagerCollection
 * @package phpfunc\nettobrutto
 */
class UnitManagerCollection extends UnitManagerCollectionAbstract
{

    public function rewind()
    {
        $this->position = 0;
    }


    /**
     * @return $this|void
     */
    public function next()
    {
        $this->position = $this->position + 1;

        return $this;
    }


}