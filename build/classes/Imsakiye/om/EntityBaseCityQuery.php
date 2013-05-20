<?php


/**
 * Base class that represents a query for the 'city' table.
 *
 * 
 *
 * @method     EntityCityQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EntityCityQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     EntityCityQuery orderByLat($order = Criteria::ASC) Order by the lat column
 * @method     EntityCityQuery orderByLng($order = Criteria::ASC) Order by the lng column
 * @method     EntityCityQuery orderByMinLat($order = Criteria::ASC) Order by the min_lat column
 * @method     EntityCityQuery orderByMaxLat($order = Criteria::ASC) Order by the max_lat column
 * @method     EntityCityQuery orderByMinLng($order = Criteria::ASC) Order by the min_lng column
 * @method     EntityCityQuery orderByMaxLng($order = Criteria::ASC) Order by the max_lng column
 *
 * @method     EntityCityQuery groupById() Group by the id column
 * @method     EntityCityQuery groupByName() Group by the name column
 * @method     EntityCityQuery groupByLat() Group by the lat column
 * @method     EntityCityQuery groupByLng() Group by the lng column
 * @method     EntityCityQuery groupByMinLat() Group by the min_lat column
 * @method     EntityCityQuery groupByMaxLat() Group by the max_lat column
 * @method     EntityCityQuery groupByMinLng() Group by the min_lng column
 * @method     EntityCityQuery groupByMaxLng() Group by the max_lng column
 *
 * @method     EntityCityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EntityCityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EntityCityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EntityCityQuery leftJoinDistrict($relationAlias = null) Adds a LEFT JOIN clause to the query using the District relation
 * @method     EntityCityQuery rightJoinDistrict($relationAlias = null) Adds a RIGHT JOIN clause to the query using the District relation
 * @method     EntityCityQuery innerJoinDistrict($relationAlias = null) Adds a INNER JOIN clause to the query using the District relation
 *
 * @method     EntityCityQuery leftJoinDiyanetMigration($relationAlias = null) Adds a LEFT JOIN clause to the query using the DiyanetMigration relation
 * @method     EntityCityQuery rightJoinDiyanetMigration($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DiyanetMigration relation
 * @method     EntityCityQuery innerJoinDiyanetMigration($relationAlias = null) Adds a INNER JOIN clause to the query using the DiyanetMigration relation
 *
 * @method     EntityCityQuery leftJoinNamaz($relationAlias = null) Adds a LEFT JOIN clause to the query using the Namaz relation
 * @method     EntityCityQuery rightJoinNamaz($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Namaz relation
 * @method     EntityCityQuery innerJoinNamaz($relationAlias = null) Adds a INNER JOIN clause to the query using the Namaz relation
 *
 * @method     EntityCity findOne(PropelPDO $con = null) Return the first EntityCity matching the query
 * @method     EntityCity findOneOrCreate(PropelPDO $con = null) Return the first EntityCity matching the query, or a new EntityCity object populated from the query conditions when no match is found
 *
 * @method     EntityCity findOneById(int $id) Return the first EntityCity filtered by the id column
 * @method     EntityCity findOneByName(string $name) Return the first EntityCity filtered by the name column
 * @method     EntityCity findOneByLat(string $lat) Return the first EntityCity filtered by the lat column
 * @method     EntityCity findOneByLng(string $lng) Return the first EntityCity filtered by the lng column
 * @method     EntityCity findOneByMinLat(string $min_lat) Return the first EntityCity filtered by the min_lat column
 * @method     EntityCity findOneByMaxLat(string $max_lat) Return the first EntityCity filtered by the max_lat column
 * @method     EntityCity findOneByMinLng(string $min_lng) Return the first EntityCity filtered by the min_lng column
 * @method     EntityCity findOneByMaxLng(string $max_lng) Return the first EntityCity filtered by the max_lng column
 *
 * @method     array findById(int $id) Return EntityCity objects filtered by the id column
 * @method     array findByName(string $name) Return EntityCity objects filtered by the name column
 * @method     array findByLat(string $lat) Return EntityCity objects filtered by the lat column
 * @method     array findByLng(string $lng) Return EntityCity objects filtered by the lng column
 * @method     array findByMinLat(string $min_lat) Return EntityCity objects filtered by the min_lat column
 * @method     array findByMaxLat(string $max_lat) Return EntityCity objects filtered by the max_lat column
 * @method     array findByMinLng(string $min_lng) Return EntityCity objects filtered by the min_lng column
 * @method     array findByMaxLng(string $max_lng) Return EntityCity objects filtered by the max_lng column
 *
 * @package    propel.generator.Imsakiye.om
 */
abstract class EntityBaseCityQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of EntityBaseCityQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Imsakiye', $modelName = 'EntityCity', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EntityCityQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EntityCityQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EntityCityQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EntityCityQuery) {
            return $criteria;
        }
        $query = new EntityCityQuery();
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
     * @return   EntityCity|EntityCity[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EntityCityPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EntityCityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   EntityCity A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NAME`, `LAT`, `LNG`, `MIN_LAT`, `MAX_LAT`, `MIN_LNG`, `MAX_LNG` FROM `city` WHERE `ID` = :p0';
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
            $obj = new EntityCity();
            $obj->hydrate($row);
            EntityCityPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EntityCity|EntityCity[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EntityCity[]|mixed the list of results, formatted by the current formatter
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
     * @return EntityCityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EntityCityPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EntityCityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EntityCityPeer::ID, $keys, Criteria::IN);
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
     * @return EntityCityQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EntityCityPeer::ID, $id, $comparison);
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
     * @return EntityCityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntityCityPeer::NAME, $name, $comparison);
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
     * @return EntityCityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntityCityPeer::LAT, $lat, $comparison);
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
     * @return EntityCityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntityCityPeer::LNG, $lng, $comparison);
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
     * @return EntityCityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntityCityPeer::MIN_LAT, $minLat, $comparison);
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
     * @return EntityCityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntityCityPeer::MAX_LAT, $maxLat, $comparison);
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
     * @return EntityCityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntityCityPeer::MIN_LNG, $minLng, $comparison);
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
     * @return EntityCityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntityCityPeer::MAX_LNG, $maxLng, $comparison);
    }

    /**
     * Filter the query by a related EntityDistrict object
     *
     * @param   EntityDistrict|PropelObjectCollection $district  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EntityCityQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDistrict($district, $comparison = null)
    {
        if ($district instanceof EntityDistrict) {
            return $this
                ->addUsingAlias(EntityCityPeer::ID, $district->getCityId(), $comparison);
        } elseif ($district instanceof PropelObjectCollection) {
            return $this
                ->useDistrictQuery()
                ->filterByPrimaryKeys($district->getPrimaryKeys())
                ->endUse();
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
     * @return EntityCityQuery The current query, for fluid interface
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
     * Filter the query by a related EntityDiyanetMigration object
     *
     * @param   EntityDiyanetMigration|PropelObjectCollection $diyanetMigration  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EntityCityQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDiyanetMigration($diyanetMigration, $comparison = null)
    {
        if ($diyanetMigration instanceof EntityDiyanetMigration) {
            return $this
                ->addUsingAlias(EntityCityPeer::ID, $diyanetMigration->getCityId(), $comparison);
        } elseif ($diyanetMigration instanceof PropelObjectCollection) {
            return $this
                ->useDiyanetMigrationQuery()
                ->filterByPrimaryKeys($diyanetMigration->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDiyanetMigration() only accepts arguments of type EntityDiyanetMigration or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DiyanetMigration relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EntityCityQuery The current query, for fluid interface
     */
    public function joinDiyanetMigration($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DiyanetMigration');

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
            $this->addJoinObject($join, 'DiyanetMigration');
        }

        return $this;
    }

    /**
     * Use the DiyanetMigration relation DiyanetMigration object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EntityDiyanetMigrationQuery A secondary query class using the current class as primary query
     */
    public function useDiyanetMigrationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDiyanetMigration($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DiyanetMigration', 'EntityDiyanetMigrationQuery');
    }

    /**
     * Filter the query by a related EntityNamaz object
     *
     * @param   EntityNamaz|PropelObjectCollection $namaz  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EntityCityQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByNamaz($namaz, $comparison = null)
    {
        if ($namaz instanceof EntityNamaz) {
            return $this
                ->addUsingAlias(EntityCityPeer::ID, $namaz->getCityId(), $comparison);
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
     * @return EntityCityQuery The current query, for fluid interface
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
     * @param   EntityCity $city Object to remove from the list of results
     *
     * @return EntityCityQuery The current query, for fluid interface
     */
    public function prune($city = null)
    {
        if ($city) {
            $this->addUsingAlias(EntityCityPeer::ID, $city->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // EntityBaseCityQuery