<?php
require_once "components/header.php";
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <title>Responsive Grid Layout</title>
  <style>
    
  </style>
</head>

<body> -->
<section>

    <div id="carouselExampleAutoplaying" class="carousel slide" style="height: 500px;" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image1.jpg" class="d-block w-100" style="height: 500px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Third slide label</h1>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image2.jpg" class="d-block w-100" style="height: 500px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Third slide label</h1>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image3.jpg" class="d-block w-100" style="height: 500px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Third slide label</h1>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image4.jpg" class="d-block w-100" style="height: 500px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Third slide label</h1>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>




<h1 class="m-5 fw-bold display-1 title-with-lines " style="text-align:center" >Used <span class="text-danger">Cars</span></h1>

<div class="container mt-4">
  <div class="row">


    <div class="col-md-4">
      <div class="ca rd mb-4">



        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h5 class="card-title p-3">Categories</h5>
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
              <div class="accordion-body">

                <ul class="accordion-body ">
                  <li class="list-group-item mb-2">
                    <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                      type="checkbox" value="" id="firstCheckboxStretched">
                    <label class="form-check-label stretched-link" for="firstCheckboxStretched">First checkbox</label>
                  </li>
                  <li class="list-group-item mb-2">
                    <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                      type="checkbox" value="" id="secondCheckboxStretched">
                    <label class="form-check-label stretched-link" for="secondCheckboxStretched">Second
                      checkbox</label>
                  </li>
                  <li class="list-group-item mb-2">
                    <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                      type="checkbox" value="" id="thirdCheckboxStretched">
                    <label class="form-check-label stretched-link" for="thirdCheckboxStretched">Third checkbox</label>
                  </li>
                </ul>


              </div>
            </div>
          </div>


          <div class="accordion-item">

            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
              <div class="accordion-body">

                <ul class="accordion-body ">
                  <li class="list-group-item mb-2">
                    <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                      type="checkbox" value="" id="firstCheckboxStretched">
                    <label class="form-check-label stretched-link" for="firstCheckboxStretched">First checkbox</label>
                  </li>
                  <li class="list-group-item mb-2">
                    <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                      type="checkbox" value="" id="secondCheckboxStretched">
                    <label class="form-check-label stretched-link" for="secondCheckboxStretched">Second
                      checkbox</label>
                  </li>
                  <li class="list-group-item mb-2">
                    <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                      type="checkbox" value="" id="thirdCheckboxStretched">
                    <label class="form-check-label stretched-link" for="thirdCheckboxStretched">Third checkbox</label>
                  </li>
                </ul>


              </div>
            </div>
          </div>



          <div class="accordion-item">

            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
              <div class="accordion-body">

                <ul class="accordion-body ">
                  <li class="list-group-item mb-2">
                    <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                      type="checkbox" value="" id="firstCheckboxStretched">
                    <label class="form-check-label stretched-link" for="firstCheckboxStretched">First checkbox</label>
                  </li>
                  <li class="list-group-item mb-2">
                    <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                      type="checkbox" value="" id="secondCheckboxStretched">
                    <label class="form-check-label stretched-link" for="secondCheckboxStretched">Second
                      checkbox</label>
                  </li>
                  <li class="list-group-item mb-2">
                    <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                      type="checkbox" value="" id="thirdCheckboxStretched">
                    <label class="form-check-label stretched-link" for="thirdCheckboxStretched">Third checkbox</label>
                  </li>
                </ul>


              </div>
            </div>
          </div>



          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne_1" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne_1">
                Accordion Item #1
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne_1" class="accordion-collapse collapse show">
              <div class="accordion-body">
                <div id="panelsStayOpen-collapseOne_2" style="font-size: large;"
                  class="accordion-collapse collapse show">


                  <ul class="accordion-body ">
                    <li class="list-group-item mb-2">
                      <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                        type="checkbox" value="" id="firstCheckboxStretched">
                      <label class="form-check-label stretched-link" for="firstCheckboxStretched">First
                        checkbox</label>
                    </li>
                    <li class="list-group-item mb-2">
                      <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                        type="checkbox" value="" id="secondCheckboxStretched">
                      <label class="form-check-label stretched-link" for="secondCheckboxStretched">Second
                        checkbox</label>
                    </li>
                    <li class="list-group-item mb-2">
                      <input class="form-check-input me-2" style="border: rgb(87, 87, 87) 1px solid;padding: 7px;"
                        type="checkbox" value="" id="thirdCheckboxStretched">
                      <label class="form-check-label stretched-link" for="thirdCheckboxStretched">Third
                        checkbox</label>
                    </li>
                  </ul>



                </div>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>

    <!-- generate the pagination for this block start -->
    <div class="col-md-8">
      <!-- start Display Cards based on Page -->
      <div id="card-container"></div>

      <!-- </div> -->
      <!-- start Display Cards based on Page -->
      <!-- Pagination -->
    </div>
    <!-- generate the pagination for this block end -->
  </div>
</div>




<script>
   loadCards(<?php echo 1; ?>)
  function loadCards(page) {
    // Send an AJAX request to fetch the cards for the given page
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'new_cars_get_cards.php?page=' + page, true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        // Update the card container with the fetched cards
        document.getElementById('card-container').innerHTML = xhr.responseText;
        alert(responseText);
        // Update the active class for the pagination link
        var paginationContainer = document.getElementById('pagination-container');
        var paginationLinks = paginationContainer.getElementsByTagName('a');
        for (var i = 0; i < paginationLinks.length; i++) {
          paginationLinks[i].classList.remove('active');
        }
        paginationLinks[page - 1].classList.add('active');
      }
    };
    xhr.send();
  }


</script>

<?php
require_once ("components/footer.php");

?>