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
You can submit as many pronunciations as you feel comfortable producing authentically. Please make sure you’re in a quiet location with minimal background noise (e.g., fans, heating and cooling systems, refrigerators) and minimal echo. Each entry should be pronounced as a native English speaker would say it.
</p>
<p>
When you click ADD RECORDINGS after activating your account, you will see the entire lexicon. Select an entry, and you will see a button ADD A PRONUNCIATION. Click that to begin the submission process. For each pronunciation you will submit a spelling (how you’d want it written in an auto-caption), a pronunciation guide (write it with accent marks and other details to indicate how this pronunciation differs from others), and notes about who pronounces it like this (e.g., mainstream non-Orthodox Jews, Orthodox Jews, Sephardim; if it’s the default American pronunciation or you don’t know who pronounces it that way, leave it blank). Spellings and recordings are required; pronunciation guides and notes are optional. It’s OK if two or more spellings are identical, but all pronunciation guides should be unique.
</p>

<p>
    <?= __d('cake_d_c/users', 'Thank you, Jewish English Lexicon') ?>,
</p>
