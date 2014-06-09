<?php

namespace Api\Group;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ggroup")
 */
class GroupEntity
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
     * @ORM\Column(type="text")
     */
    private $notes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="created_at", nullable=false))
     */
    private $createdAt;

    /**
     * @var \Api\Character\CharacterEntity
     *
     * @ORM\ManyToOne(targetEntity="Api\Character\CharacterEntity")
     * @ORM\JoinColumn(nullable=false)
     */
    private $character;

    /**
     * @var \Api\Event\EventEntity
     *
     * @ORM\ManyToOne(targetEntity="Api\Event\EventEntity")
     * @ORM\JoinColumn(nullable=false)
     */
    private $event;

    /**
     * @var \Api\Event\EventTypeEntity
     *
     * @ORM\ManyToOne(targetEntity="Api\Event\EventTypeEntity")
     * @ORM\JoinColumn(name="event_type_id", nullable=false)
     */
    private $eventType;

    /**
     * @var \Api\Server\ServerEntity
     *
     * @ORM\ManyToOne(targetEntity="Api\Server\ServerEntity")
     */
    private $server;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @param \Api\Character\CharacterEntity $character
     */
    public function setCharacter($character)
    {
        $this->character = $character;
    }

    /**
     * @return \Api\Character\CharacterEntity
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \Api\Event\EventEntity $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @return \Api\Event\EventEntity
     */
    public function getEvent()
    {
        return $this->event;
    }

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
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param \Api\Server\ServerEntity $server
     */
    public function setServer($server)
    {
        $this->server = $server;
    }

    /**
     * @return \Api\Server\ServerEntity
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param mixed $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return mixed
     */
    public function getEventType()
    {
        return $this->eventType;
    }
}
