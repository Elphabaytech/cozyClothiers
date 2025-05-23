<?php

return [

    /*
     * Default view used to render Javascript validation code
     */
    'view' => 'core/js-validation::bootstrap',

    /*
     * Default JQuery selector find the form to be validated.
     * By default, the validations are applied to all forms.
     */
    'form_selector' => 'form',

    /*
     * If you change the focus on detect some error then active
     * this parameter to move the focus to the first error found.
     */
    'focus_on_error' => env('CMS_JS_VALIDATION_FOCUS_ON_ERROR', false),

    /*
     * Duration time for the animation when We are moving the focus
     * to the first error, http://api.jquery.com/animate/ for more information.
     */
    'duration_animate' => env('CMS_JS_VALIDATION_DURATION_ANIMATE', 1000),

    /*
     * Enable or disable Ajax validations of Database and custom rules.
     * By default Unique, ActiveURL, Exists and custom validations are validated via AJAX
     */
    'disable_remote_validation' => false,

    /*
     * Field name used in the remote validation Ajax request
     * You can change this value to avoid conflicts wth your field names
     */
    'remote_validation_field' => '_js_validation',

    /*
     * Whether to escape all validation messages with htmlentities.
     */
    'escape' => false,

    /*
     * Set a default value for the validation ignore property.
     *
     * See https://jqueryvalidation.org/validate/#ignore
     */
    'ignore' => '',
];
