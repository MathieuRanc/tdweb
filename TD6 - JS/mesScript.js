/* *************************************** */
/* Teste un champ s'il est vide ou pas     */
/* parametre en entree: champAtester       */
/* cette fonction renvoie vrai ou faux     */
/* *************************************** */

function testerChamp(champAtester) {
	// on recupere la valeur du champ
	var t = document.getElementById(champAtester).value;

	// on teste s'il est vide
	if (t == '') {
		alert('Il manque le ' + champAtester + " de l'annonce !");
		return false;
	} else {
		return true;
	}
}

/* **************************************** */
/* Teste si le formulaire (les deux champs) */
/* champ1 : titre                           */
/* champ2 : texte                           */
/* **************************************** */

function verif(champ1, champ2) {
	if (testerChamp(champ1) == true) {
		if (testerChamp(champ2) == true) {
			// le deux champs sont remplis
			// on met le titre en majuscule
			var x = document.getElementById(champ1);
			x.value = x.value.toUpperCase();
			return true;
		} else {
			// le champ texte n'est pas rempli
			// on donne le focus au champ
			document.getElementById(champ2).focus();
			return false;
		}
	} else {
		// le champ titre n'est pas rempli
		// on donne le focus au champ
		document.getElementById(champ1).focus();
		return false;
	}
}

/* **************************************** */
/* prise de focus                           */
/* on met le champ en jaune                 */
/* **************************************** */

function myFocusFunction(idChamp) {
	document.getElementById(idChamp).style.backgroundColor = 'yellow';
}

/* **************************************** */
/* Perte de focus                           */
/* on met le champ en blanc                 */
/* **************************************** */

function myBlurFunction(idChamp) {
	document.getElementById(idChamp).style.backgroundColor = 'white';
}

/* **************************************** */
/* Affichage ou masquage de l'aide */
/* **************************************** */

function afficheMasque(idChamp) {
	// si le champ est cache (hidden) , on le rend visible
	// on change le libelle du bouton en "Masquer les astuces"
	if (document.getElementById(idChamp).style.visibility == 'hidden') {
		// rend visible la balise designee par id
		document.getElementById(idChamp).style.visibility = 'visible';
		document.getElementById('BTN').value = 'Masquer les astuces';
	} // sinon on le masque et le libelle devient "Afficher les astuces"
	else {
		document.getElementById(idChamp).style.visibility = 'hidden';
		document.getElementById('BTN').value = 'Afficher les astuces';
	}
}
