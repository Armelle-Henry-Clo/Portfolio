<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link
      rel="icon"
      type="image/png"
      href="https://img.icons8.com/color/2x/beach.png">
    
    <!---Bootstrap------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>Contactez-nous</title>
<!---------------mon CSS----------------->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
      <h1 class="text-center text-light mb-1">Prêt(e) à faire vos valises?</h1>
    </header>

    <div class="container">

    <!---formulaire------>
      <form action="index_p1.php" method="dialog">
        <fieldset>
            <div class=" col-6 pt-2">
              <label for="exampleFormControlInput1" class="form-label text-light">Votre adresse e-mail</label> <br>
              <input type="email" required class="form-control-lg" id="exampleFormControlInput1" placeholder="@votre-email.com">
            </div>
            <div class=" col-6 pt-2">
              <label for="exampleFormControlInput1" class="form-label text-light">Un numéro où vous joindre</label> <br>
              <input required type="number" class="form-control-lg" id="exampleFormControlInput1" placeholder="06...">
            </div>
            <div class="col-8 pt-2">
              <label for="exampleFormControlTextarea1" class="form-label text-light">Où voulez-vous partir?</label>
              <textarea class="form-control" required id="exampleFormControlTextarea1" rows="15" placeholder="Racontez nous votre rêve et on se charge de le réaliser..."></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </fieldset>
      </form>
    </div>


     <!-------------------Footer--------------->
     <footer>
      <div class="d-flex justify-content-around pb-3 pt-5 " style="height: 150px">
        <div class="col-3 text-center">
           <a href="index_p1.php" target="blank" class="link-dark "> Accueil </a>
    <div>
      <a href="https://fr-fr.facebook.com/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAL1JREFUSEvtlIEJwjAQRV836AY6ghtUJ9EROoJOoCO4ghvoBDqCbuAGlQ8JHGo9UhJUaKBw0Ob/+4+7VhQ+VWF9fs5gCmyBGaBa5wTM+0ikJJDgGaifxLIZ7IHlm06zGRyBJhgcgBVw94YkBVFnxDbA2hPX+68bCMMkdGo7Fi49cYpi/RLKS2C59xH5iCuHwcKkSU6wC0uli3GCVN+Aa1BrgUuORfvPKbLJxwTu4o+IXESDPvB+FYNE7aXiBg+0MykZNmDKCAAAAABJRU5ErkJggg==" alt="facebook"/></a>
      <a href="https://www.instagram.com/?hl=fr"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXFJREFUSEvFlbsuRUEUhr/TaBQ0Gg1qEbwA3gCtSFAqRDwB3gARrUskSt7A5QVcXgC1SqUkv6yRyTKz9+xzsnOm23vW+v+1/nWZDi2fTsv49I1gBtgGFoDxmizfgDvgEHjytqkM1oHTLqXbAM5iX0+gyB+7BA9us3EmnkDsaw0IPoElk3LX/M4BqfB7PIH0HMsQyFEaD1tdFIi+FbFIrs1PGBM5gu8E+LMByHHE7j8AyamMh4xUxP9wfQYpAkUzCqwC84Bs7oFL4CtTsz/cOoKg5wmw6bI7BraAG2DR3RUT7AAXwAMw6UBegGlgDwgFbizRPnBkgzTlCEKBeyIIEolEcsTnAFCGPUkkQLXhALACzEVFvgIGgdtE5xXXQL5qz+XEntGeUu/H7Vlbg6pBkxRhmWkGNFypo7nRfXKSm66KFEHlqtBqfs1EVvq7ctkJpNV1HaJUJupvFTK3/ILtu82J2rbowSmVosiub29yUXQlRj9QH0gZzJmK2wAAAABJRU5ErkJggg==" alt="instagram"/></a>
      <a target="_blank" href="https://www.tiktok.com/fr/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAThJREFUSEu9lf0xxVAQR8+rwKiAErwKUAElUIGnAypABaiAEujAqwAd0IE55iaz706SGy83diZ/ZGZ3z28/slkwsy1mzs82gBfgMAl7A5ZDIqcCzL0LfPVBagCugas5Aao/B567IDUqaPIK8FkDzubXagKanK/AUS3Ad0q0E9rzJ8AZsAccAJfABxDX1GSnwApofEcBDLoB9oOy45Q8B7TtSL7GKKR3BiZ/6tiIsYCN0K4hS7ct0SzbNrgdpQoGAfbxPng8pt7GoEkA9/gkZfvMZtBAJgFicJd6IdUAfZcyzmhjJcecilvgIjh6Yx7Ce75hfVW2IfkWucPvmRIBqvZjExDNf0F7d8ZUoI/r6EdWsqJ6E/QduxLkLgkpiRi8prbEH4mnwGPmYXONndNgWyJ1m3NdVP2vgB/gM0YZtnW41wAAAABJRU5ErkJggg==" alt="tiktok"/></a>

    </div>
  </div>
              
  <div class="col-3 text-center">
    <a href="index_p3.php" target="blank" class="link-dark "> Galerie </a>
  </div>
<!-----------------Liens vers iframe------------------------------->
  <div class="col-3 text-center">
    <p>Nos partenaires</p>
    <a href="https://www.airbnb.fr/" target="blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXhJREFUSEvVleExREEQhL/LgAgQASJABIgAGZCBDAiBDIgAESACZCAD6lMzr95t7d7uH1VM1dXd7e2bnu7pmVvwy7H45fz8KYBr4BBYA26AixH2owxMvg9cRlLfH4HzHsgIwCbwBmwB75GwdlbFGgGwUhOfFhmUySjPl671AJTloag+Ewyx6AG0qk+QLotVAGX1umcvMj8Bn0CXxSqAeXU7IdVHAGwAB8BLWLbZixZAWZlS3QHa1dCmzsRuj0ULoNT2q2i0jJ5h2gTNXtQAarqqt3aUhXEU0tgXo9mLGoAy+IBJWm6pVVx1XAlgRU7tcayC0vNqbijPfLI903UytDgZ/0QJkNasMcvG+tz9bC/NiE4TL5smwFW4Y/5gfrYyG75e+zFs6wJsAmSz9Ph0KZKpu+5Jic4KkHTWknStJp/EKnbJCWpV3lVCQ3CZKFtOtOa4LVd4aw5M6MuJfY3m5X9BFu53nbYNOOEC5CBO5HrLriH1+PH/B/gGsjdbGUsntyoAAAAASUVORK5CYII="/></a>
    <a href="https://www.tripadvisor.fr/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAcBJREFUSEu9lYExBEEQRd9FgAgQASJABIgAGRABMiACROBkQASIABEgA/W2uqtm53bX3VWtrtra25ne/r9//5udMHJMRq7PPACHwBawB2wHoVfgCfD+OERyCMBit0XRvjqCnAbYTE4fwCVwsaB8vnNVv9MFsEzxrHsOXJcgNYCyvCzIvE7fKeWqAdTTgdZxH0P9iI2NGPpxR641BGmiBNAtD8BPwcCCSvYNHAAWNlzXPauxn+sqsAIcAdMaoNReV9wV7LSoz+ux9gmcRFeZ5rOuMxy29Vod6OvdSHBYMkgn+fs5WQFKY8de7tmNAJlvrqRaAMpge7mpDF4C+3LDKEIpXLOrlEXdzbdLa631AdierHRTzshisvVuuC+woOr/DmwGoCo4R+fTKdENcBYsbFNXyFRWrht6XaYOM80hY0F1YadEOWQL2W6pqUO1kGCGsthFDl0bC/41NORkYo6F9iNZCXx2X4aGnQmQh59r5bnVadMsnH80O1EKB2fB0pYpnSASELzRHHgrgf/9qJDBqIdd+nwZkJmTtLZpFs+7A9SeXYdfmavmzicd1qoz7ydTsL5PZnOo9cU8AEPv/7k3OsAvwMdsGZMuAcIAAAAASUVORK5CYII="/></a>
  </div>

</div>
</footer>
</div>

      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script></body>
</html>