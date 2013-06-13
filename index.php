<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<title></title>
				<meta name="description" content="">
				<meta name="viewport" content="width=device-width">
				<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
				<link rel="stylesheet" href="css/normalize.css">
				<link rel="stylesheet" href="css/foundation.css">
				<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

		<div class="row">
				<div class="large-10 columns">
						<h1>Convert Markdown to PDF</h1>
						<form method="POST" action="main.php">

								<div class="row">
										<div class="small-12 columns">
											<textarea placeholder=" Paste the CSS without the <style> tags " class="markdownText" name="cssText"></textarea>
										</div>
								</div>
								<hr/>
                <div class="row">
                  <div class="small-12 columns pageControls">
                    <button class="button addPageButton">Add New Page</button>
                  </div>
                </div>
								<div class="row pages">
										<div class="small-12 columns page">
												<div class="pageTitle">Page 1<button class="tiny button hideButton">-</span></div>
												<div class="pageContent">
													<textarea placeholder=" Paste the markdown text " class="markdownText" name="markdownText[]"></textarea>
												</div>
										</div>
								</div>
								<hr/>
								<div class="row">
									<div class="large-12 columns">
										<input class="large button expand" type="submit" value="Convert To Pdf">
									</div>
								</div>

						</form>
				</div>
				<div class="large-2 columns">

				</div>
		</div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	 
		</body>
</html>
