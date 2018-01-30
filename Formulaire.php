<DOCTYPE html>

    
<body>
            
           
            <form action="formulaire.php" method= "post" name= "formulaire">
            
       <fieldset>
       <legend>Vos coordonnées</legend>   
       
            Nom:
            <input type="text" name="Nom" id="pseudo" placeholder="Nom"required>
           
            prénom :
            <input type= "text" name="prenom" id="pseudo" placeholder="Prénom"required>
            <br />
            <br/>
           
            
            Date de naissance:
            <input type="date" required/>
            <br/>
            <br/>
           
            Adresse:
            <input type= "text" name="adresse" id="pseudo" placeholder="Adresse" required/>
            <br/>
            <br/>
            
            Sexe:
            <input type="radio" name="sexe" value="F" required>Féminin
            <input type="radio" name="sexe" value="M" required>Masculin
            <br/>
            <br/>
            
            Téléphone:
            <input type="tel" placeholder="Mobile" required/>
                       
            E-mail:
            <input type="email" placeholder="Votre adresse mail"required/>
            <br/>
            <br/>
            
            Pays:
            <select name="pays">
                <optgroup label="Europe">
                    <option value="france">France</option>
                    <option value="belgique">Belgique</option>
                    <option value="allemagne">Allemagne</option>
                    <option value="roumanie">Roumanie</option>
                    <option value="pologne">Pologne</option>
                    <option value="espagne">Espagne</option>
                    <option value="portugal">Portugal</option>
                    <option value="suisse">Suisse</option>
                    <option value="italie">Italie</option>
                    <option value="luxembourg">Luxembourg</option>
                    <option value="pays_bas">Pays-bas</option>
                    <option value="grêce">Grêce</option>
                    <option value="slovakie">Slovakie</option>
                    <option value="algérie">Algérie</option>
                </optgroup>
                <optgroup label="Amérique">
                    <option value="usa">USA</option>
                    <option value="canada">Canada</option>
                    <option value="mexique">Mexique</option>
                </optgroup>    
                <optgroup label="Asie"    
                    <option value="chine">Chine</option>
                    <option value="tibet">Tibet</option>
                    <option value="inde">Inde</option>
                    <option value="pakistan">Pakistan</option>     
                    <option value="russie">Russie</option>
                    <option value="ouzbekistan">Ouzbekistan</option>
                </optgroup>
                <optgroup label="Afrique"  
                    <option value="somalie">Somalie</option>
                    <option value="congo">Congo</option>
                </optgroup>
             
            </select>
            <br/>
            <br/>
       </fieldset>
         
       <fieldset>
       <legend>Vous</legend>  
       
            Décrivez-vous vous:
            <br/>
            <textarea name="description" id="descritpion" placeholder="Description" rows='10' cols='50' required></textarea>
            
            <br/>
            <br/>
            Vos compétences:
            <br/>
            <textarea name="compétences" id="compétences" placeholder="Compétences" rows='10' cols='50' required></textarea>
            <br/>
            <br/>
            Centres d'intérêts:
            <br/>
            <br/>
            <input type="checkbox" name="Sport" value="S">Sport
            <input type="checkbox" name="musique" value="Mu">Musique
            <input type="checkbox" name="Eminem" value="E">Eminem
            <input type="checkbox" name="amis" value="A">Amis
            <br/>
            <input type="checkbox" name="informatique" value="I">Informatique
            <input type="checkbox" name="nouvelles technologies" value="NT">Nouvelles Technologies
            <input type="checkbox" name="jeux vidéo" value="JV">Jeux vidéo
            <input type="checkbox" name="lecture" value="L">Lecture
            <br/>
            <input type="checkbox" name="autre" value="O">Autre
            <br/>
            <br/>
            
            Vos motivations pour les métiers de l'informatique:
            <br/>
            <textarea name="informatique" id="informatique" placeholder="Motivations pour l'informatique" rows='10' cols='50' required></textarea>
            <br/>
            <br/>
            
            Vos motivations à rejoindre le CESI:
            <br/>
            <textarea name="cesi" id="motivations pour rejoindre cesi" placeholder="Motivations pour rejoindre le cesi" rows='10' cols='50' required></textarea>
            <br/>
            <br/>
        </fieldset>   
    
           <input type="submit" value="VAZYPOTO" />
        
        
        
        </body>








    
    
    