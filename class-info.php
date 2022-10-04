<?php
    class Remove_Wigets {

    private $name_function_remove_all_dashboard = 'rkm_remove_all_dashboard_metaboxes';
    private $hook_action;
        
    private function rkm_remove_all_dashboard_metaboxes() {
        //Remover painel de boas-vindas
        remove_action('welcome_panel', 'wp_welcome_panel');
        // Remove o resto dos widgets do painel
        remove_meta_box('dashboard_primary', 'dashboard', 'side');
        remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
        remove_meta_box('health_check_status', 'dashboard', 'normal');
        remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
        remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    }

    public function set_values_actions($hook_action){
        $this->hook_action = $hook_action;
    }

}

   
?>