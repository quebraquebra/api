<?php
namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Repository\FolhaSenadoRepository;
use AppBundle\Entity\FolhaSenado;

class FolhaSenadoService
{
    /** @var FolhaSenadoRepository $folhaSenadoRepository */
    private $folhaSenadoRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->folhaSenadoRepository = $entityManager->getRepository(FolhaSenado::class);
    }

    public function search(array $filters = []): array
    {
        return $this->folhaSenadoRepository->search($filters);
    }
}
