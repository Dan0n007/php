<?php

namespace ContainerVuVMnWF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder79090 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer31533 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd8ae8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getConnection', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getMetadataFactory', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getExpressionBuilder', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'beginTransaction', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getCache', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getCache();
    }

    public function transactional($func)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'transactional', array('func' => $func), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'wrapInTransaction', array('func' => $func), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'commit', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->commit();
    }

    public function rollback()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'rollback', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getClassMetadata', array('className' => $className), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'createQuery', array('dql' => $dql), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'createNamedQuery', array('name' => $name), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'createQueryBuilder', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'flush', array('entity' => $entity), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'clear', array('entityName' => $entityName), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->clear($entityName);
    }

    public function close()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'close', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->close();
    }

    public function persist($entity)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'persist', array('entity' => $entity), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'remove', array('entity' => $entity), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'refresh', array('entity' => $entity), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'detach', array('entity' => $entity), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'merge', array('entity' => $entity), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getRepository', array('entityName' => $entityName), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'contains', array('entity' => $entity), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getEventManager', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getConfiguration', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'isOpen', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getUnitOfWork', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getProxyFactory', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'initializeObject', array('obj' => $obj), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'getFilters', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'isFiltersStateClean', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'hasFilters', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return $this->valueHolder79090->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer31533 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder79090) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder79090 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder79090->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, '__get', ['name' => $name], $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        if (isset(self::$publicPropertiesd8ae8[$name])) {
            return $this->valueHolder79090->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79090;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder79090;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79090;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder79090;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, '__isset', array('name' => $name), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79090;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder79090;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, '__unset', array('name' => $name), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79090;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder79090;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, '__clone', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        $this->valueHolder79090 = clone $this->valueHolder79090;
    }

    public function __sleep()
    {
        $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, '__sleep', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;

        return array('valueHolder79090');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer31533 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer31533;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer31533 && ($this->initializer31533->__invoke($valueHolder79090, $this, 'initializeProxy', array(), $this->initializer31533) || 1) && $this->valueHolder79090 = $valueHolder79090;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder79090;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder79090;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
