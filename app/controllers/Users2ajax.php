<script>
document.getElementById("login").addEventListener("click", postLogin);
function postLogin(e){
    e.preventDefault();
    var email = document.getElementById('email').value;
    var pass = document.getElementById('password').value;
    var params = "name=" + name + ",password=" + pass;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "Users2ajax.php", true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        console.log(this.responseText);
    }
    xhr.send(params);
}
</script>