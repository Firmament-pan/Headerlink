function add_custom_menu_item($items, $args) {
    if ($args->theme_location == 'primary' || $args->theme_location == 'menu-1') {
        $items .= '<li class="menu-item"><a href="https://sdilmubinaselamat.sch.id/">Slot Gacor Anti Boncos</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_custom_menu_item', 10, 2);
