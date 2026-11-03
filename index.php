<?php
function main (){
    
    if ($_SERVER["REQUEST_METHOD"] !== "POST") return "";

   switch ($_POST['op']) {
    case '+': echo $_POST['num1'] + $_POST['num2']; break;
    case '-': echo $_POST['num1'] - $_POST['num2']; break;
    case '*': echo $_POST['num1'] * $_POST['num2']; break;
    case '/': 
        if ($_POST['num2'] == 0) 
            echo "تقسیم بر صفر ممکن نیست";
        else 
            echo $_POST['num1'] / $_POST['num2'];
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ماشین‌حساب</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
<h2>ماشین‌حساب</h2>

<form method="post">
<label>عدد اول</label>
<input type="text" name="num1" required>

<label>عملگر</label>
<select name="op">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">×</option>
<option value="/">÷</option>
</select>

<label>عدد دوم</label>
<input type="text" name="num2" required>

<button type="submit">محاسبه</button>
</form>

<div class="result">نتیجه: <?php main(); ?></div>

</div>

</body>
</html>