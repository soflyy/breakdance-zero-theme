<?php

add_action( 'admin_notices', 'warn_if_breakdance_is_disabled' );

function warn_if_breakdance_is_disabled() {
    if (defined('__BREAKDANCE_DIR__')){
        return;
    }

    ?>
    <div class="notice notice-error is-dismissible">
        <p>You're using Breakdance's Zero Theme but Breakdance is not enabled. This isn't supported.</p>
    </div>
    <?php
}
