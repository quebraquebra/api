<?php
namespace AppBundle\Repository;

use AppBundle\Entity\FolhaCamara;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class FolhaCamaraRepository extends EntityRepository
{
    public function search(array $filters = []): array
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder()
            ->select('fc')
            ->from(FolhaCamara::class, 'fc')
        ;
        
        $queryBuilder = $this->applyFilters($queryBuilder, $filters);

        return [
            'total' => (new Paginator($queryBuilder))->count(),
            'result' => $queryBuilder->getQuery()->getResult()
        ];
    }

    private function applyFilters(QueryBuilder $queryBuilder, array $filters): QueryBuilder
    {
        if (!empty($filters['nome'])) {
            $queryBuilder
                ->andWhere($queryBuilder->expr()->like('LOWER(fc.nome)', 'LOWER(:nome)'))
                ->setParameter('nome', "%{$filters['nome']}%")
            ;
        }

        if (!empty($filters['vinculo'])) {
            $queryBuilder
                ->andWhere($queryBuilder->expr()->like('LOWER(fc.vinculo)', 'LOWER(:vinculo)'))
                ->setParameter('vinculo', "%{$filters['vinculo']}%")
            ;
        }

        if (!empty($filters['cargo'])) {
            $queryBuilder
                ->andWhere($queryBuilder->expr()->like('LOWER(fc.cargo)', 'LOWER(:cargo)'))
                ->setParameter('cargo', "%{$filters['cargo']}%")
            ;
        }

        if (!empty($filters['ano'])) {
            $queryBuilder
                ->andWhere($queryBuilder->expr()->eq('fc.ano', ':ano'))
                ->setParameter('ano', (int) $filters['ano'])
            ;
        }

        if (!empty($filters['mes'])) {
            $queryBuilder
                ->andWhere($queryBuilder->expr()->eq('fc.mes', ':mes'))
                ->setParameter('mes', (int) $filters['mes'])
            ;
        }

        $this->setOrderBy($queryBuilder, $filters['order'] ?? '');
        $queryBuilder->setFirstResult(isset($filters['page']) ? ($filters['page'] - 1) * ($filters['limit'] ?? 10) : 0);
        $queryBuilder->setMaxResults($filters['limit'] ?? 10);

        return $queryBuilder;
    }
    
    private function setOrderBy(QueryBuilder $queryBuilder, string $orderFilter): QueryBuilder
    {
        preg_match('/^-?([a-zA-Z]+)$/', $orderFilter, $orderMatches);
        $sort = $orderMatches[1] ?? 'nome';
        $order = '-' !== substr($orderFilter, 0, 1) ? 'ASC' : 'DESC';
        $queryBuilder->orderBy("fc.{$sort}", $order);
        
        return $queryBuilder;
    }
}
