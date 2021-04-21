<?php

namespace ContainerKKie2g7;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfa984 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5e11b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf6016 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getConnection', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getMetadataFactory', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getExpressionBuilder', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'beginTransaction', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getCache', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'transactional', array('func' => $func), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->transactional($func);
    }

    public function commit()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'commit', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->commit();
    }

    public function rollback()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'rollback', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getClassMetadata', array('className' => $className), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'createQuery', array('dql' => $dql), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'createNamedQuery', array('name' => $name), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'createQueryBuilder', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'flush', array('entity' => $entity), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'clear', array('entityName' => $entityName), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->clear($entityName);
    }

    public function close()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'close', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->close();
    }

    public function persist($entity)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'persist', array('entity' => $entity), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'remove', array('entity' => $entity), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'refresh', array('entity' => $entity), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'detach', array('entity' => $entity), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'merge', array('entity' => $entity), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'contains', array('entity' => $entity), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getEventManager', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getConfiguration', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'isOpen', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getUnitOfWork', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getProxyFactory', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'initializeObject', array('obj' => $obj), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'getFilters', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'isFiltersStateClean', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'hasFilters', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return $this->valueHolderfa984->hasFilters();
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

        $instance->initializer5e11b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfa984) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfa984 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfa984->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, '__get', ['name' => $name], $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        if (isset(self::$publicPropertiesf6016[$name])) {
            return $this->valueHolderfa984->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa984;

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

        $targetObject = $this->valueHolderfa984;
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
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa984;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfa984;
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
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, '__isset', array('name' => $name), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa984;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfa984;
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
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, '__unset', array('name' => $name), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa984;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfa984;
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
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, '__clone', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        $this->valueHolderfa984 = clone $this->valueHolderfa984;
    }

    public function __sleep()
    {
        $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, '__sleep', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;

        return array('valueHolderfa984');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5e11b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5e11b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5e11b && ($this->initializer5e11b->__invoke($valueHolderfa984, $this, 'initializeProxy', array(), $this->initializer5e11b) || 1) && $this->valueHolderfa984 = $valueHolderfa984;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfa984;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfa984;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
