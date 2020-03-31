<?php

namespace Firesphere\GridFieldRelationHandler\Tests;

use Firesphere\GridFieldRelationHandler\GridFieldHasOneRelationHandler;
use SilverStripe\Dev\SapphireTest;

class GridFieldHasOneRelationHandlerTest extends SapphireTest
{
    protected $usesDatabase = true;

    public function testCreateGridFieldHasOneRelationHandler()
    {
        $gridFieldHasOneRelationHandler = new GridFieldHasOneRelationHandler(
            FakeDataObject::create(),
            'FakeDataObjects'
        );

        $this->assertNotNull($gridFieldHasOneRelationHandler);
    }
}
