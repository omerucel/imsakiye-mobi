<?php


/**
 * Base class that represents a row from the 'city' table.
 *
 * 
 *
 * @package    propel.generator.Imsakiye.om
 */
abstract class EntityBaseCity extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'EntityCityPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EntityCityPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the lat field.
     * @var        string
     */
    protected $lat;

    /**
     * The value for the lng field.
     * @var        string
     */
    protected $lng;

    /**
     * The value for the min_lat field.
     * @var        string
     */
    protected $min_lat;

    /**
     * The value for the max_lat field.
     * @var        string
     */
    protected $max_lat;

    /**
     * The value for the min_lng field.
     * @var        string
     */
    protected $min_lng;

    /**
     * The value for the max_lng field.
     * @var        string
     */
    protected $max_lng;

    /**
     * @var        PropelObjectCollection|EntityDistrict[] Collection to store aggregation of EntityDistrict objects.
     */
    protected $collDistricts;

    /**
     * @var        PropelObjectCollection|EntityDiyanetMigration[] Collection to store aggregation of EntityDiyanetMigration objects.
     */
    protected $collDiyanetMigrations;

    /**
     * @var        PropelObjectCollection|EntityNamaz[] Collection to store aggregation of EntityNamaz objects.
     */
    protected $collNamazs;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $districtsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $diyanetMigrationsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $namazsScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     * 
     * @return   int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [name] column value.
     * 
     * @return   string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [lat] column value.
     * 
     * @return   string
     */
    public function getLat()
    {

        return $this->lat;
    }

    /**
     * Get the [lng] column value.
     * 
     * @return   string
     */
    public function getLng()
    {

        return $this->lng;
    }

    /**
     * Get the [min_lat] column value.
     * 
     * @return   string
     */
    public function getMinLat()
    {

        return $this->min_lat;
    }

    /**
     * Get the [max_lat] column value.
     * 
     * @return   string
     */
    public function getMaxLat()
    {

        return $this->max_lat;
    }

    /**
     * Get the [min_lng] column value.
     * 
     * @return   string
     */
    public function getMinLng()
    {

        return $this->min_lng;
    }

    /**
     * Get the [max_lng] column value.
     * 
     * @return   string
     */
    public function getMaxLng()
    {

        return $this->max_lng;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param      int $v new value
     * @return   EntityCity The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = EntityCityPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     * 
     * @param      string $v new value
     * @return   EntityCity The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = EntityCityPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [lat] column.
     * 
     * @param      string $v new value
     * @return   EntityCity The current object (for fluent API support)
     */
    public function setLat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lat !== $v) {
            $this->lat = $v;
            $this->modifiedColumns[] = EntityCityPeer::LAT;
        }


        return $this;
    } // setLat()

    /**
     * Set the value of [lng] column.
     * 
     * @param      string $v new value
     * @return   EntityCity The current object (for fluent API support)
     */
    public function setLng($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lng !== $v) {
            $this->lng = $v;
            $this->modifiedColumns[] = EntityCityPeer::LNG;
        }


        return $this;
    } // setLng()

    /**
     * Set the value of [min_lat] column.
     * 
     * @param      string $v new value
     * @return   EntityCity The current object (for fluent API support)
     */
    public function setMinLat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->min_lat !== $v) {
            $this->min_lat = $v;
            $this->modifiedColumns[] = EntityCityPeer::MIN_LAT;
        }


        return $this;
    } // setMinLat()

    /**
     * Set the value of [max_lat] column.
     * 
     * @param      string $v new value
     * @return   EntityCity The current object (for fluent API support)
     */
    public function setMaxLat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->max_lat !== $v) {
            $this->max_lat = $v;
            $this->modifiedColumns[] = EntityCityPeer::MAX_LAT;
        }


        return $this;
    } // setMaxLat()

    /**
     * Set the value of [min_lng] column.
     * 
     * @param      string $v new value
     * @return   EntityCity The current object (for fluent API support)
     */
    public function setMinLng($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->min_lng !== $v) {
            $this->min_lng = $v;
            $this->modifiedColumns[] = EntityCityPeer::MIN_LNG;
        }


        return $this;
    } // setMinLng()

    /**
     * Set the value of [max_lng] column.
     * 
     * @param      string $v new value
     * @return   EntityCity The current object (for fluent API support)
     */
    public function setMaxLng($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->max_lng !== $v) {
            $this->max_lng = $v;
            $this->modifiedColumns[] = EntityCityPeer::MAX_LNG;
        }


        return $this;
    } // setMaxLng()

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
        // otherwise, everything was equal, so return TRUE
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
     * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->lat = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->lng = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->min_lat = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->max_lat = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->min_lng = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->max_lng = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 8; // 8 = EntityCityPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating EntityCity object", $e);
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
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      PropelPDO $con (optional) The PropelPDO connection to use.
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
            $con = Propel::getConnection(EntityCityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EntityCityPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collDistricts = null;

            $this->collDiyanetMigrations = null;

            $this->collNamazs = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      PropelPDO $con
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
            $con = Propel::getConnection(EntityCityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EntityCityQuery::create()
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
     * @param      PropelPDO $con
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
            $con = Propel::getConnection(EntityCityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EntityCityPeer::addInstanceToPool($this);
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
     * @param      PropelPDO $con
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

            if ($this->districtsScheduledForDeletion !== null) {
                if (!$this->districtsScheduledForDeletion->isEmpty()) {
                    EntityDistrictQuery::create()
                        ->filterByPrimaryKeys($this->districtsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->districtsScheduledForDeletion = null;
                }
            }

            if ($this->collDistricts !== null) {
                foreach ($this->collDistricts as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->diyanetMigrationsScheduledForDeletion !== null) {
                if (!$this->diyanetMigrationsScheduledForDeletion->isEmpty()) {
                    EntityDiyanetMigrationQuery::create()
                        ->filterByPrimaryKeys($this->diyanetMigrationsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->diyanetMigrationsScheduledForDeletion = null;
                }
            }

            if ($this->collDiyanetMigrations !== null) {
                foreach ($this->collDiyanetMigrations as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->namazsScheduledForDeletion !== null) {
                if (!$this->namazsScheduledForDeletion->isEmpty()) {
                    EntityNamazQuery::create()
                        ->filterByPrimaryKeys($this->namazsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->namazsScheduledForDeletion = null;
                }
            }

            if ($this->collNamazs !== null) {
                foreach ($this->collNamazs as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = EntityCityPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EntityCityPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EntityCityPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(EntityCityPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`NAME`';
        }
        if ($this->isColumnModified(EntityCityPeer::LAT)) {
            $modifiedColumns[':p' . $index++]  = '`LAT`';
        }
        if ($this->isColumnModified(EntityCityPeer::LNG)) {
            $modifiedColumns[':p' . $index++]  = '`LNG`';
        }
        if ($this->isColumnModified(EntityCityPeer::MIN_LAT)) {
            $modifiedColumns[':p' . $index++]  = '`MIN_LAT`';
        }
        if ($this->isColumnModified(EntityCityPeer::MAX_LAT)) {
            $modifiedColumns[':p' . $index++]  = '`MAX_LAT`';
        }
        if ($this->isColumnModified(EntityCityPeer::MIN_LNG)) {
            $modifiedColumns[':p' . $index++]  = '`MIN_LNG`';
        }
        if ($this->isColumnModified(EntityCityPeer::MAX_LNG)) {
            $modifiedColumns[':p' . $index++]  = '`MAX_LNG`';
        }

        $sql = sprintf(
            'INSERT INTO `city` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':
						$stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`LAT`':
						$stmt->bindValue($identifier, $this->lat, PDO::PARAM_STR);
                        break;
                    case '`LNG`':
						$stmt->bindValue($identifier, $this->lng, PDO::PARAM_STR);
                        break;
                    case '`MIN_LAT`':
						$stmt->bindValue($identifier, $this->min_lat, PDO::PARAM_STR);
                        break;
                    case '`MAX_LAT`':
						$stmt->bindValue($identifier, $this->max_lat, PDO::PARAM_STR);
                        break;
                    case '`MIN_LNG`':
						$stmt->bindValue($identifier, $this->min_lng, PDO::PARAM_STR);
                        break;
                    case '`MAX_LNG`':
						$stmt->bindValue($identifier, $this->max_lng, PDO::PARAM_STR);
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
     * @param      PropelPDO $con
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
     * @param      mixed $columns Column name or an array of column names.
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
        } else {
            $this->validationFailures = $res;

            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param      array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = EntityCityPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collDistricts !== null) {
                    foreach ($this->collDistricts as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDiyanetMigrations !== null) {
                    foreach ($this->collDiyanetMigrations as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collNamazs !== null) {
                    foreach ($this->collNamazs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = EntityCityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getLat();
                break;
            case 3:
                return $this->getLng();
                break;
            case 4:
                return $this->getMinLat();
                break;
            case 5:
                return $this->getMaxLat();
                break;
            case 6:
                return $this->getMinLng();
                break;
            case 7:
                return $this->getMaxLng();
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
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['EntityCity'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['EntityCity'][$this->getPrimaryKey()] = true;
        $keys = EntityCityPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getLat(),
            $keys[3] => $this->getLng(),
            $keys[4] => $this->getMinLat(),
            $keys[5] => $this->getMaxLat(),
            $keys[6] => $this->getMinLng(),
            $keys[7] => $this->getMaxLng(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collDistricts) {
                $result['Districts'] = $this->collDistricts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDiyanetMigrations) {
                $result['DiyanetMigrations'] = $this->collDiyanetMigrations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNamazs) {
                $result['Namazs'] = $this->collNamazs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name peer name
     * @param      mixed $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = EntityCityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @param      mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setLat($value);
                break;
            case 3:
                $this->setLng($value);
                break;
            case 4:
                $this->setMinLat($value);
                break;
            case 5:
                $this->setMaxLat($value);
                break;
            case 6:
                $this->setMinLng($value);
                break;
            case 7:
                $this->setMaxLng($value);
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
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = EntityCityPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLat($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLng($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMinLat($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMaxLat($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMinLng($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMaxLng($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EntityCityPeer::DATABASE_NAME);

        if ($this->isColumnModified(EntityCityPeer::ID)) $criteria->add(EntityCityPeer::ID, $this->id);
        if ($this->isColumnModified(EntityCityPeer::NAME)) $criteria->add(EntityCityPeer::NAME, $this->name);
        if ($this->isColumnModified(EntityCityPeer::LAT)) $criteria->add(EntityCityPeer::LAT, $this->lat);
        if ($this->isColumnModified(EntityCityPeer::LNG)) $criteria->add(EntityCityPeer::LNG, $this->lng);
        if ($this->isColumnModified(EntityCityPeer::MIN_LAT)) $criteria->add(EntityCityPeer::MIN_LAT, $this->min_lat);
        if ($this->isColumnModified(EntityCityPeer::MAX_LAT)) $criteria->add(EntityCityPeer::MAX_LAT, $this->max_lat);
        if ($this->isColumnModified(EntityCityPeer::MIN_LNG)) $criteria->add(EntityCityPeer::MIN_LNG, $this->min_lng);
        if ($this->isColumnModified(EntityCityPeer::MAX_LNG)) $criteria->add(EntityCityPeer::MAX_LNG, $this->max_lng);

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
        $criteria = new Criteria(EntityCityPeer::DATABASE_NAME);
        $criteria->add(EntityCityPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
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
     * @param      object $copyObj An object of EntityCity (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setLat($this->getLat());
        $copyObj->setLng($this->getLng());
        $copyObj->setMinLat($this->getMinLat());
        $copyObj->setMaxLat($this->getMaxLat());
        $copyObj->setMinLng($this->getMinLng());
        $copyObj->setMaxLng($this->getMaxLng());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getDistricts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDistrict($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDiyanetMigrations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDiyanetMigration($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getNamazs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addNamaz($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

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
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return                 EntityCity Clone of current object.
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
     * @return   EntityCityPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EntityCityPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('District' == $relationName) {
            $this->initDistricts();
        }
        if ('DiyanetMigration' == $relationName) {
            $this->initDiyanetMigrations();
        }
        if ('Namaz' == $relationName) {
            $this->initNamazs();
        }
    }

    /**
     * Clears out the collDistricts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addDistricts()
     */
    public function clearDistricts()
    {
        $this->collDistricts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collDistricts collection.
     *
     * By default this just sets the collDistricts collection to an empty array (like clearcollDistricts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDistricts($overrideExisting = true)
    {
        if (null !== $this->collDistricts && !$overrideExisting) {
            return;
        }
        $this->collDistricts = new PropelObjectCollection();
        $this->collDistricts->setModel('EntityDistrict');
    }

    /**
     * Gets an array of EntityDistrict objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this EntityCity is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|EntityDistrict[] List of EntityDistrict objects
     * @throws PropelException
     */
    public function getDistricts($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collDistricts || null !== $criteria) {
            if ($this->isNew() && null === $this->collDistricts) {
                // return empty collection
                $this->initDistricts();
            } else {
                $collDistricts = EntityDistrictQuery::create(null, $criteria)
                    ->filterByCity($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collDistricts;
                }
                $this->collDistricts = $collDistricts;
            }
        }

        return $this->collDistricts;
    }

    /**
     * Sets a collection of District objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $districts A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setDistricts(PropelCollection $districts, PropelPDO $con = null)
    {
        $this->districtsScheduledForDeletion = $this->getDistricts(new Criteria(), $con)->diff($districts);

        foreach ($this->districtsScheduledForDeletion as $districtRemoved) {
            $districtRemoved->setCity(null);
        }

        $this->collDistricts = null;
        foreach ($districts as $district) {
            $this->addDistrict($district);
        }

        $this->collDistricts = $districts;
    }

    /**
     * Returns the number of related EntityDistrict objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related EntityDistrict objects.
     * @throws PropelException
     */
    public function countDistricts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collDistricts || null !== $criteria) {
            if ($this->isNew() && null === $this->collDistricts) {
                return 0;
            } else {
                $query = EntityDistrictQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByCity($this)
                    ->count($con);
            }
        } else {
            return count($this->collDistricts);
        }
    }

    /**
     * Method called to associate a EntityDistrict object to this object
     * through the EntityDistrict foreign key attribute.
     *
     * @param    EntityDistrict $l EntityDistrict
     * @return   EntityCity The current object (for fluent API support)
     */
    public function addDistrict(EntityDistrict $l)
    {
        if ($this->collDistricts === null) {
            $this->initDistricts();
        }
        if (!$this->collDistricts->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddDistrict($l);
        }

        return $this;
    }

    /**
     * @param	District $district The district object to add.
     */
    protected function doAddDistrict($district)
    {
        $this->collDistricts[]= $district;
        $district->setCity($this);
    }

    /**
     * @param	District $district The district object to remove.
     */
    public function removeDistrict($district)
    {
        if ($this->getDistricts()->contains($district)) {
            $this->collDistricts->remove($this->collDistricts->search($district));
            if (null === $this->districtsScheduledForDeletion) {
                $this->districtsScheduledForDeletion = clone $this->collDistricts;
                $this->districtsScheduledForDeletion->clear();
            }
            $this->districtsScheduledForDeletion[]= $district;
            $district->setCity(null);
        }
    }

    /**
     * Clears out the collDiyanetMigrations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addDiyanetMigrations()
     */
    public function clearDiyanetMigrations()
    {
        $this->collDiyanetMigrations = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collDiyanetMigrations collection.
     *
     * By default this just sets the collDiyanetMigrations collection to an empty array (like clearcollDiyanetMigrations());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDiyanetMigrations($overrideExisting = true)
    {
        if (null !== $this->collDiyanetMigrations && !$overrideExisting) {
            return;
        }
        $this->collDiyanetMigrations = new PropelObjectCollection();
        $this->collDiyanetMigrations->setModel('EntityDiyanetMigration');
    }

    /**
     * Gets an array of EntityDiyanetMigration objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this EntityCity is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|EntityDiyanetMigration[] List of EntityDiyanetMigration objects
     * @throws PropelException
     */
    public function getDiyanetMigrations($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collDiyanetMigrations || null !== $criteria) {
            if ($this->isNew() && null === $this->collDiyanetMigrations) {
                // return empty collection
                $this->initDiyanetMigrations();
            } else {
                $collDiyanetMigrations = EntityDiyanetMigrationQuery::create(null, $criteria)
                    ->filterByCity($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collDiyanetMigrations;
                }
                $this->collDiyanetMigrations = $collDiyanetMigrations;
            }
        }

        return $this->collDiyanetMigrations;
    }

    /**
     * Sets a collection of DiyanetMigration objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $diyanetMigrations A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setDiyanetMigrations(PropelCollection $diyanetMigrations, PropelPDO $con = null)
    {
        $this->diyanetMigrationsScheduledForDeletion = $this->getDiyanetMigrations(new Criteria(), $con)->diff($diyanetMigrations);

        foreach ($this->diyanetMigrationsScheduledForDeletion as $diyanetMigrationRemoved) {
            $diyanetMigrationRemoved->setCity(null);
        }

        $this->collDiyanetMigrations = null;
        foreach ($diyanetMigrations as $diyanetMigration) {
            $this->addDiyanetMigration($diyanetMigration);
        }

        $this->collDiyanetMigrations = $diyanetMigrations;
    }

    /**
     * Returns the number of related EntityDiyanetMigration objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related EntityDiyanetMigration objects.
     * @throws PropelException
     */
    public function countDiyanetMigrations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collDiyanetMigrations || null !== $criteria) {
            if ($this->isNew() && null === $this->collDiyanetMigrations) {
                return 0;
            } else {
                $query = EntityDiyanetMigrationQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByCity($this)
                    ->count($con);
            }
        } else {
            return count($this->collDiyanetMigrations);
        }
    }

    /**
     * Method called to associate a EntityDiyanetMigration object to this object
     * through the EntityDiyanetMigration foreign key attribute.
     *
     * @param    EntityDiyanetMigration $l EntityDiyanetMigration
     * @return   EntityCity The current object (for fluent API support)
     */
    public function addDiyanetMigration(EntityDiyanetMigration $l)
    {
        if ($this->collDiyanetMigrations === null) {
            $this->initDiyanetMigrations();
        }
        if (!$this->collDiyanetMigrations->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddDiyanetMigration($l);
        }

        return $this;
    }

    /**
     * @param	DiyanetMigration $diyanetMigration The diyanetMigration object to add.
     */
    protected function doAddDiyanetMigration($diyanetMigration)
    {
        $this->collDiyanetMigrations[]= $diyanetMigration;
        $diyanetMigration->setCity($this);
    }

    /**
     * @param	DiyanetMigration $diyanetMigration The diyanetMigration object to remove.
     */
    public function removeDiyanetMigration($diyanetMigration)
    {
        if ($this->getDiyanetMigrations()->contains($diyanetMigration)) {
            $this->collDiyanetMigrations->remove($this->collDiyanetMigrations->search($diyanetMigration));
            if (null === $this->diyanetMigrationsScheduledForDeletion) {
                $this->diyanetMigrationsScheduledForDeletion = clone $this->collDiyanetMigrations;
                $this->diyanetMigrationsScheduledForDeletion->clear();
            }
            $this->diyanetMigrationsScheduledForDeletion[]= $diyanetMigration;
            $diyanetMigration->setCity(null);
        }
    }

    /**
     * Clears out the collNamazs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addNamazs()
     */
    public function clearNamazs()
    {
        $this->collNamazs = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collNamazs collection.
     *
     * By default this just sets the collNamazs collection to an empty array (like clearcollNamazs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initNamazs($overrideExisting = true)
    {
        if (null !== $this->collNamazs && !$overrideExisting) {
            return;
        }
        $this->collNamazs = new PropelObjectCollection();
        $this->collNamazs->setModel('EntityNamaz');
    }

    /**
     * Gets an array of EntityNamaz objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this EntityCity is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|EntityNamaz[] List of EntityNamaz objects
     * @throws PropelException
     */
    public function getNamazs($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collNamazs || null !== $criteria) {
            if ($this->isNew() && null === $this->collNamazs) {
                // return empty collection
                $this->initNamazs();
            } else {
                $collNamazs = EntityNamazQuery::create(null, $criteria)
                    ->filterByCity($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collNamazs;
                }
                $this->collNamazs = $collNamazs;
            }
        }

        return $this->collNamazs;
    }

    /**
     * Sets a collection of Namaz objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $namazs A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setNamazs(PropelCollection $namazs, PropelPDO $con = null)
    {
        $this->namazsScheduledForDeletion = $this->getNamazs(new Criteria(), $con)->diff($namazs);

        foreach ($this->namazsScheduledForDeletion as $namazRemoved) {
            $namazRemoved->setCity(null);
        }

        $this->collNamazs = null;
        foreach ($namazs as $namaz) {
            $this->addNamaz($namaz);
        }

        $this->collNamazs = $namazs;
    }

    /**
     * Returns the number of related EntityNamaz objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related EntityNamaz objects.
     * @throws PropelException
     */
    public function countNamazs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collNamazs || null !== $criteria) {
            if ($this->isNew() && null === $this->collNamazs) {
                return 0;
            } else {
                $query = EntityNamazQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByCity($this)
                    ->count($con);
            }
        } else {
            return count($this->collNamazs);
        }
    }

    /**
     * Method called to associate a EntityNamaz object to this object
     * through the EntityNamaz foreign key attribute.
     *
     * @param    EntityNamaz $l EntityNamaz
     * @return   EntityCity The current object (for fluent API support)
     */
    public function addNamaz(EntityNamaz $l)
    {
        if ($this->collNamazs === null) {
            $this->initNamazs();
        }
        if (!$this->collNamazs->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddNamaz($l);
        }

        return $this;
    }

    /**
     * @param	Namaz $namaz The namaz object to add.
     */
    protected function doAddNamaz($namaz)
    {
        $this->collNamazs[]= $namaz;
        $namaz->setCity($this);
    }

    /**
     * @param	Namaz $namaz The namaz object to remove.
     */
    public function removeNamaz($namaz)
    {
        if ($this->getNamazs()->contains($namaz)) {
            $this->collNamazs->remove($this->collNamazs->search($namaz));
            if (null === $this->namazsScheduledForDeletion) {
                $this->namazsScheduledForDeletion = clone $this->collNamazs;
                $this->namazsScheduledForDeletion->clear();
            }
            $this->namazsScheduledForDeletion[]= $namaz;
            $namaz->setCity(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this City is new, it will return
     * an empty collection; or if this City has previously
     * been saved, it will retrieve related Namazs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in City.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EntityNamaz[] List of EntityNamaz objects
     */
    public function getNamazsJoinDistrict($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EntityNamazQuery::create(null, $criteria);
        $query->joinWith('District', $join_behavior);

        return $this->getNamazs($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->lat = null;
        $this->lng = null;
        $this->min_lat = null;
        $this->max_lat = null;
        $this->min_lng = null;
        $this->max_lng = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
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
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collDistricts) {
                foreach ($this->collDistricts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDiyanetMigrations) {
                foreach ($this->collDiyanetMigrations as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collNamazs) {
                foreach ($this->collNamazs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collDistricts instanceof PropelCollection) {
            $this->collDistricts->clearIterator();
        }
        $this->collDistricts = null;
        if ($this->collDiyanetMigrations instanceof PropelCollection) {
            $this->collDiyanetMigrations->clearIterator();
        }
        $this->collDiyanetMigrations = null;
        if ($this->collNamazs instanceof PropelCollection) {
            $this->collNamazs->clearIterator();
        }
        $this->collNamazs = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EntityCityPeer::DEFAULT_STRING_FORMAT);
    }

} // EntityBaseCity
