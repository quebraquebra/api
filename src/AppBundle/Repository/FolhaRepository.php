<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

abstract class FolhaRepository extends EntityRepository
{
    /**
     *
     * @param QueryBuilder $queryBuilder
     * @param array $filters
     * @return QueryBuilder
     */
    protected function applyFilters(QueryBuilder $queryBuilder, array $filters): QueryBuilder
    {
        if (!empty($filters['servidor'])) {
            $queryBuilder->andWhere($queryBuilder->expr()->like('LOWER(f.servidor)', 'LOWER(:servidor)'))
                ->setParameter('servidor', "%{$filters['servidor']}%");
        }

        if (!empty($filters['vinculo'])) {
            $queryBuilder->andWhere($queryBuilder->expr()->like('LOWER(f.vinculo)', 'LOWER(:vinculo)'))
                ->setParameter('vinculo', "%{$filters['vinculo']}%");
        }

        if (!empty($filters['cargo'])) {
            $queryBuilder->andWhere($queryBuilder->expr()->like('LOWER(f.cargo)', 'LOWER(:cargo)'))
                ->setParameter('cargo', "%{$filters['cargo']}%");
        }

        if (!empty($filters['ano'])) {
            $queryBuilder->andWhere($queryBuilder->expr()->eq('f.ano', ':ano'))
                ->setParameter('ano', (int) $filters['ano']);
        }

        if (!empty($filters['mes'])) {
            $queryBuilder->andWhere($queryBuilder->expr()->eq('f.mes', ':mes'))
                ->setParameter('mes', (int) $filters['mes']);
        }

        $queryBuilder
            ->orderBy('f.ano', 'DESC')
            ->addOrderBy('f.mes', 'DESC')
            ->addOrderBy('f.' . ($filters['sort'] ?? 'servidor'), $filters['order'] ?? 'ASC')
            ->setFirstResult(isset($filters['page']) ? ($filters['page'] - 1) * ($filters['limit'] ?? 10) : 0)
            ->setMaxResults($filters['limit'] ?? 10);

        return $queryBuilder;
    }

    /**
     *
     * @param QueryBuilder $queryBuilder
     * @return array
     */
    protected function mountPaginator(QueryBuilder $queryBuilder): array
    {
        return [
            'total' => (new Paginator($queryBuilder))->count(),
            'result' => $queryBuilder->getQuery()->getResult()
        ];
    }
}
