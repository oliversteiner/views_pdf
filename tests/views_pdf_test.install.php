<?php

/**
 * @file
 * Install, update, and uninstall functions for the Views PDF Test module.
 */


/**
 * Implements hook_schema().
 */
function views_pdf_test_schema() {
	return variable_get('views_pdf_test_schema', array());
}