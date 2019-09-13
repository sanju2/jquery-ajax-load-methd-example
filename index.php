<!--sanju2 simple exaple ajax with jquery load method -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>JQuery ajax Load Method</title>
</head>
<body>
	<h1>jQuery ajax load method</h1>
	<button>Load Content</button>

	<div class="content">
		
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		
		$(document).ready(function(){
			$('button').click(function(){
				$('.content').load('content.php');//you can specify any elemet ex: $('.content').load('content.php p');
			});
		});
	</script>
</body>
</html>