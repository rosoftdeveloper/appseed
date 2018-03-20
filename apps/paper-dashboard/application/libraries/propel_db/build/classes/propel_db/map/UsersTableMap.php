<?php



/**
 * This class defines the structure of the 'users' table.
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
class UsersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'propel_db.map.UsersTableMap';

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
        $this->setName('users');
        $this->setPhpName('Users');
        $this->setClassname('Users');
        $this->setPackage('propel_db');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('username', 'Username', 'VARCHAR', true, 255, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 255, null);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 255, null);
        $this->addColumn('group_id', 'GroupId', 'INTEGER', true, null, 100);
        $this->addColumn('token', 'Token', 'VARCHAR', true, 255, null);
        $this->addColumn('identifier', 'Identifier', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // UsersTableMap
