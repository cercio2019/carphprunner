<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'category' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id',
'category' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'simple_grid_field',
'simple_grid_field2' ),
'category' => array( 'simple_grid_field1',
'simple_grid_field3' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader' ),
'grid' => array( 'simple_grid_field2',
'simple_grid_field',
'simple_grid_field3',
'simple_grid_field1' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'simple_grid_field2' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field1' => 'grid' ),
'itemLocations' => array( 'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field1' ),
'grid_field_label' => array( 'simple_grid_field2',
'simple_grid_field3' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'category_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'id_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'category_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'id',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'id',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'category',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'category',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field' => array( 'field' => 'id',
'type' => 'grid_field' ),
'simple_grid_field2' => array( 'type' => 'grid_field_label',
'field' => 'id' ),
'simple_grid_field1' => array( 'field' => 'category',
'type' => 'grid_field' ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'category' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>