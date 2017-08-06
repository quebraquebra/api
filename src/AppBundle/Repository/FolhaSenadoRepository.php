<?php
namespace AppBundle\Repository;

use AppBundle\Entity\FolhaSenado;

/**
 * Class FolhaSenadoRepository
 * @package AppBundle\Repository
 */
class FolhaSenadoRepository extends FolhaRepository
{
    /**
     *
     * @param array $filters
     * @return array
     */
    public function search(array $filters = []): array
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder()
            ->select('f')
            ->from(FolhaSenado::class, 'f')
        ;
        $this->applyFilters($queryBuilder, $filters);

        return $this->mountPaginator($queryBuilder);
    }
}
