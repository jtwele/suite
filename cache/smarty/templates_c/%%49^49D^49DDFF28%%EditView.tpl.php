<?php /* Smarty version 2.6.11, created on 2015-05-26 03:20:36
         compiled from cache/modules/Contacts/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cache/modules/Contacts/EditView.tpl', 43, false),array('modifier', 'default', 'cache/modules/Contacts/EditView.tpl', 61, false),array('modifier', 'strip_semicolon', 'cache/modules/Contacts/EditView.tpl', 69, false),array('function', 'sugar_include', 'cache/modules/Contacts/EditView.tpl', 49, false),array('function', 'sugar_translate', 'cache/modules/Contacts/EditView.tpl', 56, false),array('function', 'counter', 'cache/modules/Contacts/EditView.tpl', 62, false),array('function', 'html_options', 'cache/modules/Contacts/EditView.tpl', 75, false),array('function', 'sugar_getimagepath', 'cache/modules/Contacts/EditView.tpl', 192, false),array('function', 'sugar_getjspath', 'cache/modules/Contacts/EditView.tpl', 214, false),array('function', 'sugar_number_format', 'cache/modules/Contacts/EditView.tpl', 373, false),array('function', 'sugar_getscript', 'cache/modules/Contacts/EditView.tpl', 588, false),)), $this); ?>


<script>
<?php echo '
$(document).ready(function(){
$("ul.clickMenu").each(function(index, node){
$(node).sugarActionMenu();
});
});
'; ?>

</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (( ! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] ) ) && ! ( isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true' )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']):  echo $_REQUEST['return_relationship'];  elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['relate_to'];  elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['return_module'];  endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php $this->assign('place', '_HEADER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="opportunity_id" value="<?php echo $_REQUEST['opportunity_id']; ?>
">   
<input type="hidden" name="case_id" value="<?php echo $_REQUEST['case_id']; ?>
">   
<input type="hidden" name="bug_id" value="<?php echo $_REQUEST['bug_id']; ?>
">   
<input type="hidden" name="email_id" value="<?php echo $_REQUEST['email_id']; ?>
">   
<input type="hidden" name="inbound_email_id" value="<?php echo $_REQUEST['inbound_email_id']; ?>
">   
<div class="action_buttons"><?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE_HEADER"><?php endif; ?>  <?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL_HEADER"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Contacts'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php endif; ?> <?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Contacts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?><div class="clear"></div></div>
</td>
<td align='right'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="EditView_tabs"
class="yui-navset"
>

<ul class="yui-nav">
<li class="selected"><a id="tab0" href="javascript:void(0)"><em><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_INFORMATION','module' => 'Contacts'), $this);?>
</em></a></li>
<li class="selected"><a id="tab1" href="javascript:void(1)"><em><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL_ADVANCED','module' => 'Contacts'), $this);?>
</em></a></li>
</ul>
<div class="yui-content">
<div id='tabcontent0'>
<div id="detailpanel_1" class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view edit508') : smarty_modifier_default($_tmp, 'edit view edit508')); ?>
">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_CONTACT_INFORMATION'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='first_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php echo smarty_function_html_options(array('name' => 'salutation','id' => 'salutation','options' => $this->_tpl_vars['fields']['salutation']['options'],'selected' => $this->_tpl_vars['fields']['salutation']['value']), $this);?>
&nbsp;<input accesskey="7"  tabindex="0"  name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="<?php echo $this->_tpl_vars['fields']['first_name']['value']; ?>
">
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='last_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<td valign="top" id='phone_work_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_work']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_work']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_work']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='title_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['title']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['title']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['title']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
<td valign="top" id='phone_mobile_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_mobile']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='account_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['account_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['account_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['account_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"account_id","name":"account_name","billing_address_street":"primary_address_street","billing_address_city":"primary_address_city","billing_address_state":"primary_address_state","billing_address_postalcode":"primary_address_postalcode","billing_address_country":"primary_address_country","phone_office":"phone_work"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Address/SugarFieldAddress.js"), $this);?>
'></script>
<fieldset id='PRIMARY_address_fieldset'>
<legend><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS','module' => ''), $this);?>
</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="primary_address_street_label" width='25%' scope='row' >
<label for="primary_address_street"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_STREET','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['primary_address_street']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td width="*">
<textarea id="primary_address_street" name="primary_address_street" maxlength="150" rows="2" cols="30" tabindex="0"><?php echo $this->_tpl_vars['fields']['primary_address_street']['value']; ?>
</textarea>
</td>
</tr>
<tr>
<td id="primary_address_city_label" width='%' scope='row' >
<label for="primary_address_city"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CITY','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['primary_address_city']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="primary_address_city" id="primary_address_city" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['primary_address_city']['value']; ?>
' tabindex="0">
</td>
</tr>
<tr>
<td id="primary_address_state_label" width='%' scope='row' >
<label for="primary_address_state"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['primary_address_state']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="primary_address_state" id="primary_address_state" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['primary_address_state']['value']; ?>
' tabindex="0">
</td>
</tr>
<tr>
<td id="primary_address_postalcode_label" width='%' scope='row' >
<label for="primary_address_postalcode"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_POSTAL_CODE','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['primary_address_postalcode']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="primary_address_postalcode" id="primary_address_postalcode" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['primary_address_postalcode']['value']; ?>
' tabindex="0">
</td>
</tr>
<tr>
<td id="primary_address_country_label" width='%' scope='row' >
<label for="primary_address_country"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COUNTRY','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['primary_address_country']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="primary_address_country" id="primary_address_country" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['primary_address_country']['value']; ?>
' tabindex="0">
</td>
</tr>
<tr>
<td colspan='2' NOWRAP>&nbsp;</td>
</tr>
</table>
</fieldset>
<script type="text/javascript">
    SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function(){
		primary_address = new SUGAR.AddressField("primary_checkbox",'', 'primary');
	});
</script>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='email1_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='email1_span'>
<?php echo $this->_tpl_vars['fields']['email1']['value']; ?>
</span>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_CONTACT_INFORMATION").style.display='none';</script>
<?php endif; ?>
</div>    <div id='tabcontent1'>
<div id="detailpanel_2" class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view edit508') : smarty_modifier_default($_tmp, 'edit view edit508')); ?>
">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_PANEL_ADVANCED'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='produkt1_c_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT1','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['produkt1_c']['name']; ?>
" class="sqsEnabled" tabindex="1" id="<?php echo $this->_tpl_vars['fields']['produkt1_c']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['produkt1_c']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['produkt1_c']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['produkt1_c']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['aos_products_id_c']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['produkt1_c']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['produkt1_c']['name']; ?>
" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['produkt1_c']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"aos_products_id_c","name":"produkt1_c"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['produkt1_c']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['produkt1_c']['name']; ?>
" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['produkt1_c']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['produkt1_c']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['produkt1_c']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='menge_c_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MENGE','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['menge_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['menge_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['menge_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['menge_c']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['menge_c']['name']; ?>
' size='30' maxlength='255' value='<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='2'    >
<td valign="top" id='preis_c_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PREIS','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['preis_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['preis_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['preis_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['preis_c']['name']; ?>
'
id='<?php echo $this->_tpl_vars['fields']['preis_c']['name']; ?>
'
size='30'
maxlength='18'value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value'],'precision' => 2), $this);?>
'
title=''
tabindex='3'
>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='produkt2_c_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT2_C','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['produkt2_c']['name']; ?>
" class="sqsEnabled" tabindex="4" id="<?php echo $this->_tpl_vars['fields']['produkt2_c']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['produkt2_c']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['produkt2_c']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['produkt2_c']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['aos_products_id_c']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['produkt2_c']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['produkt2_c']['name']; ?>
" tabindex="4" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['produkt2_c']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"aos_products_id_c","name":"produkt2_c"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['produkt2_c']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['produkt2_c']['name']; ?>
" tabindex="4" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['produkt2_c']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['produkt2_c']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['produkt2_c']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='menge2_c_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MENGE2','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['menge2_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['menge2_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['menge2_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['menge2_c']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['menge2_c']['name']; ?>
' size='30' maxlength='255' value='<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='5'    >
<td valign="top" id='preis2_c_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PREIS2','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['preis2_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['preis2_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['preis2_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['preis2_c']['name']; ?>
'
id='<?php echo $this->_tpl_vars['fields']['preis2_c']['name']; ?>
'
size='30'
maxlength='18'value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value'],'precision' => 2), $this);?>
'
title=''
tabindex='6'
>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL_ADVANCED").style.display='none';</script>
<?php endif; ?>
<div id="detailpanel_3" class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view edit508') : smarty_modifier_default($_tmp, 'edit view edit508')); ?>
">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(3);">
<img border="0" id="detailpanel_3_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(3);">
<img border="0" id="detailpanel_3_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL1','module' => 'Contacts'), $this);?>

<script>
document.getElementById('detailpanel_3').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_EDITVIEW_PANEL1'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='line_items_c_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS','module' => 'Contacts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['line_items_c']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['line_items_c']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['line_items_c']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['line_items_c']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['line_items_c']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['aos_products_quotes_id_c']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['line_items_c']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['line_items_c']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['line_items_c']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"aos_products_quotes_id_c","name":"line_items_c"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['line_items_c']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['line_items_c']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['line_items_c']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['line_items_c']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['line_items_c']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(3, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
<?php endif; ?>
</div></div>

<script language="javascript">
    var _form_id = '<?php echo $this->_tpl_vars['form_id']; ?>
';
    <?php echo '
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == \'\') ? \'EditView\' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<?php $this->assign('place', '_FOOTER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<div class="action_buttons"><?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE_FOOTER"><?php endif; ?>  <?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL_FOOTER"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Contacts'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php endif; ?> <?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Contacts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?><div class="clear"></div></div>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
function(){SUGAR.util.buildAccessKeyLabels();});
</script><?php echo smarty_function_sugar_getscript(array('file' => "cache/include/javascript/sugar_grp_yui_widgets.js"), $this);?>

<script type="text/javascript">
var EditView_tabs = new YAHOO.widget.TabView("EditView_tabs");
EditView_tabs.selectTab(0);
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
</script><?php echo '
<script type="text/javascript">
addForm(\'EditView\');addToValidate(\'EditView\', \'name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'salutation\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SALUTATION','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'first_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'last_name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'full_name\', \'fullname\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'title\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'department\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'do_not_call\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DO_NOT_CALL','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_home\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email\', \'email\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANY_EMAIL','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_mobile\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_work\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_other\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'phone_fax\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email1\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_EMAIL_ADDRESS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'invalid_email\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_INVALID_EMAIL','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email_opt_out\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_OPT_OUT','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_street_2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_2','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_street_3\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_3','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_CITY','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STATE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_COUNTRY','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'alt_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'alt_address_street_2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_2','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'alt_address_street_3\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_3','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'alt_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_CITY','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'alt_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STATE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'alt_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_POSTALCODE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'alt_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_COUNTRY','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assistant\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assistant_phone\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT_PHONE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email_addresses_non_primary\', \'email\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_NON_PRIMARY','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'email_and_name1\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'lead_source\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'account_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'account_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'opportunity_role_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'opportunity_role_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_ROLE_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'opportunity_role\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_ROLE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reports_to_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'report_to_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'birthdate\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BIRTHDATE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'campaign_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'campaign_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'c_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'m_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status_name\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'sync_contact\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SYNC_CONTACT','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'e_invite_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONT_INVITE_STATUS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'event_status_name\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_INVITE_STATUS_EVENT','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'event_invite_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_INVITE_STATUS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'e_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONT_ACCEPT_STATUS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'event_accept_status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS_EVENT','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'event_status_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'produkt1_c\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT1','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'preis3_c\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PREIS3','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'menge3_c\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MENGE3_C','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'menge_c\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MENGE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'produkt6_c\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT6_C','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'preis6_c\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PREIS6','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'menge2_c\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MENGE2','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'preis4_c\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PREIS4','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'line_items_c\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'joomla_account_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_JOOMLA_ACCOUNT_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'portal_account_disabled\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_ACCOUNT_DISABLED','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'joomla_account_access\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_JOOMLA_ACCOUNT_ACCESS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'portal_user_type\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_USER_TYPE','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'preis5_c\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PREIS5','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'produkt2_c\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT2_C','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'preis2_c\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PREIS2','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'produkt4_c\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT4_C','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'menge6_c\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MENGE6','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'produkt5_c\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT5_C','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'preis_c\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PREIS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'menge5_c\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MENGE5','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'menge4_c\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MENGE4','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'aos_products_id1_c\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT2_C_AOS_PRODUCTS_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'aos_products_id2_c\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT3_C_AOS_PRODUCTS_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'aos_products_id3_c\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT4_C_AOS_PRODUCTS_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'aos_products_id4_c\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT5_C_AOS_PRODUCTS_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'aos_products_id5_c\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT6_C_AOS_PRODUCTS_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'aos_products_quotes_id_c\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS_AOS_PRODUCTS_QUOTES_ID','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_address_c\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_ADDRESS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_geocode_status_c\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_GEOCODE_STATUS','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_lat_c\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_LAT','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_lng_c\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_LNG','module' => 'Contacts','for_js' => true), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Contacts','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Contacts','for_js' => true), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'account_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Contacts','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Contacts','for_js' => true), $this); echo '\', \'account_id\' );
addToValidateBinaryDependency(\'EditView\', \'produkt1_c\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Contacts','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT1','module' => 'Contacts','for_js' => true), $this); echo '\', \'aos_products_id_c\' );
addToValidateBinaryDependency(\'EditView\', \'line_items_c\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Contacts','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS','module' => 'Contacts','for_js' => true), $this); echo '\', \'aos_products_quotes_id_c\' );
addToValidateBinaryDependency(\'EditView\', \'produkt2_c\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Contacts','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUKT2_C','module' => 'Contacts','for_js' => true), $this); echo '\', \'aos_products_id_c\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_account_name\']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id","billing_address_street","billing_address_city","billing_address_state","billing_address_postalcode","billing_address_country","phone_office"],"populate_list":["EditView_account_name","account_id","primary_address_street","primary_address_city","primary_address_state","primary_address_postalcode","primary_address_country","phone_work"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_produkt1_c\']={"form":"EditView","method":"query","modules":["AOS_Products"],"group":"or","field_list":["name","id"],"populate_list":["produkt1_c","aos_products_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_produkt2_c\']={"form":"EditView","method":"query","modules":["AOS_Products"],"group":"or","field_list":["name","id"],"populate_list":["produkt2_c","aos_products_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_line_items_c\']={"form":"EditView","method":"query","modules":["AOS_Products_Quotes"],"group":"or","field_list":["name","id"],"populate_list":["line_items_c","aos_products_quotes_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>'; ?>
