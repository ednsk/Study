<div style ='border: 1px solid; padding: 30px;
font-size: 25px; background: #c6c6c6; color: black; border-radius: 20px; text-align: center; margin-top: 30px;'>Hello World<div>
<button style="padding:10px 50px; cursor: pointer;" name="hi" method="POST">И тебе привет!</button>

<?php
if (isset($_POST)) {
    echo 'Красавчег!';
}
?>
