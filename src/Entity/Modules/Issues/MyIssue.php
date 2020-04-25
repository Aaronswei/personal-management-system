<?php

namespace App\Entity\Modules\Issues;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Modules\Issues\MyIssueRepository")
 */
class MyIssue {

    const FIELD_NAME_DELETED  = "deleted";
    const FIELD_NAME_RESOLVED = "resolved";

    /**
     * @var int $id
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string $type
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @var string $information
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $information;

    /**
     * @var null|string $icon
     * @ORM\Column(type="text", length=255, nullable=true)
     */
    private $icon;

    /**
     * @var DateTime $date
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @var bool $deleted
     * @ORM\Column(type="boolean")
     */
    private $deleted = 0;

    /**
     * @var bool $resolved
     * @ORM\Column(type="boolean")
     */
    private $resolved = 0;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getInformation(): string {
        return $this->information;
    }

    /**
     * @param string $information
     */
    public function setInformation(string $information): void {
        $this->information = $information;
    }

    /**
     * @return string|null
     */
    public function getIcon(): ?string {
        return $this->icon;
    }

    /**
     * @param string|null $icon
     */
    public function setIcon(?string $icon): void {
        $this->icon = $icon;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date): void {
        $this->date = $date;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     */
    public function setDeleted(bool $deleted): void {
        $this->deleted = $deleted;
    }

    /**
     * @return bool
     */
    public function isResolved(): bool {
        return $this->resolved;
    }

    /**
     * @param bool $resolved
     */
    public function setResolved(bool $resolved): void {
        $this->resolved = $resolved;
    }

}