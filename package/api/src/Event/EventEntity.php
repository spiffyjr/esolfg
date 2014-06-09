<?php

namespace Api\Event;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 */
class EventEntity
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var EventTypeEntity[]
     *
     * @ORM\ManyToMany(targetEntity="EventTypeEntity", inversedBy="events")
     * @ORM\JoinTable(
     *     name="event_type_map",
     *     joinColumns={@ORM\JoinColumn(name="event_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="event_type_id", referencedColumnName="id")}
     * )
     */
    private $types;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \Api\Event\EventTypeEntity[] $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @return \Api\Event\EventTypeEntity[]
     */
    public function getTypes()
    {
        return $this->types;
    }
}
