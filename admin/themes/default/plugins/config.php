<?php
$pageTitle = __('Configure Plugin: %s', $plugin->getDisplayName());
echo head(array('title' => $pageTitle, 'bodyclass' => 'plugins'));
echo flash();
?>
<form method="post">
    <section class="seven columns alpha">
        <?php echo $pluginBroker->callHook('config_form', array(), $plugin); ?>
    </section>
    <section class="three columns omega">
        <div id="save" class="panel">
            <?php
            echo $this->formSubmit(
                'install_plugin', 'Save Changes',
                array('class' => 'submit big green button'));
            ?>
        </div>
    </section>
</form>
<?php echo foot(); ?>
