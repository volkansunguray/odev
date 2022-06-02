<?php

include("header.php");
?>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Uygulama Form</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row justify-content-center">

							<div class="col-lg-8">
								<div class="contact-wrap">
									<div id="form-message-warning" class="mb-4 w-100 text-center"></div>
									<div id="form-message-success" class="mb-4 w-100 text-center">
										Your message was sent, thank you!
									</div>

									<!-- 
									1- İsim Soyisim
									2- Email 
									3- Telefon
									4- Cinsiyet
									5- Ders (Yazılım Mimarileri, Web Programlama, Sunucu İşletim Sistemleri)
									6- Notunuz
									 -->
									<form action="index.php" method="POST" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="nameSurname" placeholder="İsim Soyisim">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="email" class="form-control" name="email" placeholder="Email Adresiniz">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="gsm" placeholder="Gsm Adresiniz">
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="radio" name="gender" value="K">Kadın<br>
													<input type="radio" name="gender" value="E">Erkek<br>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<select name="courses" class="form-control">
														<option> Ders Seçiniz</option>
														<option value="Php"> Php</option>
														<option value="Java"> Java</option>
														<option value="CSS"> CSS</option>

													</select>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<textarea name="description" class="form-control" rows="5" cols="70"></textarea>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Formu Kaydet" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
				<table class="table table-hover table-dark">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Ad Soyad</th>
						<th scope="col">E-Mail</th>
					</tr>
				</thead>
				<tbody>
									
	<?php


		$hName='localhost'; // host name
		$uName='root';   // database user name
		$password='';   // database password
		$dbName = "uygulama-form"; // database name
		$dbCon = mysqli_connect($hName,$uName,$password,"$dbName");
  		if(!$dbCon){
	  		die('Could not Connect MySql Server:' .mysql_error());
  		}

		$sorgu = $dbCon->query("SELECT id, nameSurname, email FROM forms");

		while ($cikti = $sorgu->fetch_array()){
			$id = $cikti['id'];
            $nameSurname = $cikti['nameSurname'];
			$email = $cikti['email'];

			echo "
				<tr>
					<th>$id</th>
					<td>$nameSurname</td>
					<td>$email</td>
				</tr>
			</tbody>
			";
		}

		if(count($_POST)>0)
		{    
			$nameSurname = $_POST['nameSurname'];
			$email = $_POST['email'];
			$gsm = $_POST['gsm'];
			$gender = $_POST['gender'];
			$courses = $_POST['courses'];
			$description = $_POST['description'];
		   
			$query = "INSERT INTO forms (nameSurname,email,gsm,gender,courses,description)
			VALUES ('$nameSurname','$email','$gsm','$gender','$courses','$description')";
			mysqli_query($dbCon, $query);
			$lastId = mysqli_insert_id($dbCon);

		   
			if (!empty($lastId)) {
				$message = "Your contact information is saved successfully";
			}
		}

		include("footer.php");
	?>
										</tbody>
									</table>



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
