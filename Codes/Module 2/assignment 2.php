<?php

$tFee = 30000;

$comission = ($tFee >= 20000) ? $tFee*.25 : (($tFee<20000 && $tFee >=10000) ? $tFee*.20 : (($tFee<10000 && $tFee >=7000) ? $tFee*.15 : "Invalid" ));

echo($comission);