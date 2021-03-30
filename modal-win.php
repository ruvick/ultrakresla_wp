<!-- 
    В этом файле описываем все  всплывающие окна
-->

<div style="display: none;">
    <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close"><?_e("закрыть","rubex");?></div>
        
        <div class = "modalline" id = "lineIcon">
        </div>
    
        <div class = "modalline" id = "lineMsg">
        </div>
    </div>
</div> 

	<div style="display: none;">
		<div class="box-modal box-modal-new box-modal-new__cust" id="question">
			<div class="box-modal_close box-modal_close_new arcticmodal-close">X</div>
			<img src = "<?php bloginfo("template_url")?>/img/similar-01.jpg" loading="lazy"/>
			<div class = "formArctikBlk mod-zagr-tur">
				<h2>Задать вопрос <span class = 'tkName'></span></h2>
				<p>Наши специалисты свяжутся с Вами в течение 15 минут</p>

				<form>
					<div class = "SendetMsg" style = "display:none"> 
						Ваше сообщение успешно отправлено.
					</div>
					<div class="headen_form_blk">
						<input type = "text" name = "clname" placeholder = "Имя*" id = "clnamezt" value = "" >
						<input type = "text" name = "clphone" placeholder = "Телефон*" class = "phoneMasc" id = "clphonezt"  value = "" ><br/>
					</div>
					<div class="callback-note mod-zagr-tur__note">Нажимая на кнопку "Отправить", вы соглашаетесь с <a class="tdu" href="<?php echo get_permalink(1312);?>">условиями обработки персональных данных</a>.</div>
					<input onclick="yaCounter29416892.reachGoal('doZ');" type = "button" class = "newButton btn" id = "azFormSubmitZt"  value = "Отправить">
				</form>

			</div>
		</div>
	</div>