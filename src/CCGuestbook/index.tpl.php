<h1>Guestbook Example</h1>
<p>Showing off how to implement a guestbook in Pysen. Now saving to database.</p>

<form action="<?=$form_action?>" method='post'>
  <p>
    <label>Message: <br/>
    <textarea id='form-element-data' name='newEntry'></textarea></label>
  </p>
  <p>
    <input type='submit' id='form-element-save' name='doAdd' value='Add' />
    <input type='submit' id='form-element-save' name='doClear' value='Clear' />
    <input type='submit' id='form-element-delete' name='doCreate' value='Init' />
  </p>
</form>

<h2>Current messages</h2>

<?php foreach($entries as $val):?>
<div style='background-color:#f6f6f6;border:1px solid #ccc;margin-bottom:1em;padding:1em;'>
  <p>At: <?=$val['created']?></p>
  <p><?=htmlent($val['entry'])?></p>
</div>
<?php endforeach;?>