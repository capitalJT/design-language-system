<?php 
  $page_title = "Contact Us";
  $style_sheet_uri = "css/app.css";
  include 'includes/head.php';
  include 'includes/masthead.php';
?>

<section id="brand-bar" class="section">
	<div class="row">
		<div class="large-12 columns brand-bar ">
			<article class="medium-4  large-3 columns">
				<h2>Main Title - 1</h2>
				<h3>Description Text</h3>
				<a href="#">Read More</a>
			</article>
			<article class="medium-4  large-3 columns show-for-medium-up">
				<h2>Main Title - 2</h2>
				<h3>Description Text</h3>
				<a href="#">Read More</a>
			</article>
			<article class="medium-4  large-3 columns show-for-medium-up">
				<h2>Main Title - 3</h2>
				<h3>Description Text</h3>
				<a href="#">Read More</a>
			</article>
			<article class="large-3 columns show-for-large-up">
				<h2>Main Title - 4</h2>
				<h3>Description Text</h3>
				<a href="#">Read More</a>
			</article>
		</div>
	</div>	
</section>
<div class="row stories-wrapper">
	<section class="large-12 columns">
		<div class="medium-8 columns content">
			<h3 class="header-category">About Us</h3>
			<h2>Contact Us</h2>
			<p>How to get in touch with Capital J Creative</p>
			<hr>
			<div class="large-6 columns">
				<form action="#">
					<label>To
			      <select>
			        <option value="husker">Husker</option>
			        <option value="starbuck">Starbucks</option>
			        <option value="hotdog">Hot Dog</option>
			        <option value="apollo">Apollo</option>
			      </select>
			    </label>
			    <label>Name:
		      	<input type="text" placeholder="Placeholder text" />
		      </label>
		      <label>Email:
		      	<input type="email" placeholder="Placeholder text" />
		      </label>
		      <label>Subject:
		      	<input type="text" placeholder="Placeholder text" />
		      </label>
		      <label>Textarea</label>
	        <textarea placeholder="Placeholder text"></textarea>
	        <input type="submit" class="button expand">	
				</form>
		  </div>
			<div class="large-6 columns">
				<div class="contact-section">
					<h4>Capital J Creative</h4>
					<span class="block">PO Box 23127</span>
					<span class="block">San Francisco, CA</span>	
				</div>
				<div class="contact-section">
					<h4>Advertising</h4>
					<span class="block">PO Box 23123</span>
					<span class="block">San Francisco, CA</span>
					<span class="block">Dept: 1 (415) 650-7446</span>
					<span class="block">Dept: 2 (415) 650-7451</span>
					<span class="block">Dept: 3 (415) 650-7449</span>		
				</div>
			</div>
			<section>
				<h3 class="header-category">Two Medium Stories</h3>
				<div class="medium-6 columns pl-0">
					<?php include 'includes/stories/story-1.php'; ?>
				</div>
				<div class="medium-6 columns pr-0">
					<?php include 'includes/stories/story-2.php'; ?>
				</div>
			</section>
		</div>
		<div class="medium-4 columns sidebar">
			<h3 class="header-category">Related</h3>
			<div class="large-12 columns wide">
				<?php include 'includes/stories/story-wide-1.php'; ?>	
			</div>
			<div class="large-12 columns wide">
				<?php include 'includes/stories/story-wide-2.php'; ?>	
			</div>
			<section>
				<h3 class="header-category">Most Viewed</h3>
				<?php include 'includes/stories/anchor-list.php'; ?>	
			</section>
		</div>
	</section>
</div>

<?php
  include 'includes/footer.php';
?>