<?php /* Smarty version 2.6.11, created on 2015-05-03 16:00:14
         compiled from cache/modules/AOS_Products/SearchForm_advanced.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/modules/AOS_Products/SearchForm_advanced.tpl', 26, false),array('function', 'math', 'cache/modules/AOS_Products/SearchForm_advanced.tpl', 27, false),array('function', 'sugar_getimagepath', 'cache/modules/AOS_Products/SearchForm_advanced.tpl', 35, false),array('function', 'sugar_translate', 'cache/modules/AOS_Products/SearchForm_advanced.tpl', 44, false),array('function', 'html_options', 'cache/modules/AOS_Products/SearchForm_advanced.tpl', 206, false),array('function', 'sugar_getimage', 'cache/modules/AOS_Products/SearchForm_advanced.tpl', 398, false),)), $this); ?>

<script>
<?php echo '
	$(function() {
	var $dialog = $(\'<div></div>\')
		.html(SUGAR.language.get(\'app_strings\', \'LBL_SEARCH_HELP_TEXT\'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get(\'app_strings\', \'LBL_SEARCH_HELP_TITLE\'),
			width: 700
		});
		
		$(\'.help-search\').click(function() {
		$dialog.dialog(\'open\');
		// prevent the default action, e.g., following a link
	});
	
	});
'; ?>

</script>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
      
      
	
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
        <?php if ($this->_tpl_vars['isHelperShown'] == 0): ?>
            <?php $this->assign('isHelperShown', '1'); ?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_HELP_TITLE']; ?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
' class="help-search">
            </td>
        <?php else: ?>
            <td>&nbsp;</td>
        <?php endif; ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='8.3333333333333%' >
			<label for='name_advanced'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'AOS_Products'), $this);?>
</label>
		</td>
	<td  nowrap="nowrap" width='25%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['name_advanced']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name_advanced']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name_advanced']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name_advanced']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['name_advanced']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      accesskey='9'  >
   	   	</td>
    
      
	
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
        <?php if ($this->_tpl_vars['isHelperShown'] == 0): ?>
            <?php $this->assign('isHelperShown', '1'); ?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_HELP_TITLE']; ?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
' class="help-search">
            </td>
        <?php else: ?>
            <td>&nbsp;</td>
        <?php endif; ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='8.3333333333333%' >
			<label for='part_number_advanced'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PART_NUMBER','module' => 'AOS_Products'), $this);?>
</label>
		</td>
	<td  nowrap="nowrap" width='25%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['part_number_advanced']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['part_number_advanced']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['part_number_advanced']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['part_number_advanced']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['part_number_advanced']['name']; ?>
' size='30' 
    maxlength='25' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
   	   	</td>
    
      
	
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
        <?php if ($this->_tpl_vars['isHelperShown'] == 0): ?>
            <?php $this->assign('isHelperShown', '1'); ?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_HELP_TITLE']; ?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
' class="help-search">
            </td>
        <?php else: ?>
            <td>&nbsp;</td>
        <?php endif; ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='8.3333333333333%' >
			<label for='cost_advanced'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COST','module' => 'AOS_Products'), $this);?>
</label>
		</td>
	<td  nowrap="nowrap" width='25%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['cost_advanced']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['cost_advanced']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['cost_advanced']['value']);  endif; ?>

<?php $this->assign('id', $this->_tpl_vars['fields']['cost_advanced']['name']); ?>

<?php if (isset ( $_REQUEST['cost_advanced_range_choice'] )):  $this->assign('starting_choice', $_REQUEST['cost_advanced_range_choice']);  else:  $this->assign('starting_choice', "=");  endif; ?>

<script type='text/javascript'>
function <?php echo $this->_tpl_vars['id']; ?>
_range_change(val) 
{
  calculate_between = (val == 'between');

  //Clear the values depending on the operation
  if(calculate_between) {
     document.getElementById("range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';   
  } else {
     document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';
     document.getElementById("end_range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';
  }
 
  document.getElementById("<?php echo $this->_tpl_vars['id']; ?>
_range_div").style.display = calculate_between ? 'none' : '';
  document.getElementById("<?php echo $this->_tpl_vars['id']; ?>
_between_range_div").style.display = calculate_between ? '' : 'none';
}

var <?php echo $this->_tpl_vars['id']; ?>
_range_reset = function()
{
<?php echo $this->_tpl_vars['id']; ?>
_range_change('=');
}

YAHOO.util.Event.onDOMReady(function() {
if(document.getElementById('search_form_clear'))
{
YAHOO.util.Event.addListener('search_form_clear', 'click', <?php echo $this->_tpl_vars['id']; ?>
_range_reset);
}

});

YAHOO.util.Event.onDOMReady(function() {
 	 if(document.getElementById('search_form_clear_advanced'))
 	 {
 	     YAHOO.util.Event.addListener('search_form_clear_advanced', 'click', <?php echo $this->_tpl_vars['id']; ?>
_range_reset);
 	 }
});

YAHOO.util.Event.onDOMReady(function() {
    //register on basic search form button if it exists
    if(document.getElementById('search_form_submit'))
     {
         YAHOO.util.Event.addListener('search_form_submit', 'click',<?php echo $this->_tpl_vars['id']; ?>
_range_validate);
     }
    //register on advanced search submit button if it exists
   if(document.getElementById('search_form_submit_advanced'))
    {
        YAHOO.util.Event.addListener('search_form_submit_advanced', 'click',<?php echo $this->_tpl_vars['id']; ?>
_range_validate);
    }

});

// this function is specific to range searches and will check that both start and end range fields have been
// filled prior to submitting search form.  It is called from the listener added above.
function <?php echo $this->_tpl_vars['id']; ?>
_range_validate(e){
    if (
            (document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").value.length >0 && document.getElementById("end_range_<?php echo $this->_tpl_vars['id']; ?>
").value.length == 0)
          ||(document.getElementById("end_range_<?php echo $this->_tpl_vars['id']; ?>
").value.length >0 && document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").value.length == 0)
       )
    {
        e.preventDefault();
        alert('<?php echo $this->_tpl_vars['APP']['LBL_CHOOSE_START_AND_END_ENTRIES']; ?>
');
        if (document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").value.length == 0) {
            document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").focus();
        }
        else {
            document.getElementById("end_range_<?php echo $this->_tpl_vars['id']; ?>
").focus();
        }
    }

}
</script>

<span style="white-space:nowrap !important;">
<select id="<?php echo $this->_tpl_vars['id']; ?>
_range_choice" name="<?php echo $this->_tpl_vars['id']; ?>
_range_choice" style="width:190px !important;" onchange="<?php echo $this->_tpl_vars['id']; ?>
_range_change(this.value);">
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['cost_advanced']['options'],'selected' => $this->_tpl_vars['starting_choice']), $this);?>

</select>
<div id="<?php echo $this->_tpl_vars['id']; ?>
_range_div" style="<?php if ($this->_tpl_vars['starting_choice'] == 'between'): ?>display:none;<?php else: ?>display:'';<?php endif; ?>">
<input type='text' name='range_<?php echo $this->_tpl_vars['id']; ?>
' id='range_<?php echo $this->_tpl_vars['id']; ?>
' style='width:75px !important;' size='20' 
     
    value='<?php if (empty ( $_REQUEST['range_cost_advanced'] ) && ! empty ( $_REQUEST['cost_advanced'] )):  echo $_REQUEST['cost_advanced'];  else:  echo $_REQUEST['range_cost_advanced'];  endif; ?>' tabindex='' >
</div>
<div id="<?php echo $this->_tpl_vars['id']; ?>
_between_range_div" style="<?php if ($this->_tpl_vars['starting_choice'] == 'between'): ?>display:'';<?php else: ?>display:none;<?php endif; ?>">
<input type='text' name='start_range_<?php echo $this->_tpl_vars['id']; ?>
' 
    id='start_range_<?php echo $this->_tpl_vars['id']; ?>
' style='width:75px !important;' size='10' 
     
    value='<?php echo $_REQUEST['start_range_cost_advanced']; ?>
' tabindex=''>
<?php echo $this->_tpl_vars['APP']['LBL_AND']; ?>

<input type='text' name='end_range_<?php echo $this->_tpl_vars['id']; ?>
' 
    id='end_range_<?php echo $this->_tpl_vars['id']; ?>
' style='width:75px !important;' size='10' 
     
    value='<?php echo $_REQUEST['end_range_cost_advanced']; ?>
' tabindex=''>    
</div> 
</span>
   	   	</td>
    
      
	
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
        <?php if ($this->_tpl_vars['isHelperShown'] == 0): ?>
            <?php $this->assign('isHelperShown', '1'); ?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_HELP_TITLE']; ?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
' class="help-search">
            </td>
        <?php else: ?>
            <td>&nbsp;</td>
        <?php endif; ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='8.3333333333333%' >
			<label for='price_advanced'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRICE','module' => 'AOS_Products'), $this);?>
</label>
		</td>
	<td  nowrap="nowrap" width='25%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['price_advanced']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['price_advanced']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['price_advanced']['value']);  endif; ?>

<?php $this->assign('id', $this->_tpl_vars['fields']['price_advanced']['name']); ?>

<?php if (isset ( $_REQUEST['price_advanced_range_choice'] )):  $this->assign('starting_choice', $_REQUEST['price_advanced_range_choice']);  else:  $this->assign('starting_choice', "=");  endif; ?>

<script type='text/javascript'>
function <?php echo $this->_tpl_vars['id']; ?>
_range_change(val) 
{
  calculate_between = (val == 'between');

  //Clear the values depending on the operation
  if(calculate_between) {
     document.getElementById("range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';   
  } else {
     document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';
     document.getElementById("end_range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';
  }
 
  document.getElementById("<?php echo $this->_tpl_vars['id']; ?>
_range_div").style.display = calculate_between ? 'none' : '';
  document.getElementById("<?php echo $this->_tpl_vars['id']; ?>
_between_range_div").style.display = calculate_between ? '' : 'none';
}

var <?php echo $this->_tpl_vars['id']; ?>
_range_reset = function()
{
<?php echo $this->_tpl_vars['id']; ?>
_range_change('=');
}

YAHOO.util.Event.onDOMReady(function() {
if(document.getElementById('search_form_clear'))
{
YAHOO.util.Event.addListener('search_form_clear', 'click', <?php echo $this->_tpl_vars['id']; ?>
_range_reset);
}

});

YAHOO.util.Event.onDOMReady(function() {
 	 if(document.getElementById('search_form_clear_advanced'))
 	 {
 	     YAHOO.util.Event.addListener('search_form_clear_advanced', 'click', <?php echo $this->_tpl_vars['id']; ?>
_range_reset);
 	 }
});

YAHOO.util.Event.onDOMReady(function() {
    //register on basic search form button if it exists
    if(document.getElementById('search_form_submit'))
     {
         YAHOO.util.Event.addListener('search_form_submit', 'click',<?php echo $this->_tpl_vars['id']; ?>
_range_validate);
     }
    //register on advanced search submit button if it exists
   if(document.getElementById('search_form_submit_advanced'))
    {
        YAHOO.util.Event.addListener('search_form_submit_advanced', 'click',<?php echo $this->_tpl_vars['id']; ?>
_range_validate);
    }

});

// this function is specific to range searches and will check that both start and end range fields have been
// filled prior to submitting search form.  It is called from the listener added above.
function <?php echo $this->_tpl_vars['id']; ?>
_range_validate(e){
    if (
            (document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").value.length >0 && document.getElementById("end_range_<?php echo $this->_tpl_vars['id']; ?>
").value.length == 0)
          ||(document.getElementById("end_range_<?php echo $this->_tpl_vars['id']; ?>
").value.length >0 && document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").value.length == 0)
       )
    {
        e.preventDefault();
        alert('<?php echo $this->_tpl_vars['APP']['LBL_CHOOSE_START_AND_END_ENTRIES']; ?>
');
        if (document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").value.length == 0) {
            document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").focus();
        }
        else {
            document.getElementById("end_range_<?php echo $this->_tpl_vars['id']; ?>
").focus();
        }
    }

}
</script>

<span style="white-space:nowrap !important;">
<select id="<?php echo $this->_tpl_vars['id']; ?>
_range_choice" name="<?php echo $this->_tpl_vars['id']; ?>
_range_choice" style="width:190px !important;" onchange="<?php echo $this->_tpl_vars['id']; ?>
_range_change(this.value);">
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['price_advanced']['options'],'selected' => $this->_tpl_vars['starting_choice']), $this);?>

</select>
<div id="<?php echo $this->_tpl_vars['id']; ?>
_range_div" style="<?php if ($this->_tpl_vars['starting_choice'] == 'between'): ?>display:none;<?php else: ?>display:'';<?php endif; ?>">
<input type='text' name='range_<?php echo $this->_tpl_vars['id']; ?>
' id='range_<?php echo $this->_tpl_vars['id']; ?>
' style='width:75px !important;' size='20' 
     
    value='<?php if (empty ( $_REQUEST['range_price_advanced'] ) && ! empty ( $_REQUEST['price_advanced'] )):  echo $_REQUEST['price_advanced'];  else:  echo $_REQUEST['range_price_advanced'];  endif; ?>' tabindex='' >
</div>
<div id="<?php echo $this->_tpl_vars['id']; ?>
_between_range_div" style="<?php if ($this->_tpl_vars['starting_choice'] == 'between'): ?>display:'';<?php else: ?>display:none;<?php endif; ?>">
<input type='text' name='start_range_<?php echo $this->_tpl_vars['id']; ?>
' 
    id='start_range_<?php echo $this->_tpl_vars['id']; ?>
' style='width:75px !important;' size='10' 
     
    value='<?php echo $_REQUEST['start_range_price_advanced']; ?>
' tabindex=''>
<?php echo $this->_tpl_vars['APP']['LBL_AND']; ?>

<input type='text' name='end_range_<?php echo $this->_tpl_vars['id']; ?>
' 
    id='end_range_<?php echo $this->_tpl_vars['id']; ?>
' style='width:75px !important;' size='10' 
     
    value='<?php echo $_REQUEST['end_range_price_advanced']; ?>
' tabindex=''>    
</div> 
</span>
   	   	</td>
    
      
	
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
        <?php if ($this->_tpl_vars['isHelperShown'] == 0): ?>
            <?php $this->assign('isHelperShown', '1'); ?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_HELP_TITLE']; ?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
' class="help-search">
            </td>
        <?php else: ?>
            <td>&nbsp;</td>
        <?php endif; ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='8.3333333333333%' >
		
		<label for='created_by_advanced'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'AOS_Products'), $this);?>
</label>
    	</td>
	<td  nowrap="nowrap" width='25%'>
			
<?php echo smarty_function_html_options(array('id' => 'created_by_advanced','name' => 'created_by_advanced[]','options' => $this->_tpl_vars['fields']['created_by_advanced']['options'],'size' => '6','style' => "width: 150px",'multiple' => '1','selected' => $this->_tpl_vars['fields']['created_by_advanced']['value']), $this);?>

   	   	</td>
	</tr>
<tr>
	<td colspan='20'>
		&nbsp;
	</td>
</tr>	
<?php if ($this->_tpl_vars['DISPLAY_SAVED_SEARCH']): ?>
<tr>
	<td colspan='2'>
		<a class='tabFormAdvLink' onhover href='javascript:toggleInlineSearch()'>
            <?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_SHOW_OPTIONS'), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('alt_show_hide', ob_get_contents());ob_end_clean(); ?>
		<?php echo smarty_function_sugar_getimage(array('alt' => $this->_tpl_vars['alt_show_hide'],'name' => 'advanced_search','ext' => ".gif",'other_attributes' => 'border="0" id="up_down_img" '), $this);?>
&nbsp;<?php echo $this->_tpl_vars['APP']['LNK_SAVED_VIEWS']; ?>

		</a><br>
		<input type='hidden' id='showSSDIV' name='showSSDIV' value='<?php echo $this->_tpl_vars['SHOWSSDIV']; ?>
'><p>
	</td>
	<td scope='row' width='10%' nowrap="nowrap">
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SAVE_SEARCH_AS','module' => 'SavedSearch'), $this);?>
:
	</td>
	<td width='30%' nowrap>
		<input type='text' name='saved_search_name'>
		<input type='hidden' name='search_module' value=''>
		<input type='hidden' name='saved_search_action' value=''>
		<input title='<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
' value='<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
' class='button' type='button' name='saved_search_submit' onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
	</td>
	<td scope='row' width='10%' nowrap="nowrap">
	    <?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFY_CURRENT_SEARCH','module' => 'SavedSearch'), $this);?>
:
	</td>
	<td width='30%' nowrap>
        <input class='button' onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")' value='<?php echo $this->_tpl_vars['APP']['LBL_UPDATE']; ?>
' title='<?php echo $this->_tpl_vars['APP']['LBL_UPDATE']; ?>
' name='ss_update' id='ss_update' type='button' >
		<input class='button' onclick='return SUGAR.savedViews.saved_search_action("delete", "<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETE_CONFIRM','module' => 'SavedSearch'), $this);?>
")' value='<?php echo $this->_tpl_vars['APP']['LBL_DELETE']; ?>
' title='<?php echo $this->_tpl_vars['APP']['LBL_DELETE']; ?>
' name='ss_delete' id='ss_delete' type='button'>
		<br><span id='curr_search_name'></span>
	</td>
</tr>

<tr>
<td colspan='6'>
<div style='<?php echo $this->_tpl_vars['DISPLAYSS']; ?>
' id='inlineSavedSearch' >
	<?php echo $this->_tpl_vars['SAVED_SEARCH']; ?>

</div>
</td>
</tr>

<?php endif;  if ($this->_tpl_vars['displayType'] != 'popupView'): ?>
<tr>
	<td colspan='5'>
        <input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_TITLE']; ?>
' onclick='SUGAR.savedViews.setChooser()' class='button' type='submit' name='button' value='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
' id='search_form_submit_advanced'/>&nbsp;
        <input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
'  onclick='SUGAR.searchForm.clear_form(this.form); document.getElementById("saved_search_select").options[0].selected=true; return false;' class='button' type='button' name='clear' id='search_form_clear_advanced' value='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
'/>
        <?php if ($this->_tpl_vars['DOCUMENTS_MODULE']): ?>
        &nbsp;<input title="<?php echo $this->_tpl_vars['APP']['LBL_BROWSE_DOCUMENTS_BUTTON_TITLE']; ?>
" type="button" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_BROWSE_DOCUMENTS_BUTTON_LABEL']; ?>
" onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");' />
        <?php endif; ?>
        <a id="basic_search_link" onclick="SUGAR.searchForm.searchFormSelect('<?php echo $this->_tpl_vars['module']; ?>
|basic_search','<?php echo $this->_tpl_vars['module']; ?>
|advanced_search')" href="javascript:void(0)" accesskey="<?php echo $this->_tpl_vars['APP']['LBL_ADV_SEARCH_LNK_KEY']; ?>
" ><?php echo $this->_tpl_vars['APP']['LNK_BASIC_SEARCH']; ?>
</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;<?php if ($this->_tpl_vars['SAVED_SEARCHES_OPTIONS']): ?>|&nbsp;&nbsp;&nbsp;<b><?php echo $this->_tpl_vars['APP']['LBL_SAVED_SEARCH_SHORTCUT']; ?>
</b>&nbsp;
            <?php echo $this->_tpl_vars['SAVED_SEARCHES_OPTIONS']; ?>
 <?php endif; ?>
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'  onclick='SUGAR.searchForm.clear_form(this.form);' class='button' type='button' name='go_select' value=' <?php echo $this->_tpl_vars['APP']['LBL_GO_BUTTON_LABEL']; ?>
 '/></span>	
        </span>
	</td>
	<td class="help">
	    <?php if ($this->_tpl_vars['DISPLAY_SEARCH_HELP']): ?>
	    <img  border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
' class="help-search">
	    <?php endif; ?>
    </td>
</tr>
<?php endif; ?>
</table>

<script>
<?php echo '
	if(typeof(loadSSL_Scripts)==\'function\'){
		loadSSL_Scripts();
	}
'; ?>
	
</script><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'search_form_modified_by_name_advanced\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_advanced","modified_user_id_advanced"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_created_by_name_advanced\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_advanced","created_by_advanced"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_assigned_user_name_advanced\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_aos_product_category_name_advanced\']={"form":"search_form","method":"query","modules":["AOS_Product_Categories"],"group":"or","field_list":["name","id"],"populate_list":["aos_product_category_name_advanced","aos_product_category_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>'; ?>