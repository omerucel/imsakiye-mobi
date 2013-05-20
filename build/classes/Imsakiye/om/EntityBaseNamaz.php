<?php


/**
 * Base class that represents a row from the 'namaz' table.
 *
 * 
 *
 * @package    propel.generator.Imsakiye.om
 */
abstract class EntityBaseNamaz extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'EntityNamazPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EntityNamazPeer
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
     * The value for the city_id field.
     * @var        int
     */
    protected $city_id;

    /**
     * The value for the district_id field.
     * @var        int
     */
    protected $district_id;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the imsak field.
     * @var        string
     */
    protected $imsak;

    /**
     * The value for the gunes field.
     * @var        string
     */
    protected $gunes;

    /**
     * The value for the ogle field.
     * @var        string
     */
    protected $ogle;

    /**
     * The value for the ikindi field.
     * @var        string
     */
    protected $ikindi;

    /**
     * The value for the aksam field.
     * @var        string
     */
    protected $aksam;

    /**
     * The value for the yatsi field.
     * @var        string
     */
    protected $yatsi;

    /**
     * @var        City
     */
    protected $aCity;

    /**
     * @var        District
     */
    protected $aDistrict;

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
     * Get the [id] column value.
     * 
     * @return   int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [city_id] column value.
     * 
     * @return   int
     */
    public function getCityId()
    {

        return $this->city_id;
    }

    /**
     * Get the [district_id] column value.
     * 
     * @return   int
     */
    public function getDistrictId()
    {

        return $this->district_id;
    }

    /**
     * Get the [optionally formatted] temporal [date] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = '%x')
    {
        if ($this->date === null) {
            return null;
        }


        if ($this->date === '0000-00-00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->date);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [optionally formatted] temporal [imsak] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getImsak($format = '%X')
    {
        if ($this->imsak === null) {
            return null;
        }



        try {
            $dt = new DateTime($this->imsak);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->imsak, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [optionally formatted] temporal [gunes] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getGunes($format = '%X')
    {
        if ($this->gunes === null) {
            return null;
        }



        try {
            $dt = new DateTime($this->gunes);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->gunes, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [optionally formatted] temporal [ogle] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOgle($format = '%X')
    {
        if ($this->ogle === null) {
            return null;
        }



        try {
            $dt = new DateTime($this->ogle);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ogle, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [optionally formatted] temporal [ikindi] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getIkindi($format = '%X')
    {
        if ($this->ikindi === null) {
            return null;
        }



        try {
            $dt = new DateTime($this->ikindi);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ikindi, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [optionally formatted] temporal [aksam] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAksam($format = '%X')
    {
        if ($this->aksam === null) {
            return null;
        }



        try {
            $dt = new DateTime($this->aksam);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->aksam, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [optionally formatted] temporal [yatsi] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getYatsi($format = '%X')
    {
        if ($this->yatsi === null) {
            return null;
        }



        try {
            $dt = new DateTime($this->yatsi);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->yatsi, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Set the value of [id] column.
     * 
     * @param      int $v new value
     * @return   EntityNamaz The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = EntityNamazPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [city_id] column.
     * 
     * @param      int $v new value
     * @return   EntityNamaz The current object (for fluent API support)
     */
    public function setCityId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->city_id !== $v) {
            $this->city_id = $v;
            $this->modifiedColumns[] = EntityNamazPeer::CITY_ID;
        }

        if ($this->aCity !== null && $this->aCity->getId() !== $v) {
            $this->aCity = null;
        }


        return $this;
    } // setCityId()

    /**
     * Set the value of [district_id] column.
     * 
     * @param      int $v new value
     * @return   EntityNamaz The current object (for fluent API support)
     */
    public function setDistrictId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->district_id !== $v) {
            $this->district_id = $v;
            $this->modifiedColumns[] = EntityNamazPeer::DISTRICT_ID;
        }

        if ($this->aDistrict !== null && $this->aDistrict->getId() !== $v) {
            $this->aDistrict = null;
        }


        return $this;
    } // setDistrictId()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   EntityNamaz The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = EntityNamazPeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Sets the value of [imsak] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   EntityNamaz The current object (for fluent API support)
     */
    public function setImsak($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->imsak !== null || $dt !== null) {
            $currentDateAsString = ($this->imsak !== null && $tmpDt = new DateTime($this->imsak)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->imsak = $newDateAsString;
                $this->modifiedColumns[] = EntityNamazPeer::IMSAK;
            }
        } // if either are not null


        return $this;
    } // setImsak()

    /**
     * Sets the value of [gunes] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   EntityNamaz The current object (for fluent API support)
     */
    public function setGunes($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->gunes !== null || $dt !== null) {
            $currentDateAsString = ($this->gunes !== null && $tmpDt = new DateTime($this->gunes)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->gunes = $newDateAsString;
                $this->modifiedColumns[] = EntityNamazPeer::GUNES;
            }
        } // if either are not null


        return $this;
    } // setGunes()

    /**
     * Sets the value of [ogle] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   EntityNamaz The current object (for fluent API support)
     */
    public function setOgle($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ogle !== null || $dt !== null) {
            $currentDateAsString = ($this->ogle !== null && $tmpDt = new DateTime($this->ogle)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ogle = $newDateAsString;
                $this->modifiedColumns[] = EntityNamazPeer::OGLE;
            }
        } // if either are not null


        return $this;
    } // setOgle()

    /**
     * Sets the value of [ikindi] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   EntityNamaz The current object (for fluent API support)
     */
    public function setIkindi($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ikindi !== null || $dt !== null) {
            $currentDateAsString = ($this->ikindi !== null && $tmpDt = new DateTime($this->ikindi)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ikindi = $newDateAsString;
                $this->modifiedColumns[] = EntityNamazPeer::IKINDI;
            }
        } // if either are not null


        return $this;
    } // setIkindi()

    /**
     * Sets the value of [aksam] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   EntityNamaz The current object (for fluent API support)
     */
    public function setAksam($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->aksam !== null || $dt !== null) {
            $currentDateAsString = ($this->aksam !== null && $tmpDt = new DateTime($this->aksam)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->aksam = $newDateAsString;
                $this->modifiedColumns[] = EntityNamazPeer::AKSAM;
            }
        } // if either are not null


        return $this;
    } // setAksam()

    /**
     * Sets the value of [yatsi] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   EntityNamaz The current object (for fluent API support)
     */
    public function setYatsi($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->yatsi !== null || $dt !== null) {
            $currentDateAsString = ($this->yatsi !== null && $tmpDt = new DateTime($this->yatsi)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->yatsi = $newDateAsString;
                $this->modifiedColumns[] = EntityNamazPeer::YATSI;
            }
        } // if either are not null


        return $this;
    } // setYatsi()

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
            $this->city_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->district_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->imsak = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->gunes = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ogle = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->ikindi = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->aksam = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->yatsi = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 10; // 10 = EntityNamazPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating EntityNamaz object", $e);
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

        if ($this->aCity !== null && $this->city_id !== $this->aCity->getId()) {
            $this->aCity = null;
        }
        if ($this->aDistrict !== null && $this->district_id !== $this->aDistrict->getId()) {
            $this->aDistrict = null;
        }
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
            $con = Propel::getConnection(EntityNamazPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EntityNamazPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCity = null;
            $this->aDistrict = null;
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
            $con = Propel::getConnection(EntityNamazPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EntityNamazQuery::create()
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
            $con = Propel::getConnection(EntityNamazPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EntityNamazPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCity !== null) {
                if ($this->aCity->isModified() || $this->aCity->isNew()) {
                    $affectedRows += $this->aCity->save($con);
                }
                $this->setCity($this->aCity);
            }

            if ($this->aDistrict !== null) {
                if ($this->aDistrict->isModified() || $this->aDistrict->isNew()) {
                    $affectedRows += $this->aDistrict->save($con);
                }
                $this->setDistrict($this->aDistrict);
            }

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
     * @param      PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = EntityNamazPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EntityNamazPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EntityNamazPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(EntityNamazPeer::CITY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`CITY_ID`';
        }
        if ($this->isColumnModified(EntityNamazPeer::DISTRICT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`DISTRICT_ID`';
        }
        if ($this->isColumnModified(EntityNamazPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE`';
        }
        if ($this->isColumnModified(EntityNamazPeer::IMSAK)) {
            $modifiedColumns[':p' . $index++]  = '`IMSAK`';
        }
        if ($this->isColumnModified(EntityNamazPeer::GUNES)) {
            $modifiedColumns[':p' . $index++]  = '`GUNES`';
        }
        if ($this->isColumnModified(EntityNamazPeer::OGLE)) {
            $modifiedColumns[':p' . $index++]  = '`OGLE`';
        }
        if ($this->isColumnModified(EntityNamazPeer::IKINDI)) {
            $modifiedColumns[':p' . $index++]  = '`IKINDI`';
        }
        if ($this->isColumnModified(EntityNamazPeer::AKSAM)) {
            $modifiedColumns[':p' . $index++]  = '`AKSAM`';
        }
        if ($this->isColumnModified(EntityNamazPeer::YATSI)) {
            $modifiedColumns[':p' . $index++]  = '`YATSI`';
        }

        $sql = sprintf(
            'INSERT INTO `namaz` (%s) VALUES (%s)',
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
                    case '`CITY_ID`':
						$stmt->bindValue($identifier, $this->city_id, PDO::PARAM_INT);
                        break;
                    case '`DISTRICT_ID`':
						$stmt->bindValue($identifier, $this->district_id, PDO::PARAM_INT);
                        break;
                    case '`DATE`':
						$stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`IMSAK`':
						$stmt->bindValue($identifier, $this->imsak, PDO::PARAM_STR);
                        break;
                    case '`GUNES`':
						$stmt->bindValue($identifier, $this->gunes, PDO::PARAM_STR);
                        break;
                    case '`OGLE`':
						$stmt->bindValue($identifier, $this->ogle, PDO::PARAM_STR);
                        break;
                    case '`IKINDI`':
						$stmt->bindValue($identifier, $this->ikindi, PDO::PARAM_STR);
                        break;
                    case '`AKSAM`':
						$stmt->bindValue($identifier, $this->aksam, PDO::PARAM_STR);
                        break;
                    case '`YATSI`':
						$stmt->bindValue($identifier, $this->yatsi, PDO::PARAM_STR);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCity !== null) {
                if (!$this->aCity->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCity->getValidationFailures());
                }
            }

            if ($this->aDistrict !== null) {
                if (!$this->aDistrict->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDistrict->getValidationFailures());
                }
            }


            if (($retval = EntityNamazPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = EntityNamazPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCityId();
                break;
            case 2:
                return $this->getDistrictId();
                break;
            case 3:
                return $this->getDate();
                break;
            case 4:
                return $this->getImsak();
                break;
            case 5:
                return $this->getGunes();
                break;
            case 6:
                return $this->getOgle();
                break;
            case 7:
                return $this->getIkindi();
                break;
            case 8:
                return $this->getAksam();
                break;
            case 9:
                return $this->getYatsi();
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
        if (isset($alreadyDumpedObjects['EntityNamaz'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['EntityNamaz'][$this->getPrimaryKey()] = true;
        $keys = EntityNamazPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getCityId(),
            $keys[2] => $this->getDistrictId(),
            $keys[3] => $this->getDate(),
            $keys[4] => $this->getImsak(),
            $keys[5] => $this->getGunes(),
            $keys[6] => $this->getOgle(),
            $keys[7] => $this->getIkindi(),
            $keys[8] => $this->getAksam(),
            $keys[9] => $this->getYatsi(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCity) {
                $result['City'] = $this->aCity->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aDistrict) {
                $result['District'] = $this->aDistrict->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = EntityNamazPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCityId($value);
                break;
            case 2:
                $this->setDistrictId($value);
                break;
            case 3:
                $this->setDate($value);
                break;
            case 4:
                $this->setImsak($value);
                break;
            case 5:
                $this->setGunes($value);
                break;
            case 6:
                $this->setOgle($value);
                break;
            case 7:
                $this->setIkindi($value);
                break;
            case 8:
                $this->setAksam($value);
                break;
            case 9:
                $this->setYatsi($value);
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
        $keys = EntityNamazPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCityId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDistrictId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDate($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setImsak($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setGunes($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOgle($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIkindi($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAksam($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setYatsi($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EntityNamazPeer::DATABASE_NAME);

        if ($this->isColumnModified(EntityNamazPeer::ID)) $criteria->add(EntityNamazPeer::ID, $this->id);
        if ($this->isColumnModified(EntityNamazPeer::CITY_ID)) $criteria->add(EntityNamazPeer::CITY_ID, $this->city_id);
        if ($this->isColumnModified(EntityNamazPeer::DISTRICT_ID)) $criteria->add(EntityNamazPeer::DISTRICT_ID, $this->district_id);
        if ($this->isColumnModified(EntityNamazPeer::DATE)) $criteria->add(EntityNamazPeer::DATE, $this->date);
        if ($this->isColumnModified(EntityNamazPeer::IMSAK)) $criteria->add(EntityNamazPeer::IMSAK, $this->imsak);
        if ($this->isColumnModified(EntityNamazPeer::GUNES)) $criteria->add(EntityNamazPeer::GUNES, $this->gunes);
        if ($this->isColumnModified(EntityNamazPeer::OGLE)) $criteria->add(EntityNamazPeer::OGLE, $this->ogle);
        if ($this->isColumnModified(EntityNamazPeer::IKINDI)) $criteria->add(EntityNamazPeer::IKINDI, $this->ikindi);
        if ($this->isColumnModified(EntityNamazPeer::AKSAM)) $criteria->add(EntityNamazPeer::AKSAM, $this->aksam);
        if ($this->isColumnModified(EntityNamazPeer::YATSI)) $criteria->add(EntityNamazPeer::YATSI, $this->yatsi);

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
        $criteria = new Criteria(EntityNamazPeer::DATABASE_NAME);
        $criteria->add(EntityNamazPeer::ID, $this->id);

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
     * @param      object $copyObj An object of EntityNamaz (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCityId($this->getCityId());
        $copyObj->setDistrictId($this->getDistrictId());
        $copyObj->setDate($this->getDate());
        $copyObj->setImsak($this->getImsak());
        $copyObj->setGunes($this->getGunes());
        $copyObj->setOgle($this->getOgle());
        $copyObj->setIkindi($this->getIkindi());
        $copyObj->setAksam($this->getAksam());
        $copyObj->setYatsi($this->getYatsi());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return                 EntityNamaz Clone of current object.
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
     * @return   EntityNamazPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EntityNamazPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a EntityCity object.
     *
     * @param                  EntityCity $v
     * @return                 EntityNamaz The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCity(EntityCity $v = null)
    {
        if ($v === null) {
            $this->setCityId(NULL);
        } else {
            $this->setCityId($v->getId());
        }

        $this->aCity = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the EntityCity object, it will not be re-added.
        if ($v !== null) {
            $v->addNamaz($this);
        }


        return $this;
    }


    /**
     * Get the associated EntityCity object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 EntityCity The associated EntityCity object.
     * @throws PropelException
     */
    public function getCity(PropelPDO $con = null)
    {
        if ($this->aCity === null && ($this->city_id !== null)) {
            $this->aCity = EntityCityQuery::create()->findPk($this->city_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCity->addNamazs($this);
             */
        }

        return $this->aCity;
    }

    /**
     * Declares an association between this object and a EntityDistrict object.
     *
     * @param                  EntityDistrict $v
     * @return                 EntityNamaz The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDistrict(EntityDistrict $v = null)
    {
        if ($v === null) {
            $this->setDistrictId(NULL);
        } else {
            $this->setDistrictId($v->getId());
        }

        $this->aDistrict = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the EntityDistrict object, it will not be re-added.
        if ($v !== null) {
            $v->addNamaz($this);
        }


        return $this;
    }


    /**
     * Get the associated EntityDistrict object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 EntityDistrict The associated EntityDistrict object.
     * @throws PropelException
     */
    public function getDistrict(PropelPDO $con = null)
    {
        if ($this->aDistrict === null && ($this->district_id !== null)) {
            $this->aDistrict = EntityDistrictQuery::create()->findPk($this->district_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDistrict->addNamazs($this);
             */
        }

        return $this->aDistrict;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->city_id = null;
        $this->district_id = null;
        $this->date = null;
        $this->imsak = null;
        $this->gunes = null;
        $this->ogle = null;
        $this->ikindi = null;
        $this->aksam = null;
        $this->yatsi = null;
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
        } // if ($deep)

        $this->aCity = null;
        $this->aDistrict = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EntityNamazPeer::DEFAULT_STRING_FORMAT);
    }

} // EntityBaseNamaz
