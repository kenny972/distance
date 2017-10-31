<?php
require "ex4form.php";

$form = new form($_POST);

?>

	<form action="#" method="post">

	<?php
	echo $form->input('username'); // Pour y mettre mon nom d'utilisateur
	echo $form->input('password'); //pour y entrer son password
	echo $form->submit();
	?>

	</form>



<!-- Créez une classe nommée form représentant un formulaire HTML. Le
constructeur doit créer le code d’en-tête du formulaire en
utilisant les éléments <form> et <fieldset>.
Le code du formulaire sera stocké dans l’un des attribut de
l’objet
Une méthode setText() doit permettre d’ajouter une zone de texte.
Une méthode setSubmit() doit permettre d’ajouter un bouton
d’envoi. Les paramètres de ces méthodes doivent correspondre aux
attributs des éléments HTML correspondants.
La méthode getForm() doit afficher tout le code HTML de création
du formulaire.
Créez des objets form, et ajoutez-y deux zones de texte et un
bouton d’envoi. Testez l’affichage obtenu. -->