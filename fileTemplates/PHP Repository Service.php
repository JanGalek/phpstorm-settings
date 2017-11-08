<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};
#end

use Doctrine\ORM\EntityRepository;
use Kdyby\Doctrine\EntityManager;
use ${ENTITY_NAMESPACE}${ENTITY};

class ${NAME}
{
    /** @var EntityManager ${DS}em */
    private ${DS}em;

    /** @var EntityRepository */
    private ${DS}repository;
    
    
    public function __construct(EntityManager ${DS}entityManager)
    {
        ${DS}this->em = ${DS}entityManager;
        ${DS}this->repository = ${DS}this->em->getRepository(${ENTITY}::class);
    }
}
