
let ats_elem = document.get(elementId,'ats');
let ats_elem2 = document.get(elementId,'ats2');
let i = 0;
while (i < 10) {
    ats_elem.innerHTML += '<br>' + i;
    i++;
}

let j = 0;

for (let j = 0; j < 10; j++) {
    ats_elem2.innerHTML += '<br>' + j;

}
document.get