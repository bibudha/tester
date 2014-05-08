<?php require("header.php");?>
<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="row">
	<div id="Trial">
    	<div class="desktop-12 tablet-6 mobile-3 fSec">
        	<div class="desktop-12 tablet-6 mobile-3 aHeading">Enter a name for your entry</div>
            
            <div class="desktop-3 tablet-2 mobile-3 RedName" style="margin-top:20px;">Enter Trial Name: *</div>
            <input type="text" class="desktop-4 tablet-2 mobile-3 txtField">
            
        </div>
		<!------------------------------------------------------------------------------------------------------------------------>
    	<div class="desktop-12 tablet-6 mobile-3 fSec">
		
        	<div class="desktop-12 tablet-6 mobile-3 aHeading">Select Category</div>
			
			<div class="desktop-3 tablet-2 mobile-3 RedName">Choose a Category: *</div>
			<div class="desktop-9 tablet-4 mobile-3" id="sCat">
				<a href="#" class="active">People</a>
				<a href="#">Creative Works</a>
				<a href="#">Organization</a>
				<a href="#">Products</a>
				<a href="#">Places</a>
				<a href="#">Events</a>
			</div>
            
            <p class="desktop-12 tablet-6 mobile-3">*Note: Your choice in subcategory will be unselected if you collapse it. Keep your subcategory expanded when you have made your choice.</p>
            
            <ol class="desktop-4 tablet-3 mobile-3 tree">
                <li>
                    <label><input type="checkbox" /> <strong>Animal Celebrity</strong> </label> <input type="checkbox" class="checkTree" /> 
                    <ol>
                        <li>
                            <label>Animal Type </label> <input type="checkbox" class="checkTree" /> 
                            <ol>
                                <li class="file"><input type="checkbox" /> Amphibian</li>
                                <li class="file"><input type="checkbox" /> Bird</li>
                                <li class="file"><input type="checkbox" /> Fish</li>
                                <li class="file"><input type="checkbox" /> Invertebrate</li>
                                <li>
                                    <label><input type="checkbox" /> Mammal</label> <input type="checkbox" class="checkTree" /> 
                                    <ol>
                                        <li>
                                            <label>Type </label> <input type="checkbox" class="checkTree" /> 
                                            <ol>
                                                <li class="file"><input type="checkbox" /> Canine</li>
                                                <li class="file"><input type="checkbox" /> Feline</li>
                                                <li class="file"><input type="checkbox" /> Sea Mammal</li>
                                                <li class="file"><input type="checkbox" /> Stock Animal</li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                                <li class="file"><input type="checkbox" /> Reptile</li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>
            
            <ol class="desktop-4 tablet-3 mobile-3 tree">
                <li>
                    <label><input type="checkbox" /> <strong>Author & Writer</strong> </label> <input type="checkbox" class="checkTree" /> 
                    <ol>
                        <li>
                            <label>Animal Type </label> <input type="checkbox" class="checkTree" /> 
                            <ol>
                                <li class="file"><input type="checkbox" /> Amphibian</li>
                                <li class="file"><input type="checkbox" /> Bird</li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>
            
            <ol class="desktop-4 tablet-3 mobile-3 tree">
                <li>
                    <label><input type="checkbox" /> <strong>Business Person</strong> </label> <input type="checkbox" class="checkTree" /> 
                    <ol>
                        <li>
                            <label>Animal Type </label> <input type="checkbox" class="checkTree" /> 
                            <ol>
                                <li class="file"><input type="checkbox" /> Amphibian</li>
                                <li class="file"><input type="checkbox" /> Bird</li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>
            
            <ol class="desktop-4 tablet-3 mobile-3 tree">
                <li>
                    <label><input type="checkbox" /> <strong>Great Mind</strong> </label> <input type="checkbox" class="checkTree" /> 
                    <ol>
                        <li>
                            <label>Animal Type </label> <input type="checkbox" class="checkTree" /> 
                            <ol>
                                <li class="file"><input type="checkbox" /> Amphibian</li>
                                <li class="file"><input type="checkbox" /> Bird</li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>
            
            <ol class="desktop-4 tablet-3 mobile-3 tree">
                <li>
                    <label><input type="checkbox" /> <strong>Humanitarian Figure</strong> </label> <input type="checkbox" class="checkTree" /> 
                    <ol>
                        <li>
                            <label>Animal Type </label> <input type="checkbox" class="checkTree" /> 
                            <ol>
                                <li class="file"><input type="checkbox" /> Amphibian</li>
                                <li class="file"><input type="checkbox" /> Bird</li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>
            
            <ol class="desktop-4 tablet-3 mobile-3 tree">
                <li>
                    <label><input type="checkbox" /> <strong>Internet Celebrity</strong> </label> <input type="checkbox" class="checkTree" /> 
                    <ol>
                        <li>
                            <label>Animal Type </label> <input type="checkbox" class="checkTree" /> 
                            <ol>
                                <li class="file"><input type="checkbox" /> Amphibian</li>
                                <li class="file"><input type="checkbox" /> Bird</li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>
            
            <ol class="desktop-4 tablet-3 mobile-3 tree">
                <li>
                    <label><input type="checkbox" /> <strong>Journalist</strong> </label> <input type="checkbox" class="checkTree" /> 
                    <ol>
                        <li>
                            <label>Animal Type </label> <input type="checkbox" class="checkTree" /> 
                            <ol>
                                <li class="file"><input type="checkbox" /> Amphibian</li>
                                <li class="file"><input type="checkbox" /> Bird</li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>
        </div>
		<!------------------------------------------------------------------------------------------------------------------------>
    	<div class="desktop-12 tablet-6 mobile-3 fSec">
        	<div class="aHeading">General Information</div>
            
            <div class="desktop-3 tablet-2 mobile-3 RedName Hght">Also known as:</div>
            <input type="text" class="desktop-6 tablet-3 mobile-3 txtField">
            <div class="desktop-3 tablet-1 mobile-3 RedName Hght">
            	<span class="plus-button">+Add</span>
            </div>
            
            <div class="desktop-3 tablet-2 mobile-3 RedName Hght">Full Name: *</div>
            <input type="text" class="desktop-6 tablet-3 mobile-3 txtField">
            <div class="desktop-3 hideMobile Hght">&nbsp;</div>
            
            <div class="desktop-3 tablet-2 mobile-3 RedName Hght">Date of birth:</div>
            <select class="desktop-2 tablet-1 mobile-1 txtField">
                <option selected="selected" value="">Day</option>
                <option label="01" value="01">01</option>
                <option label="02" value="02">02</option>
                <option label="03" value="03">03</option>
                <option label="04" value="04">04</option>
                <option label="05" value="05">05</option>
                <option label="06" value="06">06</option>
                <option label="07" value="07">07</option>
                <option label="08" value="08">08</option>
                <option label="09" value="09">09</option>
                <option label="10" value="10">10</option>
                <option label="11" value="11">11</option>
                <option label="12" value="12">12</option>
                <option label="13" value="13">13</option>
                <option label="14" value="14">14</option>
                <option label="15" value="15">15</option>
                <option label="16" value="16">16</option>
                <option label="17" value="17">17</option>
                <option label="18" value="18">18</option>
                <option label="19" value="19">19</option>
                <option label="20" value="20">20</option>
                <option label="21" value="21">21</option>
                <option label="22" value="22">22</option>
                <option label="23" value="23">23</option>
                <option label="24" value="24">24</option>
                <option label="25" value="25">25</option>
                <option label="26" value="26">26</option>
                <option label="27" value="27">27</option>
                <option label="28" value="28">28</option>
                <option label="29" value="29">29</option>
                <option label="30" value="30">30</option>
                <option label="31" value="31">31</option>
            </select>
            <select class="desktop-2 tablet-1 mobile-1 txtField">
                <option value="" selected="selected">Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <input type="text" placeholder="Year" class="desktop-2 tablet-1 mobile-1 txtField">
            <div class="desktop-3 hideMobile Hght">&nbsp;</div>
            
            <div class="desktop-3 tablet-2 mobile-3 RedName Hght">Nationality: *</div>
            <select class="desktop-6 tablet-3 mobile-3 txtField">
                <option selected="selected" value="">Select Country</option>
                <option value="01">India</option>
            </select>
            <div class="desktop-3 hideMobile Hght">&nbsp;</div>
            <div class="desktop-3 tablet-2 mobile-3 RedName Hght">Website: </div>
            <input type="text" class="desktop-6 tablet-3 mobile-3 txtField">
            <div class="desktop-3 tablet-1 mobile-3 RedName Hght">
            	<span class="plus-button">+Add</span>
            </div>
            
            <div class="desktop-9 tablet-6 mobile-3 clGray">
                <input type="text" placeholder="Label" class="desktop-4 tablet-2 mobile-3 txtField">
                <input type="text" placeholder="Value" class="desktop-8 tablet-3 mobile-3 txtField">
                <input type="text" placeholder="Label" class="desktop-4 tablet-2 mobile-3 txtField">
                <input type="text" placeholder="Value" class="desktop-8 tablet-3 mobile-3 txtField">
                <p class="desktop-12 tablet-6 mobile-3 cAlign"><a class="add-custom-field"  href="#">+ Add Field</a></p>
            </div>
        </div>
		<!------------------------------------------------------------------------------------------------------------------------>
    	<div class="desktop-12 tablet-6 mobile-3 fSec">
        	<div class="aHeading">Detailed Information</div>
            
            <div class="desktop-3 tablet-2 mobile-3 RedName Hght">Description:</div>
            <input type="text" placeholder="Summarize this item in one sentence. It will appear in search result." class="desktop-9 tablet-4 mobile-3 txtField">
            <span class="desktop-6 desktop-push-3 tablet-2 tablet-push-2 mobile-3 countcharacter">35 characters remaining</span>
            <div class="desktop-3 tablet-2 mobile-3">
                <span class="insertLink">Insert A Link</span>
                <span class="insertLink">Insert Footnote</span>
            </div>
            <div class="desktop-3 tablet-2 mobile-3 RedName Hght">Introduction:</div>
            <textarea style="height:300px;" placeholder="An introductory description of the trial. 3000 characters limit." class="desktop-9 tablet-4 mobile-3 txtField"></textarea>
            <span class="desktop-9 desktop-push-3 tablet-4 tablet-push-2 mobile-3 countcharacter">3000 characters remaining</span>
            
            <div class="desktop-3 tablet-2 mobile-3 RedName Hght">Footnote:</div>
            <div class="desktop-8 tablet-3 mobile-3 RedName Hght"><span>Footnote Description</span></div>
            <div class="desktop-1 tablet-1 mobile-3 Hght"><span class="plus-button">Remove</span></div>
            
			<p class="desktop-9 desktop-push-3 tablet-6 mobile-3 clGray cAlign" style="padding:10px 0;"><a class="add-custom-field" href="#">+ Add Field</a></p>
            <div class="desktop-2 desktop-push-9 tablet-1 tablet-push-4 mobile-3"><a class="red_btn" id="finish" href="#">Finish</a></div>
        </div>
    </div><!-- Closed .Trial -->
	<div class="jumper"></div>
</div><!-- Closed .row -->
<!-------------------------------------------------------------------------------------------------------------------------------->
<?php require("footer.php");?>