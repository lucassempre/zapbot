<?php

namespace App\Application\Actions\Telefone;

use App\Domain\Repositories\TelefoneRepositoryInterface;

class StatusAction
{
    protected TelefoneRepositoryInterface $repository;

    public function __construct(TelefoneRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(string $status): array
    {
        return $this->repository->findByStatus($status);
    }

}