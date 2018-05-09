<?php

$module = '{MODULENAME}';

foreach($viewdefs[$module]['base']['view']['record']['buttons'] as $key => $value) {
    if($value['type'] == 'actiondropdown' && $value['name'] == 'main_dropdown') {
        if(!empty($value['buttons'])) {
            foreach($value['buttons'] as $button_key => $button) {
                if(!empty($button['name']) && $button['name'] == 'duplicate_button') {
                    unset($viewdefs[$module]['base']['view']['record']['buttons'][$key]['buttons'][$button_key]);
                }
            }
        }
    }
}
