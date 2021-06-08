<?php
include 'header.php';
?>
<div class="wrapper bgded overlay" style="background-image:url('images/b10.jpg');">
	<div id="breadcrumb" class="hoc clear">
		<!--  -->
		<h6 class="heading">Contato</h6>
		<ul>
			<li><a href="index">Home</a></li>
			<li><a href="empresa">Contatos</a></li>

		</ul>
		<!--  -->
	</div>
</div>
<!--  -->
<!--  -->
<!--  -->
<div class="wrapper row3 wow fadeInUp">
	<main class="hoc container clear">
		<!-- main body -->
		<!--  -->
		<div class="content">
			<!--  -->
			<!--  -->
			<div class="group btmspace-50 demo">
				<div class="one_third first">
					<div class="content">
						<h3>Email</h3>
						<p>Entre em contato por e-mail. Responderemos o mais rápido possível.</p>

						<p><b>henke@irriagro.com.br</b></p>

						<h3>Telefone</h3>
						<p>Entre em contato através do nosso telefone:
							<p><b>(55) 3333 6069</p></b>
							<p><b>(55) 9 9162 0200</b></p>
					</div>

				</div>

				<div class="two_third ">
					<h2>Endereços</h2>
					<div class="one_third ">
						<b>Loja</b>
						<address>
							Rua EMILIO GLITZ<br>
							100-B<br>
							Bairro LULU IGELFRITZ<br>
							Ijuí-RS<br>
							Cep:98.700-000<br>
						</address>
					</div>
					<div class="one_third ">
						<b>Depósito</b>
						<address>
							Rua Oswaldo Rieck<br>
							Nº 758<br>
							bairro Industrial<br>
							Ijuí-RS<br>
							Cep:98.700-000<br>
						</address><br>
					</div>
					<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1754.8379976838137!2d-53.916501716449616!3d-28.398852529446422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fc2d598ec939bd%3A0x40eb0cc3fca1af2d!2sIrriagro+RS!5e0!3m2!1spt-BR!2sbr!4v1563129073656!5m2!1spt-BR!2sbr" width="750" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>


			</div>
			<div id="comments">
				<h2>Nós mande uma mensagem</h2>
				<form action="sendmail.php" method="post">
					<div class="one_third first">
						<label for="nome">Nome <span>*</span></label>
						<input type="text" name="nome" id="nome" value="" size="22" required>
					</div>
					<div class="one_third">
						<label for="email">eMail <span>*</span></label>
						<input type="email" name="email" id="email" value="" size="22" required>
					</div>
					<div class="one_third">
						<label for="tel">Tel/Cel</label>
						<input type="tel" name="tel" id="telurl" value="" size="22">
					</div>

					<div class="block clear">
						<label for="mensagem">Mensagem</label>
						<textarea name="mensagem" id="mensagem" cols="25" rows="10"></textarea>
					</div>
					<div>
						<input type="submit" name="submit" value="Enviar">
						&nbsp;
						<input type="reset" name="reset" value="Limpar Formulario">
					</div>
				</form>
			</div>
		</div>
		<!--  -->
</div>
<!--  -->
<!-- / main body -->
<div class="clear"></div>
</main>
</div>

<?php
include 'footer.php';
?>