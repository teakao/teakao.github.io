<!DOCTYPE html>
<html>
<?php  
header("Location: http://www.example.com/example-url", true, 301);  
exit();  
?> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tiffany Kao</title>
	<link rel="stylesheet" href="index.css"> <!-- LINKED -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<style>
		body {
			font-family: monospace;
		}
		
		#container{
		/*	background-color:  pink;*/
			padding-bottom: 100px;
		}

        .gallery-container {
        	/*background-color:  red;*/
        	margin-right:  0px;
            margin-left:  10px;
            margin-top: 8px;

        }
        
        .gallery-item {
/*            margin-bottom: 10px;*/
            transition: transform 0.3s ease;
            overflow: hidden;
        }
        
/*        .gallery-item:hover {
            transform: scale(1.02);
        }*/
        
        .gallery-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            padding:  0px;
            transition: all 0.3s ease;
        }
        
        @media (max-width: 2000px) {
            .gallery-img {
                height: 450px;  /*Smaller height on mobile but still in a row */
            }
        }

        .row {
			height:  450px;
			/*background-color:  red;*/
		}

		#sketchbook {
			height: 390px;
			width: auto;
		}

		#sketchbook-wrap {
			padding-top: 80px;
			justify-content: center;
		}

		#button {
			margin-top:  10px;
			height: 30px;
			width:  auto;
			float:  left;
			opacity: 0.5;
		}

		#button:hover{
			opacity: 1.0;
		}


		h1{
			font-family: monospace;
  			font-stretch: ultra-expanded;
  			font-size:  50px;
			/*position:  fixed;*/
			/*font-family:  Helvetica Neue;*/
			/*font-family: "Archivo Black", sans-serif;*/
		}

		#navbar {
			position:  fixed;
			font-family:  Helvetica Neue;
			color:  #000;
			font-size:  15px;
			text-transform:  uppercase;
		}


		.top-row{
			height:  200px;
/*			background:  red;*/
			position:  fixed;
		}



/*		#riley-photo{
			height:  100px;
		}*/

		#page-wrapper {
			margin-bottom:  100px;
		}



		h5{
			text-transform:  uppercase;
			font-size: 12px;
/*			text-align:  right;*/
		}

/*		h6{
			text-align:  right;
		}
*/

		#spacer {
			height:  200px;
		}

		#name {
		    line-height: 0.8; /* Lower overall line height for the container */

		}

		#name h1 {
		    margin-bottom: -6px; /* Negative margin pushes the next element up */
		    line-height: 0.9; /* Tighter line height for h1 */
		    position: relative; /* For z-index to work */
		    z-index: 2; /* Higher z-index to ensure it appears on top */
		}

		#name h2 {
			font-size:  20px;
		    position: relative; /* For z-index to work */
		    z-index: 1; /* Lower z-index */
		    margin-top: 0; /* Remove top margin */
		    line-height: 0.9; /* Tighter line height for h2 */
		}

}



	</style>
</head>
<body>

	<div class = "top-row">
			<div id = "name">
<!-- 			<div class="col"> -->
				<!-- <img id = "logo" src = "img/teakao.png" alt = "TEAKAO"> -->
				<h1>TIFFANY KAO<h1>
				<h2>VIDEO ART DESIGN</h2>	
<!-- 			</div> -->
			</div>

			<ul id="navbar" class = "col">
				<li id="active-menu"><a href="video.php">Video</a></li>
				<li id="active-menu"><a href="paintings.php">Paintings</li>
				<li id="active-menu"><a href="visdev.php">Visual Development</a></li>
				<li id="active-menu"><a href="misc.php">Objects</a></li>
			<!-- 	<li id="active-menu"><a href="about.php">About</a></li> -->

			</ul> <!-- navbar -->
	</div>	<!-- #top-row -->

	<div id = "spacer">
	</div>	



<!-- 	<div id="page-wrapper"> -->
	<div id="container"><!-- container-->


			<!-- ROW 1-->
			<div class="row gx-2 gallery-container">
				    <div class="col-sm-3">
				    	<div class="gallery-item">
					        <h2>"LIT CHECK"</h2>
					  
					        <h4>Reese's Book Club X Apple Books</h4>
					        <h6>EDITOR / ASSOCIATE PRODUCER</h5>
					        		<!-- <br></br> -->
					        <h5>dir. Justine Sto Tomas</h5>
					        <h5>creative Jane K Lee</h5>
					        <h5>Summer 2024-Summer 2025</h5>

					    </div>    
				    </div>
			    		            <!-- Single row of 3 images -->
			    	<div class="col-2">
		                <div class="gallery-item">
		                    <img src="img/pastaqueen2.png" alt="Gallery Image 2" class="gallery-img">
		                </div>
		            </div>
		            	            
		            <div class="col">
		                <div class="gallery-item">
		                    <img src="img/Riley_LitCheck_1.png" alt="Gallery Image 1" class="gallery-img">
		                </div>
		            </div>

		            <div class="col-2">
		                <div class="gallery-item">
		                    <img src="img/iphone-vertical.png" alt="Gallery Image 2" class="gallery-img">
		                </div>
		            </div>

		            

<!-- 		            <div class="col">
		                <div class="gallery-item">
		                    <img src="img/Riley_LitCheck_1.png" alt="Gallery Image 3" class="gallery-img">
		                </div>
		            </div>	 -->
			</div><!-- ROW 1-->


			<!-- ROW 2 -->
<!-- 			<div class="row gx-2 gallery-container ">
				    <div class="col-sm-3">
				    	<div class="gallery-item">
					        <h2>PAINTINGS</h2>
					        <h6>GOUACHE, OIL, DIGITAL</h5>
					        <h4></h4>
					        <br></br>
					        
					        <h5>I LOVE Plein Air</h5>
					        <h5>Plein Air</h5>

					    </div>    
				    </div>
			    	<div class="col-2">
		                <div class="gallery-item">
		                    <img src="img/desk.png" alt="Gallery Image 2" class="gallery-img">
		                </div>
		            </div>
		            	            
		            <div class="col-4">
		                <div class="gallery-item">
		                    <img src="img/four.png" alt="Gallery Image 2" class="gallery-img">
		                </div>
		            </div>

		         

		            <div class="col">
		                <div class="gallery-item">
		                    <img src="img/mochi.png" alt="Gallery Image 3" class="gallery-img">
		                </div>
		            </div>	
			</div>ROW 2 --> 


			<!-- ROW 4 -->
			<div class="row gx-2  gallery-container ">
				    <div class="col-sm-3">
				    	<div class="gallery-item">
					        <h2>NBCUniversal Creative Content</h2>
					        <h6>VIDEO EDITOR</h5>
					        <h6>SOCIAL CONTENT, GRAPHICS ANIMATION</h6>
					        <br></br>

					    </div>    
				    </div>
			    		            <!-- Single row of 3 images -->
		            <div class="col">
		                <div class="gallery-item">
		                    <img src="img/AGT.png" alt="Gallery Image 2" class="gallery-img">
		                </div>
		            </div>

		            <div class="col-3">
		                <div class="gallery-item">
		                    <img src="img/adam.png" alt="Gallery Image 3" class="gallery-img">
		                </div>
		            </div>	

			</div><!-- ROW 4 -->


			<!-- ROW 3 -->
			<div class="row gx-2  gallery-container ">
				    <div class="col-sm-3">
				    	<div class="gallery-item">
					        <h2>VISUAL DEVELOPMENT</h2>
					        <h6>GOUACHE, OIL, DIGITAL</h5>
					        <h4></h4>
					        <br></br>
					        
					        <h5>I LOVE Plein Air</h5>
					        <h5>Plein Air</h5>

					    </div>    
				    </div>
			    		            <!-- Single row of 3 images -->
		            <div class="col-6">
		                <div class="gallery-item">
		                    <img src="img/FO_Key1.jpeg" alt="Gallery Image 2" class="gallery-img">
		                </div>
		            </div>

		            <div class="col">
		                <div class="gallery-item">
		                    <img src="img/character_texture.png" alt="Gallery Image 3" class="gallery-img">
		                </div>
		            </div>	

			</div><!-- ROW 3 -->

	
<!-- 			<img id = "home-page-photo" src = "img/la-3.png" alt = "TEAKAO"> -->	
	</div><!-- container-->



<!-- 			<div class= "row" id="sketchbook-wrap">
				<img src="img/sketchbook2.png" alt="sketchbook" id="sketchbook">
			</div> -->


<!-- 		<div class="row justify-content-md-center">
		    <div class="col d-flex flex-row justify-content-center">
		    	<img class="d-flex justify-content-start" src="img/prev-button.png" alt="sketchbook" id="button">
		    </div> -->
<!-- 		    <div class="col-md-auto">
		    </div> -->
<!-- 		    <div class="col d-flex flex-row justify-content-center">
		      <img class="d-flex justify-content-end" src="img/next-button.png" alt="sketchbook" id="button">
		    </div> -->
  		<!-- </div> #buttons-row -->


		<!-- </div>#container -->





	<div id="footer">
		Tiffany Kao &copy; 2025
	</div>

	<!-- 				<div class = "d-flex">
					<img src="img/prev-button.png" alt="sketchbook" id="button">
				</div>
				<div class = "d-flex">
					<img src="img/next-button.png" alt="sketchbook" id="button">
				</div> -->

</body>
</html>