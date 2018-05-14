<?php


/**
 * Base class that represents a row from the 'objects' table.
 *
 *
 *
 * @package    propel.generator.appseed_db.om
 */
abstract class BaseObjects extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ObjectsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ObjectsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the userid field.
     * @var        int
     */
    protected $userid;

    /**
     * The value for the idx1 field.
     * @var        int
     */
    protected $idx1;

    /**
     * The value for the idx2 field.
     * @var        int
     */
    protected $idx2;

    /**
     * The value for the idx3 field.
     * @var        int
     */
    protected $idx3;

    /**
     * The value for the idx4 field.
     * @var        int
     */
    protected $idx4;

    /**
     * The value for the idx5 field.
     * @var        int
     */
    protected $idx5;

    /**
     * The value for the key1 field.
     * @var        string
     */
    protected $key1;

    /**
     * The value for the key2 field.
     * @var        string
     */
    protected $key2;

    /**
     * The value for the key3 field.
     * @var        string
     */
    protected $key3;

    /**
     * The value for the key4 field.
     * @var        string
     */
    protected $key4;

    /**
     * The value for the key5 field.
     * @var        string
     */
    protected $key5;

    /**
     * The value for the key6 field.
     * @var        string
     */
    protected $key6;

    /**
     * The value for the key7 field.
     * @var        string
     */
    protected $key7;

    /**
     * The value for the key8 field.
     * @var        string
     */
    protected $key8;

    /**
     * The value for the key9 field.
     * @var        string
     */
    protected $key9;

    /**
     * The value for the key10 field.
     * @var        string
     */
    protected $key10;

    /**
     * The value for the data1 field.
     * @var        string
     */
    protected $data1;

    /**
     * The value for the data2 field.
     * @var        string
     */
    protected $data2;

    /**
     * The value for the data3 field.
     * @var        string
     */
    protected $data3;

    /**
     * The value for the data4 field.
     * @var        string
     */
    protected $data4;

    /**
     * The value for the data5 field.
     * @var        string
     */
    protected $data5;

    /**
     * The value for the data6 field.
     * @var        string
     */
    protected $data6;

    /**
     * The value for the data7 field.
     * @var        string
     */
    protected $data7;

    /**
     * The value for the data8 field.
     * @var        string
     */
    protected $data8;

    /**
     * The value for the data9 field.
     * @var        string
     */
    protected $data9;

    /**
     * The value for the data10 field.
     * @var        string
     */
    protected $data10;

    /**
     * The value for the rawdata field.
     * @var        string
     */
    protected $rawdata;

    /**
     * The value for the counter field.
     * @var        int
     */
    protected $counter;

    /**
     * The value for the expiry field.
     * @var        int
     */
    protected $expiry;

    /**
     * The value for the lastupdate field.
     * @var        int
     */
    protected $lastupdate;

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
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [userid] column value.
     *
     * @return int
     */
    public function getUserid()
    {

        return $this->userid;
    }

    /**
     * Get the [idx1] column value.
     *
     * @return int
     */
    public function getIdx1()
    {

        return $this->idx1;
    }

    /**
     * Get the [idx2] column value.
     *
     * @return int
     */
    public function getIdx2()
    {

        return $this->idx2;
    }

    /**
     * Get the [idx3] column value.
     *
     * @return int
     */
    public function getIdx3()
    {

        return $this->idx3;
    }

    /**
     * Get the [idx4] column value.
     *
     * @return int
     */
    public function getIdx4()
    {

        return $this->idx4;
    }

    /**
     * Get the [idx5] column value.
     *
     * @return int
     */
    public function getIdx5()
    {

        return $this->idx5;
    }

    /**
     * Get the [key1] column value.
     *
     * @return string
     */
    public function getKey1()
    {

        return $this->key1;
    }

    /**
     * Get the [key2] column value.
     *
     * @return string
     */
    public function getKey2()
    {

        return $this->key2;
    }

    /**
     * Get the [key3] column value.
     *
     * @return string
     */
    public function getKey3()
    {

        return $this->key3;
    }

    /**
     * Get the [key4] column value.
     *
     * @return string
     */
    public function getKey4()
    {

        return $this->key4;
    }

    /**
     * Get the [key5] column value.
     *
     * @return string
     */
    public function getKey5()
    {

        return $this->key5;
    }

    /**
     * Get the [key6] column value.
     *
     * @return string
     */
    public function getKey6()
    {

        return $this->key6;
    }

    /**
     * Get the [key7] column value.
     *
     * @return string
     */
    public function getKey7()
    {

        return $this->key7;
    }

    /**
     * Get the [key8] column value.
     *
     * @return string
     */
    public function getKey8()
    {

        return $this->key8;
    }

    /**
     * Get the [key9] column value.
     *
     * @return string
     */
    public function getKey9()
    {

        return $this->key9;
    }

    /**
     * Get the [key10] column value.
     *
     * @return string
     */
    public function getKey10()
    {

        return $this->key10;
    }

    /**
     * Get the [data1] column value.
     *
     * @return string
     */
    public function getData1()
    {

        return $this->data1;
    }

    /**
     * Get the [data2] column value.
     *
     * @return string
     */
    public function getData2()
    {

        return $this->data2;
    }

    /**
     * Get the [data3] column value.
     *
     * @return string
     */
    public function getData3()
    {

        return $this->data3;
    }

    /**
     * Get the [data4] column value.
     *
     * @return string
     */
    public function getData4()
    {

        return $this->data4;
    }

    /**
     * Get the [data5] column value.
     *
     * @return string
     */
    public function getData5()
    {

        return $this->data5;
    }

    /**
     * Get the [data6] column value.
     *
     * @return string
     */
    public function getData6()
    {

        return $this->data6;
    }

    /**
     * Get the [data7] column value.
     *
     * @return string
     */
    public function getData7()
    {

        return $this->data7;
    }

    /**
     * Get the [data8] column value.
     *
     * @return string
     */
    public function getData8()
    {

        return $this->data8;
    }

    /**
     * Get the [data9] column value.
     *
     * @return string
     */
    public function getData9()
    {

        return $this->data9;
    }

    /**
     * Get the [data10] column value.
     *
     * @return string
     */
    public function getData10()
    {

        return $this->data10;
    }

    /**
     * Get the [rawdata] column value.
     *
     * @return string
     */
    public function getRawdata()
    {

        return $this->rawdata;
    }

    /**
     * Get the [counter] column value.
     *
     * @return int
     */
    public function getCounter()
    {

        return $this->counter;
    }

    /**
     * Get the [expiry] column value.
     *
     * @return int
     */
    public function getExpiry()
    {

        return $this->expiry;
    }

    /**
     * Get the [lastupdate] column value.
     *
     * @return int
     */
    public function getLastupdate()
    {

        return $this->lastupdate;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = ObjectsPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [userid] column.
     *
     * @param  int $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setUserid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->userid !== $v) {
            $this->userid = $v;
            $this->modifiedColumns[] = ObjectsPeer::USERID;
        }


        return $this;
    } // setUserid()

    /**
     * Set the value of [idx1] column.
     *
     * @param  int $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setIdx1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idx1 !== $v) {
            $this->idx1 = $v;
            $this->modifiedColumns[] = ObjectsPeer::IDX1;
        }


        return $this;
    } // setIdx1()

    /**
     * Set the value of [idx2] column.
     *
     * @param  int $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setIdx2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idx2 !== $v) {
            $this->idx2 = $v;
            $this->modifiedColumns[] = ObjectsPeer::IDX2;
        }


        return $this;
    } // setIdx2()

    /**
     * Set the value of [idx3] column.
     *
     * @param  int $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setIdx3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idx3 !== $v) {
            $this->idx3 = $v;
            $this->modifiedColumns[] = ObjectsPeer::IDX3;
        }


        return $this;
    } // setIdx3()

    /**
     * Set the value of [idx4] column.
     *
     * @param  int $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setIdx4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idx4 !== $v) {
            $this->idx4 = $v;
            $this->modifiedColumns[] = ObjectsPeer::IDX4;
        }


        return $this;
    } // setIdx4()

    /**
     * Set the value of [idx5] column.
     *
     * @param  int $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setIdx5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idx5 !== $v) {
            $this->idx5 = $v;
            $this->modifiedColumns[] = ObjectsPeer::IDX5;
        }


        return $this;
    } // setIdx5()

    /**
     * Set the value of [key1] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setKey1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->key1 !== $v) {
            $this->key1 = $v;
            $this->modifiedColumns[] = ObjectsPeer::KEY1;
        }


        return $this;
    } // setKey1()

    /**
     * Set the value of [key2] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setKey2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->key2 !== $v) {
            $this->key2 = $v;
            $this->modifiedColumns[] = ObjectsPeer::KEY2;
        }


        return $this;
    } // setKey2()

    /**
     * Set the value of [key3] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setKey3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->key3 !== $v) {
            $this->key3 = $v;
            $this->modifiedColumns[] = ObjectsPeer::KEY3;
        }


        return $this;
    } // setKey3()

    /**
     * Set the value of [key4] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setKey4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->key4 !== $v) {
            $this->key4 = $v;
            $this->modifiedColumns[] = ObjectsPeer::KEY4;
        }


        return $this;
    } // setKey4()

    /**
     * Set the value of [key5] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setKey5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->key5 !== $v) {
            $this->key5 = $v;
            $this->modifiedColumns[] = ObjectsPeer::KEY5;
        }


        return $this;
    } // setKey5()

    /**
     * Set the value of [key6] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setKey6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->key6 !== $v) {
            $this->key6 = $v;
            $this->modifiedColumns[] = ObjectsPeer::KEY6;
        }


        return $this;
    } // setKey6()

    /**
     * Set the value of [key7] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setKey7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->key7 !== $v) {
            $this->key7 = $v;
            $this->modifiedColumns[] = ObjectsPeer::KEY7;
        }


        return $this;
    } // setKey7()

    /**
     * Set the value of [key8] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setKey8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->key8 !== $v) {
            $this->key8 = $v;
            $this->modifiedColumns[] = ObjectsPeer::KEY8;
        }


        return $this;
    } // setKey8()

    /**
     * Set the value of [key9] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setKey9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->key9 !== $v) {
            $this->key9 = $v;
            $this->modifiedColumns[] = ObjectsPeer::KEY9;
        }


        return $this;
    } // setKey9()

    /**
     * Set the value of [key10] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setKey10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->key10 !== $v) {
            $this->key10 = $v;
            $this->modifiedColumns[] = ObjectsPeer::KEY10;
        }


        return $this;
    } // setKey10()

    /**
     * Set the value of [data1] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setData1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data1 !== $v) {
            $this->data1 = $v;
            $this->modifiedColumns[] = ObjectsPeer::DATA1;
        }


        return $this;
    } // setData1()

    /**
     * Set the value of [data2] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setData2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data2 !== $v) {
            $this->data2 = $v;
            $this->modifiedColumns[] = ObjectsPeer::DATA2;
        }


        return $this;
    } // setData2()

    /**
     * Set the value of [data3] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setData3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data3 !== $v) {
            $this->data3 = $v;
            $this->modifiedColumns[] = ObjectsPeer::DATA3;
        }


        return $this;
    } // setData3()

    /**
     * Set the value of [data4] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setData4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data4 !== $v) {
            $this->data4 = $v;
            $this->modifiedColumns[] = ObjectsPeer::DATA4;
        }


        return $this;
    } // setData4()

    /**
     * Set the value of [data5] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setData5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data5 !== $v) {
            $this->data5 = $v;
            $this->modifiedColumns[] = ObjectsPeer::DATA5;
        }


        return $this;
    } // setData5()

    /**
     * Set the value of [data6] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setData6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data6 !== $v) {
            $this->data6 = $v;
            $this->modifiedColumns[] = ObjectsPeer::DATA6;
        }


        return $this;
    } // setData6()

    /**
     * Set the value of [data7] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setData7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data7 !== $v) {
            $this->data7 = $v;
            $this->modifiedColumns[] = ObjectsPeer::DATA7;
        }


        return $this;
    } // setData7()

    /**
     * Set the value of [data8] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setData8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data8 !== $v) {
            $this->data8 = $v;
            $this->modifiedColumns[] = ObjectsPeer::DATA8;
        }


        return $this;
    } // setData8()

    /**
     * Set the value of [data9] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setData9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data9 !== $v) {
            $this->data9 = $v;
            $this->modifiedColumns[] = ObjectsPeer::DATA9;
        }


        return $this;
    } // setData9()

    /**
     * Set the value of [data10] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setData10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data10 !== $v) {
            $this->data10 = $v;
            $this->modifiedColumns[] = ObjectsPeer::DATA10;
        }


        return $this;
    } // setData10()

    /**
     * Set the value of [rawdata] column.
     *
     * @param  string $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setRawdata($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rawdata !== $v) {
            $this->rawdata = $v;
            $this->modifiedColumns[] = ObjectsPeer::RAWDATA;
        }


        return $this;
    } // setRawdata()

    /**
     * Set the value of [counter] column.
     *
     * @param  int $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setCounter($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->counter !== $v) {
            $this->counter = $v;
            $this->modifiedColumns[] = ObjectsPeer::COUNTER;
        }


        return $this;
    } // setCounter()

    /**
     * Set the value of [expiry] column.
     *
     * @param  int $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setExpiry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expiry !== $v) {
            $this->expiry = $v;
            $this->modifiedColumns[] = ObjectsPeer::EXPIRY;
        }


        return $this;
    } // setExpiry()

    /**
     * Set the value of [lastupdate] column.
     *
     * @param  int $v new value
     * @return Objects The current object (for fluent API support)
     */
    public function setLastupdate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lastupdate !== $v) {
            $this->lastupdate = $v;
            $this->modifiedColumns[] = ObjectsPeer::LASTUPDATE;
        }


        return $this;
    } // setLastupdate()

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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->userid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idx1 = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idx2 = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idx3 = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idx4 = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->idx5 = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->key1 = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->key2 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->key3 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->key4 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->key5 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->key6 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->key7 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->key8 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->key9 = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->key10 = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->data1 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->data2 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->data3 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->data4 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->data5 = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->data6 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->data7 = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->data8 = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->data9 = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->data10 = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->rawdata = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->counter = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->expiry = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->lastupdate = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 31; // 31 = ObjectsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Objects object", $e);
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
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ObjectsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ObjectsQuery::create()
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
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ObjectsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ObjectsPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ObjectsPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ObjectsPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(ObjectsPeer::USERID)) {
            $modifiedColumns[':p' . $index++]  = '`userid`';
        }
        if ($this->isColumnModified(ObjectsPeer::IDX1)) {
            $modifiedColumns[':p' . $index++]  = '`idx1`';
        }
        if ($this->isColumnModified(ObjectsPeer::IDX2)) {
            $modifiedColumns[':p' . $index++]  = '`idx2`';
        }
        if ($this->isColumnModified(ObjectsPeer::IDX3)) {
            $modifiedColumns[':p' . $index++]  = '`idx3`';
        }
        if ($this->isColumnModified(ObjectsPeer::IDX4)) {
            $modifiedColumns[':p' . $index++]  = '`idx4`';
        }
        if ($this->isColumnModified(ObjectsPeer::IDX5)) {
            $modifiedColumns[':p' . $index++]  = '`idx5`';
        }
        if ($this->isColumnModified(ObjectsPeer::KEY1)) {
            $modifiedColumns[':p' . $index++]  = '`key1`';
        }
        if ($this->isColumnModified(ObjectsPeer::KEY2)) {
            $modifiedColumns[':p' . $index++]  = '`key2`';
        }
        if ($this->isColumnModified(ObjectsPeer::KEY3)) {
            $modifiedColumns[':p' . $index++]  = '`key3`';
        }
        if ($this->isColumnModified(ObjectsPeer::KEY4)) {
            $modifiedColumns[':p' . $index++]  = '`key4`';
        }
        if ($this->isColumnModified(ObjectsPeer::KEY5)) {
            $modifiedColumns[':p' . $index++]  = '`key5`';
        }
        if ($this->isColumnModified(ObjectsPeer::KEY6)) {
            $modifiedColumns[':p' . $index++]  = '`key6`';
        }
        if ($this->isColumnModified(ObjectsPeer::KEY7)) {
            $modifiedColumns[':p' . $index++]  = '`key7`';
        }
        if ($this->isColumnModified(ObjectsPeer::KEY8)) {
            $modifiedColumns[':p' . $index++]  = '`key8`';
        }
        if ($this->isColumnModified(ObjectsPeer::KEY9)) {
            $modifiedColumns[':p' . $index++]  = '`key9`';
        }
        if ($this->isColumnModified(ObjectsPeer::KEY10)) {
            $modifiedColumns[':p' . $index++]  = '`key10`';
        }
        if ($this->isColumnModified(ObjectsPeer::DATA1)) {
            $modifiedColumns[':p' . $index++]  = '`data1`';
        }
        if ($this->isColumnModified(ObjectsPeer::DATA2)) {
            $modifiedColumns[':p' . $index++]  = '`data2`';
        }
        if ($this->isColumnModified(ObjectsPeer::DATA3)) {
            $modifiedColumns[':p' . $index++]  = '`data3`';
        }
        if ($this->isColumnModified(ObjectsPeer::DATA4)) {
            $modifiedColumns[':p' . $index++]  = '`data4`';
        }
        if ($this->isColumnModified(ObjectsPeer::DATA5)) {
            $modifiedColumns[':p' . $index++]  = '`data5`';
        }
        if ($this->isColumnModified(ObjectsPeer::DATA6)) {
            $modifiedColumns[':p' . $index++]  = '`data6`';
        }
        if ($this->isColumnModified(ObjectsPeer::DATA7)) {
            $modifiedColumns[':p' . $index++]  = '`data7`';
        }
        if ($this->isColumnModified(ObjectsPeer::DATA8)) {
            $modifiedColumns[':p' . $index++]  = '`data8`';
        }
        if ($this->isColumnModified(ObjectsPeer::DATA9)) {
            $modifiedColumns[':p' . $index++]  = '`data9`';
        }
        if ($this->isColumnModified(ObjectsPeer::DATA10)) {
            $modifiedColumns[':p' . $index++]  = '`data10`';
        }
        if ($this->isColumnModified(ObjectsPeer::RAWDATA)) {
            $modifiedColumns[':p' . $index++]  = '`rawdata`';
        }
        if ($this->isColumnModified(ObjectsPeer::COUNTER)) {
            $modifiedColumns[':p' . $index++]  = '`counter`';
        }
        if ($this->isColumnModified(ObjectsPeer::EXPIRY)) {
            $modifiedColumns[':p' . $index++]  = '`expiry`';
        }
        if ($this->isColumnModified(ObjectsPeer::LASTUPDATE)) {
            $modifiedColumns[':p' . $index++]  = '`lastupdate`';
        }

        $sql = sprintf(
            'INSERT INTO `objects` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`userid`':
                        $stmt->bindValue($identifier, $this->userid, PDO::PARAM_INT);
                        break;
                    case '`idx1`':
                        $stmt->bindValue($identifier, $this->idx1, PDO::PARAM_INT);
                        break;
                    case '`idx2`':
                        $stmt->bindValue($identifier, $this->idx2, PDO::PARAM_INT);
                        break;
                    case '`idx3`':
                        $stmt->bindValue($identifier, $this->idx3, PDO::PARAM_INT);
                        break;
                    case '`idx4`':
                        $stmt->bindValue($identifier, $this->idx4, PDO::PARAM_INT);
                        break;
                    case '`idx5`':
                        $stmt->bindValue($identifier, $this->idx5, PDO::PARAM_INT);
                        break;
                    case '`key1`':
                        $stmt->bindValue($identifier, $this->key1, PDO::PARAM_STR);
                        break;
                    case '`key2`':
                        $stmt->bindValue($identifier, $this->key2, PDO::PARAM_STR);
                        break;
                    case '`key3`':
                        $stmt->bindValue($identifier, $this->key3, PDO::PARAM_STR);
                        break;
                    case '`key4`':
                        $stmt->bindValue($identifier, $this->key4, PDO::PARAM_STR);
                        break;
                    case '`key5`':
                        $stmt->bindValue($identifier, $this->key5, PDO::PARAM_STR);
                        break;
                    case '`key6`':
                        $stmt->bindValue($identifier, $this->key6, PDO::PARAM_STR);
                        break;
                    case '`key7`':
                        $stmt->bindValue($identifier, $this->key7, PDO::PARAM_STR);
                        break;
                    case '`key8`':
                        $stmt->bindValue($identifier, $this->key8, PDO::PARAM_STR);
                        break;
                    case '`key9`':
                        $stmt->bindValue($identifier, $this->key9, PDO::PARAM_STR);
                        break;
                    case '`key10`':
                        $stmt->bindValue($identifier, $this->key10, PDO::PARAM_STR);
                        break;
                    case '`data1`':
                        $stmt->bindValue($identifier, $this->data1, PDO::PARAM_STR);
                        break;
                    case '`data2`':
                        $stmt->bindValue($identifier, $this->data2, PDO::PARAM_STR);
                        break;
                    case '`data3`':
                        $stmt->bindValue($identifier, $this->data3, PDO::PARAM_STR);
                        break;
                    case '`data4`':
                        $stmt->bindValue($identifier, $this->data4, PDO::PARAM_STR);
                        break;
                    case '`data5`':
                        $stmt->bindValue($identifier, $this->data5, PDO::PARAM_STR);
                        break;
                    case '`data6`':
                        $stmt->bindValue($identifier, $this->data6, PDO::PARAM_STR);
                        break;
                    case '`data7`':
                        $stmt->bindValue($identifier, $this->data7, PDO::PARAM_STR);
                        break;
                    case '`data8`':
                        $stmt->bindValue($identifier, $this->data8, PDO::PARAM_STR);
                        break;
                    case '`data9`':
                        $stmt->bindValue($identifier, $this->data9, PDO::PARAM_STR);
                        break;
                    case '`data10`':
                        $stmt->bindValue($identifier, $this->data10, PDO::PARAM_STR);
                        break;
                    case '`rawdata`':
                        $stmt->bindValue($identifier, $this->rawdata, PDO::PARAM_STR);
                        break;
                    case '`counter`':
                        $stmt->bindValue($identifier, $this->counter, PDO::PARAM_INT);
                        break;
                    case '`expiry`':
                        $stmt->bindValue($identifier, $this->expiry, PDO::PARAM_INT);
                        break;
                    case '`lastupdate`':
                        $stmt->bindValue($identifier, $this->lastupdate, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

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


            if (($retval = ObjectsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ObjectsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getId();
                break;
            case 1:
                return $this->getUserid();
                break;
            case 2:
                return $this->getIdx1();
                break;
            case 3:
                return $this->getIdx2();
                break;
            case 4:
                return $this->getIdx3();
                break;
            case 5:
                return $this->getIdx4();
                break;
            case 6:
                return $this->getIdx5();
                break;
            case 7:
                return $this->getKey1();
                break;
            case 8:
                return $this->getKey2();
                break;
            case 9:
                return $this->getKey3();
                break;
            case 10:
                return $this->getKey4();
                break;
            case 11:
                return $this->getKey5();
                break;
            case 12:
                return $this->getKey6();
                break;
            case 13:
                return $this->getKey7();
                break;
            case 14:
                return $this->getKey8();
                break;
            case 15:
                return $this->getKey9();
                break;
            case 16:
                return $this->getKey10();
                break;
            case 17:
                return $this->getData1();
                break;
            case 18:
                return $this->getData2();
                break;
            case 19:
                return $this->getData3();
                break;
            case 20:
                return $this->getData4();
                break;
            case 21:
                return $this->getData5();
                break;
            case 22:
                return $this->getData6();
                break;
            case 23:
                return $this->getData7();
                break;
            case 24:
                return $this->getData8();
                break;
            case 25:
                return $this->getData9();
                break;
            case 26:
                return $this->getData10();
                break;
            case 27:
                return $this->getRawdata();
                break;
            case 28:
                return $this->getCounter();
                break;
            case 29:
                return $this->getExpiry();
                break;
            case 30:
                return $this->getLastupdate();
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
        if (isset($alreadyDumpedObjects['Objects'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Objects'][$this->getPrimaryKey()] = true;
        $keys = ObjectsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUserid(),
            $keys[2] => $this->getIdx1(),
            $keys[3] => $this->getIdx2(),
            $keys[4] => $this->getIdx3(),
            $keys[5] => $this->getIdx4(),
            $keys[6] => $this->getIdx5(),
            $keys[7] => $this->getKey1(),
            $keys[8] => $this->getKey2(),
            $keys[9] => $this->getKey3(),
            $keys[10] => $this->getKey4(),
            $keys[11] => $this->getKey5(),
            $keys[12] => $this->getKey6(),
            $keys[13] => $this->getKey7(),
            $keys[14] => $this->getKey8(),
            $keys[15] => $this->getKey9(),
            $keys[16] => $this->getKey10(),
            $keys[17] => $this->getData1(),
            $keys[18] => $this->getData2(),
            $keys[19] => $this->getData3(),
            $keys[20] => $this->getData4(),
            $keys[21] => $this->getData5(),
            $keys[22] => $this->getData6(),
            $keys[23] => $this->getData7(),
            $keys[24] => $this->getData8(),
            $keys[25] => $this->getData9(),
            $keys[26] => $this->getData10(),
            $keys[27] => $this->getRawdata(),
            $keys[28] => $this->getCounter(),
            $keys[29] => $this->getExpiry(),
            $keys[30] => $this->getLastupdate(),
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
        $pos = ObjectsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setId($value);
                break;
            case 1:
                $this->setUserid($value);
                break;
            case 2:
                $this->setIdx1($value);
                break;
            case 3:
                $this->setIdx2($value);
                break;
            case 4:
                $this->setIdx3($value);
                break;
            case 5:
                $this->setIdx4($value);
                break;
            case 6:
                $this->setIdx5($value);
                break;
            case 7:
                $this->setKey1($value);
                break;
            case 8:
                $this->setKey2($value);
                break;
            case 9:
                $this->setKey3($value);
                break;
            case 10:
                $this->setKey4($value);
                break;
            case 11:
                $this->setKey5($value);
                break;
            case 12:
                $this->setKey6($value);
                break;
            case 13:
                $this->setKey7($value);
                break;
            case 14:
                $this->setKey8($value);
                break;
            case 15:
                $this->setKey9($value);
                break;
            case 16:
                $this->setKey10($value);
                break;
            case 17:
                $this->setData1($value);
                break;
            case 18:
                $this->setData2($value);
                break;
            case 19:
                $this->setData3($value);
                break;
            case 20:
                $this->setData4($value);
                break;
            case 21:
                $this->setData5($value);
                break;
            case 22:
                $this->setData6($value);
                break;
            case 23:
                $this->setData7($value);
                break;
            case 24:
                $this->setData8($value);
                break;
            case 25:
                $this->setData9($value);
                break;
            case 26:
                $this->setData10($value);
                break;
            case 27:
                $this->setRawdata($value);
                break;
            case 28:
                $this->setCounter($value);
                break;
            case 29:
                $this->setExpiry($value);
                break;
            case 30:
                $this->setLastupdate($value);
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
        $keys = ObjectsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUserid($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdx1($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdx2($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdx3($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdx4($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdx5($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setKey1($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setKey2($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setKey3($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setKey4($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setKey5($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setKey6($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setKey7($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setKey8($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setKey9($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setKey10($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setData1($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setData2($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setData3($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setData4($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setData5($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setData6($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setData7($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setData8($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setData9($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setData10($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setRawdata($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setCounter($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setExpiry($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLastupdate($arr[$keys[30]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ObjectsPeer::DATABASE_NAME);

        if ($this->isColumnModified(ObjectsPeer::ID)) $criteria->add(ObjectsPeer::ID, $this->id);
        if ($this->isColumnModified(ObjectsPeer::USERID)) $criteria->add(ObjectsPeer::USERID, $this->userid);
        if ($this->isColumnModified(ObjectsPeer::IDX1)) $criteria->add(ObjectsPeer::IDX1, $this->idx1);
        if ($this->isColumnModified(ObjectsPeer::IDX2)) $criteria->add(ObjectsPeer::IDX2, $this->idx2);
        if ($this->isColumnModified(ObjectsPeer::IDX3)) $criteria->add(ObjectsPeer::IDX3, $this->idx3);
        if ($this->isColumnModified(ObjectsPeer::IDX4)) $criteria->add(ObjectsPeer::IDX4, $this->idx4);
        if ($this->isColumnModified(ObjectsPeer::IDX5)) $criteria->add(ObjectsPeer::IDX5, $this->idx5);
        if ($this->isColumnModified(ObjectsPeer::KEY1)) $criteria->add(ObjectsPeer::KEY1, $this->key1);
        if ($this->isColumnModified(ObjectsPeer::KEY2)) $criteria->add(ObjectsPeer::KEY2, $this->key2);
        if ($this->isColumnModified(ObjectsPeer::KEY3)) $criteria->add(ObjectsPeer::KEY3, $this->key3);
        if ($this->isColumnModified(ObjectsPeer::KEY4)) $criteria->add(ObjectsPeer::KEY4, $this->key4);
        if ($this->isColumnModified(ObjectsPeer::KEY5)) $criteria->add(ObjectsPeer::KEY5, $this->key5);
        if ($this->isColumnModified(ObjectsPeer::KEY6)) $criteria->add(ObjectsPeer::KEY6, $this->key6);
        if ($this->isColumnModified(ObjectsPeer::KEY7)) $criteria->add(ObjectsPeer::KEY7, $this->key7);
        if ($this->isColumnModified(ObjectsPeer::KEY8)) $criteria->add(ObjectsPeer::KEY8, $this->key8);
        if ($this->isColumnModified(ObjectsPeer::KEY9)) $criteria->add(ObjectsPeer::KEY9, $this->key9);
        if ($this->isColumnModified(ObjectsPeer::KEY10)) $criteria->add(ObjectsPeer::KEY10, $this->key10);
        if ($this->isColumnModified(ObjectsPeer::DATA1)) $criteria->add(ObjectsPeer::DATA1, $this->data1);
        if ($this->isColumnModified(ObjectsPeer::DATA2)) $criteria->add(ObjectsPeer::DATA2, $this->data2);
        if ($this->isColumnModified(ObjectsPeer::DATA3)) $criteria->add(ObjectsPeer::DATA3, $this->data3);
        if ($this->isColumnModified(ObjectsPeer::DATA4)) $criteria->add(ObjectsPeer::DATA4, $this->data4);
        if ($this->isColumnModified(ObjectsPeer::DATA5)) $criteria->add(ObjectsPeer::DATA5, $this->data5);
        if ($this->isColumnModified(ObjectsPeer::DATA6)) $criteria->add(ObjectsPeer::DATA6, $this->data6);
        if ($this->isColumnModified(ObjectsPeer::DATA7)) $criteria->add(ObjectsPeer::DATA7, $this->data7);
        if ($this->isColumnModified(ObjectsPeer::DATA8)) $criteria->add(ObjectsPeer::DATA8, $this->data8);
        if ($this->isColumnModified(ObjectsPeer::DATA9)) $criteria->add(ObjectsPeer::DATA9, $this->data9);
        if ($this->isColumnModified(ObjectsPeer::DATA10)) $criteria->add(ObjectsPeer::DATA10, $this->data10);
        if ($this->isColumnModified(ObjectsPeer::RAWDATA)) $criteria->add(ObjectsPeer::RAWDATA, $this->rawdata);
        if ($this->isColumnModified(ObjectsPeer::COUNTER)) $criteria->add(ObjectsPeer::COUNTER, $this->counter);
        if ($this->isColumnModified(ObjectsPeer::EXPIRY)) $criteria->add(ObjectsPeer::EXPIRY, $this->expiry);
        if ($this->isColumnModified(ObjectsPeer::LASTUPDATE)) $criteria->add(ObjectsPeer::LASTUPDATE, $this->lastupdate);

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
        $criteria = new Criteria(ObjectsPeer::DATABASE_NAME);
        $criteria->add(ObjectsPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Objects (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserid($this->getUserid());
        $copyObj->setIdx1($this->getIdx1());
        $copyObj->setIdx2($this->getIdx2());
        $copyObj->setIdx3($this->getIdx3());
        $copyObj->setIdx4($this->getIdx4());
        $copyObj->setIdx5($this->getIdx5());
        $copyObj->setKey1($this->getKey1());
        $copyObj->setKey2($this->getKey2());
        $copyObj->setKey3($this->getKey3());
        $copyObj->setKey4($this->getKey4());
        $copyObj->setKey5($this->getKey5());
        $copyObj->setKey6($this->getKey6());
        $copyObj->setKey7($this->getKey7());
        $copyObj->setKey8($this->getKey8());
        $copyObj->setKey9($this->getKey9());
        $copyObj->setKey10($this->getKey10());
        $copyObj->setData1($this->getData1());
        $copyObj->setData2($this->getData2());
        $copyObj->setData3($this->getData3());
        $copyObj->setData4($this->getData4());
        $copyObj->setData5($this->getData5());
        $copyObj->setData6($this->getData6());
        $copyObj->setData7($this->getData7());
        $copyObj->setData8($this->getData8());
        $copyObj->setData9($this->getData9());
        $copyObj->setData10($this->getData10());
        $copyObj->setRawdata($this->getRawdata());
        $copyObj->setCounter($this->getCounter());
        $copyObj->setExpiry($this->getExpiry());
        $copyObj->setLastupdate($this->getLastupdate());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Objects Clone of current object.
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
     * @return ObjectsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ObjectsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->userid = null;
        $this->idx1 = null;
        $this->idx2 = null;
        $this->idx3 = null;
        $this->idx4 = null;
        $this->idx5 = null;
        $this->key1 = null;
        $this->key2 = null;
        $this->key3 = null;
        $this->key4 = null;
        $this->key5 = null;
        $this->key6 = null;
        $this->key7 = null;
        $this->key8 = null;
        $this->key9 = null;
        $this->key10 = null;
        $this->data1 = null;
        $this->data2 = null;
        $this->data3 = null;
        $this->data4 = null;
        $this->data5 = null;
        $this->data6 = null;
        $this->data7 = null;
        $this->data8 = null;
        $this->data9 = null;
        $this->data10 = null;
        $this->rawdata = null;
        $this->counter = null;
        $this->expiry = null;
        $this->lastupdate = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
        return (string) $this->exportTo(ObjectsPeer::DEFAULT_STRING_FORMAT);
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
