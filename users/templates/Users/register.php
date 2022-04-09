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

use Cake\Core\Configure;

?>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user); ?>
    <p>Thank you for your interest in recording for the Jewish English Lexicon. Your recordings will help site visitors learn how Jews pronounce the many Hebrew, Yiddish, and other words used within English.</p>
    <fieldset>
        <legend><?= __d('cake_d_c/users', 'Create your login') ?></legend>
        <?php
        echo $this->Form->control('username', ['label' => __d('cake_d_c/users', 'Create a Username (should not be your email address)*')]);
        echo $this->Form->control('email', ['label' => __d('cake_d_c/users', 'Email Address*')]);
        echo $this->Form->control('password', ['label' => __d('cake_d_c/users', 'Create a Password*')]);
        echo $this->Form->control('password_confirm', [
            'required' => true,
            'type' => 'password',
            'label' => __d('cake_d_c/users', 'Confirm password*')
        ]);
        #echo $this->Form->control('select', 
        echo $this->Form->control('first_name', ['label' => __d('cake_d_c/users', 'First name')]);
        echo $this->Form->control('last_name', ['label' => __d('cake_d_c/users', 'Last name')]);
        if (Configure::read('Users.Tos.required')) {
            echo $this->Form->control('tos', ['type' => 'checkbox', 'label' => __d('cake_d_c/users', 'Accept TOS conditions?'), 'required' => true]);
        }
        echo "<p>The Jewish English Lexicon lists several categories of types of Jews who tend to use specific words or pronunciations. With which of the following categories do you identify? (Check all that apply - optional)</p>";
        echo $this->Form->control('types._ids', ['type' => 'select', 'multiple' => 'checkbox', 'label' => false]);
        
        echo $this->Form->control('additional_data', ['label' => 'Other ']);

        if (Configure::read('Users.reCaptcha.registration')) {
            echo $this->User->addReCaptcha();
        }
        ?>
        <p>After submiiting your registration, you will receive an email to confirm your account. Once confirmed, you can login any time and record as many entries or sentences as you’d like. All submitted recordings will be moderated. If your recordings are approved, they will appear on the website with no name or other identifying information and will be available to anyone who has access to the website. If you have questions or would like to remove your recordings at any time, you can <a href="https://www.jewishlanguages.org/contact">contact us</a>.</p>
    </fieldset>
    <?= $this->Form->button(__d('cake_d_c/users', 'Submit')) ?>
    <?= $this->Form->end() ?>
</div>
