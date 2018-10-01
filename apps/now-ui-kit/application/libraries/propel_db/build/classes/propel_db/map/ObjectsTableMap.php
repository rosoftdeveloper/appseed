<?php



/**
 * This class defines the structure of the 'objects' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.propel_db.map
 */
class ObjectsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'propel_db.map.ObjectsTableMap';

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
        $this->setName('objects');
        $this->setPhpName('Objects');
        $this->setClassname('Objects');
        $this->setPackage('propel_db');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('userid', 'Userid', 'INTEGER', false, null, null);
        $this->addColumn('idx1', 'Idx1', 'INTEGER', false, null, null);
        $this->addColumn('idx2', 'Idx2', 'INTEGER', false, null, null);
        $this->addColumn('idx3', 'Idx3', 'INTEGER', false, null, null);
        $this->addColumn('idx4', 'Idx4', 'INTEGER', false, null, null);
        $this->addColumn('idx5', 'Idx5', 'INTEGER', false, null, null);
        $this->addColumn('key1', 'Key1', 'VARCHAR', true, 100, null);
        $this->addColumn('key2', 'Key2', 'VARCHAR', false, 100, null);
        $this->addColumn('key3', 'Key3', 'VARCHAR', false, 100, null);
        $this->addColumn('key4', 'Key4', 'VARCHAR', false, 100, null);
        $this->addColumn('key5', 'Key5', 'VARCHAR', false, 100, null);
        $this->addColumn('key6', 'Key6', 'VARCHAR', false, 100, null);
        $this->addColumn('key7', 'Key7', 'VARCHAR', false, 100, null);
        $this->addColumn('key8', 'Key8', 'VARCHAR', false, 100, null);
        $this->addColumn('key9', 'Key9', 'VARCHAR', false, 100, null);
        $this->addColumn('key10', 'Key10', 'VARCHAR', false, 100, null);
        $this->addColumn('data1', 'Data1', 'VARCHAR', false, 1000, null);
        $this->addColumn('data2', 'Data2', 'VARCHAR', false, 1000, null);
        $this->addColumn('data3', 'Data3', 'VARCHAR', false, 1000, null);
        $this->addColumn('data4', 'Data4', 'VARCHAR', false, 1000, null);
        $this->addColumn('data5', 'Data5', 'VARCHAR', false, 1000, null);
        $this->addColumn('data6', 'Data6', 'VARCHAR', false, 1000, null);
        $this->addColumn('data7', 'Data7', 'VARCHAR', false, 1000, null);
        $this->addColumn('data8', 'Data8', 'VARCHAR', false, 1000, null);
        $this->addColumn('data9', 'Data9', 'VARCHAR', false, 1000, null);
        $this->addColumn('data10', 'Data10', 'VARCHAR', false, 1000, null);
        $this->addColumn('rawdata', 'Rawdata', 'LONGVARCHAR', false, null, null);
        $this->addColumn('counter', 'Counter', 'INTEGER', false, null, null);
        $this->addColumn('expiry', 'Expiry', 'INTEGER', false, null, null);
        $this->addColumn('lastupdate', 'Lastupdate', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ObjectsTableMap
