<div class="authentiq-form-wrapper">
	<?php require(AUTHENTIQ_PLUGIN_DIR . 'public/partials/authentiq-button.php'); ?>

	<?php if ($allow_classic_wp_login) { ?>
        <div class="other-methods">
            <a href="<?php echo add_query_arg(AUTHENTIQ_LOGIN_FORM_QUERY_PARAM, true); ?>">
                <?php esc_html_e('or login with WordPress username', AUTHENTIQ_LANG) ?>
            </a>
        </div>
	<?php } ?>
</div>
