

<form action= "thanks.php" method="POST">

<div>
    <label for="name">Nom :</label>
    <input type="text" id="name" name="user_name" required />
</div>
<div>
    <label for="firstname">Prenom:</label>
    <input type="text" id="firstname" name="user_firstname" required />
</div>
<div>
    <label for="mail">e-mail :</label>
    <input type="email" id="mail" name="user_mail" required />
</div>
<div>
    <label for="téléphone">n° de téléphone:</label>
    <input type="téléphone" id="téléphone" name="téléphone" required />
</div>
<div>
    <label for="sport">Sport:</label>
    <select id="sport" name="sport">
    <option value="rugby">Rugby</option>
    <option value="foot">Foot</option>
    <option value="tennis">Tennis</option>
    </select> 
</div>
<div>
    <label for="msg">Message :</label>
    <textarea id="msg" name="user_message"></textarea>
</div>
<div  class="button">

      <button  type="submit">Envoyer votre message</button>

    </div>
</form>

