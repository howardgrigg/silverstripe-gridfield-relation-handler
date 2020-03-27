<?php

namespace Firesphere\GridFieldRelationHandler\Tests;

use Firesphere\GridFieldRelationHandler\GridFieldHasOneRelationHandler;
use SilverStripe\Dev\SapphireTest;

class GridFieldRelationHandlerTest extends SapphireTest
{
    protected $usesDatabase = true;

    public function testCreateGridFieldRelationHandler()
    {
        $gridFieldRelationHandler = new GridFieldHasOneRelationHandler();

        $this->assertNotNull($gridFieldRelationHandler);
    }
}
