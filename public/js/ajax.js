var xhr = new XMLHttpRequest();

    var s = window.location.search;
    var sa = s.split('=');



xhr.open('GET', '/'+sa[1]);

xhr.send();

console.log(sa[1]);
xhr.onload = get_info;
function get_info() {
    document.body.innerHTML = xhr.responseText;
}