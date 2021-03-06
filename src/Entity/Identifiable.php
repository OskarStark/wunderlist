<?php

namespace Wunderlist\Entity;

trait Identifiable
{
    /**
     * @var integer
     * @JMS\Serializer\Annotation\Type\Type("integer")
     */
    protected $id;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
