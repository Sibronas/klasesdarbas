let turiniai = documents.querySelectorAll( 'main > section');
function pakeistiPuslapi (pslID) {
    for (let i= 0; turiniai.length > i; i++) {
        turiniai [i].style.display = 'none';
    }
        document.getElementById(pslID).style.display = 'block';

}
// Default puslapis, kuris bus matomas uzkrovus tinklapi
pakeistiPuslapi( 'contacts');