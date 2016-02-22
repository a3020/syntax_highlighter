<?php  echo t('Code') ?><br/>
<textarea name="code" style="width:560px;height:350px;"><?php  echo $code ?></textarea>
<br/><br />

<?php  echo t('Language') ?><br/>
<?php  echo $form->select('language', $languages, $language); ?>

<br/><br />

<?php  echo t('Show Line Numbers') ?><br/>
<input type="radio" name="showLineNumbers" value="1" <?php  echo ($showLineNumbers ? "checked=\"checked\"" : "") ?> /><?php  echo t('Yes') ?><br />
<input type="radio" name="showLineNumbers" value="0" <?php  echo ($showLineNumbers ? "" : "checked=\"checked\"") ?> /> <?php  echo t('No') ?><br /><br />

<?php  echo t('Tab Width') ?><br/>
<input type="text" name="tabWidth" value="<?php  echo $tabWidth ?>">
<br/><br />
