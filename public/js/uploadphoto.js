
let profilePic = document.getElementById("profile-pic");
let inputFile = document.getElementById("input-file");

inputFile.onchange = function(){
    profilePic.src = URL.createObjectURL(inputFile.files[0]);
}


document.querySelector('.dropbtn').addEventListener('click', function() {
document.getElementById('dropdown-content').style.display = 'block';
});

window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {
var dropdowns = document.getElementsByClassName("dropdown-content");
for (var i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.style.display === 'block') {
        openDropdown.style.display = 'none';
    }
}
}
}

function logout() {
alert("Logout clicked");
// Add your logout logic here
}

function save() {
alert("Save clicked");
// Add your save logic here
}
