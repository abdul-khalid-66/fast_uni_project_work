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

  // Get the current page from the URL parameter
  $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

  // Define the number of cards per page
  $cardsPerPage = 3;

  // Calculate the starting index of the cards for the current page
  $startIndex = ($currentPage - 1) * $cardsPerPage;

  // Generate the cards HTML for the current page
  $html = '';


  for ($i = $startIndex; $i < ($startIndex + $cardsPerPage); $i++) {
    // Check if there are more cards to display
    if ($i >= count($cards)) {
      break;
    }

    $card = $cards[$i];
    $html .= '
    <div class="card mb-4">
      <a href="car_detail_file.php" data-bs-toggle="mod al" data-bs-target="#imageModal" style="text-decoration: none;color: black;" data-image='.$card['image'].'>
        <img src="'. $card['image'].'" class="img-fluid" alt="Card Image">
      </a>
      <div class="card-body">
        <h5 class="card-title">"'. $card['title'] .'"</h5>
        <p class="card-text">"'. $card['description'] .'"</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
    ';
  }
  
  // Return the generated cards HTML
  echo $html;
?>



<nav id="pagination-container" aria-label="Page navigation">
        <ul class="pagination">
          <?php
              // Calculate the total number of pages
              $totalPages = ceil(count($cards) / $cardsPerPage);

              // Generate the pagination links
              for ($i = 1; $i <= $totalPages; $i++) {
                
            ?>
            
          <li class="page-item ">
            <a class="page-link" href="javascript:void(0);" onclick="loadCards(<?php echo $i; ?>)">
              <?php echo $i; ?>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>