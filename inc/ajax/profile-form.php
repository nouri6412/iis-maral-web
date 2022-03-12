<?php
class iisgroup_form
{
    function save()
    {
        global $wpdb;

        $args_post = array(
            'post_title'   => $_POST["first_name"] . ' ' . $_POST["family_name"],
            'post_type'    => 'forms',
            'post_status'  => 'publish'
        );

        $result = [];
        $id = wp_insert_post($args_post);
        foreach ($_POST as $key => $post) {
            if ($key != "action") {
                update_post_meta($id, $key, $post);
            }
        }

        $result["state"] = 1;
        $result["message"] = __('Successfully submitted','iisgroup');

        echo json_encode($result);
        die();
    }
}

$iisgroup_form = new iisgroup_form;
add_action('wp_ajax_mbm_initial_assessment_form', array($iisgroup_form, 'save'));
add_action('wp_ajax_nopriv_mbm_initial_assessment_form', array($iisgroup_form, 'save'));
