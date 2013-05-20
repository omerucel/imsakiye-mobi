<?php



/**
 * This class defines the structure of the 'city' table.
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
class EntityCityTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Imsakiye.map.EntityCityTableMap';

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
        $this->setName('city');
        $this->setPhpName('City');
        $this->setClassname('EntityCity');
        $this->setPackage('Imsakiye');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('LAT', 'Lat', 'VARCHAR', false, 45, null);
        $this->addColumn('LNG', 'Lng', 'VARCHAR', false, 45, null);
        $this->addColumn('MIN_LAT', 'MinLat', 'VARCHAR', false, 45, null);
        $this->addColumn('MAX_LAT', 'MaxLat', 'VARCHAR', false, 45, null);
        $this->addColumn('MIN_LNG', 'MinLng', 'VARCHAR', false, 45, null);
        $this->addColumn('MAX_LNG', 'MaxLng', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('District', 'EntityDistrict', RelationMap::ONE_TO_MANY, array('id' => 'city_id', ), 'CASCADE', null, 'Districts');
        $this->addRelation('DiyanetMigration', 'EntityDiyanetMigration', RelationMap::ONE_TO_MANY, array('id' => 'city_id', ), 'CASCADE', null, 'DiyanetMigrations');
        $this->addRelation('Namaz', 'EntityNamaz', RelationMap::ONE_TO_MANY, array('id' => 'city_id', ), 'CASCADE', null, 'Namazs');
    } // buildRelations()

} // EntityCityTableMap
