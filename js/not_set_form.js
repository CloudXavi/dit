function notset(){

    const tab = `<h1> Podaj dane konta: </h1>

    <input type="text" name="nick" id="nickInput" placeholder="Imię" style="border-color: red;" required>
    <input type="password" name="pass" id="passInput" placeholder="Hasło" style="border-color: red;" required></input>`;

    document.getElementById('logrejForm').innerHTML = '';

}