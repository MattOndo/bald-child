<?php
/**
 * Block Name: code
 * Description: Display a code snippet
 */

// The block attributes
$block = $args['block'];

// The block data
$data = $args['data'];

// The block ID
$block_id = $args['block_id'];

// The block class names
$class_name = $args['class_name'];
?>

<!-- Our front-end template -->
<div id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?>">
    <?php
        if ( $data['language']) {
            echo "<p>Language:" . $data['language'] . "</p>";
        }

        if ( $data['code']) {
            echo "<code>" . htmlentities($data['code']) . "</code>";
        }
    ?>
</div>