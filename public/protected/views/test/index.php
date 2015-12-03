<link type="text/css" rel="stylesheet" href="/assets/swfupload/default.css"/>
<?php
$this->widget('application.extensions.swfupload.CSwfUpload', array(
    'jsHandlerUrl'=>'/assets/swfupload/handlers.js', //Relative path
    'postParams'=>array(),
    'config'=>array(
        'use_query_string'=>true,
        'upload_url'=>'/test/upload?test=1&test=2', //Use $this->createUrl method or define yourself
        'file_size_limit'=>'2 MB',
        'file_types'=>'*.jpg;*.png;*.gif',
        'file_types_description'=>'Image Files',
        'file_upload_limit'=>0,
        'file_queue_error_handler'=>'js:fileQueueError',
        'file_dialog_complete_handler'=>'js:fileDialogComplete',
        'upload_progress_handler'=>'js:uploadProgress',
        'upload_error_handler'=>'js:uploadError',
        'upload_success_handler'=>'js:uploadSuccess',
        'upload_complete_handler'=>'js:uploadComplete',
        'custom_settings'=>array('upload_target'=>'divFileProgressContainer'),
        'button_placeholder_id'=>'swfupload',
        'button_width'=>170,
        'button_height'=>20,
        'button_text'=>'<span class="button">上传图片(2 MB)</span>',
        'button_text_style'=>'.button {}',
        'button_text_top_padding'=>0,
        'button_text_left_padding'=>0,
        'button_window_mode'=>'js:SWFUpload.WINDOW_MODE.TRANSPARENT',
        'button_cursor'=>'js:SWFUpload.CURSOR.HAND',
        ),
    )
);
?>
 
<?php echo CHtml::beginForm(); ?>
<div class="form">
    <div class="row">
    <div id="divFileProgressContainer"></div>
    <div class="swfupload" style="background:red;display:inline-block;"><span id="swfupload"></span></div>
    </div>
</div>
<?php echo CHtml::endForm(); ?>