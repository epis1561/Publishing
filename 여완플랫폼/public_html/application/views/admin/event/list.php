<div class="table-responsive">	
	<table class="table table-striped jambo_table bulk_action">
		<thead>
			<tr class="headings">
				<th class="column-title">번호</th>
				<th class="column-title">제목</th>
				<th class="column-title">등록일시</th>
				<th class="column-title">조회수</th>				
				<th class="column-title">관리</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($list as $article) { ?>
			<tr class="odd pointer">				
				<td class="a-center"><?= $start-- ?></td>								
				<td class="a-center"><?= $article['subject'] ?></td>
				<td><?= $article['rtime'] ?></td>
				<td><?= $article['hit'] ?></td>
				<td class="last">
					<a href="/admin/event/<?= $article['idx'] ?>"><button type="button" class="btn btn-success">수정</button></a>
					<button type="button" class="btn btn-danger" onclick="del('<?= $article['idx'] ?>');">삭제</button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>	
</div>
<div class="form-group">
<div class="col-md-11 col-sm-11 offset-md-3">
		<?= $this -> pagination -> create_links(); ?>
	</div>
	<div class="col-md-1 col-sm-1 offset-md-3">
		<a href="/admin/regist/event"><button type="button" class="btn btn-primary">등록</button></a>
	</div>
</div>
<script>
	function del(idx) {
		if (confirm("해당 게시글을 삭제하시겠습니까?")) {
			document.location.href = "/adminFunc/delete/event/" + idx;
		}
	}
</script>