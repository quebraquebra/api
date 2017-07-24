<?php
namespace AppBundle\Repository;

use AppBundle\Entity\FolhaSenado;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class FolhaSenadoRepository extends EntityRepository
{
    public function search(array $filters = []): array
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder()
            ->select('fs')
            ->from(FolhaSenado::class, 'fs')
        ;
        $this->applyFilters($queryBuilder, $filters);

        return [
            'total' => (new Paginator($queryBuilder))->count(),
            'result' => $queryBuilder->getQuery()->getResult()
        ];
    }

    private function applyFilters(QueryBuilder $queryBuilder, array $filters): QueryBuilder
    {
        if (!empty($filters['servidor'])) {
            $queryBuilder->andWhere($queryBuilder->expr()->like('LOWER(fs.servidor)', 'LOWER(:servidor)'))
                ->setParameter('servidor', "%{$filters['servidor']}%");
        }

        if (!empty($filters['vinculo'])) {
            $queryBuilder->andWhere($queryBuilder->expr()->like('LOWER(fs.vinculo)', 'LOWER(:vinculo)'))
                ->setParameter('vinculo', "%{$filters['vinculo']}%");
        }

        if (!empty($filters['cargo'])) {
            $queryBuilder->andWhere($queryBuilder->expr()->like('LOWER(fs.cargo)', 'LOWER(:cargo)'))
                ->setParameter('cargo', "%{$filters['cargo']}%");
        }

        if (!empty($filters['ano'])) {
            $queryBuilder->andWhere($queryBuilder->expr()->eq('fs.ano', ':ano'))
                ->setParameter('ano', (int) $filters['ano']);
        }

        if (!empty($filters['mes'])) {
            $queryBuilder->andWhere($queryBuilder->expr()->eq('fs.mes', ':mes'))
                ->setParameter('mes', (int) $filters['mes']);
        }

        $queryBuilder
            ->orderBy('fs.ano', 'DESC')
            ->addOrderBy('fs.mes', 'DESC')
            ->addOrderBy('fs.' . $filters['sort'] ?? 'servidor', $filters['order'] ?? 'ASC')
            ->setFirstResult(isset($filters['page']) ? ($filters['page'] - 1) * ($filters['limit'] ?? 10) : 0)
            ->setMaxResults($filters['limit'] ?? 10);

        return $queryBuilder;
    }
}
