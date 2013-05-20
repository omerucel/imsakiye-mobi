<?php



/**
 * This class defines the structure of the 'diyanet_migration' table.
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
class EntityDiyanetMigrationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Imsakiye.map.EntityDiyanetMigrationTableMap';

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
        $this->setName('diyanet_migration');
        $this->setPhpName('DiyanetMigration');
        $this->setClassname('EntityDiyanetMigration');
        $this->setPackage('Imsakiye');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignKey('CITY_ID', 'CityId', 'INTEGER', 'city', 'ID', true, 10, null);
        $this->addColumn('DISTRICT_ID', 'DistrictId', 'INTEGER', true, 10, null);
        $this->addColumn('KEYWORD', 'Keyword', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('City', 'EntityCity', RelationMap::MANY_TO_ONE, array('city_id' => 'id', ), 'CASCADE', null);
    } // buildRelations()

} // EntityDiyanetMigrationTableMap
