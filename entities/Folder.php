<?php
namespace entities;

/**
 * @Entity
 * @Table(name="folder")
 */
class Folder
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="smallint")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $title;

    /**
     * @Column(type="datetime")
     */
    private $date;

    /**
     * Many folders belong to one user
     * @ManyToOne(targetEntity="User", inversedBy="folders")
     * @JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     * @var \entities\User
     */
    private $user;

    /**
     * One folder can have many accounts
     * @OneToMany(targetEntity="Account", mappedBy="folder", cascade={"all"})
     * @var Doctrine\Common\Collection\ArrayCollection
     */
    private $accounts;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->accounts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Folder
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Folder
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user.
     *
     * @param \entities\User $user
     *
     * @return Folder
     */
    public function setUser(\entities\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \entities\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add account.
     *
     * @param \entities\Account $account
     *
     * @return Folder
     */
    public function addAccount(\entities\Account $account)
    {
        $this->accounts[] = $account;

        return $this;
    }

    /**
     * Remove account.
     *
     * @param \entities\Account $account
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAccount(\entities\Account $account)
    {
        return $this->accounts->removeElement($account);
    }

    /**
     * Get accounts.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAccounts()
    {
        return $this->accounts;
    }
}
