<?php 
  $page_title = "Contact Us";
  $style_sheet_uri = "css/app.css";
  include 'includes/head.php';
  include 'includes/masthead.php';
  include 'includes/brand-bar.php';
?>
<div class="row stories-wrapper">
	<section class="large-12 columns">
		<div class="medium-8 columns content">
			<h3 class="header-category">About Us</h3>
			<h2>Contact Us</h2>
			<p>How to get in touch with Al Jazeera English</p>
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
					<h4>Al Jazeera English</h4>
					<span class="block">PO Box 23127</span>
					<span class="block">Doha, Qatar</span>	
				</div>
				<div class="contact-section">
					<h4>Advertising</h4>
					<span class="block">PO Box 23123</span>
					<span class="block">Doha, Qatar</span>
					<span class="block">Dept: 1 +974 4489-7446</span>
					<span class="block">Dept: 2 +974 4489-7451</span>
					<span class="block">Dept: 2 +974 4489-7449</span>		
				</div>
			</div>
			<section>
				<h3 class="header-category">Two Medium Stories</h3>
				<div class="medium-6 columns pl-0">
					<?php include 'includes/components/story-1.php'; ?>
				</div>
				<div class="medium-6 columns pr-0">
					<?php include 'includes/components/story-2.php'; ?>
				</div>
			</section>
		</div>
		<div class="medium-4 columns sidebar">
			<h3 class="header-category">Related</h3>
			<div class="large-12 columns wide">
				<?php include 'includes/components/story-wide-1.php'; ?>	
			</div>
			<div class="large-12 columns wide">
				<?php include 'includes/components/story-wide-2.php'; ?>	
			</div>
			<section>
				<h3 class="header-category">Most Viewed</h3>
				<?php include 'includes/components/anchor-list.php'; ?>	
			</section>
		</div>
	</section>
</div>

<?php
  include 'includes/footer.php';
?>