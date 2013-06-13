(function(){
	$('.pages').on('click','button', function(){
		$selectedPage = $(this).parents('.page');

		$selectedContent = 	$selectedPage.find('.pageContent');
		$('.pageContent').not($selectedContent).hide();
		$selectedContent.toggle();

		return false;
	});

	var pageNumber = 2;


	$('.addPageButton').on('click',function(){
		$('.pageContent').hide();
		var newPage = '<div class="small-12 columns page"><div class="pageTitle">Page '+pageNumber+'<button class="tiny button hideButton">-</span></div><div class="pageContent"><textarea placeholder=" Paste the markdown text " class="markdownText" name="markdownText[]"></textarea></div></div></div>';
		$('.pages').append(newPage);
		console.log(pageNumber);
		pageNumber++;
		return false;
	})
})()