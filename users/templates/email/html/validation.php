<?php
/**
 * Copyright 2010 - 2019, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2018, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<p>
    <?= __d('cake_d_c/users', "Hi {0}", isset($first_name) ? $first_name : '') ?>,
</p>
<p>
    <strong><?= $this->Html->link(__d('cake_d_c/users', 'Activate your account here'), $activationUrl) ?></strong>
</p>
<p>
<?= __d(
    'cake_d_c/users',
    "If the link is not correctly displayed, please copy the following address in your web browser {0}",
    $this->Url->build($activationUrl)
) ?>
</p>
<h2>
Recording instructions:
</h2>
<p>
Thank you for registering to record for the Jewish English Lexicon. You can login any time and record as many entries or sentences as you’d like. Your recordings will help site visitors learn how Jews pronounce the many Hebrew, Yiddish, and other words used within English. All submitted recordings will be moderated. If your recordings are approved, they will appear on the website with no name or other identifying information and will be available to anyone who has access to the website. If you have questions or would like to remove your recordings at any time, you can contact us at <a href="https://www.jewishlanguages.org/contact">https://www.jewishlanguages.org/contact</a>.
</p>
<p>
    <?= __d('cake_d_c/users', 'Thank you, Jewish English Lexicon') ?>,
</p>
