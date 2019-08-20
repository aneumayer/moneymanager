<?php
namespace entities;

/**
 * @Entity
 * @Table(name="account")
 */
class Account
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
    private $name;

    /**
     * @Column(type="decimal")
     */
    private $start_balance;

    /**
     * @Column(type="datetime")
     */
    private $date;

    /**
     * Many accounts belong to one folder
     * @ManyToOne(targetEntity="Folder", inversedBy="accounts")
     * @JoinColumn(name="folder_id", referencedColumnName="id", nullable=false)
     * @var \entities\Folder
     */
    private $folder;

     /**
     * One account can have many transactions
     * @OneToMany(targetEntity="Transaction", mappedBy="account", cascade={"all"})
     * @var Doctrine\Common\Collection\ArrayCollection
     */
    private $transactions;

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
     * Set name.
     *
     * @param string $name
     *
     * @return Account
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Account
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
     * Set folder.
     *
     * @param \entities\Folder $folder
     *
     * @return Account
     */
    public function setFolder(\entities\Folder $folder)
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * Get folder.
     *
     * @return \entities\Folder
     */
    public function getFolder()
    {
        return $this->folder;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->transactions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set amount.
     *
     * @param string $amount
     *
     * @return Account
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Add transaction.
     *
     * @param \entities\Transaction $transaction
     *
     * @return Account
     */
    public function addTransaction(\entities\Transaction $transaction)
    {
        $this->transactions[] = $transaction;

        return $this;
    }

    /**
     * Remove transaction.
     *
     * @param \entities\Transaction $transaction
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTransaction(\entities\Transaction $transaction)
    {
        return $this->transactions->removeElement($transaction);
    }

    /**
     * Get transactions.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Set startBalance.
     *
     * @param string $startBalance
     *
     * @return Account
     */
    public function setStartBalance($startBalance)
    {
        $this->start_balance = $startBalance;

        return $this;
    }

    /**
     * Get startBalance.
     *
     * @return string
     */
    public function getStartBalance()
    {
        return $this->start_balance;
    }
}
