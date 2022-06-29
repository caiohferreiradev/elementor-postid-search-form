<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

?>

<style>

.form-button{

    background-color: #3C85FF !important; 
    border-radius: 50px !important; 
    color: white !important; 
    border: none !important; 
    font-weight: 600 !important; 
    font-family: 'Inter', sans-serif !important; 
    font-size: 20px !important;
}

.form-input{

    border-radius: 50px !important; 
    font-family: 'Inter', sans-serif; 
    font-size: 20px;
}

</style>


<?php

class customform extends Widget_Base{

  public function get_name(){
    return 'advertisement';
  }

  public function get_title(){
    return 'Custom Form';
  }

  public function get_icon(){
    return 'fa-solid fa-magnifying-glass';
  }

  public function get_categories(){
    return ['general'];
  }


protected function render(){

    ?>

    <section>

    <form role="search" method="get" style = "display: block; margin: 0px 0; text-align: center;" action="<?php echo home_url( '/' ); ?>" >
        <label>
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
            <input type="number" class = "form-input" 
                placeholder="<?php echo esc_attr_x( 'Place your post ID here', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </label>
        <input type="submit" class = "form-button"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </form>
    
    </section>

    <?php

}

protected function _content_template(){

}
}
