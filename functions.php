<?php

add_action( 'admin_notices', 'warn_if_unicorn_is_disabled' );

function warn_if_unicorn_is_disabled() {
    if (defined('__UNICORN_DIR__')){
        return;
    }

    ?>
    <div class="notice notice-error is-dismissible">
        <p>You're using Unicorn's Zero Theme but Unicorn is not enabled. This isn't supported.</p>
    </div>
    <?php
}
