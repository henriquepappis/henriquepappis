<?php
	if(!isset($_GET["lang"])){
		$_GET["lang"] = "pt";
	}

	if($_GET["lang"] == "en"){
		
		$titleAbout = "About Me";
		$titleJob = "PHP Developer";
		$titleInformation = "Basic Information";
		$titleWork = "Work Experience";
		$titleVolunteer = "Volunteer";
		$titleEducation = "Education";
		$titleSkills = "Skills";
		$titleLanguages = "Languages";
		$city = "Porto Alegre";
		$country = "Brazil";
		$titleBsc = "BSc Information System";
		$skillLevel1 = "Beginner";
		$skillLevel2 = "Intermediate";
		$skillLevel3 = "Experienced";
		$idiom1 = "Portuguese";
		$idiom1Level = "Native";
		$idiom2 = "English";
		$idiom2Level = "Advanced";
		$idiom3 = "Spanish";
		$idiom3Level = "Intermediate";
		$titleContact = "Contact";
		$titleName = "Name";
		$titleMail = "E-mail";
		$titleSubject = "Subject";
		$titleMessage = "Message";
		$titleSend = "Send Message";
		$buttonBack = "Back";

		$messageMailOK = "Thank You! Your message has been sent.";
		$messageMailErro = "Oops! Something went wrong and we couldn't send your message.";
		$messageMail400 = "Oops! There was a problem with your submission. Please complete the form and try again.";
		$messageMail403 = "There was a problem with your submission, please try again.";

	}elseif ($_GET["lang"] == "pt") {
		$titleAbout = "Sobre";
		$titleJob = "Desenvolvedor PHP Pleno";
		$titleInformation = "Informações";
		$titleWork = "Experiência";
		$titleVolunteer = "Voluntário";
		$titleEducation = "Educação";
		$titleSkills = "Habilidades";
		$titleLanguages = "Idiomas";
		$city = "Porto Alegre";
		$country = "Brasil";
		$titleBsc = "Sistemas de Informação";
		$skillLevel1 = "Iniciante";
		$skillLevel2 = "Intermediário";
		$skillLevel3 = "Experiente";
		$idiom1 = "Português";
		$idiom1Level = "Nativo";
		$idiom2 = "Inglês";
		$idiom2Level = "Avançado";
		$idiom3 = "Espanhol";
		$idiom3Level = "Básico";

		$titleContact = "Contato";
		$titleName = "Nome";
		$titleMail = "E-mail";
		$titleSubject = "Assunto";
		$titleMessage = "Mensagem";
		$titleSend = "Enviar Mensagem";
		$buttonBack = "Voltar";

		$messageMailOK = "Obrigado! Sua mensagem foi enviada com sucesso.";
		$messageMailErro = "Oops! Alguma coisa deu errada e não foi possível enviar sua mensagem.";
		$messageMail400 = "Oops! Problemas no envio. Por favor, complete o formulário e tente novamente.";
		$messageMail403 = "Há um problema no envio, por favor, tente novamente.";



	}
?>