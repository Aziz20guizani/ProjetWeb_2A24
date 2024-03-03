// Exercice 1 : perimètre d'un cercle
function calcul(x, y)
  {
    var pi = 3.14;
    if (x > 0) {
      return (x + y) * pi;
    } else {
      return y * pi;
    }
  }

// Exercice 2
function Nombres_parfaits(n)
{
 var i=0;
 var j=0;
 var s=0;
 for(i=1;i<=n;i++)
 {
    for(j=1;j<=i/2;j++)
    {
        if(i%j==0)
        {
            s=s+j;
        }
    }
    if(i==s)
    {
        console.log("Ce nombre est parfait : " + i);
    }
 }
}


// Exercice 3
const ch1 = "abc";
const ch2 = "de"; 
var i=0;
var j=0;

const resultat=[];
for (i=0;i<ch1.length;i++) 
{
  for (j=0;j<ch2.length;j++) 
  {
    resultat.push(ch1[i]+ch2[j]);
  }
}
console.log(resultat);

// Exercice 4
// Définir le tableau
let T = [17, 38, 10, 25, 72];

// Trier et afficher le tableau
T.sort();
console.log("Tableau trié :" , T);

// Ajouter l'élément 12 au tableau et l'afficher
T.push(12);
T.sort();
console.log("Tableau avec 12 ajouté :" , T);

// Renverser et afficher le tableau
T.reverse();
console.log("Tableau renversé :" , T);

// Afficher l'indice de l'élément 17
const indice = T.indexOf(17) + 1;
console.log("Indice de l'élément 17 :", indice);

// Enlever l'élément 38 et afficher le tableau
T.splice(T.indexOf(38), 1);
console.log("Tableau après suppression de 38 :" , T);

// Afficher le sous-tableau du 2e au 3e élément (indices 1 et 2)
const T1 = T.slice(1, 3);
console.log("Sous-tableau du 2e au 3e élément :", T1);

// Afficher le sous-tableau du début au 2e élément (indices 0 et 1)
const T2 = T.slice(0, 2);
console.log("Sous-tableau du début au 2e élément :", T2);

// Afficher le sous-tableau du 3e élément à la fin de la liste
const T3 = T.slice(2);
console.log("Sous-tableau du 3e élément à la fin de la liste :", T3);

// Exercice 5
// gènerer un chiffre aléatoire entre 0 et 10
const nbAlea = Math.floor(Math.random() * 11);
const nbEssais = 3;
var i=1;

// Faire 3 essais
for (i=1;i<=nbEssais;i++) 
{
  const essai = parseInt(prompt(`Essai ${i}/${nbEssais}. Devinez le chiffre entre 0 et 10 :`));

  // Vérification
  if (essai == nbAlea)
   {
    alert(`Bravo ! Vous avez deviné le chiffre ${nbAlea}.`);
    break;
   }
   else 
    alert(`Désolé, ce n'est pas le bon chiffre. Il vous reste ${nbEssais - i} essais.`);
}

// Terminer les 3 essais
if (i > nbEssais) {
  alert(`Désolé, vous avez épuisé vos ${nbEssais} essais. Le chiffre correcte est ${nbAlea}.`);
}

// Exercice 6
let paragrapheId=document.getElementById("paragraphe-id")
let toggle = true 
function changer(){
    toggle= !toggle
    if (toggle) {
        paragrapheId.innerHTML = "Text changed!"
    } else {
        paragrapheId.innerHTML = "Press me"
    }
}

