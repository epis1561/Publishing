<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" novalidate method="post" action="/adminFunc/allSlide">
<div class="table-responsive">
	<table class="table table-striped jambo_table bulk_action">
		<thead>
			<tr class="headings">
				<th class="column-title">썸네일</th>
				<th class="column-title">제목</th>
				<th class="column-title">순서</th>
				<th class="column-title">노출여부</th>				
				<th class="column-title">관리</th>
			</tr>
		</thead>
		<tbody>
			<? foreach ($list as $article) { ?>
			<input type="hidden" name="idx[]" value="<?= $article['idx'] ?>">	
			<tr class="odd pointer">				
				<td class="a-center"><img src="/file/slide/<?= $article['thumbnail'] ?>"></td>
				<td><?= $article['subject'] ?></td>
				<td><input type="text" name="ordering[]" value="<?= $article['ordering'] ?>" class="form-control"></td>				
				<td><input type="checkbox" name="is_open[<?= $article['idx'] ?>]" value="1" <?php if ($article['is_open']) echo "checked"; ?>></td>
				<td class="last">
					<a href="/admin/slide/<?= $article['idx'] ?>"><button type="button" class="btn btn-success">수정</button></a>
					<button type="button" class="btn btn-danger" onclick="del('<?= $article['idx'] ?>');">삭제</button>
				</td>
			</tr>
			<? } ?>
		</tbody>
	</table>	
</div>
<div class="form-group">
	<div class="col-md-10 col-sm-10 offset-md-3">
	</div>
	<div class="col-md-2 col-sm-2 offset-md-3">
		<input type="submit" class="btn btn-success" value="일괄수정">
		<a href="/admin/regist/slide"><button type="button" class="btn btn-primary">등록</button></a>
	</div>
</div>
<script>
	function del(idx) {
		if (confirm("해당 게시글을 삭제하시겠습니까?")) {
			document.location.href = "/adminFunc/delete/slide/" + idx;
		}
	}
</script>
</form>