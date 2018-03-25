<?php
declare(strict_types=1);

namespace Infrastructure\Repository;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Infrastructure\EntityManager\EntityManagerResolver;
use Infrastructure\Exception\ModelNotFoundException;
use Doctrine\ORM\Repository\DefaultRepositoryFactory;

abstract class AbstractRepository
{
    /**
     * @var EntityManagerResolver
     */
    protected $emResolver;

    /**
     * @var DefaultRepositoryFactory
     */
    protected $repositoryFactory;

    public function __construct(EntityManagerResolver $emResolver, DefaultRepositoryFactory $defaultRepositoryFactory)
    {
        $this->emResolver = $emResolver;
        $this->repositoryFactory = $defaultRepositoryFactory;
    }


    abstract protected function getClassName(): string;


    public function find($id)
    {
        return $this->getRepository()->find($id);
    }

    /**
     * Finds all entities in the repository.
     *
     * @return array The entities.
     */
    public function findAll()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * @param mixed $id
     * @return mixed|object
     * @throws ModelNotFoundException
     */
    public function get($id)
    {
        $entity = $this->find($id);
        if (! $entity) {
            throw ModelNotFoundException::forClassId($this->getClassName(), $id);
        }

        return $entity;
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository|\Doctrine\ORM\EntityRepository
     */
    final protected function getRepository()
    {
        return $this->repositoryFactory->getRepository($this->em(), $this->getClassName());
    }

    /**
     * @return EntityManagerInterface|ObjectManager
     */
    public function em(): EntityManagerInterface
    {
        $em = $this->emResolver->getEntityManager($this->getClassName());
        if (! $em instanceof EntityManagerInterface) {
            throw new \RuntimeException(sprintf('Not found Entity manager for entity %s', $this->getClassName()));
        }

        return $em;
    }
}
