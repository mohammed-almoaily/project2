<?php

include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>اربح مع محمد</title>
	<link rel="stylesheet" href="./css/bootstrap.style.css">
</head>
<body>

	<br><br>

	<div class="container">


		<div class="p-1 mb-4 bg-body-tertiary rounded-3" align="center"> 
			<div class="container-fluid py-2">
			<img src=".\Images\tvtc.png" alt="tvtc_logo" width="300" height="300" class="mx-auto d-block" style="max-width: 100%;">
			<h1 class="display-5 fw-bold">اربح مع محمد</h1>
		 <p class="col-md-8 fs-4" align="center">باقي على فتح التسجيل</p>

		 <h2 id="countdown" class="counter" style="color: rgba(0, 123, 255, 1); padding: 10px; border: 1px soild; border-radius: 5px;"></h2>

		 <p class="col-md-8 fs-4" align="center">للسحب على ربح نسخة مجانية من برنامج</p>
		<br><br>
		<h3>للدخول السحب اتبع ما يلي:</h3>
		<br><br>
		<ul class="list-group list-group-flush bg-light" style="width: 70%;">
			<li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
			<li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
			<li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك</li>
			<li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
		</ul>
		<br><br>
		<h3>الرجاء ادخال معلوماتك</h3>
		<form class="mt-4" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" style="width: 50%;">

			<div class="mb-3">
				<label for="firstName" class="form-label">الاسم الأول</label>
				<input type="text" name="firstName" class="form-control" value="<?php echo $firstName ?>" id="firstName">
				<div class="form-text error" style="color: red;"> <?php echo $errors['firstNameError'] ?> </div>
			</div>

			<div class="mb-3">
				<label for="lastName" class="form-label">الاسم الأخير</label>
				<input type="text" name="lastName"  class="form-control" value="<?php echo $lastName ?>" id="lastName">
				<div class="form-text error" style="color: red;"> <?php echo $errors['lastNameError'] ?> </div>
			</div>

			<div class="mb-3">
				<label for="email" class="form-label">البريد الالكتروني</label>
				<input type="text" name="email" class="form-control" value="<?php echo $email ?>" id="email">
				<div class="form-text error" style="color: red;"> <?php echo $errors['emailError'] ?> </div>
			</div>

			<button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
		</form>

		<br><br>
	</div>

	<div style="background-color: #00000090; display: none; width: 100%; height: 100%; top: 0; left: 0; position: fixed;" id="#loader">
		<div id="loader" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
			<canvas id="circularLoader" width="200" height="200"></canvas>
		</div>
	</div>
	<!-- Button trigger modal -->
	<div class="d-grid col-2	mx-auto">
		<button type="button" id="#winner" class="btn btn-primary">
		اخيار الرابح
		</button>
		<br><br>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		<div class="modal-header">
		<h1 class="modal-title fs-5" id="modalLabel">الرابح في المسابقة</h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<?php foreach($winner_user as $winner_u){ ?>
			<h1 class="modal-title fs-5" id="modalLabel"> <?php echo htmlspecialchars($winner_u['firstName']) . " " . htmlspecialchars($winner_u['lastName']) ?> </h1>
			<?php } ?>
		</div>
	</div>
	</div>

	</div>

	<script src="./js/bootstrap.bundle.min.js"></script>
	<script src="./js/script.js"></script>
	<script src="./js/load.js"></script>


</body>
</html>