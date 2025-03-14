<?php

namespace Tests;

use Exception;
use PHPUnit\Framework\TestCase;
use Qase\PHPUnitReporter\Attributes\Field;
use Qase\PHPUnitReporter\Attributes\Parameter;
use Qase\PHPUnitReporter\Attributes\QaseId;
use Qase\PHPUnitReporter\Attributes\Suite;
use Qase\PHPUnitReporter\Attributes\Title;

#[Suite("Main suite")]
class SimpleTest extends TestCase
{
    #[
        Title('Test one'),
        Parameter("param1", "value1"),
    ]
    public function testOne(): void
    {
        $this->assertTrue(true);
    }

    #[
        QaseId(1),
        Field('description', 'Some description'),
        Field('severity', 'major')
    ]
    public function testTwo(): void
    {
        $this->assertTrue(false);
    }

    #[
        Suite('Suite one'),
        Suite('Suite two')
    ]
    public function testThree(): void
    {
        throw new Exception('Some exception');
    }
}
