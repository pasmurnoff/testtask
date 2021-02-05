<div class="feedbackform container">
<h3> Задать вопрос </h3>
<form method="POST" id="form">
  <div class="form-row">
    <div class="col-md-6">
      <input type="text" name="fio" required class="form-control input" placeholder="ФИО">
	  <input type="text" name="phone" required class="form-control input dual-1" id="phone" placeholder="Мобильный телефон">
	  <input type="email" name="email" required class="form-control input dual-2" placeholder="E-mail">
	   <input type="text" name="date" required class="form-control input" id="date" placeholder="Дата рождения">
	 </div>
    <div class="col-md-6">
      <textarea class="form-control input" name="text" placeholder="Любая дополнительная информация" rows="5"></textarea>
    </div>
    </div>
	<button type="submit" class="btn btn-primary send">Отправить</button>
</form>
<script>
$(function () {    
  $("#form").submit(function (e) {
    e.preventDefault();
    var form_data = $(this).serialize(); 
    $.ajax({
      type: "POST", 
      url: "http://pasmurnoff.beget.tech/sendemail.php",
      dataType: "json", // Add datatype
      data: form_data
    }).done(function (data) {
        console.log(data);
        alert("It's OK!");
    }).fail(function (data) {
        console.log(data);
    });
  }); 
});
</script>

  <script>
$(function(){
  $("#phone").mask("8 (999) 999-99-99");
  $("#date").mask("99.99.9999", {placeholder: "дд.мм.гггг" });
});

</script>

</div>