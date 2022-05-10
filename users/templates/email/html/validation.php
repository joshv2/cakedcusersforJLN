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
    <?= __d('cake_d_c/users', "Dear {0}", isset($first_name) ? $first_name : '') ?>,
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
<p>To add a recording:</p>
<ol>
    <li>Log in</li>
    <li>Search for an entry you want to add a recording for, and click on the result to go to that entry.</li>
    <li>You should see an "ADD A PRONUNCIATION RECORDING" button and a “RECORD THIS SENTENCE” button. Click on the appropriate button.</li>
    <li>Type the spelling of the pronunciation you are recording. Usually this will be the same as the entry’s primary spelling, but sometimes it will differ, such as "Shabbat" vs. "Shabes."</li>
    <li>Type a rough transcription of the pronunciation you’re adding. This should use capital letters for the stressed syllable, such as “shah-BAHT” or “SHAH-biss.”</li>
    <li>Hit the "RECORD” button. A box will pop up; you may have to give the website permission to access your microphone.</li>
    <li>Follow the instructions in the box to record your pronunciation. Don’t forget to click SUBMIT.</li>
</ol>
<p>Tips for making a high-quality recording:</p>
<ul>
    <li>Make sure you are in a quiet room with little to no background noise. Watch out for things like fans or refrigerators humming in the background!</li>
    <li>If you have an external microphone, please use that; if not, the built-in microphone on your device is OK as well.</li>
    <li>At this time, recording is not supported on iPhones or iPads. If you registered to record on one of these devices, please login on a different device.</li>
</ul>
<p>
    <?= __d('cake_d_c/users', 'Thank you,') ?></br>
    Sarah Bunin Benor</br>
    Editor, Jewish English Lexicon

</p>
