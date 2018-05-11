<?php


/**
 * Base class that represents a row from the 'ci_sessions' table.
 *
 *
 *
 * @package    propel.generator.appseed_db.om
 */
abstract class BaseCiSessions extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CiSessionsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CiSessionsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the session_id field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $session_id;

    /**
     * The value for the ip_address field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ip_address;

    /**
     * The value for the user_agent field.
     * @var        string
     */
    protected $user_agent;

    /**
     * The value for the last_activity field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $last_activity;

    /**
     * The value for the user_data field.
     * @var        string
     */
    protected $user_data;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->session_id = '0';
        $this->ip_address = '0';
        $this->last_activity = 0;
    }

    /**
     * Initializes internal state of BaseCiSessions object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [session_id] column value.
     *
     * @return string
     */
    public function getSessionId()
    {

        return $this->session_id;
    }

    /**
     * Get the [ip_address] column value.
     *
     * @return string
     */
    public function getIpAddress()
    {

        return $this->ip_address;
    }

    /**
     * Get the [user_agent] column value.
     *
     * @return string
     */
    public function getUserAgent()
    {

        return $this->user_agent;
    }

    /**
     * Get the [last_activity] column value.
     *
     * @return int
     */
    public function getLastActivity()
    {

        return $this->last_activity;
    }

    /**
     * Get the [user_data] column value.
     *
     * @return string
     */
    public function getUserData()
    {

        return $this->user_data;
    }

    /**
     * Set the value of [session_id] column.
     *
     * @param  string $v new value
     * @return CiSessions The current object (for fluent API support)
     */
    public function setSessionId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->session_id !== $v) {
            $this->session_id = $v;
            $this->modifiedColumns[] = CiSessionsPeer::SESSION_ID;
        }


        return $this;
    } // setSessionId()

    /**
     * Set the value of [ip_address] column.
     *
     * @param  string $v new value
     * @return CiSessions The current object (for fluent API support)
     */
    public function setIpAddress($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ip_address !== $v) {
            $this->ip_address = $v;
            $this->modifiedColumns[] = CiSessionsPeer::IP_ADDRESS;
        }


        return $this;
    } // setIpAddress()

    /**
     * Set the value of [user_agent] column.
     *
     * @param  string $v new value
     * @return CiSessions The current object (for fluent API support)
     */
    public function setUserAgent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_agent !== $v) {
            $this->user_agent = $v;
            $this->modifiedColumns[] = CiSessionsPeer::USER_AGENT;
        }


        return $this;
    } // setUserAgent()

    /**
     * Set the value of [last_activity] column.
     *
     * @param  int $v new value
     * @return CiSessions The current object (for fluent API support)
     */
    public function setLastActivity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->last_activity !== $v) {
            $this->last_activity = $v;
            $this->modifiedColumns[] = CiSessionsPeer::LAST_ACTIVITY;
        }


        return $this;
    } // setLastActivity()

    /**
     * Set the value of [user_data] column.
     *
     * @param  string $v new value
     * @return CiSessions The current object (for fluent API support)
     */
    public function setUserData($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_data !== $v) {
            $this->user_data = $v;
            $this->modifiedColumns[] = CiSessionsPeer::USER_DATA;
        }


        return $this;
    } // setUserData()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->session_id !== '0') {
                return false;
            }

            if ($this->ip_address !== '0') {
                return false;
            }

            if ($this->last_activity !== 0) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->session_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->ip_address = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->user_agent = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->last_activity = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->user_data = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = CiSessionsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CiSessions object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CiSessionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CiSessionsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CiSessionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CiSessionsQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CiSessionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                CiSessionsPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CiSessionsPeer::SESSION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`session_id`';
        }
        if ($this->isColumnModified(CiSessionsPeer::IP_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`ip_address`';
        }
        if ($this->isColumnModified(CiSessionsPeer::USER_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`user_agent`';
        }
        if ($this->isColumnModified(CiSessionsPeer::LAST_ACTIVITY)) {
            $modifiedColumns[':p' . $index++]  = '`last_activity`';
        }
        if ($this->isColumnModified(CiSessionsPeer::USER_DATA)) {
            $modifiedColumns[':p' . $index++]  = '`user_data`';
        }

        $sql = sprintf(
            'INSERT INTO `ci_sessions` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`session_id`':
                        $stmt->bindValue($identifier, $this->session_id, PDO::PARAM_STR);
                        break;
                    case '`ip_address`':
                        $stmt->bindValue($identifier, $this->ip_address, PDO::PARAM_STR);
                        break;
                    case '`user_agent`':
                        $stmt->bindValue($identifier, $this->user_agent, PDO::PARAM_STR);
                        break;
                    case '`last_activity`':
                        $stmt->bindValue($identifier, $this->last_activity, PDO::PARAM_INT);
                        break;
                    case '`user_data`':
                        $stmt->bindValue($identifier, $this->user_data, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = CiSessionsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CiSessionsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getSessionId();
                break;
            case 1:
                return $this->getIpAddress();
                break;
            case 2:
                return $this->getUserAgent();
                break;
            case 3:
                return $this->getLastActivity();
                break;
            case 4:
                return $this->getUserData();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['CiSessions'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CiSessions'][$this->getPrimaryKey()] = true;
        $keys = CiSessionsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSessionId(),
            $keys[1] => $this->getIpAddress(),
            $keys[2] => $this->getUserAgent(),
            $keys[3] => $this->getLastActivity(),
            $keys[4] => $this->getUserData(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CiSessionsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setSessionId($value);
                break;
            case 1:
                $this->setIpAddress($value);
                break;
            case 2:
                $this->setUserAgent($value);
                break;
            case 3:
                $this->setLastActivity($value);
                break;
            case 4:
                $this->setUserData($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = CiSessionsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSessionId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIpAddress($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUserAgent($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLastActivity($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUserData($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CiSessionsPeer::DATABASE_NAME);

        if ($this->isColumnModified(CiSessionsPeer::SESSION_ID)) $criteria->add(CiSessionsPeer::SESSION_ID, $this->session_id);
        if ($this->isColumnModified(CiSessionsPeer::IP_ADDRESS)) $criteria->add(CiSessionsPeer::IP_ADDRESS, $this->ip_address);
        if ($this->isColumnModified(CiSessionsPeer::USER_AGENT)) $criteria->add(CiSessionsPeer::USER_AGENT, $this->user_agent);
        if ($this->isColumnModified(CiSessionsPeer::LAST_ACTIVITY)) $criteria->add(CiSessionsPeer::LAST_ACTIVITY, $this->last_activity);
        if ($this->isColumnModified(CiSessionsPeer::USER_DATA)) $criteria->add(CiSessionsPeer::USER_DATA, $this->user_data);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(CiSessionsPeer::DATABASE_NAME);
        $criteria->add(CiSessionsPeer::SESSION_ID, $this->session_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getSessionId();
    }

    /**
     * Generic method to set the primary key (session_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSessionId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSessionId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CiSessions (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIpAddress($this->getIpAddress());
        $copyObj->setUserAgent($this->getUserAgent());
        $copyObj->setLastActivity($this->getLastActivity());
        $copyObj->setUserData($this->getUserData());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSessionId('0'); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return CiSessions Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return CiSessionsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CiSessionsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->session_id = null;
        $this->ip_address = null;
        $this->user_agent = null;
        $this->last_activity = null;
        $this->user_data = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CiSessionsPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
