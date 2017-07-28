var link_to_index = document.getElementById("link_to_index");
var link_to_services = document.getElementById("link_to_services");
var link_to_mission = document.getElementById("link_to_mission");
var link_to_reviews = document.getElementById("link_to_reviews");



var services = document.getElementById('services');
var mission = document.getElementById('mission');
var index = document.getElementById('index');
var contacts = document.getElementById('contacts');
var reviews = document.getElementById('reviews');



function menu_link_click () {

    var a = this.href.split('#');
    var target_slide = document.getElementById(a[1]);
    console.dir(a);
    mission.classList.remove('current');
    reviews.classList.remove('current');
    index.classList.remove('current');
    services.classList.remove('current');
    contacts.remove('current');
    target_slide.classList.add('current')
}

link_to_index.onclick = menu_link_click;
link_to_services.onclick = menu_link_click;
link_to_mission.onclick = menu_link_click;
link_to_reviews.onclick = menu_link_click;



