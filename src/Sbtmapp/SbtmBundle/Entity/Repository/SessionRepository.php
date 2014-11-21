<?php

// src/Sbtmapp\SbtmBundle\Entity\Repository/SummaryRepository.php

namespace Sbtmapp\SbtmBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class SessionRepository extends EntityRepository {

    public function getTotalNumberOfSessions() {
        $qb = $this->createQueryBuilder('c')
                ->select('count(id)')
                ->from('SbtmBundle:Session', 'c');
        return $qb->getQuery()->getSingleScalarResult();
    }

}
