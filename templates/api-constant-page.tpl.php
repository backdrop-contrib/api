<p><?= t('in') ?> <?= api_file_link($constant) ?></p>

<?= $documentation ?>

<?= $code ?>

<?php if (isset($related_topics)) { ?>
<h3><?= t('Related topics') ?></h3>';
<?= $related_topics ?>
<?php } ?>
