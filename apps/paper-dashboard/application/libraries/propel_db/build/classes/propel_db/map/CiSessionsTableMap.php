<?php



/**
 * This class defines the structure of the 'ci_sessions' table.
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
class CiSessionsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'propel_db.map.CiSessionsTableMap';

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
        $this->setName('ci_sessions');
        $this->setPhpName('CiSessions');
        $this->setClassname('CiSessions');
        $this->setPackage('propel_db');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('session_id', 'SessionId', 'VARCHAR', true, 40, '0');
        $this->addColumn('ip_address', 'IpAddress', 'VARCHAR', true, 16, '0');
        $this->addColumn('user_agent', 'UserAgent', 'VARCHAR', true, 255, null);
        $this->addColumn('last_activity', 'LastActivity', 'INTEGER', true, 10, 0);
        $this->addColumn('user_data', 'UserData', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CiSessionsTableMap
