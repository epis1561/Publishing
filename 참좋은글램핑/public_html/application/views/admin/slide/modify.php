<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" novalidate method="post" enctype="multipart/form-data" action="/adminFunc/slide/<?= $idx ?>" onsubmit="return submitCheck(this)">
<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align" for="subject">제목 <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6"><input type="text" id="subject" name="subject" required="required" class="form-control" value="<?= $subject ?>"></div>		
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align" for="thumb">thumbnail (jpg파일, 350px * 350px)</label>
		<div class="col-md-6 col-sm-6">
			<input type="file" id="thumb" name="thumbnail" class="form-control" value="" accept=".jpg">
			<img src="/file/slide/<?= $thumbnail ?>"> 
		</div>		
	</div>
	<div class="ln_solid"></div>
	<div class="item form-group">
		<a href="javascript:cancel();"><button class="btn btn-primary" type="button">Cancel</button></a>
		<button class="btn btn-primary" type="reset">Reset</button>
		<button type="submit" class="btn btn-success">Submit</button>
	</div>
</form>
<script>
	function submitCheck(f) {		
		if (confirm("수정하시겠습니까?")) return true;
		else return false;
	}
	
	function cancel() {
		if (confirm("입력을 취소하고 목록페이지로 돌아가시겠습니까?")) document.location.href = '/admin/slide';
	}
</script>