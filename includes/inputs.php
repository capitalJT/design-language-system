<section id="inputs" class="row">
  <div class="large-12 columns">
    <h1>Inputs</h1>
  </div>
  <hr>
	<div class="large-12 columns">
		<div class="large-4 columns">
			<div>
				<label>Input Label
	      	<input type="text" placeholder="Placeholder text" />
	      </label>	
			</div>

      <div class="row collapse">
      	<label>Pre-Fixed Label</label>
			    <div class="small-3 columns">
			      <span class="prefix">http://</span>
			    </div>
		    <div class="small-9 columns">
		      <input type="text" placeholder="Placeholder text">
		    </div>
		  </div>

			<div class="row collapse">
        <label>Post-Fixed Label</label>
        <div class="small-9 columns">
          <input type="text" placeholder="Placeholder text">
        </div>
        <div class="small-3 columns">
          <span class="postfix">.com</span>
        </div>
      </div>

			<div class="row collapse">
			  <div class="small-9 columns">
			    <input type="text" placeholder="Placeholder text">
			  </div>
			  <div class="small-3 columns">
			    <a href="#" class="button postfix">Go</a>
			  </div>
			</div>
		</div><!-- end .large-4 -->

		<div class="large-4 columns">

		  <div>
		    <label>Select Box
		      <select>
		        <option value="husker">Husker</option>
		        <option value="starbuck">Starbucks</option>
		        <option value="hotdog">Hot Dog</option>
		        <option value="apollo">Apollo</option>
		      </select>
		    </label>
		  </div>

			<div>
				<label>Radio Input</label>
				<input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
				<input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
			</div>

			<div>
			  <label>Checkbox Input</label>
			  <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
			  <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
			</div>

			<div>
	      <label>Textarea</label>
        <textarea placeholder="Placeholder text"></textarea>
			</div>				
		</div><!-- end .large-4 -->

		<div class="large-4 columns">
			<div>
				<fieldset>
			    <legend>Fieldset Legend</legend>

			    <label>Input Label
			      <input type="text" placeholder="Placeholder text">
			    </label>
			  </fieldset>				
			</div>
			
			<div>
				<label class="error">Error
					<input type="text" class="error" />
				</label>
				<small class="error">Invalid entry</small>
			</div>
		</div><!-- end .large-4 -->
  </div>
</section>