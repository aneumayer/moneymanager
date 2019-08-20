<?php
namespace entities;

/**
 * @Entity
 * @Table(name="transaction")
 */
class Transaction
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
    private $amount;

    /**
     * @Column(type="datetime")
     */
    private $date;

    /**
     * Many accounts belong to one transaction
     * @ManyToOne(targetEntity="Account", inversedBy="transactions")
     * @JoinColumn(name="account_id", referencedColumnName="id", nullable=false)
     * @var \entities\Account
     */
    private $account;

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
     * @return Transaction
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
     * Set amount.
     *
     * @param string $amount
     *
     * @return Transaction
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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Transaction
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
     * Set account.
     *
     * @param \entities\Account $account
     *
     * @return Transaction
     */
    public function setAccount(\entities\Account $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account.
     *
     * @return \entities\Account
     */
    public function getAccount()
    {
        return $this->account;
    }
}
