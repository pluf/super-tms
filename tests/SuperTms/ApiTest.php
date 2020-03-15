<?php
/*
 * This file is part of Pluf Framework, a simple PHP Application Framework.
 * Copyright (C) 2010-2020 Phoinex Scholars Co. (http://dpq.co.ir)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
use Pluf\Test\TestCase;

class SuperTms_Api extends TestCase
{

    /**
     *
     * @before
     */
    public function setUpTest()
    {
        Pluf::start(__DIR__ . '/../conf/config.php');
    }

    /**
     *
     * @test
     */
    public function testClassInstance()
    {
        $comment = new SuperTms_Project();
        $this->assertTrue(isset($comment), 'SuperTms_Project could not be created!');
        $config = new SuperTms_Test();
        $this->assertTrue(isset($config), 'SuperTms_Test could not be created!');
        $invoice = new SuperTms_TestRun();
        $this->assertTrue(isset($invoice), 'SuperTms_TestRun could not be created!');
    }
}

