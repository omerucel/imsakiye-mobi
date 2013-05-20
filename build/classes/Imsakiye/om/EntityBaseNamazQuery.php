<?php


/**
 * Base class that represents a query for the 'namaz' table.
 *
 * 
 *
 * @method     EntityNamazQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EntityNamazQuery orderByCityId($order = Criteria::ASC) Order by the city_id column
 * @method     EntityNamazQuery orderByDistrictId($order = Criteria::ASC) Order by the district_id column
 * @method     EntityNamazQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     EntityNamazQuery orderByImsak($order = Criteria::ASC) Order by the imsak column
 * @method     EntityNamazQuery orderByGunes($order = Criteria::ASC) Order by the gunes column
 * @method     EntityNamazQuery orderByOgle($order = Criteria::ASC) Order by the ogle column
 * @method     EntityNamazQuery orderByIkindi($order = Criteria::ASC) Order by the ikindi column
 * @method     EntityNamazQuery orderByAksam($order = Criteria::ASC) Order by the aksam column
 * @method     EntityNamazQuery orderByYatsi($order = Criteria::ASC) Order by the yatsi column
 *
 * @method     EntityNamazQuery groupById() Group by the id column
 * @method     EntityNamazQuery groupByCityId() Group by the city_id column
 * @method     EntityNamazQuery groupByDistrictId() Group by the district_id column
 * @method     EntityNamazQuery groupByDate() Group by the date column
 * @method     EntityNamazQuery groupByImsak() Group by the imsak column
 * @method     EntityNamazQuery groupByGunes() Group by the gunes column
 * @method     EntityNamazQuery groupByOgle() Group by the ogle column
 * @method     EntityNamazQuery groupByIkindi() Group by the ikindi column
 * @method     EntityNamazQuery groupByAksam() Group by the aksam column
 * @method     EntityNamazQuery groupByYatsi() Group by the yatsi column
 *
 * @method     EntityNamazQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EntityNamazQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EntityNamazQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EntityNamazQuery leftJoinCity($relationAlias = null) Adds a LEFT JOIN clause to the query using the City relation
 * @method     EntityNamazQuery rightJoinCity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the City relation
 * @method     EntityNamazQuery innerJoinCity($relationAlias = null) Adds a INNER JOIN clause to the query using the City relation
 *
 * @method     EntityNamazQuery leftJoinDistrict($relationAlias = null) Adds a LEFT JOIN clause to the query using the District relation
 * @method     EntityNamazQuery rightJoinDistrict($relationAlias = null) Adds a RIGHT JOIN clause to the query using the District relation
 * @method     EntityNamazQuery innerJoinDistrict($relationAlias = null) Adds a INNER JOIN clause to the query using the District relation
 *
 * @method     EntityNamaz findOne(PropelPDO $con = null) Return the first EntityNamaz matching the query
 * @method     EntityNamaz findOneOrCreate(PropelPDO $con = null) Return the first EntityNamaz matching the query, or a new EntityNamaz object populated from the query conditions when no match is found
 *
 * @method     EntityNamaz findOneById(int $id) Return the first EntityNamaz filtered by the id column
 * @method     EntityNamaz findOneByCityId(int $city_id) Return the first EntityNamaz filtered by the city_id column
 * @method     EntityNamaz findOneByDistrictId(int $district_id) Return the first EntityNamaz filtered by the district_id column
 * @method     EntityNamaz findOneByDate(string $date) Return the first EntityNamaz filtered by the date column
 * @method     EntityNamaz findOneByImsak(string $imsak) Return the first EntityNamaz filtered by the imsak column
 * @method     EntityNamaz findOneByGunes(string $gunes) Return the first EntityNamaz filtered by the gunes column
 * @method     EntityNamaz findOneByOgle(string $ogle) Return the first EntityNamaz filtered by the ogle column
 * @method     EntityNamaz findOneByIkindi(string $ikindi) Return the first EntityNamaz filtered by the ikindi column
 * @method     EntityNamaz findOneByAksam(string $aksam) Return the first EntityNamaz filtered by the aksam column
 * @method     EntityNamaz findOneByYatsi(string $yatsi) Return the first EntityNamaz filtered by the yatsi column
 *
 * @method     array findById(int $id) Return EntityNamaz objects filtered by the id column
 * @method     array findByCityId(int $city_id) Return EntityNamaz objects filtered by the city_id column
 * @method     array findByDistrictId(int $district_id) Return EntityNamaz objects filtered by the district_id column
 * @method     array findByDate(string $date) Return EntityNamaz objects filtered by the date column
 * @method     array findByImsak(string $imsak) Return EntityNamaz objects filtered by the imsak column
 * @method     array findByGunes(string $gunes) Return EntityNamaz objects filtered by the gunes column
 * @method     array findByOgle(string $ogle) Return EntityNamaz objects filtered by the ogle column
 * @method     array findByIkindi(string $ikindi) Return EntityNamaz objects filtered by the ikindi column
 * @method     array findByAksam(string $aksam) Return EntityNamaz objects filtered by the aksam column
 * @method     array findByYatsi(string $yatsi) Return EntityNamaz objects filtered by the yatsi column
 *
 * @package    propel.generator.Imsakiye.om
 */
abstract class EntityBaseNamazQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of EntityBaseNamazQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Imsakiye', $modelName = 'EntityNamaz', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EntityNamazQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EntityNamazQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EntityNamazQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EntityNamazQuery) {
            return $criteria;
        }
        $query = new EntityNamazQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
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
     * @return   EntityNamaz|EntityNamaz[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EntityNamazPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EntityNamazPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   EntityNamaz A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `CITY_ID`, `DISTRICT_ID`, `DATE`, `IMSAK`, `GUNES`, `OGLE`, `IKINDI`, `AKSAM`, `YATSI` FROM `namaz` WHERE `ID` = :p0';
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
            $obj = new EntityNamaz();
            $obj->hydrate($row);
            EntityNamazPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EntityNamaz|EntityNamaz[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EntityNamaz[]|mixed the list of results, formatted by the current formatter
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
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EntityNamazPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EntityNamazPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EntityNamazPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the city_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCityId(1234); // WHERE city_id = 1234
     * $query->filterByCityId(array(12, 34)); // WHERE city_id IN (12, 34)
     * $query->filterByCityId(array('min' => 12)); // WHERE city_id > 12
     * </code>
     *
     * @see       filterByCity()
     *
     * @param     mixed $cityId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByCityId($cityId = null, $comparison = null)
    {
        if (is_array($cityId)) {
            $useMinMax = false;
            if (isset($cityId['min'])) {
                $this->addUsingAlias(EntityNamazPeer::CITY_ID, $cityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cityId['max'])) {
                $this->addUsingAlias(EntityNamazPeer::CITY_ID, $cityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityNamazPeer::CITY_ID, $cityId, $comparison);
    }

    /**
     * Filter the query on the district_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDistrictId(1234); // WHERE district_id = 1234
     * $query->filterByDistrictId(array(12, 34)); // WHERE district_id IN (12, 34)
     * $query->filterByDistrictId(array('min' => 12)); // WHERE district_id > 12
     * </code>
     *
     * @see       filterByDistrict()
     *
     * @param     mixed $districtId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByDistrictId($districtId = null, $comparison = null)
    {
        if (is_array($districtId)) {
            $useMinMax = false;
            if (isset($districtId['min'])) {
                $this->addUsingAlias(EntityNamazPeer::DISTRICT_ID, $districtId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($districtId['max'])) {
                $this->addUsingAlias(EntityNamazPeer::DISTRICT_ID, $districtId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityNamazPeer::DISTRICT_ID, $districtId, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(EntityNamazPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(EntityNamazPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityNamazPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the imsak column
     *
     * Example usage:
     * <code>
     * $query->filterByImsak('2011-03-14'); // WHERE imsak = '2011-03-14'
     * $query->filterByImsak('now'); // WHERE imsak = '2011-03-14'
     * $query->filterByImsak(array('max' => 'yesterday')); // WHERE imsak > '2011-03-13'
     * </code>
     *
     * @param     mixed $imsak The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByImsak($imsak = null, $comparison = null)
    {
        if (is_array($imsak)) {
            $useMinMax = false;
            if (isset($imsak['min'])) {
                $this->addUsingAlias(EntityNamazPeer::IMSAK, $imsak['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($imsak['max'])) {
                $this->addUsingAlias(EntityNamazPeer::IMSAK, $imsak['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityNamazPeer::IMSAK, $imsak, $comparison);
    }

    /**
     * Filter the query on the gunes column
     *
     * Example usage:
     * <code>
     * $query->filterByGunes('2011-03-14'); // WHERE gunes = '2011-03-14'
     * $query->filterByGunes('now'); // WHERE gunes = '2011-03-14'
     * $query->filterByGunes(array('max' => 'yesterday')); // WHERE gunes > '2011-03-13'
     * </code>
     *
     * @param     mixed $gunes The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByGunes($gunes = null, $comparison = null)
    {
        if (is_array($gunes)) {
            $useMinMax = false;
            if (isset($gunes['min'])) {
                $this->addUsingAlias(EntityNamazPeer::GUNES, $gunes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gunes['max'])) {
                $this->addUsingAlias(EntityNamazPeer::GUNES, $gunes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityNamazPeer::GUNES, $gunes, $comparison);
    }

    /**
     * Filter the query on the ogle column
     *
     * Example usage:
     * <code>
     * $query->filterByOgle('2011-03-14'); // WHERE ogle = '2011-03-14'
     * $query->filterByOgle('now'); // WHERE ogle = '2011-03-14'
     * $query->filterByOgle(array('max' => 'yesterday')); // WHERE ogle > '2011-03-13'
     * </code>
     *
     * @param     mixed $ogle The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByOgle($ogle = null, $comparison = null)
    {
        if (is_array($ogle)) {
            $useMinMax = false;
            if (isset($ogle['min'])) {
                $this->addUsingAlias(EntityNamazPeer::OGLE, $ogle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ogle['max'])) {
                $this->addUsingAlias(EntityNamazPeer::OGLE, $ogle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityNamazPeer::OGLE, $ogle, $comparison);
    }

    /**
     * Filter the query on the ikindi column
     *
     * Example usage:
     * <code>
     * $query->filterByIkindi('2011-03-14'); // WHERE ikindi = '2011-03-14'
     * $query->filterByIkindi('now'); // WHERE ikindi = '2011-03-14'
     * $query->filterByIkindi(array('max' => 'yesterday')); // WHERE ikindi > '2011-03-13'
     * </code>
     *
     * @param     mixed $ikindi The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByIkindi($ikindi = null, $comparison = null)
    {
        if (is_array($ikindi)) {
            $useMinMax = false;
            if (isset($ikindi['min'])) {
                $this->addUsingAlias(EntityNamazPeer::IKINDI, $ikindi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ikindi['max'])) {
                $this->addUsingAlias(EntityNamazPeer::IKINDI, $ikindi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityNamazPeer::IKINDI, $ikindi, $comparison);
    }

    /**
     * Filter the query on the aksam column
     *
     * Example usage:
     * <code>
     * $query->filterByAksam('2011-03-14'); // WHERE aksam = '2011-03-14'
     * $query->filterByAksam('now'); // WHERE aksam = '2011-03-14'
     * $query->filterByAksam(array('max' => 'yesterday')); // WHERE aksam > '2011-03-13'
     * </code>
     *
     * @param     mixed $aksam The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByAksam($aksam = null, $comparison = null)
    {
        if (is_array($aksam)) {
            $useMinMax = false;
            if (isset($aksam['min'])) {
                $this->addUsingAlias(EntityNamazPeer::AKSAM, $aksam['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aksam['max'])) {
                $this->addUsingAlias(EntityNamazPeer::AKSAM, $aksam['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityNamazPeer::AKSAM, $aksam, $comparison);
    }

    /**
     * Filter the query on the yatsi column
     *
     * Example usage:
     * <code>
     * $query->filterByYatsi('2011-03-14'); // WHERE yatsi = '2011-03-14'
     * $query->filterByYatsi('now'); // WHERE yatsi = '2011-03-14'
     * $query->filterByYatsi(array('max' => 'yesterday')); // WHERE yatsi > '2011-03-13'
     * </code>
     *
     * @param     mixed $yatsi The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function filterByYatsi($yatsi = null, $comparison = null)
    {
        if (is_array($yatsi)) {
            $useMinMax = false;
            if (isset($yatsi['min'])) {
                $this->addUsingAlias(EntityNamazPeer::YATSI, $yatsi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yatsi['max'])) {
                $this->addUsingAlias(EntityNamazPeer::YATSI, $yatsi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityNamazPeer::YATSI, $yatsi, $comparison);
    }

    /**
     * Filter the query by a related EntityCity object
     *
     * @param   EntityCity|PropelObjectCollection $city The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EntityNamazQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCity($city, $comparison = null)
    {
        if ($city instanceof EntityCity) {
            return $this
                ->addUsingAlias(EntityNamazPeer::CITY_ID, $city->getId(), $comparison);
        } elseif ($city instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EntityNamazPeer::CITY_ID, $city->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCity() only accepts arguments of type EntityCity or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the City relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function joinCity($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('City');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'City');
        }

        return $this;
    }

    /**
     * Use the City relation City object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EntityCityQuery A secondary query class using the current class as primary query
     */
    public function useCityQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCity($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'City', 'EntityCityQuery');
    }

    /**
     * Filter the query by a related EntityDistrict object
     *
     * @param   EntityDistrict|PropelObjectCollection $district The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EntityNamazQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDistrict($district, $comparison = null)
    {
        if ($district instanceof EntityDistrict) {
            return $this
                ->addUsingAlias(EntityNamazPeer::DISTRICT_ID, $district->getId(), $comparison);
        } elseif ($district instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EntityNamazPeer::DISTRICT_ID, $district->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByDistrict() only accepts arguments of type EntityDistrict or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the District relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function joinDistrict($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('District');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'District');
        }

        return $this;
    }

    /**
     * Use the District relation District object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EntityDistrictQuery A secondary query class using the current class as primary query
     */
    public function useDistrictQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDistrict($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'District', 'EntityDistrictQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   EntityNamaz $namaz Object to remove from the list of results
     *
     * @return EntityNamazQuery The current query, for fluid interface
     */
    public function prune($namaz = null)
    {
        if ($namaz) {
            $this->addUsingAlias(EntityNamazPeer::ID, $namaz->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // EntityBaseNamazQuery