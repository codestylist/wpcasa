<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
	exit;

if ( ! class_exists( 'WPSight_Addons' ) ) :

/**
 * WPSight_Recommends Class
 */
class WPSight_Recommends {

	/**
	 * Handles output of the reports page in admin.
	 */
	public function output()
    {
        $recommends = [
            [
                'title' =>  __( "WPCasa Dashboard", "wpcasa" ),
                'description' => __( "Let listing agents submit and manage property listings from the front end.", "wpcasa" ),
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/9c/Image-Porkeri_001.jpg',
                'button_text' => __( "Button text", "wpcasa" ),
                'button_link' => 'button link',
            ],
            [
                'title' =>  __( "WPCasa Listing PDF", "wpcasa" ),
                'description' => __( "Let listing agents submit and manage property listings from the front end.", "wpcasa" ),
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/9c/Image-Porkeri_001.jpg',
                'button_text' => __( "Button text2", "wpcasa" ),
                'button_link' => 'button link',
            ],
        ]; ?>

        <div class="wrap-cards-recommend">

        <?php foreach($recommends as $key => $value) { ?>

            <div class="wrap-card">
                <div class="card">
                    <div class="card__wrap-img">
                        <img src="<?php echo $value['image_url']; ?>" class="card__img" alt="">
                    </div>

                    <div class="card__content">
                        <h2 class="card__wrap-link">
                            <a href="<?php echo $value['button_link']; ?>" class="card__link"><?php echo $value['title']; ?></a>
                        </h2>

                        <p class="card__description"><?php echo $value['description']; ?></p>

                        <span class="button card__label">€49,00 - €249,00</span>
                    </div>
                </div>
            </div>

        <?php } ?>

        </div>

    <?php
    }

}

endif;

return new WPSight_Recommends();
