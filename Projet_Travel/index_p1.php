<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FAVICON -->
    <link
      rel="icon"
      type="image/png"
      href="https://img.icons8.com/color/2x/beach.png">
    

    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- MON CSS  -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Envie d'évasion?</title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- MON HEADER -->
      <header>
        <div
          class="row p-3"
          style="height: 150px" 
        > 
        
          <h1 class="text-center text-light">Envie de vous évader ?</h1>
        </div>
      </header>

      <main>
        <div class="container mt-5 text-light" style="height:100%">
          <!---le caroussel-->
          <div id="carouselExampleFade" class="carousel slide carousel-fade pt-2 pb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2017/01/20/00/30/maldives-1993704_960_720.jpg" height="300px" class="d-block w-100" alt="plage paradisiaque aux Maldives">
                <div class="carousel-caption d-none d-md-block">
                  <h6 class="text-black">Laissez vous tenter par une plage au bout du monde!</h6> 
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2015/03/09/18/34/beach-666122_960_720.jpg" height="300px" class="d-block w-100" alt="Bienvenue chez vous">
                <div class="carousel-caption d-none d-md-block">
                  <h6>Bienvenue chez vous</h6>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2016/10/18/21/22/beach-1751455_960_720.jpg" height="300px" class="d-block w-100" alt="sunset">
                <div class="carousel-caption d-none d-md-block">
                  <h6>Seul(e) au monde</h6>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2013/02/21/19/06/drink-84533_960_720.jpg" height="300px" class="d-block w-100" alt="cocktail">
                <div class="carousel-caption d-none d-md-block">
                  <h6 class="text-black" >Un petit cocktail?</h6>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2016/03/04/19/36/beach-1236581_960_720.jpg" height="300px" class="d-block w-100" alt="cocktail">
                <div class="carousel-caption d-none d-md-block">
                  <h6>Plage privée</h6>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>

          <!--les paragraphes-->
          <div class="p-1 m-2">
            
            <p class="col-11 text-truncate">Lorem ipsum dolor, sit amet consectetur adipisicing elit. t laudantium! Sint optio eveniet vero.
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis laudantium reprehenderit iusto atque et sint facilis praesentium expedita, recusandae maiores, quas at, delectus enim? Pariatur sunt quod harum quo. Officiis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi repellat odit veniam eveniet nihil aliquid necessitatibus placeat, dolorem sint officiis non, culpa iste velit accusantium nam? Tempore, aliquam voluptatibus?
            </p>
          </div>
          <div class="p-1 m-2">
            
            <p  class="col-11 text-truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias uia nobis excepturi alias.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, amet accusamus iusto fuga dolore fugiat suscipit tempore aut. Nobis, veniam eum? Ducimus, sed. 
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim temporibus amet officia incidunt voluptatem vel rerum, doloremque tempora possimus, pariatur facilis ullam repudiandae illum aliquid, distinctio qui praesentium dolor doloribus.
              Quod, facere architecto? Officiis architecto praesentium autem!
            </p>
          </div>
          <div class="p-1 m-2">
            
            <p class="col-10 text-truncate">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime
            magnam architecto sint?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe assumenda ab enim at cupiditate eos magnam aspernatur ad corrupti. Labore quidem, ipsum repellat assumenda saepe ducimus minima eveniet consequatur sit?
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi esse ex eaque repudiandae necessitatibus dolores! Obcaecati ratione sit, praesentium facilis excepturi distinctio sequi nemo ullam, rem, voluptatem numquam maiores corrupti.
          </p>
          </div>

        </div>
      </main>

  <!-------------------Footer--------------->
      <footer>
        <div class="d-flex justify-content-around pb-3 pt-5 " style="height: 150px">
          <div class="col-3 text-center">
             <a href="index_p2.php" target="blank" class="link-dark "> Nous contacter </a>
<!------------- icones reseaux sociaux--------------------------->  
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
  <!--------------------- JAVASCRIPT ------------------------->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
