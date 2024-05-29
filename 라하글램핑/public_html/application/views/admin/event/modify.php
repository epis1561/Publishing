<script src="/se2/js/HuskyEZCreator.js" charset="utf-8"></script>
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" novalidate method="post" action="/adminFunc/event/<?= $idx ?>" onsubmit="return submitCheck(this)">
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align" for="subject">제목 <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6"><input type="text" id="subject" name="subject" required="required" class="form-control" value="<?= $subject ?>"></div>		
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align" for="ir1">내용 <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6"><textarea name="content" id="ir1" style="width:100%; height:400px;"><?= $content ?></textarea></div>		
	</div>
	<div class="ln_solid"></div>
	<div class="item form-group">
		<a href="javascript:cancel();"><button class="btn btn-primary" type="button">Cancel</button></a>
		<!--button class="btn btn-primary" type="reset">Reset</button-->
		<button type="submit" class="btn btn-success">Submit</button>
	</div>
</form>
<script>
	var oEditors = [];
	nhn.husky.EZCreator.createInIFrame({
	 oAppRef: oEditors,
	 elPlaceHolder: "ir1",
	 sSkinURI: "/se2/SmartEditor2Skin.html",
	 fCreator: "createSEditor2"
	});
	
	function submitCheck(f) {
		errmsg = "";
		errfld = "";
		var nw_content_editor_data = oEditors.getById['ir1'].getIR();
		oEditors.getById['ir1'].exec('UPDATE_CONTENTS_FIELD', []);
		if($.inArray(document.getElementById('ir1').value.toLowerCase().replace(/^\s*|\s*$/g, ''), ['&nbsp;','<p>&nbsp;</p>','<p><br></p>','<div><br></div>','<p></p>','<br>','']) != -1) {
			document.getElementById('ir1').value='';
		}
		if (confirm("수정하시겠습니까?")) return true;
		else return false;
	}
		
	function cancel() {
		if (confirm("입력을 취소하고 목록페이지로 돌아가시겠습니까?")) document.location.href = '/admin/event';
	}
</script>