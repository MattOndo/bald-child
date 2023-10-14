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

if ($data['language'] === 'html') {
    $languageClassname = 'xml';
} else if ($data['language'] === 'command_line') {
    $languageClassname = 'bash';
} else {
    $languageClassname = $data['language'];
}

?>

<div id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?>">
    <?php
        if ( $data['language']) {
            $label =  "<small><span>Language:</span>" . $language . "</small>";
        } else {
            $label = "<p><strong>Select a language</strong></p>";
        }

        if ( $data['code']) {
            $code = "<code class='language-" . $language . "'>" . htmlspecialchars($data['code']) . "</code>";
        } else {
            $code = "<p><strong>Enter some code</strong></p>";
        }

        echo "<pre>" . $label . $code . "</pre>";
    ?>
</div>