<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
#[ApiResource]
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $name;

    /**
     * @ORM\OneToMany(targetEntity=Payment::class, mappedBy="client")
     * @var Collection<Payment>
     */
    private Collection $payments;

    /**
     * @ORM\OneToMany(targetEntity=ClientTransaction::class, mappedBy="client")
     *  @var Collection<ClientTransaction>
     */
    private Collection $clientTransactions;

    public function __construct()
    {
        $this->payments = new ArrayCollection();
        $this->clientTransactions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<Payment>
     */
    public function getPayments(): Collection
    {
        return $this->payments;
    }

    public function addPayment(Payment $payment): self
    {
        if (!$this->payments->contains($payment)) {
            $this->payments[] = $payment;
            $payment->setClient($this);
        }

        return $this;
    }

    public function removePayment(Payment $payment): self
    {
        if ($this->payments->removeElement($payment)) {
            // set the owning side to null (unless already changed)
            if ($payment->getClient() === $this) {
                $payment->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<ClientTransaction>
     */
    public function getClientTransactions(): Collection
    {
        return $this->clientTransactions;
    }

    public function addClientTransaction(ClientTransaction $clientTransaction): self
    {
        if (!$this->clientTransactions->contains($clientTransaction)) {
            $this->clientTransactions[] = $clientTransaction;
            $clientTransaction->setClient($this);
        }

        return $this;
    }

    public function removeClientTransaction(ClientTransaction $clientTransaction): self
    {
        if ($this->clientTransactions->removeElement($clientTransaction)) {
            // set the owning side to null (unless already changed)
            if ($clientTransaction->getClient() === $this) {
                $clientTransaction->setClient(null);
            }
        }

        return $this;
    }
}
