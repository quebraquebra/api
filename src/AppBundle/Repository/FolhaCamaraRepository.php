<?php
namespace AppBundle\Repository;

use AppBundle\Entity\FolhaCamara;

/**
 * Class FolhaCamaraRepository
 * @package AppBundle\Repository
 */
class FolhaCamaraRepository extends FolhaRepository
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
            ->from(FolhaCamara::class, 'f')
        ;
        $this->applyFilters($queryBuilder, $filters);

        return $this->mountPaginator($queryBuilder);
    }
}
