<?php



/**
 * This class defines the structure of the 'namaz' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.Imsakiye.map
 */
class EntityNamazTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Imsakiye.map.EntityNamazTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('namaz');
        $this->setPhpName('Namaz');
        $this->setClassname('EntityNamaz');
        $this->setPackage('Imsakiye');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignKey('CITY_ID', 'CityId', 'INTEGER', 'city', 'ID', true, 10, null);
        $this->addForeignKey('DISTRICT_ID', 'DistrictId', 'INTEGER', 'district', 'ID', true, 10, null);
        $this->addColumn('DATE', 'Date', 'DATE', true, null, null);
        $this->addColumn('IMSAK', 'Imsak', 'TIME', false, null, null);
        $this->addColumn('GUNES', 'Gunes', 'TIME', false, null, null);
        $this->addColumn('OGLE', 'Ogle', 'TIME', false, null, null);
        $this->addColumn('IKINDI', 'Ikindi', 'TIME', false, null, null);
        $this->addColumn('AKSAM', 'Aksam', 'TIME', false, null, null);
        $this->addColumn('YATSI', 'Yatsi', 'TIME', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('City', 'EntityCity', RelationMap::MANY_TO_ONE, array('city_id' => 'id', ), 'CASCADE', null);
        $this->addRelation('District', 'EntityDistrict', RelationMap::MANY_TO_ONE, array('district_id' => 'id', ), 'CASCADE', null);
    } // buildRelations()

} // EntityNamazTableMap
