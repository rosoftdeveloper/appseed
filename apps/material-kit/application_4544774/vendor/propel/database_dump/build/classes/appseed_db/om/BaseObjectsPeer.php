<?php


/**
 * Base static class for performing query and update operations on the 'objects' table.
 *
 *
 *
 * @package propel.generator.appseed_db.om
 */
abstract class BaseObjectsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'appseed_db';

    /** the table name for this class */
    const TABLE_NAME = 'objects';

    /** the related Propel class for this table */
    const OM_CLASS = 'Objects';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ObjectsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 31;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 31;

    /** the column name for the id field */
    const ID = 'objects.id';

    /** the column name for the userid field */
    const USERID = 'objects.userid';

    /** the column name for the idx1 field */
    const IDX1 = 'objects.idx1';

    /** the column name for the idx2 field */
    const IDX2 = 'objects.idx2';

    /** the column name for the idx3 field */
    const IDX3 = 'objects.idx3';

    /** the column name for the idx4 field */
    const IDX4 = 'objects.idx4';

    /** the column name for the idx5 field */
    const IDX5 = 'objects.idx5';

    /** the column name for the key1 field */
    const KEY1 = 'objects.key1';

    /** the column name for the key2 field */
    const KEY2 = 'objects.key2';

    /** the column name for the key3 field */
    const KEY3 = 'objects.key3';

    /** the column name for the key4 field */
    const KEY4 = 'objects.key4';

    /** the column name for the key5 field */
    const KEY5 = 'objects.key5';

    /** the column name for the key6 field */
    const KEY6 = 'objects.key6';

    /** the column name for the key7 field */
    const KEY7 = 'objects.key7';

    /** the column name for the key8 field */
    const KEY8 = 'objects.key8';

    /** the column name for the key9 field */
    const KEY9 = 'objects.key9';

    /** the column name for the key10 field */
    const KEY10 = 'objects.key10';

    /** the column name for the data1 field */
    const DATA1 = 'objects.data1';

    /** the column name for the data2 field */
    const DATA2 = 'objects.data2';

    /** the column name for the data3 field */
    const DATA3 = 'objects.data3';

    /** the column name for the data4 field */
    const DATA4 = 'objects.data4';

    /** the column name for the data5 field */
    const DATA5 = 'objects.data5';

    /** the column name for the data6 field */
    const DATA6 = 'objects.data6';

    /** the column name for the data7 field */
    const DATA7 = 'objects.data7';

    /** the column name for the data8 field */
    const DATA8 = 'objects.data8';

    /** the column name for the data9 field */
    const DATA9 = 'objects.data9';

    /** the column name for the data10 field */
    const DATA10 = 'objects.data10';

    /** the column name for the rawdata field */
    const RAWDATA = 'objects.rawdata';

    /** the column name for the counter field */
    const COUNTER = 'objects.counter';

    /** the column name for the expiry field */
    const EXPIRY = 'objects.expiry';

    /** the column name for the lastupdate field */
    const LASTUPDATE = 'objects.lastupdate';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Objects objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Objects[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ObjectsPeer::$fieldNames[ObjectsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Userid', 'Idx1', 'Idx2', 'Idx3', 'Idx4', 'Idx5', 'Key1', 'Key2', 'Key3', 'Key4', 'Key5', 'Key6', 'Key7', 'Key8', 'Key9', 'Key10', 'Data1', 'Data2', 'Data3', 'Data4', 'Data5', 'Data6', 'Data7', 'Data8', 'Data9', 'Data10', 'Rawdata', 'Counter', 'Expiry', 'Lastupdate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'userid', 'idx1', 'idx2', 'idx3', 'idx4', 'idx5', 'key1', 'key2', 'key3', 'key4', 'key5', 'key6', 'key7', 'key8', 'key9', 'key10', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8', 'data9', 'data10', 'rawdata', 'counter', 'expiry', 'lastupdate', ),
        BasePeer::TYPE_COLNAME => array (ObjectsPeer::ID, ObjectsPeer::USERID, ObjectsPeer::IDX1, ObjectsPeer::IDX2, ObjectsPeer::IDX3, ObjectsPeer::IDX4, ObjectsPeer::IDX5, ObjectsPeer::KEY1, ObjectsPeer::KEY2, ObjectsPeer::KEY3, ObjectsPeer::KEY4, ObjectsPeer::KEY5, ObjectsPeer::KEY6, ObjectsPeer::KEY7, ObjectsPeer::KEY8, ObjectsPeer::KEY9, ObjectsPeer::KEY10, ObjectsPeer::DATA1, ObjectsPeer::DATA2, ObjectsPeer::DATA3, ObjectsPeer::DATA4, ObjectsPeer::DATA5, ObjectsPeer::DATA6, ObjectsPeer::DATA7, ObjectsPeer::DATA8, ObjectsPeer::DATA9, ObjectsPeer::DATA10, ObjectsPeer::RAWDATA, ObjectsPeer::COUNTER, ObjectsPeer::EXPIRY, ObjectsPeer::LASTUPDATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USERID', 'IDX1', 'IDX2', 'IDX3', 'IDX4', 'IDX5', 'KEY1', 'KEY2', 'KEY3', 'KEY4', 'KEY5', 'KEY6', 'KEY7', 'KEY8', 'KEY9', 'KEY10', 'DATA1', 'DATA2', 'DATA3', 'DATA4', 'DATA5', 'DATA6', 'DATA7', 'DATA8', 'DATA9', 'DATA10', 'RAWDATA', 'COUNTER', 'EXPIRY', 'LASTUPDATE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'userid', 'idx1', 'idx2', 'idx3', 'idx4', 'idx5', 'key1', 'key2', 'key3', 'key4', 'key5', 'key6', 'key7', 'key8', 'key9', 'key10', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8', 'data9', 'data10', 'rawdata', 'counter', 'expiry', 'lastupdate', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ObjectsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Userid' => 1, 'Idx1' => 2, 'Idx2' => 3, 'Idx3' => 4, 'Idx4' => 5, 'Idx5' => 6, 'Key1' => 7, 'Key2' => 8, 'Key3' => 9, 'Key4' => 10, 'Key5' => 11, 'Key6' => 12, 'Key7' => 13, 'Key8' => 14, 'Key9' => 15, 'Key10' => 16, 'Data1' => 17, 'Data2' => 18, 'Data3' => 19, 'Data4' => 20, 'Data5' => 21, 'Data6' => 22, 'Data7' => 23, 'Data8' => 24, 'Data9' => 25, 'Data10' => 26, 'Rawdata' => 27, 'Counter' => 28, 'Expiry' => 29, 'Lastupdate' => 30, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'userid' => 1, 'idx1' => 2, 'idx2' => 3, 'idx3' => 4, 'idx4' => 5, 'idx5' => 6, 'key1' => 7, 'key2' => 8, 'key3' => 9, 'key4' => 10, 'key5' => 11, 'key6' => 12, 'key7' => 13, 'key8' => 14, 'key9' => 15, 'key10' => 16, 'data1' => 17, 'data2' => 18, 'data3' => 19, 'data4' => 20, 'data5' => 21, 'data6' => 22, 'data7' => 23, 'data8' => 24, 'data9' => 25, 'data10' => 26, 'rawdata' => 27, 'counter' => 28, 'expiry' => 29, 'lastupdate' => 30, ),
        BasePeer::TYPE_COLNAME => array (ObjectsPeer::ID => 0, ObjectsPeer::USERID => 1, ObjectsPeer::IDX1 => 2, ObjectsPeer::IDX2 => 3, ObjectsPeer::IDX3 => 4, ObjectsPeer::IDX4 => 5, ObjectsPeer::IDX5 => 6, ObjectsPeer::KEY1 => 7, ObjectsPeer::KEY2 => 8, ObjectsPeer::KEY3 => 9, ObjectsPeer::KEY4 => 10, ObjectsPeer::KEY5 => 11, ObjectsPeer::KEY6 => 12, ObjectsPeer::KEY7 => 13, ObjectsPeer::KEY8 => 14, ObjectsPeer::KEY9 => 15, ObjectsPeer::KEY10 => 16, ObjectsPeer::DATA1 => 17, ObjectsPeer::DATA2 => 18, ObjectsPeer::DATA3 => 19, ObjectsPeer::DATA4 => 20, ObjectsPeer::DATA5 => 21, ObjectsPeer::DATA6 => 22, ObjectsPeer::DATA7 => 23, ObjectsPeer::DATA8 => 24, ObjectsPeer::DATA9 => 25, ObjectsPeer::DATA10 => 26, ObjectsPeer::RAWDATA => 27, ObjectsPeer::COUNTER => 28, ObjectsPeer::EXPIRY => 29, ObjectsPeer::LASTUPDATE => 30, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USERID' => 1, 'IDX1' => 2, 'IDX2' => 3, 'IDX3' => 4, 'IDX4' => 5, 'IDX5' => 6, 'KEY1' => 7, 'KEY2' => 8, 'KEY3' => 9, 'KEY4' => 10, 'KEY5' => 11, 'KEY6' => 12, 'KEY7' => 13, 'KEY8' => 14, 'KEY9' => 15, 'KEY10' => 16, 'DATA1' => 17, 'DATA2' => 18, 'DATA3' => 19, 'DATA4' => 20, 'DATA5' => 21, 'DATA6' => 22, 'DATA7' => 23, 'DATA8' => 24, 'DATA9' => 25, 'DATA10' => 26, 'RAWDATA' => 27, 'COUNTER' => 28, 'EXPIRY' => 29, 'LASTUPDATE' => 30, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'userid' => 1, 'idx1' => 2, 'idx2' => 3, 'idx3' => 4, 'idx4' => 5, 'idx5' => 6, 'key1' => 7, 'key2' => 8, 'key3' => 9, 'key4' => 10, 'key5' => 11, 'key6' => 12, 'key7' => 13, 'key8' => 14, 'key9' => 15, 'key10' => 16, 'data1' => 17, 'data2' => 18, 'data3' => 19, 'data4' => 20, 'data5' => 21, 'data6' => 22, 'data7' => 23, 'data8' => 24, 'data9' => 25, 'data10' => 26, 'rawdata' => 27, 'counter' => 28, 'expiry' => 29, 'lastupdate' => 30, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = ObjectsPeer::getFieldNames($toType);
        $key = isset(ObjectsPeer::$fieldKeys[$fromType][$name]) ? ObjectsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ObjectsPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, ObjectsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ObjectsPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ObjectsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ObjectsPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ObjectsPeer::ID);
            $criteria->addSelectColumn(ObjectsPeer::USERID);
            $criteria->addSelectColumn(ObjectsPeer::IDX1);
            $criteria->addSelectColumn(ObjectsPeer::IDX2);
            $criteria->addSelectColumn(ObjectsPeer::IDX3);
            $criteria->addSelectColumn(ObjectsPeer::IDX4);
            $criteria->addSelectColumn(ObjectsPeer::IDX5);
            $criteria->addSelectColumn(ObjectsPeer::KEY1);
            $criteria->addSelectColumn(ObjectsPeer::KEY2);
            $criteria->addSelectColumn(ObjectsPeer::KEY3);
            $criteria->addSelectColumn(ObjectsPeer::KEY4);
            $criteria->addSelectColumn(ObjectsPeer::KEY5);
            $criteria->addSelectColumn(ObjectsPeer::KEY6);
            $criteria->addSelectColumn(ObjectsPeer::KEY7);
            $criteria->addSelectColumn(ObjectsPeer::KEY8);
            $criteria->addSelectColumn(ObjectsPeer::KEY9);
            $criteria->addSelectColumn(ObjectsPeer::KEY10);
            $criteria->addSelectColumn(ObjectsPeer::DATA1);
            $criteria->addSelectColumn(ObjectsPeer::DATA2);
            $criteria->addSelectColumn(ObjectsPeer::DATA3);
            $criteria->addSelectColumn(ObjectsPeer::DATA4);
            $criteria->addSelectColumn(ObjectsPeer::DATA5);
            $criteria->addSelectColumn(ObjectsPeer::DATA6);
            $criteria->addSelectColumn(ObjectsPeer::DATA7);
            $criteria->addSelectColumn(ObjectsPeer::DATA8);
            $criteria->addSelectColumn(ObjectsPeer::DATA9);
            $criteria->addSelectColumn(ObjectsPeer::DATA10);
            $criteria->addSelectColumn(ObjectsPeer::RAWDATA);
            $criteria->addSelectColumn(ObjectsPeer::COUNTER);
            $criteria->addSelectColumn(ObjectsPeer::EXPIRY);
            $criteria->addSelectColumn(ObjectsPeer::LASTUPDATE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.userid');
            $criteria->addSelectColumn($alias . '.idx1');
            $criteria->addSelectColumn($alias . '.idx2');
            $criteria->addSelectColumn($alias . '.idx3');
            $criteria->addSelectColumn($alias . '.idx4');
            $criteria->addSelectColumn($alias . '.idx5');
            $criteria->addSelectColumn($alias . '.key1');
            $criteria->addSelectColumn($alias . '.key2');
            $criteria->addSelectColumn($alias . '.key3');
            $criteria->addSelectColumn($alias . '.key4');
            $criteria->addSelectColumn($alias . '.key5');
            $criteria->addSelectColumn($alias . '.key6');
            $criteria->addSelectColumn($alias . '.key7');
            $criteria->addSelectColumn($alias . '.key8');
            $criteria->addSelectColumn($alias . '.key9');
            $criteria->addSelectColumn($alias . '.key10');
            $criteria->addSelectColumn($alias . '.data1');
            $criteria->addSelectColumn($alias . '.data2');
            $criteria->addSelectColumn($alias . '.data3');
            $criteria->addSelectColumn($alias . '.data4');
            $criteria->addSelectColumn($alias . '.data5');
            $criteria->addSelectColumn($alias . '.data6');
            $criteria->addSelectColumn($alias . '.data7');
            $criteria->addSelectColumn($alias . '.data8');
            $criteria->addSelectColumn($alias . '.data9');
            $criteria->addSelectColumn($alias . '.data10');
            $criteria->addSelectColumn($alias . '.rawdata');
            $criteria->addSelectColumn($alias . '.counter');
            $criteria->addSelectColumn($alias . '.expiry');
            $criteria->addSelectColumn($alias . '.lastupdate');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ObjectsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ObjectsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ObjectsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ObjectsPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return ObjectsPeer::populateObjects(ObjectsPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ObjectsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ObjectsPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Objects $obj A Objects object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            ObjectsPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Objects object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Objects) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Objects object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ObjectsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Objects Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ObjectsPeer::$instances[$key])) {
                return ObjectsPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (ObjectsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ObjectsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to objects
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = ObjectsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ObjectsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ObjectsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ObjectsPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Objects object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ObjectsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ObjectsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ObjectsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ObjectsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ObjectsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(ObjectsPeer::DATABASE_NAME)->getTable(ObjectsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseObjectsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseObjectsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ObjectsTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return ObjectsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Objects or Criteria object.
     *
     * @param      mixed $values Criteria or Objects object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Objects object
        }

        if ($criteria->containsKey(ObjectsPeer::ID) && $criteria->keyContainsValue(ObjectsPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ObjectsPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ObjectsPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Objects or Criteria object.
     *
     * @param      mixed $values Criteria or Objects object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ObjectsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ObjectsPeer::ID);
            $value = $criteria->remove(ObjectsPeer::ID);
            if ($value) {
                $selectCriteria->add(ObjectsPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ObjectsPeer::TABLE_NAME);
            }

        } else { // $values is Objects object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ObjectsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the objects table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ObjectsPeer::TABLE_NAME, $con, ObjectsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ObjectsPeer::clearInstancePool();
            ObjectsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Objects or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Objects object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ObjectsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Objects) { // it's a model object
            // invalidate the cache for this single object
            ObjectsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ObjectsPeer::DATABASE_NAME);
            $criteria->add(ObjectsPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ObjectsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ObjectsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ObjectsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Objects object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Objects $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ObjectsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ObjectsPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ObjectsPeer::DATABASE_NAME, ObjectsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Objects
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ObjectsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ObjectsPeer::DATABASE_NAME);
        $criteria->add(ObjectsPeer::ID, $pk);

        $v = ObjectsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Objects[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ObjectsPeer::DATABASE_NAME);
            $criteria->add(ObjectsPeer::ID, $pks, Criteria::IN);
            $objs = ObjectsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseObjectsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseObjectsPeer::buildTableMap();

