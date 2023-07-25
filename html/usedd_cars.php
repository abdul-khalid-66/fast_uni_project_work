<?php
require_once('components/header.php');
?>


<div class="container mt-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Categories</h5>

            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Accordion Item #1
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Accordion Item #2
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Accordion Item #3
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Tags</h5>
            <div class="d-flex flex-wrap">
              <span class="badge bg-primary me-2 mb-2">Tag 1</span>
              <span class="badge bg-primary me-2 mb-2">Tag 2</span>
              <span class="badge bg-primary me-2 mb-2">Tag 3</span>
              <span class="badge bg-primary me-2 mb-2">Tag 4</span>
              <span class="badge bg-primary me-2 mb-2">Tag 5</span>
            </div>
          </div>
        </div>
      </div>

      <?php
        // Define the card data as an array
        $cards = array(
          array(
            'image' => 'image4.jpg',
            'title' => 'Card 4',
            'description' => 'This is the content of Card 1.',
          ),
          array(
            'image' => 'image2.jpg',
            'title' => 'Card 2',
            'description' => 'This is the content of Card 2.',
          ),
          array(
            'image' => 'image3.jpg',
            'title' => 'Card 3',
            'description' => 'This is the content of Card 3.',
          ),
          array(
            'image' => 'image1.jpg',
            'title' => 'Card 1',
            'description' => 'This is the content of Card 1.',
          ),
          array(
            'image' => 'image2.jpg',
            'title' => 'Card 2',
            'description' => 'This is the content of Card 2.',
          ),
          array(
            'image' => 'image3.jpg',
            'title' => 'Card 3',
            'description' => 'This is the content of Card 3.',
          ),
          array(
            'image' => 'image2.jpg',
            'title' => 'Card 2',
            'description' => 'This is the content of Card 1.',
          ),
          array(
            'image' => 'image3.jpg',
            'title' => 'Card 3',
            'description' => 'This is the content of Card 2.',
          ),
          array(
            'image' => 'image4.jpg',
            'title' => 'Card 4',
            'description' => 'This is the content of Card 3.',
          ),
          // Add more cards as needed
        );
      ?>

      <!-- generate the pagination for this block start -->
      <div class="col-md-8">
        <!-- Display Cards based on Page -->
        <div id="card-container">
          <?php
            // Define the number of cards per page
            $cardsPerPage = 3;

            // Get the current page from the URL parameter
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

            // Calculate the starting index of the cards for the current page
            $startIndex = ($currentPage - 1) * $cardsPerPage;

            // Generate the cards for the current page
            for ($i = $startIndex; $i < ($startIndex + $cardsPerPage); $i++) {
              // Check if there are more cards to display
              if ($i >= count($cards)) {
                break;
              }

              $card = $cards[$i];
            ?>
              <div class="card mb-4">
                <a href="image1.jpg" data-bs-toggle="modal" data-bs-target="#imageModal" style="text-decoration: none;color: black;">
                  <img src="<?php echo $card['image']; ?>" class="img-fluid" alt="Card Image">
                </a>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $card['title']; ?></h5>
                  <p class="card-text"><?php echo $card['description']; ?></p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
            <?php } ?>
        </div>

        <!-- Pagination -->
        <nav id="pagination-container" aria-label="Page navigation">
          <ul class="pagination">
            <?php
              // Calculate the total number of pages
              $totalPages = ceil(count($cards) / $cardsPerPage);

              // Generate the pagination links
              for ($i = 1; $i <= $totalPages; $i++) {
                $activeClass = ($i == $currentPage) ? 'active' : '';
            ?>
              <li class="page-item <?php echo $activeClass; ?>">
                <a class="page-link" href="javascript:void(0);" onclick="loadCards(<?php echo $i; ?>)"><?php echo $i; ?></a>
              </li>
            <?php } ?>
          </ul>
        </nav>
      </div>
      <!-- generate the pagination for this block end -->

    </div>
  </div>

  <!-- Child of Responsive Image Gallery -->
  <div class="modal fade mx-5" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true"
    style="width: 85%;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="height: 600px;width: 700px;">
        <div class="modal-body" style="width: 700px;height: 600px;">
          <img src="image1.jpg" class="img-fluid" style="width: 100%; height:100%;" alt="Modal Image">
        </div>
      </div>
    </div>
  </div>
  <!-- Child of Responsive Image Gallery end -->

  <script>
    function loadCards(page) {
      // Send an AJAX request to fetch the cards for the given page
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'get_cards.php?page=' + page, true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          // Update the card container with the fetched cards
          document.getElementById('card-container').innerHTML = xhr.responseText;
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <script>
    var imageModal = document.getElementById('imageModal');
    var imageLinks = document.querySelectorAll('[data-bs-toggle="modal"]');
    imageLinks.forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        var imageSrc = this.getAttribute('href');
        var modalImage = imageModal.querySelector('img');
        modalImage.src = imageSrc;
        new bootstrap.Modal(imageModal).show();
      });
    });
  </script>
</body>

</html>
