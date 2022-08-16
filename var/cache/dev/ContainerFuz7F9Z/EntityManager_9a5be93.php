<?php

namespace ContainerFuz7F9Z;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere4616 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfd154 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties386e4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getConnection', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getMetadataFactory', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getExpressionBuilder', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'beginTransaction', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getCache', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'transactional', array('func' => $func), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'commit', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->commit();
    }

    public function rollback()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'rollback', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getClassMetadata', array('className' => $className), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'createQuery', array('dql' => $dql), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'createNamedQuery', array('name' => $name), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'createQueryBuilder', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'flush', array('entity' => $entity), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'clear', array('entityName' => $entityName), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->clear($entityName);
    }

    public function close()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'close', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->close();
    }

    public function persist($entity)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'persist', array('entity' => $entity), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'remove', array('entity' => $entity), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'refresh', array('entity' => $entity), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'detach', array('entity' => $entity), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'merge', array('entity' => $entity), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'contains', array('entity' => $entity), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getEventManager', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getConfiguration', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'isOpen', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getUnitOfWork', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getProxyFactory', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'initializeObject', array('obj' => $obj), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'getFilters', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'isFiltersStateClean', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'hasFilters', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return $this->valueHoldere4616->hasFilters();
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

        $instance->initializerfd154 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere4616) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere4616 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere4616->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, '__get', ['name' => $name], $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        if (isset(self::$publicProperties386e4[$name])) {
            return $this->valueHoldere4616->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4616;

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

        $targetObject = $this->valueHoldere4616;
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
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4616;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere4616;
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
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, '__isset', array('name' => $name), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4616;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere4616;
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
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, '__unset', array('name' => $name), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4616;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere4616;
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
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, '__clone', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        $this->valueHoldere4616 = clone $this->valueHoldere4616;
    }

    public function __sleep()
    {
        $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, '__sleep', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;

        return array('valueHoldere4616');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfd154 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfd154;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfd154 && ($this->initializerfd154->__invoke($valueHoldere4616, $this, 'initializeProxy', array(), $this->initializerfd154) || 1) && $this->valueHoldere4616 = $valueHoldere4616;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere4616;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere4616;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
