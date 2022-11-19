<style>
.button_hi {
    padding:10px 50px; 
    cursor: pointer;
}
.Hello_World_Block {
    border: 1px solid; 
    padding: 30px;
    font-size: 25px; 
    background: #c6c6c6; 
    color: black; 
    border-radius: 20px; 
    text-align: center; 
    margin-top: 30px;
}
</style>

<div class ="Hello_World_Block">
<p>Hello World</p>
<button class="button_hi" name="hi" method="POST">И тебе привет!</button>
</div>

<?php
if (isset($_POST["hi"])) {
    echo 'Красавчег!';
}
?>
