<?php

$tdataGLOBAL = array();


$tdataGLOBAL[".pagesByType"] = my_json_decode( "{\"login\":[\"login_Cars1\"],\"menu\":[\"menu_Cars1\"],\"userinfo\":[\"userinfo_Cars\"]}" );
$tdataGLOBAL[".originalPagesByType"] = $tdataGLOBAL[".pagesByType"];
$tdataGLOBAL[".pages"] = types2pages( my_json_decode( "{\"login\":[\"login_Cars1\"],\"menu\":[\"menu_Cars1\"],\"userinfo\":[\"userinfo_Cars\"]}" ) );
$tdataGLOBAL[".originalPages"] = $tdataGLOBAL[".pages"];
$tdataGLOBAL[".defaultPages"] = my_json_decode( "{\"login\":\"login_Cars1\",\"menu\":\"menu_Cars1\",\"userinfo\":\"userinfo_Cars\"}" );
$tdataGLOBAL[".originalDefaultPages"] = $tdataGLOBAL[".defaultPages"];

$tables_data["<global>"] =& $tdataGLOBAL;


$detailsTablesData["<global>"] = array();
$masterTablesData["<global>"] = array();

?>