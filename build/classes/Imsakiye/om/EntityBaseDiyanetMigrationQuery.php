<?php


/**
 * Base class that represents a query for the 'diyanet_migration' table.
 *
 * 
 *
 * @method     EntityDiyanetMigrationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EntityDiyanetMigrationQuery orderByCityId($order = Criteria::ASC) Order by the city_id column
 * @method     EntityDiyanetMigrationQuery orderByDistrictId($order = Criteria::ASC) Order by the district_id column
 * @method     EntityDiyanetMigrationQuery orderByKeyword($order = Criteria::ASC) Order by the keyword column
 *
 * @method     EntityDiyanetMigrationQuery groupById() Group by the id column
 * @method     EntityDiyanetMigrationQuery groupByCityId() Group by the city_id column
 * @method     EntityDiyanetMigrationQuery groupByDistrictId() Group by the district_id column
 * @method     EntityDiyanetMigrationQuery groupByKeyword() Group by the keyword column
 *
 * @method     EntityDiyanetMigrationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EntityDiyanetMigrationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EntityDiyanetMigrationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EntityDiyanetMigrationQuery leftJoinCity($relationAlias = null) Adds a LEFT JOIN clause to the query using the City relation
 * @method     EntityDiyanetMigrationQuery rightJoinCity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the City relation
 * @method     EntityDiyanetMigrationQuery innerJoinCity($relationAlias = null) Adds a INNER JOIN clause to the query using the City relation
 *
 * @method     EntityDiyanetMigration findOne(PropelPDO $con = null) Return the first EntityDiyanetMigration matching the query
 * @method     EntityDiyanetMigration findOneOrCreate(PropelPDO $con = null) Return the first EntityDiyanetMigration matching the query, or a new EntityDiyanetMigration object populated from the query conditions when no match is found
 *
 * @method     EntityDiyanetMigration findOneById(int $id) Return the first EntityDiyanetMigration filtered by the id column
 * @method     EntityDiyanetMigration findOneByCityId(int $city_id) Return the first EntityDiyanetMigration filtered by the city_id column
 * @method     EntityDiyanetMigration findOneByDistrictId(int $district_id) Return the first EntityDiyanetMigration filtered by the district_id column
 * @method     EntityDiyanetMigration findOneByKeyword(string $keyword) Return the first EntityDiyanetMigration filtered by the keyword column
 *
 * @method     array findById(int $id) Return EntityDiyanetMigration objects filtered by the id column
 * @method     array findByCityId(int $city_id) Return EntityDiyanetMigration objects filtered by the city_id column
 * @method     array findByDistrictId(int $district_id) Return EntityDiyanetMigration objects filtered by the district_id column
 * @method     array findByKeyword(string $keyword) Return EntityDiyanetMigration objects filtered by the keyword column
 *
 * @package    propel.generator.Imsakiye.om
 */
abstract class EntityBaseDiyanetMigrationQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of EntityBaseDiyanetMigrationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Imsakiye', $modelName = 'EntityDiyanetMigration', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EntityDiyanetMigrationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EntityDiyanetMigrationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EntityDiyanetMigrationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EntityDiyanetMigrationQuery) {
            return $criteria;
        }
        $query = new EntityDiyanetMigrationQuery();
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
     * @return   EntityDiyanetMigration|EntityDiyanetMigration[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EntityDiyanetMigrationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EntityDiyanetMigrationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   EntityDiyanetMigration A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `CITY_ID`, `DISTRICT_ID`, `KEYWORD` FROM `diyanet_migration` WHERE `ID` = :p0';
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
            $obj = new EntityDiyanetMigration();
            $obj->hydrate($row);
            EntityDiyanetMigrationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EntityDiyanetMigration|EntityDiyanetMigration[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EntityDiyanetMigration[]|mixed the list of results, formatted by the current formatter
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
     * @return EntityDiyanetMigrationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EntityDiyanetMigrationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EntityDiyanetMigrationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EntityDiyanetMigrationPeer::ID, $keys, Criteria::IN);
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
     * @return EntityDiyanetMigrationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EntityDiyanetMigrationPeer::ID, $id, $comparison);
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
     * @return EntityDiyanetMigrationQuery The current query, for fluid interface
     */
    public function filterByCityId($cityId = null, $comparison = null)
    {
        if (is_array($cityId)) {
            $useMinMax = false;
            if (isset($cityId['min'])) {
                $this->addUsingAlias(EntityDiyanetMigrationPeer::CITY_ID, $cityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cityId['max'])) {
                $this->addUsingAlias(EntityDiyanetMigrationPeer::CITY_ID, $cityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityDiyanetMigrationPeer::CITY_ID, $cityId, $comparison);
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
     * @param     mixed $districtId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityDiyanetMigrationQuery The current query, for fluid interface
     */
    public function filterByDistrictId($districtId = null, $comparison = null)
    {
        if (is_array($districtId)) {
            $useMinMax = false;
            if (isset($districtId['min'])) {
                $this->addUsingAlias(EntityDiyanetMigrationPeer::DISTRICT_ID, $districtId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($districtId['max'])) {
                $this->addUsingAlias(EntityDiyanetMigrationPeer::DISTRICT_ID, $districtId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntityDiyanetMigrationPeer::DISTRICT_ID, $districtId, $comparison);
    }

    /**
     * Filter the query on the keyword column
     *
     * Example usage:
     * <code>
     * $query->filterByKeyword('fooValue');   // WHERE keyword = 'fooValue'
     * $query->filterByKeyword('%fooValue%'); // WHERE keyword LIKE '%fooValue%'
     * </code>
     *
     * @param     string $keyword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntityDiyanetMigrationQuery The current query, for fluid interface
     */
    public function filterByKeyword($keyword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($keyword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $keyword)) {
                $keyword = str_replace('*', '%', $keyword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntityDiyanetMigrationPeer::KEYWORD, $keyword, $comparison);
    }

    /**
     * Filter the query by a related EntityCity object
     *
     * @param   EntityCity|PropelObjectCollection $city The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EntityDiyanetMigrationQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCity($city, $comparison = null)
    {
        if ($city instanceof EntityCity) {
            return $this
                ->addUsingAlias(EntityDiyanetMigrationPeer::CITY_ID, $city->getId(), $comparison);
        } elseif ($city instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EntityDiyanetMigrationPeer::CITY_ID, $city->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return EntityDiyanetMigrationQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   EntityDiyanetMigration $diyanetMigration Object to remove from the list of results
     *
     * @return EntityDiyanetMigrationQuery The current query, for fluid interface
     */
    public function prune($diyanetMigration = null)
    {
        if ($diyanetMigration) {
            $this->addUsingAlias(EntityDiyanetMigrationPeer::ID, $diyanetMigration->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // EntityBaseDiyanetMigrationQuery