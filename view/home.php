<style>
    .custom-card {
    border-radius: 10px; /* Slightly rounded corners for elegance */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for hover effects */
    overflow: hidden; /* Prevent overflow of image */
    background-color: #ffffff; /* White background for a clean look */
    border: 1px solid #e0e0e0; /* Subtle border */
}

.custom-card:hover {
    transform: translateY(-4px); /* Lift the card on hover */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15); /* Enhanced shadow effect */
}

.card-img-top {
    border-bottom: 2px solid #007bff; /* Bottom border for image */
    height: 200px; /* Fixed height for uniformity */
    object-fit: cover; /* Ensure images cover the container */
    width: 100%; /* Ensures image takes the full width of the card */
}

.card-title {
    font-size: 1.25rem; /* Slightly larger font size */
    font-weight: 600; /* Bold title */
    color: #333; /* Dark color for title */
    margin: 0.5rem 0; /* Spacing around title */
}

.card-text {
    font-size: 1.125rem; /* Slightly larger font size for price */
    font-weight: 700; /* Semi-bold price text */
    color: #28a745; /* Green color for price */
}

.btn-primary {
    background-color: #007bff; /* Primary button color */
    border: none; /* Remove border */
    border-radius: 5px; /* Slightly rounded corners */
    padding: 0.75rem; /* Increased padding */
    font-weight: 500; /* Medium font weight for button text */
    transition: background-color 0.3s, transform 0.3s; /* Smooth transition for hover effects */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker blue on hover */
    transform: translateY(-2px); /* Lift button on hover */
}

.text-center {
    margin-top: 1rem; /* Spacing for no products available message */
    font-size: 1.1rem; /* Slightly larger font size */
    color: #777; /* Gray color for no products message */
}


</style>
<div class="container">
				<div class="welcome-hero-txt">
	
					<button class="welcome-btn" onclick="window.location.href='#'">BUY NOW</button>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
	
					</div>
				</div>
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--service start -->
		<section id="service" class="service">
			<div class="container">
				<div class="service-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car"></i>
								</div>
								<h2><a href="#">largest dealership <span> of</span> car</a></h2>
								<p>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.  
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-repair"></i>
								</div>
								<h2><a href="#">unlimited repair warrenty</a></h2>
								<p>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.  
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-1"></i>
								</div>
								<h2><a href="#">insurence support</a></h2>
								<p>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia. 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->


		<!--featured-cars start -->
		<section id="featured-cars" class="featured-cars">
			<div class="container">
				<div class="section-header">
					<p>checkout <span>the</span> featured cars</p>
					<h2>featured cars</h2>
				</div><!--/.section-header-->
				<div class="featured-cars-content">
					<div class="row">




                    <?php
$listsanpham = loadall_sanpham(); // Get all products
$img_path = "admin/upload/";

// Check if products are loaded and are an array
if (is_array($listsanpham) && !empty($listsanpham)) {
    echo '<div class="row g-4">'; // Added Bootstrap row with gutter
    foreach ($listsanpham as $sp) {
        // Extract product details
        $name = htmlspecialchars($sp['name']); // Safely output product name
        $img = htmlspecialchars($img_path . $sp['img']); // Image path
        $price = htmlspecialchars($sp['price']); // Safely output product price
        $linksp = "index.php?act=sanphamct&idsp=" . $sp['id']; // Build product link
        
        echo '
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 ">
            <div class="card shadow-sm border-0 custom-card">
                <a href="' . $linksp . '">
                    <img src="' . $img . '" alt="' . $name . '"  > <!-- Added width: 100% -->
                </a>
                <div class="card-body text-center">
                    <h5 class="card-title">' . $name . '</h5>
                    <p class="card-text text-success">$' . $price . '</p>
                   
                </div>
                
            </div>
      <a href="'.$linksp.'">
    <button class="bg-primary" style="width: 200px;">Mua ngay</button>
</a>

          
        </div>';
    }
    echo '</div>'; // Close the row
} else {
    echo '<p class="text-center">No products available.</p>'; // Handle case with no products
}
?>








					</div>
					<div class="row">

					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.featured-cars-->
		<!--featured-cars end -->

		<!-- clients-say strat -->
		<section id="clients-say"  class="clients-say">
			<div class="container">
				<div class="section-header">
					<h2>what our clients say</h2>
				</div><!--/.section-header-->
				<div class="row">
					<div class="owl-carousel testimonial-carousel">
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c1.png" alt="image of clients person" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">
										<p>
											Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit. 
										</p>
									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">tomas lili</a></h2>
										<h4>new york</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c2.png" alt="image of clients person" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">
										<p>
											Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit. 
										</p>
									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">romi rain</a></h2>
										<h4>london</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c3.png" alt="image of clients person" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">
										<p>
											Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit. 
										</p>
									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">john doe</a></h2>
										<h4>washington</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
					</div><!--/.testimonial-carousel-->
				</div><!--/.row-->
			</div><!--/.container-->

		</section><!--/.clients-say-->	
		<!-- clients-say end -->

		<!--brand strat -->
		<!--brand end -->

		<!--blog start -->
		<section id="blog" class="blog"></section><!--/.blog-->
		<!--blog end -->

		<!--contact start-->