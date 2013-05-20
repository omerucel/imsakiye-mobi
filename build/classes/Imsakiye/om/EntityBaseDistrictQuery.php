<?php


/**
 * Base class that represents a query for the 'district' table.
 *
 * 
 *
 * @method     EntityDistrictQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EntityDistrictQuery orderByCityId($order = Criteria::ASC) Order by the city_id column
 * @method     EntityDistrictQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     EntityDistrictQuery orderByLat($order = Criteria::ASC) Order by the lat column
 * @method     EntityDistrictQuery orderByLng($order = Criteria::ASC) Order by the lng column
 * @method     EntityDistrictQuery orderByMinLat($order = Criteria::ASC) Order by the min_lat column
 * @method     EntityDistrictQuery orderByMaxLat($order = Criteria::ASC) Order by the max_lat column
 * @method     EntityDistrictQuery orderByMinLng($order = Criteria::ASC) Order by the min_lng column
 * @method     EntityDistrictQuery orderByMaxLng($order = Criteria::ASC) Order by the max_lng column
 *
 * @method     EntityDistrictQuery groupById() Group by the id column
 * @method     EntityDistrictQuery groupByCityId() Group by the city_id column
 * @method     EntityDistrictQuery groupByName() Group by the name column
 * @method     EntityDistrictQuery groupByLat() Group by the lat column
 * @method     EntityDistrictQuery groupByLng() Group by the lng column
 * @method     EntityDistrictQuery groupByMinLat() Group by the min_lat column
 * @method     EntityDistrictQuery groupByMaxLat() Group by the max_lat column
 * @method     EntityDistrictQuery groupByMinLng() Group by the min_lng column
 * @method     EntityDistrictQuery groupByMaxLng() Group by the max_lng column
 *
 * @method     EntityDistrictQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EntityDistrictQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EntityDistrictQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EntityDistrictQuery leftJoinCity($relationAlias = null) Adds a LEFT JOIN clause to the query using the City relation
 * @method     EntityDistrictQuery rightJoinCity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the City relation
 * @method     EntityDistrictQuery innerJoinCity($relationAlias = null) Adds a INNER JOIN clause to the query using the City relation
 *
 * @method     EntityDistrictQuery leftJoinNamaz($relationAlias = null) Adds a LEFT JOIN clause to the query using the Namaz relation
 * @method     EntityDistrictQuery rightJoinNamaz($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Namaz relation
 * @method     EntityDistrictQuery innerJoinNamaz($relationAlias = null) Adds a INNER JOIN clause to the query using the Namaz relation
 *
 * @method     EntityDistrict findOne(PropelPDO $con = null) Return the first EntityDistrict matching the query
 * @method     EntityDistrict findOneOrCreate(PropelPDO $con = null) Return the first EntityDistrict matching the query, or a new EntityDistrict object populated from the query conditions when no match is found
 *
 * @method     EntityDistrict findOneById(int $id) Return the first EntityDistrict filtered by the id column
 * @method     EntityDistrict findOneByCityId(int $city_id) Return the first EntityDistrict filtered by the city_id column
 * @method     EntityDistrict findOneByName(string $name) Return the first EntityDistrict filtered by the name column
 * @method     EntityDistrict findOneByLat(string $lat) Return the first EntityDistrict filtered by the lat column
 * @method     EntityDistrict findOneByLng(string $lng) Return the first EntityDistrict filtered by the lng column
 * @method     EntityDistrict findOneByMinLat(string $min_lat) Return the first EntityDistrict filtered by the min_lat column
 * @method     EntityDistrict findOneByMaxLat(string $max_lat) Return the first EntityDistrict filtered by the max_lat column
 * @method     EntityDistrict findOneByMinLng(string $min_lng) Return the first EntityDistrict filtered by the min_lng column
 * @method     EntityDistrict findOneByMaxLng(string $max_lng) Return the first EntityDistrict filtered by the max_lng column
 *
 * @method     array findById(int $id) Return EntityDistrict objects filtered by the id column
 * @method     array findByCityId(int $city_id) Return EntityDistrict objects filtered by the city_id column
 * @method     array findByName(string $name) Return EntityDistrict objects filtered by the name column
 * @method     array findByLat(string $lat) Return EntityDistrict objects filtered by the lat column
 * @method     array findByLng(string $lng) Return EntityDistrict objects filtered by the lng column
 * @method     array findByMinLat(string $min_lat) Return EntityDistrict objects filtered by the min_lat column
 * @method     array findByMaxLat(string $max_lat) Return EntityDistrict objects filtered by the max_lat column
 * @method     array findByMinLng(string $min_lng) Return EntityDistrict objects filtered by the min_lng column
 * @method     array findByMaxLng(string $max_lng) Return EntityDistrict objects filtered by the max_lng column
 *
 * @package    propel.generator.Imsakiye.om
 */
abstract class EntityBaseDistrictQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of EntityBaseDistrictQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Imsakiye', $modelName = 'EntityDistrict', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EntityDistrictQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EntityDistrictQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EntityDistrictQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EntityDistrictQuery) {
            return $criteria;
        }
        $query = new EntityDistrictQuery();
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
     * @return   EntityDistrict|EntityDistrict[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EntityDistrictPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EntityDistrictPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   EntityDistrict A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `CITY_ID`, `NAME`, `LAT`, `LNG`, `MIN_LAT`, `MAX_LAT`, `MIN_LNG`, `MAX_LNG` FROM `district` WHERE `ID` = :p0';
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
            $obj = new EntityDistrict();
            $obj->hydrate($row);
            EntityDistrictPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EntityDistrict|EntityDistrict[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EntityDistrict[]|mixed the list of results, formatted by the current formatter
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
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EntityDistrictPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EntityDistrictPeer::ID, $keys, Criteria::IN);
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
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EntityDistrictPeer::ID, $id, $comparison);
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
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterByCityId($cityId = null, $comparison = null)
    {
        if (is_array($cityId)) {
            $useMinMax = false;
            if (isset($cityId['min'])) {
                $this->addUsingAlias(EntityDistrictPeer::CITY_ID, $cityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cityId['max'])) {
                $this->addUsingAlias(EntityDistrictPeer::CITY_ID, $cityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityDistrictPeer::CITY_ID, $cityId, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntityDistrictPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the lat column
     *
     * Example usage:
     * <code>
     * $query->filterByLat('fooValue');   // WHERE lat = 'fooValue'
     * $query->filterByLat('%fooValue%'); // WHERE lat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterByLat($lat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lat)) {
                $lat = str_replace('*', '%', $lat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntityDistrictPeer::LAT, $lat, $comparison);
    }

    /**
     * Filter the query on the lng column
     *
     * Example usage:
     * <code>
     * $query->filterByLng('fooValue');   // WHERE lng = 'fooValue'
     * $query->filterByLng('%fooValue%'); // WHERE lng LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lng The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterByLng($lng = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lng)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lng)) {
                $lng = str_replace('*', '%', $lng);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntityDistrictPeer::LNG, $lng, $comparison);
    }

    /**
     * Filter the query on the min_lat column
     *
     * Example usage:
     * <code>
     * $query->filterByMinLat('fooValue');   // WHERE min_lat = 'fooValue'
     * $query->filterByMinLat('%fooValue%'); // WHERE min_lat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $minLat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterByMinLat($minLat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($minLat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $minLat)) {
                $minLat = str_replace('*', '%', $minLat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntityDistrictPeer::MIN_LAT, $minLat, $comparison);
    }

    /**
     * Filter the query on the max_lat column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxLat('fooValue');   // WHERE max_lat = 'fooValue'
     * $query->filterByMaxLat('%fooValue%'); // WHERE max_lat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maxLat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterByMaxLat($maxLat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maxLat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maxLat)) {
                $maxLat = str_replace('*', '%', $maxLat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntityDistrictPeer::MAX_LAT, $maxLat, $comparison);
    }

    /**
     * Filter the query on the min_lng column
     *
     * Example usage:
     * <code>
     * $query->filterByMinLng('fooValue');   // WHERE min_lng = 'fooValue'
     * $query->filterByMinLng('%fooValue%'); // WHERE min_lng LIKE '%fooValue%'
     * </code>
     *
     * @param     string $minLng The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterByMinLng($minLng = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($minLng)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $minLng)) {
                $minLng = str_replace('*', '%', $minLng);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntityDistrictPeer::MIN_LNG, $minLng, $comparison);
    }

    /**
     * Filter the query on the max_lng column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxLng('fooValue');   // WHERE max_lng = 'fooValue'
     * $query->filterByMaxLng('%fooValue%'); // WHERE max_lng LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maxLng The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function filterByMaxLng($maxLng = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maxLng)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maxLng)) {
                $maxLng = str_replace('*', '%', $maxLng);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntityDistrictPeer::MAX_LNG, $maxLng, $comparison);
    }

    /**
     * Filter the query by a related EntityCity object
     *
     * @param   EntityCity|PropelObjectCollection $city The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EntityDistrictQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCity($city, $comparison = null)
    {
        if ($city instanceof EntityCity) {
            return $this
                ->addUsingAlias(EntityDistrictPeer::CITY_ID, $city->getId(), $comparison);
        } elseif ($city instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EntityDistrictPeer::CITY_ID, $city->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return EntityDistrictQuery The current query, for fluid interface
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
     * Filter the query by a related EntityNamaz object
     *
     * @param   EntityNamaz|PropelObjectCollection $namaz  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EntityDistrictQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByNamaz($namaz, $comparison = null)
    {
        if ($namaz instanceof EntityNamaz) {
            return $this
                ->addUsingAlias(EntityDistrictPeer::ID, $namaz->getDistrictId(), $comparison);
        } elseif ($namaz instanceof PropelObjectCollection) {
            return $this
                ->useNamazQuery()
                ->filterByPrimaryKeys($namaz->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNamaz() only accepts arguments of type EntityNamaz or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Namaz relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function joinNamaz($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Namaz');

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
            $this->addJoinObject($join, 'Namaz');
        }

        return $this;
    }

    /**
     * Use the Namaz relation Namaz object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EntityNamazQuery A secondary query class using the current class as primary query
     */
    public function useNamazQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNamaz($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Namaz', 'EntityNamazQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   EntityDistrict $district Object to remove from the list of results
     *
     * @return EntityDistrictQuery The current query, for fluid interface
     */
    public function prune($district = null)
    {
        if ($district) {
            $this->addUsingAlias(EntityDistrictPeer::ID, $district->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // EntityBaseDistrictQuery