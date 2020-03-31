<?php

namespace Firesphere\GridFieldRelationHandler\Tests;

use Page;

class FakePage extends Page
{
    $has_one = [
        'FakeDataObject' => FakeDataObject::class,
    ];
}
