<?php


/**
 * Base class that represents a query for the 'objects' table.
 *
 *
 *
 * @method ObjectsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ObjectsQuery orderByUserid($order = Criteria::ASC) Order by the userid column
 * @method ObjectsQuery orderByIdx1($order = Criteria::ASC) Order by the idx1 column
 * @method ObjectsQuery orderByIdx2($order = Criteria::ASC) Order by the idx2 column
 * @method ObjectsQuery orderByIdx3($order = Criteria::ASC) Order by the idx3 column
 * @method ObjectsQuery orderByIdx4($order = Criteria::ASC) Order by the idx4 column
 * @method ObjectsQuery orderByIdx5($order = Criteria::ASC) Order by the idx5 column
 * @method ObjectsQuery orderByKey1($order = Criteria::ASC) Order by the key1 column
 * @method ObjectsQuery orderByKey2($order = Criteria::ASC) Order by the key2 column
 * @method ObjectsQuery orderByKey3($order = Criteria::ASC) Order by the key3 column
 * @method ObjectsQuery orderByKey4($order = Criteria::ASC) Order by the key4 column
 * @method ObjectsQuery orderByKey5($order = Criteria::ASC) Order by the key5 column
 * @method ObjectsQuery orderByKey6($order = Criteria::ASC) Order by the key6 column
 * @method ObjectsQuery orderByKey7($order = Criteria::ASC) Order by the key7 column
 * @method ObjectsQuery orderByKey8($order = Criteria::ASC) Order by the key8 column
 * @method ObjectsQuery orderByKey9($order = Criteria::ASC) Order by the key9 column
 * @method ObjectsQuery orderByKey10($order = Criteria::ASC) Order by the key10 column
 * @method ObjectsQuery orderByData1($order = Criteria::ASC) Order by the data1 column
 * @method ObjectsQuery orderByData2($order = Criteria::ASC) Order by the data2 column
 * @method ObjectsQuery orderByData3($order = Criteria::ASC) Order by the data3 column
 * @method ObjectsQuery orderByData4($order = Criteria::ASC) Order by the data4 column
 * @method ObjectsQuery orderByData5($order = Criteria::ASC) Order by the data5 column
 * @method ObjectsQuery orderByData6($order = Criteria::ASC) Order by the data6 column
 * @method ObjectsQuery orderByData7($order = Criteria::ASC) Order by the data7 column
 * @method ObjectsQuery orderByData8($order = Criteria::ASC) Order by the data8 column
 * @method ObjectsQuery orderByData9($order = Criteria::ASC) Order by the data9 column
 * @method ObjectsQuery orderByData10($order = Criteria::ASC) Order by the data10 column
 * @method ObjectsQuery orderByRawdata($order = Criteria::ASC) Order by the rawdata column
 * @method ObjectsQuery orderByCounter($order = Criteria::ASC) Order by the counter column
 * @method ObjectsQuery orderByExpiry($order = Criteria::ASC) Order by the expiry column
 * @method ObjectsQuery orderByLastupdate($order = Criteria::ASC) Order by the lastupdate column
 *
 * @method ObjectsQuery groupById() Group by the id column
 * @method ObjectsQuery groupByUserid() Group by the userid column
 * @method ObjectsQuery groupByIdx1() Group by the idx1 column
 * @method ObjectsQuery groupByIdx2() Group by the idx2 column
 * @method ObjectsQuery groupByIdx3() Group by the idx3 column
 * @method ObjectsQuery groupByIdx4() Group by the idx4 column
 * @method ObjectsQuery groupByIdx5() Group by the idx5 column
 * @method ObjectsQuery groupByKey1() Group by the key1 column
 * @method ObjectsQuery groupByKey2() Group by the key2 column
 * @method ObjectsQuery groupByKey3() Group by the key3 column
 * @method ObjectsQuery groupByKey4() Group by the key4 column
 * @method ObjectsQuery groupByKey5() Group by the key5 column
 * @method ObjectsQuery groupByKey6() Group by the key6 column
 * @method ObjectsQuery groupByKey7() Group by the key7 column
 * @method ObjectsQuery groupByKey8() Group by the key8 column
 * @method ObjectsQuery groupByKey9() Group by the key9 column
 * @method ObjectsQuery groupByKey10() Group by the key10 column
 * @method ObjectsQuery groupByData1() Group by the data1 column
 * @method ObjectsQuery groupByData2() Group by the data2 column
 * @method ObjectsQuery groupByData3() Group by the data3 column
 * @method ObjectsQuery groupByData4() Group by the data4 column
 * @method ObjectsQuery groupByData5() Group by the data5 column
 * @method ObjectsQuery groupByData6() Group by the data6 column
 * @method ObjectsQuery groupByData7() Group by the data7 column
 * @method ObjectsQuery groupByData8() Group by the data8 column
 * @method ObjectsQuery groupByData9() Group by the data9 column
 * @method ObjectsQuery groupByData10() Group by the data10 column
 * @method ObjectsQuery groupByRawdata() Group by the rawdata column
 * @method ObjectsQuery groupByCounter() Group by the counter column
 * @method ObjectsQuery groupByExpiry() Group by the expiry column
 * @method ObjectsQuery groupByLastupdate() Group by the lastupdate column
 *
 * @method ObjectsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ObjectsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ObjectsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Objects findOne(PropelPDO $con = null) Return the first Objects matching the query
 * @method Objects findOneOrCreate(PropelPDO $con = null) Return the first Objects matching the query, or a new Objects object populated from the query conditions when no match is found
 *
 * @method Objects findOneByUserid(int $userid) Return the first Objects filtered by the userid column
 * @method Objects findOneByIdx1(int $idx1) Return the first Objects filtered by the idx1 column
 * @method Objects findOneByIdx2(int $idx2) Return the first Objects filtered by the idx2 column
 * @method Objects findOneByIdx3(int $idx3) Return the first Objects filtered by the idx3 column
 * @method Objects findOneByIdx4(int $idx4) Return the first Objects filtered by the idx4 column
 * @method Objects findOneByIdx5(int $idx5) Return the first Objects filtered by the idx5 column
 * @method Objects findOneByKey1(string $key1) Return the first Objects filtered by the key1 column
 * @method Objects findOneByKey2(string $key2) Return the first Objects filtered by the key2 column
 * @method Objects findOneByKey3(string $key3) Return the first Objects filtered by the key3 column
 * @method Objects findOneByKey4(string $key4) Return the first Objects filtered by the key4 column
 * @method Objects findOneByKey5(string $key5) Return the first Objects filtered by the key5 column
 * @method Objects findOneByKey6(string $key6) Return the first Objects filtered by the key6 column
 * @method Objects findOneByKey7(string $key7) Return the first Objects filtered by the key7 column
 * @method Objects findOneByKey8(string $key8) Return the first Objects filtered by the key8 column
 * @method Objects findOneByKey9(string $key9) Return the first Objects filtered by the key9 column
 * @method Objects findOneByKey10(string $key10) Return the first Objects filtered by the key10 column
 * @method Objects findOneByData1(string $data1) Return the first Objects filtered by the data1 column
 * @method Objects findOneByData2(string $data2) Return the first Objects filtered by the data2 column
 * @method Objects findOneByData3(string $data3) Return the first Objects filtered by the data3 column
 * @method Objects findOneByData4(string $data4) Return the first Objects filtered by the data4 column
 * @method Objects findOneByData5(string $data5) Return the first Objects filtered by the data5 column
 * @method Objects findOneByData6(string $data6) Return the first Objects filtered by the data6 column
 * @method Objects findOneByData7(string $data7) Return the first Objects filtered by the data7 column
 * @method Objects findOneByData8(string $data8) Return the first Objects filtered by the data8 column
 * @method Objects findOneByData9(string $data9) Return the first Objects filtered by the data9 column
 * @method Objects findOneByData10(string $data10) Return the first Objects filtered by the data10 column
 * @method Objects findOneByRawdata(string $rawdata) Return the first Objects filtered by the rawdata column
 * @method Objects findOneByCounter(int $counter) Return the first Objects filtered by the counter column
 * @method Objects findOneByExpiry(int $expiry) Return the first Objects filtered by the expiry column
 * @method Objects findOneByLastupdate(int $lastupdate) Return the first Objects filtered by the lastupdate column
 *
 * @method array findById(int $id) Return Objects objects filtered by the id column
 * @method array findByUserid(int $userid) Return Objects objects filtered by the userid column
 * @method array findByIdx1(int $idx1) Return Objects objects filtered by the idx1 column
 * @method array findByIdx2(int $idx2) Return Objects objects filtered by the idx2 column
 * @method array findByIdx3(int $idx3) Return Objects objects filtered by the idx3 column
 * @method array findByIdx4(int $idx4) Return Objects objects filtered by the idx4 column
 * @method array findByIdx5(int $idx5) Return Objects objects filtered by the idx5 column
 * @method array findByKey1(string $key1) Return Objects objects filtered by the key1 column
 * @method array findByKey2(string $key2) Return Objects objects filtered by the key2 column
 * @method array findByKey3(string $key3) Return Objects objects filtered by the key3 column
 * @method array findByKey4(string $key4) Return Objects objects filtered by the key4 column
 * @method array findByKey5(string $key5) Return Objects objects filtered by the key5 column
 * @method array findByKey6(string $key6) Return Objects objects filtered by the key6 column
 * @method array findByKey7(string $key7) Return Objects objects filtered by the key7 column
 * @method array findByKey8(string $key8) Return Objects objects filtered by the key8 column
 * @method array findByKey9(string $key9) Return Objects objects filtered by the key9 column
 * @method array findByKey10(string $key10) Return Objects objects filtered by the key10 column
 * @method array findByData1(string $data1) Return Objects objects filtered by the data1 column
 * @method array findByData2(string $data2) Return Objects objects filtered by the data2 column
 * @method array findByData3(string $data3) Return Objects objects filtered by the data3 column
 * @method array findByData4(string $data4) Return Objects objects filtered by the data4 column
 * @method array findByData5(string $data5) Return Objects objects filtered by the data5 column
 * @method array findByData6(string $data6) Return Objects objects filtered by the data6 column
 * @method array findByData7(string $data7) Return Objects objects filtered by the data7 column
 * @method array findByData8(string $data8) Return Objects objects filtered by the data8 column
 * @method array findByData9(string $data9) Return Objects objects filtered by the data9 column
 * @method array findByData10(string $data10) Return Objects objects filtered by the data10 column
 * @method array findByRawdata(string $rawdata) Return Objects objects filtered by the rawdata column
 * @method array findByCounter(int $counter) Return Objects objects filtered by the counter column
 * @method array findByExpiry(int $expiry) Return Objects objects filtered by the expiry column
 * @method array findByLastupdate(int $lastupdate) Return Objects objects filtered by the lastupdate column
 *
 * @package    propel.generator.appseed_db.om
 */
abstract class BaseObjectsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseObjectsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'appseed_db';
        }
        if (null === $modelName) {
            $modelName = 'Objects';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ObjectsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ObjectsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ObjectsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ObjectsQuery) {
            return $criteria;
        }
        $query = new ObjectsQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Objects|Objects[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ObjectsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ObjectsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Objects A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Objects A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `userid`, `idx1`, `idx2`, `idx3`, `idx4`, `idx5`, `key1`, `key2`, `key3`, `key4`, `key5`, `key6`, `key7`, `key8`, `key9`, `key10`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `rawdata`, `counter`, `expiry`, `lastupdate` FROM `objects` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Objects();
            $obj->hydrate($row);
            ObjectsPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Objects|Objects[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Objects[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ObjectsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ObjectsPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ObjectsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ObjectsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the userid column
     *
     * Example usage:
     * <code>
     * $query->filterByUserid(1234); // WHERE userid = 1234
     * $query->filterByUserid(array(12, 34)); // WHERE userid IN (12, 34)
     * $query->filterByUserid(array('min' => 12)); // WHERE userid >= 12
     * $query->filterByUserid(array('max' => 12)); // WHERE userid <= 12
     * </code>
     *
     * @param     mixed $userid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByUserid($userid = null, $comparison = null)
    {
        if (is_array($userid)) {
            $useMinMax = false;
            if (isset($userid['min'])) {
                $this->addUsingAlias(ObjectsPeer::USERID, $userid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userid['max'])) {
                $this->addUsingAlias(ObjectsPeer::USERID, $userid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::USERID, $userid, $comparison);
    }

    /**
     * Filter the query on the idx1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdx1(1234); // WHERE idx1 = 1234
     * $query->filterByIdx1(array(12, 34)); // WHERE idx1 IN (12, 34)
     * $query->filterByIdx1(array('min' => 12)); // WHERE idx1 >= 12
     * $query->filterByIdx1(array('max' => 12)); // WHERE idx1 <= 12
     * </code>
     *
     * @param     mixed $idx1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByIdx1($idx1 = null, $comparison = null)
    {
        if (is_array($idx1)) {
            $useMinMax = false;
            if (isset($idx1['min'])) {
                $this->addUsingAlias(ObjectsPeer::IDX1, $idx1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idx1['max'])) {
                $this->addUsingAlias(ObjectsPeer::IDX1, $idx1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::IDX1, $idx1, $comparison);
    }

    /**
     * Filter the query on the idx2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdx2(1234); // WHERE idx2 = 1234
     * $query->filterByIdx2(array(12, 34)); // WHERE idx2 IN (12, 34)
     * $query->filterByIdx2(array('min' => 12)); // WHERE idx2 >= 12
     * $query->filterByIdx2(array('max' => 12)); // WHERE idx2 <= 12
     * </code>
     *
     * @param     mixed $idx2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByIdx2($idx2 = null, $comparison = null)
    {
        if (is_array($idx2)) {
            $useMinMax = false;
            if (isset($idx2['min'])) {
                $this->addUsingAlias(ObjectsPeer::IDX2, $idx2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idx2['max'])) {
                $this->addUsingAlias(ObjectsPeer::IDX2, $idx2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::IDX2, $idx2, $comparison);
    }

    /**
     * Filter the query on the idx3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdx3(1234); // WHERE idx3 = 1234
     * $query->filterByIdx3(array(12, 34)); // WHERE idx3 IN (12, 34)
     * $query->filterByIdx3(array('min' => 12)); // WHERE idx3 >= 12
     * $query->filterByIdx3(array('max' => 12)); // WHERE idx3 <= 12
     * </code>
     *
     * @param     mixed $idx3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByIdx3($idx3 = null, $comparison = null)
    {
        if (is_array($idx3)) {
            $useMinMax = false;
            if (isset($idx3['min'])) {
                $this->addUsingAlias(ObjectsPeer::IDX3, $idx3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idx3['max'])) {
                $this->addUsingAlias(ObjectsPeer::IDX3, $idx3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::IDX3, $idx3, $comparison);
    }

    /**
     * Filter the query on the idx4 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdx4(1234); // WHERE idx4 = 1234
     * $query->filterByIdx4(array(12, 34)); // WHERE idx4 IN (12, 34)
     * $query->filterByIdx4(array('min' => 12)); // WHERE idx4 >= 12
     * $query->filterByIdx4(array('max' => 12)); // WHERE idx4 <= 12
     * </code>
     *
     * @param     mixed $idx4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByIdx4($idx4 = null, $comparison = null)
    {
        if (is_array($idx4)) {
            $useMinMax = false;
            if (isset($idx4['min'])) {
                $this->addUsingAlias(ObjectsPeer::IDX4, $idx4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idx4['max'])) {
                $this->addUsingAlias(ObjectsPeer::IDX4, $idx4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::IDX4, $idx4, $comparison);
    }

    /**
     * Filter the query on the idx5 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdx5(1234); // WHERE idx5 = 1234
     * $query->filterByIdx5(array(12, 34)); // WHERE idx5 IN (12, 34)
     * $query->filterByIdx5(array('min' => 12)); // WHERE idx5 >= 12
     * $query->filterByIdx5(array('max' => 12)); // WHERE idx5 <= 12
     * </code>
     *
     * @param     mixed $idx5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByIdx5($idx5 = null, $comparison = null)
    {
        if (is_array($idx5)) {
            $useMinMax = false;
            if (isset($idx5['min'])) {
                $this->addUsingAlias(ObjectsPeer::IDX5, $idx5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idx5['max'])) {
                $this->addUsingAlias(ObjectsPeer::IDX5, $idx5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::IDX5, $idx5, $comparison);
    }

    /**
     * Filter the query on the key1 column
     *
     * Example usage:
     * <code>
     * $query->filterByKey1('fooValue');   // WHERE key1 = 'fooValue'
     * $query->filterByKey1('%fooValue%'); // WHERE key1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByKey1($key1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key1)) {
                $key1 = str_replace('*', '%', $key1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::KEY1, $key1, $comparison);
    }

    /**
     * Filter the query on the key2 column
     *
     * Example usage:
     * <code>
     * $query->filterByKey2('fooValue');   // WHERE key2 = 'fooValue'
     * $query->filterByKey2('%fooValue%'); // WHERE key2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByKey2($key2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key2)) {
                $key2 = str_replace('*', '%', $key2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::KEY2, $key2, $comparison);
    }

    /**
     * Filter the query on the key3 column
     *
     * Example usage:
     * <code>
     * $query->filterByKey3('fooValue');   // WHERE key3 = 'fooValue'
     * $query->filterByKey3('%fooValue%'); // WHERE key3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByKey3($key3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key3)) {
                $key3 = str_replace('*', '%', $key3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::KEY3, $key3, $comparison);
    }

    /**
     * Filter the query on the key4 column
     *
     * Example usage:
     * <code>
     * $query->filterByKey4('fooValue');   // WHERE key4 = 'fooValue'
     * $query->filterByKey4('%fooValue%'); // WHERE key4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByKey4($key4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key4)) {
                $key4 = str_replace('*', '%', $key4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::KEY4, $key4, $comparison);
    }

    /**
     * Filter the query on the key5 column
     *
     * Example usage:
     * <code>
     * $query->filterByKey5('fooValue');   // WHERE key5 = 'fooValue'
     * $query->filterByKey5('%fooValue%'); // WHERE key5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByKey5($key5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key5)) {
                $key5 = str_replace('*', '%', $key5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::KEY5, $key5, $comparison);
    }

    /**
     * Filter the query on the key6 column
     *
     * Example usage:
     * <code>
     * $query->filterByKey6('fooValue');   // WHERE key6 = 'fooValue'
     * $query->filterByKey6('%fooValue%'); // WHERE key6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key6 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByKey6($key6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key6)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key6)) {
                $key6 = str_replace('*', '%', $key6);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::KEY6, $key6, $comparison);
    }

    /**
     * Filter the query on the key7 column
     *
     * Example usage:
     * <code>
     * $query->filterByKey7('fooValue');   // WHERE key7 = 'fooValue'
     * $query->filterByKey7('%fooValue%'); // WHERE key7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key7 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByKey7($key7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key7)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key7)) {
                $key7 = str_replace('*', '%', $key7);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::KEY7, $key7, $comparison);
    }

    /**
     * Filter the query on the key8 column
     *
     * Example usage:
     * <code>
     * $query->filterByKey8('fooValue');   // WHERE key8 = 'fooValue'
     * $query->filterByKey8('%fooValue%'); // WHERE key8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key8 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByKey8($key8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key8)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key8)) {
                $key8 = str_replace('*', '%', $key8);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::KEY8, $key8, $comparison);
    }

    /**
     * Filter the query on the key9 column
     *
     * Example usage:
     * <code>
     * $query->filterByKey9('fooValue');   // WHERE key9 = 'fooValue'
     * $query->filterByKey9('%fooValue%'); // WHERE key9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key9 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByKey9($key9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key9)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key9)) {
                $key9 = str_replace('*', '%', $key9);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::KEY9, $key9, $comparison);
    }

    /**
     * Filter the query on the key10 column
     *
     * Example usage:
     * <code>
     * $query->filterByKey10('fooValue');   // WHERE key10 = 'fooValue'
     * $query->filterByKey10('%fooValue%'); // WHERE key10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key10 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByKey10($key10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key10)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key10)) {
                $key10 = str_replace('*', '%', $key10);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::KEY10, $key10, $comparison);
    }

    /**
     * Filter the query on the data1 column
     *
     * Example usage:
     * <code>
     * $query->filterByData1('fooValue');   // WHERE data1 = 'fooValue'
     * $query->filterByData1('%fooValue%'); // WHERE data1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByData1($data1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data1)) {
                $data1 = str_replace('*', '%', $data1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::DATA1, $data1, $comparison);
    }

    /**
     * Filter the query on the data2 column
     *
     * Example usage:
     * <code>
     * $query->filterByData2('fooValue');   // WHERE data2 = 'fooValue'
     * $query->filterByData2('%fooValue%'); // WHERE data2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByData2($data2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data2)) {
                $data2 = str_replace('*', '%', $data2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::DATA2, $data2, $comparison);
    }

    /**
     * Filter the query on the data3 column
     *
     * Example usage:
     * <code>
     * $query->filterByData3('fooValue');   // WHERE data3 = 'fooValue'
     * $query->filterByData3('%fooValue%'); // WHERE data3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByData3($data3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data3)) {
                $data3 = str_replace('*', '%', $data3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::DATA3, $data3, $comparison);
    }

    /**
     * Filter the query on the data4 column
     *
     * Example usage:
     * <code>
     * $query->filterByData4('fooValue');   // WHERE data4 = 'fooValue'
     * $query->filterByData4('%fooValue%'); // WHERE data4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByData4($data4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data4)) {
                $data4 = str_replace('*', '%', $data4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::DATA4, $data4, $comparison);
    }

    /**
     * Filter the query on the data5 column
     *
     * Example usage:
     * <code>
     * $query->filterByData5('fooValue');   // WHERE data5 = 'fooValue'
     * $query->filterByData5('%fooValue%'); // WHERE data5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByData5($data5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data5)) {
                $data5 = str_replace('*', '%', $data5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::DATA5, $data5, $comparison);
    }

    /**
     * Filter the query on the data6 column
     *
     * Example usage:
     * <code>
     * $query->filterByData6('fooValue');   // WHERE data6 = 'fooValue'
     * $query->filterByData6('%fooValue%'); // WHERE data6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data6 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByData6($data6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data6)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data6)) {
                $data6 = str_replace('*', '%', $data6);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::DATA6, $data6, $comparison);
    }

    /**
     * Filter the query on the data7 column
     *
     * Example usage:
     * <code>
     * $query->filterByData7('fooValue');   // WHERE data7 = 'fooValue'
     * $query->filterByData7('%fooValue%'); // WHERE data7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data7 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByData7($data7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data7)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data7)) {
                $data7 = str_replace('*', '%', $data7);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::DATA7, $data7, $comparison);
    }

    /**
     * Filter the query on the data8 column
     *
     * Example usage:
     * <code>
     * $query->filterByData8('fooValue');   // WHERE data8 = 'fooValue'
     * $query->filterByData8('%fooValue%'); // WHERE data8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data8 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByData8($data8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data8)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data8)) {
                $data8 = str_replace('*', '%', $data8);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::DATA8, $data8, $comparison);
    }

    /**
     * Filter the query on the data9 column
     *
     * Example usage:
     * <code>
     * $query->filterByData9('fooValue');   // WHERE data9 = 'fooValue'
     * $query->filterByData9('%fooValue%'); // WHERE data9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data9 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByData9($data9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data9)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data9)) {
                $data9 = str_replace('*', '%', $data9);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::DATA9, $data9, $comparison);
    }

    /**
     * Filter the query on the data10 column
     *
     * Example usage:
     * <code>
     * $query->filterByData10('fooValue');   // WHERE data10 = 'fooValue'
     * $query->filterByData10('%fooValue%'); // WHERE data10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data10 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByData10($data10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data10)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data10)) {
                $data10 = str_replace('*', '%', $data10);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::DATA10, $data10, $comparison);
    }

    /**
     * Filter the query on the rawdata column
     *
     * Example usage:
     * <code>
     * $query->filterByRawdata('fooValue');   // WHERE rawdata = 'fooValue'
     * $query->filterByRawdata('%fooValue%'); // WHERE rawdata LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rawdata The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByRawdata($rawdata = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rawdata)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rawdata)) {
                $rawdata = str_replace('*', '%', $rawdata);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::RAWDATA, $rawdata, $comparison);
    }

    /**
     * Filter the query on the counter column
     *
     * Example usage:
     * <code>
     * $query->filterByCounter(1234); // WHERE counter = 1234
     * $query->filterByCounter(array(12, 34)); // WHERE counter IN (12, 34)
     * $query->filterByCounter(array('min' => 12)); // WHERE counter >= 12
     * $query->filterByCounter(array('max' => 12)); // WHERE counter <= 12
     * </code>
     *
     * @param     mixed $counter The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByCounter($counter = null, $comparison = null)
    {
        if (is_array($counter)) {
            $useMinMax = false;
            if (isset($counter['min'])) {
                $this->addUsingAlias(ObjectsPeer::COUNTER, $counter['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($counter['max'])) {
                $this->addUsingAlias(ObjectsPeer::COUNTER, $counter['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::COUNTER, $counter, $comparison);
    }

    /**
     * Filter the query on the expiry column
     *
     * Example usage:
     * <code>
     * $query->filterByExpiry(1234); // WHERE expiry = 1234
     * $query->filterByExpiry(array(12, 34)); // WHERE expiry IN (12, 34)
     * $query->filterByExpiry(array('min' => 12)); // WHERE expiry >= 12
     * $query->filterByExpiry(array('max' => 12)); // WHERE expiry <= 12
     * </code>
     *
     * @param     mixed $expiry The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByExpiry($expiry = null, $comparison = null)
    {
        if (is_array($expiry)) {
            $useMinMax = false;
            if (isset($expiry['min'])) {
                $this->addUsingAlias(ObjectsPeer::EXPIRY, $expiry['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expiry['max'])) {
                $this->addUsingAlias(ObjectsPeer::EXPIRY, $expiry['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::EXPIRY, $expiry, $comparison);
    }

    /**
     * Filter the query on the lastupdate column
     *
     * Example usage:
     * <code>
     * $query->filterByLastupdate(1234); // WHERE lastupdate = 1234
     * $query->filterByLastupdate(array(12, 34)); // WHERE lastupdate IN (12, 34)
     * $query->filterByLastupdate(array('min' => 12)); // WHERE lastupdate >= 12
     * $query->filterByLastupdate(array('max' => 12)); // WHERE lastupdate <= 12
     * </code>
     *
     * @param     mixed $lastupdate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function filterByLastupdate($lastupdate = null, $comparison = null)
    {
        if (is_array($lastupdate)) {
            $useMinMax = false;
            if (isset($lastupdate['min'])) {
                $this->addUsingAlias(ObjectsPeer::LASTUPDATE, $lastupdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastupdate['max'])) {
                $this->addUsingAlias(ObjectsPeer::LASTUPDATE, $lastupdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ObjectsPeer::LASTUPDATE, $lastupdate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Objects $objects Object to remove from the list of results
     *
     * @return ObjectsQuery The current query, for fluid interface
     */
    public function prune($objects = null)
    {
        if ($objects) {
            $this->addUsingAlias(ObjectsPeer::ID, $objects->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
