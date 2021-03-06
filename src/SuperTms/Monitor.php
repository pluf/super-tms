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
class SuperTms_Monitor
{

    public static function testsCount ()
    {
        $model = new SuperTms_Test();
        $param = array(
            'count' => true
        );
        $res = $model->getList($param);
        // Check permission
        return $res[0]['nb_items'] + 0;
    }

    public static function testRunsCount ()
    {
        $model = new SuperTms_TestRun();
        $param = array(
            'count' => true
        );
        $res = $model->getList($param);
        // Check permission
        return $res[0]['nb_items'] + 0;
    }
    
    public static function projectsCount ()
    {
        $model = new SuperTms_Project();
        $param = array(
            'count' => true
        );
        $res = $model->getList($param);
        // Check permission
        return $res[0]['nb_items'] + 0;
    }
}

