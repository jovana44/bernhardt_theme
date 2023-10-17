<?php
/** 
 * 
 * 
 * Custom meta fields
 *
 *
 */

/**
 * * Author box custom fields group
 */
function author_add_custom_box()
{
    $screens = ['post'];
    foreach ($screens as $screen) {
        add_meta_box(
            'author_fields_meta_box',
            // Unique ID
            'Author box fields',
            // Box title
            'author_custom_box_html',
            // Content callback, must be of type callable
            $screen // Post type
        );
    }
}
add_action('add_meta_boxes', 'author_add_custom_box');


function author_custom_box_html($post)
{
    // Add an nonce field so we can check for it later.
    wp_nonce_field('my_inner_custom_box', 'my_inner_custom_box_nonce');

    $hide_image = get_post_meta($post->ID, 'hide_image', true);
    $author_options = get_post_meta($post->ID, 'author_options', true);

    if ($hide_image == "yes") {
        $checked = "checked";
    } else if ($hide_image == "no") {
        $checked = "";
    } else {
        $checked = "";
    }
    ?>

<div class="hide-image-block" style="margin-bottom: 30px;">
    <label for="hide_image">Hide author profile image
        <input type="checkbox" id="hide_image" name="hide_image" value="yes" <?php echo $checked; ?>
            style="margin-left: 10px;">
    </label>
</div>

<div class="author_options-block">
    <label for="author_options" style="display:inline-block; ">Author box elements order (default state: an author image
        is on the left)</label>
    <select name="author_options" id="author_options" style="margin-left: 20px;">
        <option value="author-image-left" <?php selected($author_options, 'author-image-left'); ?>>Author image left
        </option>
        <option value="author-image-right" <?php selected($author_options, 'author-image-right'); ?>>Author image right
        </option>
    </select>
</div>

<?php
}

/**
 * Save the meta when the post is saved.
 *
 * @param int $post_id The ID of the post being saved.
 */
function author_save_metadata($post_id)
{

    // Check if our nonce is set.
    if (!isset($_POST['my_inner_custom_box_nonce'])) {
        return $post_id;
    }

    $nonce = $_POST['my_inner_custom_box_nonce'];

    // Verify that the nonce is valid.
    if (!wp_verify_nonce($nonce, 'my_inner_custom_box')) {
        return $post_id;
    }

    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // Check the user's permissions.
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    }

    if ($parent_id = wp_is_post_revision($post_id)) {
        $post_id = $parent_id;
    }


    if (isset($_POST['hide_image']) && $_POST['hide_image'] != '') {
        update_post_meta($post_id, 'hide_image', $_POST['hide_image']);
    } else {
        update_post_meta($post_id, 'hide_image', "no");
    }

    if (isset($_POST['author_options'])) {
        update_post_meta($post_id, 'author_options', $_POST['author_options']);
    }

    return $post_id;


}
add_action('save_post', 'author_save_metadata');



/**
 * Choose similar posts custom field
 *
 */
function choose_similar_posts_custom_box()
{
    $screens = ['post'];
    foreach ($screens as $screen) {
        add_meta_box(
            'similar_posts_meta_box',
            // Unique ID
            'Choose max 3 similar posts',
            // Box title
            'similar_posts_box_html',
            // Content callback, must be of type callable
            $screen // Post type
        );
    }
}
add_action('add_meta_boxes', 'choose_similar_posts_custom_box');

// callback function for HTML similar posts field
function similar_posts_box_html($post)
{
    // Add an nonce field so we can check for it later.
    wp_nonce_field('similar_posts_custom_box', 'similar_posts_custom_box_nonce');

    global $wpdb;
    $selectPosts="SELECT * FROM ".$wpdb->prefix."posts WHERE `post_type`='post' AND `post_status`='publish'";
    $resultant = $wpdb->get_results($selectPosts);
    $rescount=count($resultant);
    $post_selected_id1 = intval( get_post_meta( $post->ID, 'similar_post_id1', true ) );
    $post_selected_id2 = intval( get_post_meta( $post->ID, 'similar_post_id2', true ) );
    $post_selected_id3 = intval( get_post_meta( $post->ID, 'similar_post_id3', true ) );
    ?>

<div style="margin-bottom: 30px;">
    <p>Select Post 1</p>
    <select name="post_selection1" style="display:block; width:50%; margin-bottom:30px;">
        <?php               
                if($rescount==0)
                {?>
        <option value="null">No Posts have been created</option>
        <?php
                }
                else
                {    ?>
        <option value="">Select post</option>
        <?php // Generate all items of drop-down list
                foreach($resultant as $singleresultant){
                ?>
        <option value="<?php echo $singleresultant->ID; ?>"
            <?php echo selected( $singleresultant->ID, $post_selected_id1 ); ?>>
            <?php echo $singleresultant->post_title; ?>
        </option>
        <?php
                    }
                }
                ?>
    </select>

</div>


<div style="margin-bottom: 30px;">
    <p>Select Post 2</p>
    <select name="post_selection2" style="display:block; width:50%; margin-bottom:30px;">
        <?php               
                if($rescount==0)
                {?>
        <option value="null">No Posts have been created</option>
        <?php
                }
                else
                {    ?>
        <option value="">Select post</option>
        <?php // Generate all items of drop-down list
                foreach($resultant as $singleresultant){
                ?>
        <option value="<?php echo $singleresultant->ID; ?>"
            <?php echo selected( $singleresultant->ID, $post_selected_id2 ); ?>>
            <?php echo $singleresultant->post_title; ?>
        </option>
        <?php
                    }
                }
                ?>
    </select>

</div>


<div>
    <p>Select Post 3</p>
    <select name="post_selection3" style="display:block; width:50%; margin-bottom:30px;">
        <?php               
                if($rescount==0)
                {?>
        <option value="null">No Posts have been created</option>
        <?php
                }
                else
                {    ?>
        <option value="">Select post</option>
        <?php // Generate all items of drop-down list
                foreach($resultant as $singleresultant){
                ?>
        <option value="<?php echo $singleresultant->ID; ?>"
            <?php echo selected( $singleresultant->ID, $post_selected_id3 ); ?>>
            <?php echo $singleresultant->post_title; ?>
        </option>
        <?php
                    }
                }
                ?>
    </select>

</div>

<?php
}


// Save Selected posts in the DB
function save_selected_posts( $post_id ) {
    // Check post type 
    if ( $_POST['post_type'] == 'post' ) {
        // Store data 
        if ( isset( $_POST['post_selection1'] ) && $_POST['post_selection1'] != '' ) {
            echo update_post_meta( $post_id, 'similar_post_id1', $_POST['post_selection1'] );
        }else {
            echo update_post_meta( $post_id, 'similar_post_id1', "" );
        }
        if ( isset( $_POST['post_selection2'] ) && $_POST['post_selection2'] != '' ) {
            echo update_post_meta( $post_id, 'similar_post_id2', $_POST['post_selection2'] );
        }else {
            echo update_post_meta( $post_id, 'similar_post_id2', "" );
        }
        if ( isset( $_POST['post_selection3'] ) && $_POST['post_selection3'] != '' ) {
            echo update_post_meta( $post_id, 'similar_post_id3', $_POST['post_selection3'] );
        }else {
            echo update_post_meta( $post_id, 'similar_post_id3', "" );
        }
    }
}
add_action( 'save_post', 'save_selected_posts' );