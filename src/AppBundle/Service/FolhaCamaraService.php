<?php
namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Repository\FolhaCamaraRepository;
use AppBundle\Entity\FolhaCamara;

class FolhaCamaraService
{
    /** @var FolhaCamaraRepository $folhaCamaraRepository */
    private $folhaCamaraRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->folhaCamaraRepository = $entityManager->getRepository(FolhaCamara::class);
    }

    public function search(array $filters = []): array
    {
        return $this->folhaCamaraRepository->search($filters);
    }
}
