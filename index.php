<!DOCTYPE html>
<html lang="en">
<head>
	<title>Certificate Create</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="bg-contact2" style="background-image: url('img/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form"  action="certificate.php"  method="POST" enctype="multipart/form-data">
					<span class="contact2-form-title">
					Create Certificate
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name" required >
						<span class="focus-input2" data-placeholder="NAME"></span>
                    </div>
                    
                    <div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="fname" required >
						<span class="focus-input2" data-placeholder="FATHER NAME"></span>
                    </div>
                    
                    <div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="mname" required >
						<span class="focus-input2" data-placeholder="MOTHER NAME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="address" required >
						<span class="focus-input2" data-placeholder="PERMANENT ADDRESS"></span>
					</div>

					

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button type="submit" class="contact2-form-btn" name="submit">
                            Generate Certificate
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




</body>
</html>
