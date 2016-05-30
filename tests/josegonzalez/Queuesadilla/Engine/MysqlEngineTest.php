<?php
namespace josegonzalez\Queuesadilla\Engine;

use josegonzalez\Queuesadilla\Engine\AbstractPdoEngineTest;
use josegonzalez\Queuesadilla\FixtureData;
use josegonzalez\Queuesadilla\TestCase;
use PDO;
use PDOException;

class MysqlEngineTest extends AbstractPdoEngineTest
{
    public function setUp()
    {
        $this->url = getenv('MYSQL_URL');
        $this->engineClass = 'josegonzalez\Queuesadilla\Engine\MysqlEngine';
        parent::setUp();
    }

    protected function clearEngine()
    {
        $this->execute($this->Engine->connection(), 'TRUNCATE TABLE jobs');
    }
}
