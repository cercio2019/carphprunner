<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["carsmake"] ) ) {
			$lookupTableLinks["carsmake"] = array();
		}
		if( !isset( $lookupTableLinks["carsmake"]["carscars.Make"] )) {
			$lookupTableLinks["carsmake"]["carscars.Make"] = array();
		}
		$lookupTableLinks["carsmake"]["carscars.Make"]["edit"] = array("table" => "carscars", "field" => "Make", "page" => "edit");
		if( !isset( $lookupTableLinks["carsmodels"] ) ) {
			$lookupTableLinks["carsmodels"] = array();
		}
		if( !isset( $lookupTableLinks["carsmodels"]["carscars.Model"] )) {
			$lookupTableLinks["carsmodels"]["carscars.Model"] = array();
		}
		$lookupTableLinks["carsmodels"]["carscars.Model"]["edit"] = array("table" => "carscars", "field" => "Model", "page" => "edit");
		if( !isset( $lookupTableLinks["carsbcolor"] ) ) {
			$lookupTableLinks["carsbcolor"] = array();
		}
		if( !isset( $lookupTableLinks["carsbcolor"]["carscars.color"] )) {
			$lookupTableLinks["carsbcolor"]["carscars.color"] = array();
		}
		$lookupTableLinks["carsbcolor"]["carscars.color"]["edit"] = array("table" => "carscars", "field" => "color", "page" => "edit");
		if( !isset( $lookupTableLinks["carscategory"] ) ) {
			$lookupTableLinks["carscategory"] = array();
		}
		if( !isset( $lookupTableLinks["carscategory"]["carscars.category"] )) {
			$lookupTableLinks["carscategory"]["carscars.category"] = array();
		}
		$lookupTableLinks["carscategory"]["carscars.category"]["edit"] = array("table" => "carscars", "field" => "category", "page" => "edit");
		if( !isset( $lookupTableLinks["carsmake"] ) ) {
			$lookupTableLinks["carsmake"] = array();
		}
		if( !isset( $lookupTableLinks["carsmake"]["carsmodels.make"] )) {
			$lookupTableLinks["carsmake"]["carsmodels.make"] = array();
		}
		$lookupTableLinks["carsmake"]["carsmodels.make"]["edit"] = array("table" => "carsmodels", "field" => "make", "page" => "edit");
}

?>