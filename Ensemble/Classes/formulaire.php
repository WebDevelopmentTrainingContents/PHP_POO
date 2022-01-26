<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Classes/utilisateur.php" method="POST">
    <input
                type="text"
                name="nom"
                placeholder="nom"
                value=""
                required
            
                
            />
            <input
                type="text"
                name="prenom"
                placeholder="prenom"
                value=""
                required
            />
            <input
                type="email"
                name="email"
                placeholder="email"
                value=""
                required
            />
            <input
                type="password"
                name="password"
                placeholder="password"
                value=""
                required
            />
            
            <label for="role-select">Choisissez un rôle:</label>

<select name="role" id="role-select">
    <option value="">--Choisissez un couleur :--</option>
    <option value="red">Admin</option>
    <option value="green">SuperAdmin</option>
    <option value="yellow">SuperAdmin</option>
    <option value="bleu">SuperAdmin</option>
</select>
         
            <input
                type="submit"
                name="envoi"
             
            />


    </form>
</body>
</html>