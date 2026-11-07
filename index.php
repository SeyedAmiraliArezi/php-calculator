<?php
function main (){

    if ($_SERVER["REQUEST_METHOD"] !== "POST") return "";

    if((is_numeric($_POST['num1']) && is_numeric($_POST['num2']))){
        switch ($_POST['op']) {
            case '+': return $_POST['num1'] + $_POST['num2']; 
            case '-': return $_POST['num1'] - $_POST['num2']; 
            case '*': return $_POST['num1'] * $_POST['num2']; 
            case '**': return $_POST['num1'] ** $_POST['num2'];
            case '%': return $_POST['num1'] * $_POST['num2'] / 100;

            case '/': 
                if ($_POST['num2'] == 0) 
                    return "تقسیم بر صفر ممکن نیست";
                else 
                    return $_POST['num1'] / $_POST['num2'];
                

            default: return "عملگر نامعتبر است"; 
        }

    }else return "لطفا مقادیر عددی وارد کنید ";
    
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
<option value="+">+ جمع</option>
<option value="-">- تفریق</option>
<option value="*">× ضرب</option>
<option value="/">÷ تقسیم</option>
<option value="**">توان</option>
<option value="%" >% درصد</option>

</select>

<label>عدد دوم</label>
<input type="text" name="num2" required>

<button type="submit">محاسبه</button>
</form>

<div class="result">نتیجه: <?php echo main(); ?></div>

</div>

</body>
</html>
