<?php

$rpROOT = dirname(__FILE__);
const lpMode = "debug";

require_once("{$rpROOT}/LightPHP/lp-load.php");
require_once("{$rpROOT}/include/rpApp.php");
rpApp::helloWorld();

rpApp::bind(null, new lpDefaultFilter("rpIndexHandler", new lpDefaultHandlerNameFilter("rp")));
