$(document).ready(function(){
	var imageName = ["img/img1.jpg", "img/img2.jpg", "img/img3.jpg", "img/img4.jpg", "img/img5.jpg", "img/img6.jpg", "img/img7.jpg", "img/img8.jpg"];
	var imageTitle = [];
	var counter = 0;

	var clickaway =
	function go(){
		$("#picture").fadeOut(300, function(){
			$("#picture").attr("src", imageName[counter]);
			$("#imageCaption").text(imageTitle[counter]);
			counter++;
			if (counter > 7) {counter = 0;}
			$("#picture").fadeIn(500).delay(3000);
			go();
		});
	}
	clickaway();
	//$("#picture").click(clickaway);
});