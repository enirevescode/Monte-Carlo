<div id="chbre_luxe">


   <section class="grey">
   <div class="row justify-content-between mt-2">
            
            <div class="col-sm-10-g-1 col-md-6 col-lg-4 mb-4 overflow-hidden" v-for="item in shoppingCart">
               <div class="card img-fluid" style="max-width: 30rem; height: 100%">
               <img v-bind:src="item.photo" />             
                  <div class="card-body">
                        <h5> {{ item.label }} </h5>
                        <p class="card-text mx-3 my-3 entete"><span id='or'> CARLO BEACH</span></p>
                        <p class="card-text mx-1 my-3"> {{ item.info }} </p>
                        <p class="card-text mx-1 my-3"> {{ item.info2 }} </p>
                        <div class="row">
                           <div class="col-6">
                           <p class="card-text mt-4">à partir de {{ item.cost }} € / nuit</p>
                           </div>
                           <div class="col-6 mt-4">
                              <a href="#" class="btn btn-discover">DECOUVREZ</a>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
    
         </div><!--/row-->
</div><!--/container-->
 
</section>
</div><!--div de l'id chbre_luxe-->

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>

   const chbre_luxe = new Vue ({
      el: "#chbre_luxe",
      data: {
         shoppingCart: [
            {
               label: "Chambre Exclusive - Vue Mer",
               cost: 463,
               info: "Vue Mer | Accessible PMR",
               info2: "BORD DE MER",
               photo: "https://hotel.enirevescodewp.fr/wp-content/uploads/2023/03/chbres_mer.webp"

            },
            {
               label: "Chambre Exclusive Supérieure - Vue Mer",
               cost: 565,
               info: "Vue Mer | BORD DE MER",
               info2: "",
               photo: "https://hotel.enirevescodewp.fr/wp-content/uploads/2023/03/exclusive_room_terrasse.webp"

            },
            {
               label: "Junior Suite - Vue Mer",
               cost: 605,
               info: "Vue Mer | BORD DE MER",
               info2: "",
               photo: "https://hotel.enirevescodewp.fr/wp-content/uploads/2023/03/junior_suite_sea_view.webp"

            },
            {
               label: "Junior Suite Exclusive - Vue Mer",
               cost: 695,
               info: "Vue Mer | BORD DE MER",
               info2: "",
               photo: "https://hotel.enirevescodewp.fr/wp-content/uploads/2023/03/junior_suite_exclusive.webp"

            },
            {
               label: "Suite Loft - Vue Mer",
               cost: 923,
               info: "Vue Mer | BORD DE MER",
               info2: "",
               photo: "https://hotel.enirevescodewp.fr/wp-content/uploads/2023/03/loft_suite.webp"

            },
            {
               label: "Suite Duplex - Vue Mer",
               cost: 1750,
               info: "Vue Mer | BORD DE MER",
               info2: "",
               photo: "https://hotel.enirevescodewp.fr/wp-content/uploads/2023/03/duplex_suite.webp"

            },
            {
               label: "Double Suite",
               cost: 1960,
               info: "BORD DE MER",
               info2: "",
               photo: "https://hotel.enirevescodewp.fr/wp-content/uploads/2023/03/double_suite.webp"

            },
            {
               label: "Diamond Suite Sunshine",
               cost: 3400,
               info: "Vue Mer | BORD DE MER",
               info2: "Pièces D'EXCEPTION | JACUZZI",
               photo: "https://hotel.enirevescodewp.fr/wp-content/uploads/2023/03/diamond_suite.webp"

            }
         ]
      }
   })
</script>