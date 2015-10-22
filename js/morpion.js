/**
 * Created by matthieu.beauvin on 21/10/2015.
 */
var grille, tours, finJeu;

$(document).ready(function(){
    init();
    $('.case').on('click',function(){
        jouer($(this))
    });
});

function init(){
    //Parcours de toutes les cases pour les vider et mettre leur data chiffre à 0
    //Le data chiffre contient 0 si personne n'a joué dessus, 1 si on a joué une croix et 2 si on a joué un rond
    $('.case').each(function(){
        $(this).html("");
        $(this).attr('data-chiffre','0');
    });



    //Le joueur 1 doit jouer
    tours = 1;

    // Nombre de coups joués
    finJeu = 0;

    //Initialisation des cardinalités des cases
    //var i = 0, j = 0;
    //while(i<2)
    //{
    //    while(j<2)
    //    {
    //        $(this).setAttribute('data-position', i.toString()+','+ j.toString());
    //        j++;
    //    }
    //    j=0;
    //    i++;
    //}
}

function jouer(caseselect){
    if(caseselect.attr("data-chiffre") != 0){
        alert("Vous venez de jouer dans une case déja jouée");
        return false;
    }
    else{
        caseselect.attr('data-chiffre', tours);
        console.log(caseselect.attr('data-chiffre'));
        if(tours==1)
        {
            caseselect.html('X');
            tours++;
        }
        else {
            caseselect.html('O');
            tours--;
        }
    }
    finJeu++;
    controleGagne(caseselect);
    controleFinJeu();
}


function controleGagne(caseselect){
    /*
    * On controle toutes les colonnes puis toutes les lignes
    *
    * Pour controler toutes  les colonnes, on se place en haut de la première ligne, et on descend
    * puis on se replace sur la case d'a coté sur la première ligne, jusqu'a la fin
    *
    * Après qu'on soit arrivé à la fin de la première ligne, on retourne a la première case de la première colonne
    * et de la première ligne, puis on regarde chaque colonne de chaque ligne
    *
    * A chaque controle, on regarde si tous les éléments controlés sont égaux ou non
    *
    * */

    //i -> n° de ligne / / / j -> n° de colonne
    var i = 0, j = 0;
    controleCol(i,j, caseselect)
}

function controleCol(i, j, caseselect){
    var gagne = 0, casecontrolee;
    while(j<3 && gagne<3){
        //casecontrolee = $('body').find('[data-position="'+i.toString()+','+ j.toString()+'"]');
        //
        //console.log('[data-position="'+i.toString()+','+ j.toString()+'"]');
        //console.log("casecontrolee : "+casecontrolee.attr('data-chiffre'));

        var test = $('body').find('[data-position="pos"]');
        console.log(test.attr('data-test'));

        //if(casecontrolee.attr('data-chiffre') == tours){
        //    gagne++;
        //}
        //if(gagne == 3){
        //    alert("Vous avez gagné !");
        //    return false;
        //}
        j++;
    }
}

function controleFinJeu() {
    if(finJeu == 9)
    {
        alert("Personne n'a gagné ...");
        return false;
    }
}



/*
*
*  var i = 0, j = 0, nbtrouveligne = 0, nbtrouvecol = 0;
 while(i<2)
 {
 while(j<2)
 {
 if(caseselect.attr('data-chiffre')== tour)
 nbtrouvecol++;
 if(nbtrouvecol == 3)
 {
 alert("Vous avez gagné !!")
 return false;
 }
 j++;
 }
 j=0;
 nbtrouvecol = 0;
 i++;
 }*/

