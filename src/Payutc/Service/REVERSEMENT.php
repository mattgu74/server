<?php

namespace Payutc\Service;

/**
 * REVERSEMENT.php
 * 
 * Ce service gère les reversements. 
 *
 * Toutes les méthodes retourne l'objet reversement (nouvellement crée ou tel qu'après édition).
 * En cas d'erreurs on renvoit des exceptions, et les reversements ne subissent aucune modification.
 */
 class REVERSEMENT extends \ServiceBase {

    /*
        Fonctions pour les administrateurs (personnes effectuant les reversements)
        Doivent avoir le droit sur toutes les fundations et utiliser une appli qui a égallement le droit sur toutes les fundations
    */

    /*
        Creation d'un reversement.
        => Statut "En cours de traitement"
    */
	function createReversement($fun_id, $rev_to=null, $rev_rate) {
        $this->checkRight(true, true, true, NULL);
        // TODO
        return null;
    }
   
    /*
        Modifie le taux de fonctionnement prélevé par payutc
        Ne peut être fait que tant que le reversement est en statut "En cours de traitement" ou "Reversement demandé"
    */
    function setRate($fun_id, $rev_id, $rev_rate) {
        $this->checkRight(true, true, true, NULL);
        // TODO
        return null;
    }

    /*
        Valide un reversement (change son statut à "Virement transmis à la banque")
        $rev_amount_fundation et le montant viré, il doit correspondre à ce qui est à reverser sinon ça echoue
        $rev_reference est la reference du paiement (numero de virement...)
        $comment est un message qui sera ajouté dans le mail automatique envoyé aux trésoriers de la fundation concerné
    */
    function validateReversement($fun_id, $rev_id, $rev_amount_fundation, $rev_reference, $comment="") {
        $this->checkRight(true, true, true, NULL);
        // TODO
        return null;
    }


    /*
        Fonctions pour les trésoriers des assos (n'ont qu'à avoir le droit sur leur fundation)
        Permet le suivi, et la demande de reversement
    */

    /*
        Retourne l'argent non encore reversé pour la période de $from à $to
    */
    function getEncours($fun_id, $rev_from=null, $rev_to=null) {
        $this->checkRight(true, true, true, $fun_id);
        // TODO
        return null;
    }

    /*
        Retourne la liste des reversements entre $start et $end
    */
    function getReversements($fun_id, $start=null, $end=null) {
        $this->checkRight(true, true, true, $fun_id);
        // TODO
        return null;
    }

    /*
        Crée un reversement avec status "Reversement demandé par l'asso"
        $comment sera ajouté au mail automatique émis vers les supers-trésoriers qui pourrait être amenés à effectuer le reversement
    */
    function askReversement($fun_id, $rev_to=null, $comment="") {
        $this->checkRight(true, true, true, $fun_id);
        // TODO
        return null;
    }

    /*
        Atteste qu'un reversement à bien été effectué
    */
    function certifyReversement($fun_id, $rev_id) {
        $this->checkRight(true, true, true, $fun_id);
        if($this->isAdmin()) {
            throw new Exception("Ce n'est pas à toi de valider la réception du reversement.");
        }
        // TODO
        return null;
    }

    /*
        Facture
        Retourne le document.
    */
    function getFacture($fun_id, $rev_id) {
        $this->checkRight(true, true, true, $fun_id);
        // TODO
        return null;
    }
 }
