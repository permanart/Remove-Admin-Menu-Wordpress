/**
 * Removes some menus by page.
 */
function dinoiki_remove_menus(){
   
  remove_menu_page( 'index.php' );                  //Remove Dashboard
  remove_menu_page( 'jetpack' );                    //Remove Jetpack
  remove_menu_page( 'edit.php' );                   //Remove Posts
  remove_menu_page( 'upload.php' );                 //Remove Media
  remove_menu_page( 'edit.php?post_type=page' );    //Remove Pages
  remove_menu_page( 'edit-comments.php' );          //Remove Comments
  remove_menu_page( 'themes.php' );                 //Remove Appearance
  remove_menu_page( 'plugins.php' );                //Remove Plugins
  remove_menu_page( 'users.php' );                  //Remove Users
  remove_menu_page( 'tools.php' );                  //Remove Tools
  remove_menu_page( 'options-general.php' );        //Remove Settings
   
}
add_action( 'admin_menu', 'dinoiki_remove_menus' );
