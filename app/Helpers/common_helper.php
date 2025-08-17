<?php

function load_sidebar_menus($type)
{
    $data['admin'] = [
        ['name' => 'Dashboard', 'url' => base_url('admin/dashboard'), 'icon' => '#custom-status-up', 'page_type' => 'dashboard'],
        ['name' => 'Customers', 'url' => base_url('admin/customers'), 'icon' => '#custom-shield', 'page_type' => 'customers'],
        ['name' => 'Orders', 'url' => 'javascript:void(0);', 'icon' => '#custom-password-check', 'page_type' => 'orders'],
        ['name' => 'Products', 'url' => 'javascript:void(0);', 'icon' => '#custom-text-block', 'page_type' => 'products'],
        ['name' => 'Analytics', 'url' => 'javascript:void(0);', 'icon' => '#custom-clipboard', 'page_type' => 'analytics'],
        ['name' => 'Inventory', 'url' => 'javascript:void(0);', 'icon' => '#custom-mouse-circle', 'page_type' => 'inventory'],
        ['name' => 'Users', 'url' => 'javascript:void(0);', 'icon' => '#custom-notification-status', 'page_type' => 'users'],
        ['name' => 'Settings', 'url' => 'javascript:void(0);', 'icon' => '#custom-notification-status', 'page_type' => 'settings'],
    ];

    return $data[$type];
}

function clean_text($input_array)
{
    $input_array = trim_inputs($input_array);
    if (is_array($input_array)) {
        foreach ($input_array as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $sub_key => $sub_value) {
                    $input_array[$key][$sub_key] =  htmlentities(strip_tags($sub_value));
                }
            } else {
                $input_array[$key] =  htmlentities(strip_tags($value));
            }
        }
        return $input_array;
    } else {
        return htmlentities(strip_tags($input_array));
    }
}

function gen_uuid()
{
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),

        // 16 bits for "time_mid"
        mt_rand(0, 0xffff),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand(0, 0x0fff) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand(0, 0x3fff) | 0x8000,

        // 48 bits for "node"
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
}

function trim_inputs($input)
{

    if (is_array($input)) {
        $new_array = array();
        foreach ($input as $key => $value) {
            if (is_array($value)) {
                $new_array[$key] = trim_inputs($value);
            } else {
                $new_array[$key] = trim($value);
            }
        }
        return $new_array;
    } else {
        return trim($input);
    }
}

function formatDate($date, $format = "m/d/Y")
{
    return date($format, strtotime($date));
}

function parseTemplate(string $text, array $data): string
{
    foreach ($data as $key => $value) {
        $text = str_replace('{{' . $key . '}}', $value, $text);
    }
    return $text;
}
