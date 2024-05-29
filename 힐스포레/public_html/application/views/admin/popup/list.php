<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" novalidate method="post" action="/adminFunc/allPopup">
<div class="table-responsive">	
	<table class="table table-striped jambo_table bulk_action">
		<thead>
			<tr class="headings">
				<th class="column-title">번호</th>
				<th class="column-title">제목</th>
				<th class="column-title">팝업이미지</th>
				<th class="column-title">순서</th>
				<th class="column-title">노출여부</th>				
				<th class="column-title">관리</th>
			</tr>
		</thead>
		<tbody>
			<? foreach ($list as $article) { ?>
			<tr class="odd pointer">
				<input type="hidden" name="idx[]" value="<?= $article['idx'] ?>">
				<td class="a-center"><?= $article['idx'] ?></td>				
				<td><?= $article['subject'] ?></td>
				<td class="a-center"><?= $article['content'] ?></td>
				<td><input type="text" name="ordering[]" value="<?= $article['ordering'] ?>" class="form-control"></td>
				<td><input type="checkbox" name="is_open[<?= $article['idx'] ?>]" value="1" <?php if ($article['is_open']) echo "checked"; ?>></td>
				<td class="last">
					<a href="/admin/popup/<?= $article['idx'] ?>"><button type="button" class="btn btn-success">수정</button></a>
					<button type="button" class="btn btn-danger" onclick="del('<?= $article['idx'] ?>');">삭제</button>
				</td>
			</tr>
			<? } ?>
		</tbody>
	</table>	
</div>
<script>
	function del(idx) {
		if (confirm("해당 게시글을 삭제하시겠습니까?")) {
			document.location.href = "/adminFunc/delete/popup/" + idx;
		}
	}
</script>
<div class="form-group">
	<div class="col-md-9 col-sm-9 offset-md-3">
		
	</div>
	<div class="col-md-3 col-sm-3 offset-md-3">
		<input type="submit" class="btn btn-success" value="일괄수정">
		<a href="/admin/regist/popup"><button type="button" class="btn btn-primary">새창관리추가</button></a>
	</div>
</div>
</form>