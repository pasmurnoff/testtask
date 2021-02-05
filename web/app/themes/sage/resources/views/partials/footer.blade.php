<div class="feedbackform container">
<h3>Задать вопрос</h3>
  <form method="POST" id="form">
  <div class="form-row">
  <div class="col-md-6">
    <div class="form-item input">
      <input type="text" name="fio" class="form-input" required>
      <label class="form-label">Фамилия Имя Отчество</label>
    </div>
    <div class="form-item input dual-1">
      <input type="text" name="phone" id="phone" class="form-input" required>
      <label class="form-label" >Мобильный телефон</label>
    </div>
    <div class="form-item input dual-2">
      <input type="text"  name="email" class="form-input" required>
      <label class="form-label">E-mail</label>
    </div>
    <div class="form-item input">
      <input type="text" class="form-input" id="date" required>
      <label class="form-label" name="date" >Дата рождения</label>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-item input">
      <textarea  class="form-input textarea input"  name="text"  required></textarea>
      <label class="form-label">Любая дополнительная информация</label>
    </div>
  </div>
  <div class="buttoncontainer">
  <button type="submit" class="cnt submit send">Задать вопрос</button>
</div>
</div>
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
<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
