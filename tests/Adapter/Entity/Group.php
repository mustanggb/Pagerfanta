<?php declare(strict_types=1);

namespace Pagerfanta\Tests\Adapter\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="groups")
 */
class Group
{
    /**
     * @var int|null
     *
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var Collection<array-key, User>
     *
     * @ORM\ManyToMany(targetEntity="\Pagerfanta\Tests\Adapter\Entity\User", mappedBy="groups")
     */
    public $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }
}
