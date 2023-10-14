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

<!-- Our front-end template -->
<div id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?>">
<small className='rounded-md opacity-50 p-0 pointer-events-none text-xs'><span className='hidden'>Language: </span>{label}</small>

    <?php
        if ( $data['language']) {
            echo "<small><span>Language:</span>" . $data['language'] . "</small>";
        } else {
            echo "<p><strong>Select a language</strong></p>";
        }

        if ( $data['code']) {
            echo "<pre><code class='language-" . $languageClassname . "'>" . htmlspecialchars($data['code']) . "</code></pre>";
        } else {
            echo "<p><strong>Enter some code</strong></p>";
        }
    ?>
</div>