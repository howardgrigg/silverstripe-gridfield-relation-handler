<?php

namespace Firesphere\GridFieldRelationHandler\Tests;

use Firesphere\GridFieldRelationHandler\GridFieldHasOneRelationHandler;
use SilverStripe\Dev\SapphireTest;

class GridFieldRelationHandlerTest extends SapphireTest
{
    protected $usesDatabase = true;

    public function testCreateGridFieldRelationHandler()
    {
        $gridFieldRelationHandler = new GridFieldHasOneRelationHandler(
            FakeDataObject::create(),
            'FakeDataObjects'
        );

        $this->assertNotNull($gridFieldRelationHandler);
    }

    public function testGetAndSetColumnTitle()
    {
        $gridFieldRelationHandler = new GridFieldHasOneRelationHandler(
            FakeDataObject::get(),
            'FakeDataObjects'
        );

        $gridFieldRelationHandler->setColumnTitle('Equality');

        $this->assertEquals('Equality', $gridFieldRelationHandler->getColumnTitle());
    }
}
