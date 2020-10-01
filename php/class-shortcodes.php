<?php
    class Six_Shortcodes {
        
        public function __construct() {
            if (!is_admin()) {
                
            }
        }

        public function add_shortcode() {
            add_shortcode('six', 'Six_Shortcodes::update_shortcode');
        }

        public function update_shortcode($atts, $content = null) {
            $data = $atts['data'];
            $output = '';
            
            if ($data == 'subscribe') {
                $output = file_get_contents(get_stylesheet_directory_uri() . '/html/subscribe.html');
            }

            // Return output value (default empty)
            return $output;
        }
    }
?>