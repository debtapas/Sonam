<?php

//Redirect to template file ~~~~~~~~~~~
	/*function properties_template($template) {
	    if (is_page('properties-page')) {
	        $template = PROP_PLUGIN_DIR . 'inc/properties-listing.php';
	    }
	    return $template;
	}
	add_filter('template_include', 'properties_template');*/



function register_boat_details(){
    add_menu_page( 
        __( 'Boat Details', 'textdomain' ), // Page title
        'Boat Details',            // Menu title
        'manage_options',           // Capability
        'boat-details-page',        // Menu slug
        'boat_details_page_content',
        plugins_url( 'myplugin/images/icon.png' ),
        6
    ); 
}
add_action( 'admin_menu', 'register_boat_details' );
    

//Function to render menu content
    function boat_details_page_content() { ?>
        <div class="wrap">
        <h2>Upload CSV file</h2>
        
        <form method="post" enctype="multipart/form-data">
	        <input type="file" name="csv_file" />
	        <input type="submit" name="submit" value="Upload CSV" />
	    </form>
        </div>
    <?php 

    // Process CSV file upload		
	    if (isset($_POST['submit'])) {
	        if ($_FILES['csv_file']['error'] == 0) {
	            $file = $_FILES['csv_file']['tmp_name'];

	            $handle = fopen($file, "r");
	            if ($handle !== FALSE) {
	                echo '<h3>CSV File Data:</h3>';
	                echo '<table>';
	                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	                    echo '<tr>';
	                    foreach ($data as $cell) {
	                        echo '<td>' . htmlspecialchars($cell) . '</td>';
	                    }
	                    echo '</tr>';
	                }
	                echo '</table>';
	                fclose($handle);
	            } else {
	                echo 'Error opening file.';
	            }
	        } else {
	            echo 'Error uploading file.';
	        }
	    }
		


}


	//Deactivation Hook ~~~~~~~~~~~~~~~
    function unregister_boat_details() {
        remove_menu_page('boat-details-page');

    }