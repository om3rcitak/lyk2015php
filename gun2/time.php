<?php
/**
 * Created by PhpStorm.
 * User: omer
 * Date: 09.08.2015
 * Time: 19:44
 */

//echo time(); // 1439138291

$hafta2once = 1439138291 - (15*24*60*60);

var_dump(getdate($hafta2once));
