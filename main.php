<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="euc-kr">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>beatmania IIDX 자동 서열표</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/sticky-footer.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h3><b>beatmania IIDX 자동서열표</b></h3>
				<div style="padding: 20px 0px;">
					<form class="form-signin" action="download.php" method="post">
						<fieldset disabled>
							<select class="form-control" name="level">
								<option value="10">SP 10 (다른 레벨은 추후 업데이트 예정)</option>
								<option value="11">SP 11</option>
								<option value="12">SP 12</option>
							</select>
						</fieldset>
						<label for="inputAccount" class="sr-only">inputAccount</label>
						<input type="text" id="account" class="form-control" name = "account" placeholder="iidx.me 계정" required="" autofocus="" value="" />
						<fieldset disabled>
							<label>
								<input type="checkbox" name ="hard" value="1" checked> Hard (추후 업데이트 예정)
							</label>
						</fieldset>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
					</form>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">업데이트 내역</h4>
						</div>
						<div class="modal-body">
							<p class="text-muted">[ver 0.3.1]<br>- 인코딩 문제 해결</p>
							<p class="text-muted">[ver 0.3]<br>- SP 10 업데이트</p>
						</div>
					</div>
				  </div>
				</div>
		</div>
		<footer class="footer">
				<div style="float:left"><p class="text-muted" ><b>Developer</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href = "https://twitter.com/__root____">@__root____</a></p></div>
				<div style="float:rigt"><p class="text-muted" style="text-align:right"><a id = "version" href = "#">ver 0.3.1</a></p></div>
		</footer>
		
		<script>
			$(document).ready(function(){
				$("#version").click(function(){
					$("#myModal").modal();
				});
			});
		</script>
		
	</body>
</html>