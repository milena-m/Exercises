function clearInput() {
    document.getElementById("webinar_form").reset();
}

function show_hide(id) {
    var e = document.getElementById(id);
    if(e.style.display === 'none'){
        e.style.display = 'block';
    }
    else {
        e.style.display = 'none';
    }
}