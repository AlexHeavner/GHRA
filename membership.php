<?php
session_start();
echo "<html><body>";
echo "<form id=\"membership\" name=\"membership\" action=\"membership.php\">";

echo <<<_END
<h1>Membership Registration Form</h1>
<select name="membership">
          <option value="membership.php" selected="selected">Choose you level of membership</option>
          <option value="corporate">Corporate Sponsorship</option>
          <option value="organizational">Organizational</option>
          <option value="individual">Individual, Elected Officials, Students</option>
        </select>
</form>
        
Below will be available depending on the menu above selection, which needs javascript to become a jump menu

<h2>Corporate Sponsorship Form</h2>
<form name="corporateForm" id="corporateForm" method="post" action="processMembership.php">
	<select name="corporateSponsorLevel">
		<option value="corporateForm" selected="selected">Choose your Sponsor Level</option>
		<option value="platinum">Platinum</option>
		<option value="gold">Gold</option>
		<option value="silver">Silver</option>
		<option value="bronze">Bronze</option>
	</select>
	<p>* - indicates required fields</p>
	<p>
	<table>
	<tr>
	<td>First Name*:</td><td><input type="text" name="firstName" length="20" /></td>
	<td>Last Name*:</td><td> <input type="text" name="lastName" length="20" /></td></tr>
	<tr>
	<td>Address*:</td><td> <input type="text" name="address" length="30" /></td>
	<td>City*:</td><td><input type="text" name="city" length="20" /></td></tr>
	<tr>
	<td>State*:</td><td><input type="text" name="state" length="20" /></td>
	<td>Zip*:</td><td><input type="text" name="zip" length="20" /></td></tr>
	<tr>
	<td>County:</td><td><input type="text" name="county" length="20" /></td>
	<td>Employer:</td><td><input type="text" name="employer" length="20" /></td></tr>
	<tr>
	<td>Title/Position:</td><td><input type="text" name="title" length="20" /></td>
	<td>Work Phone*:</td><td><input type="text" name="workPhone length="20" /></td></tr>
	<tr>
	<td>Fax:</td><td><input type="text" name="fax" length="20" /></td>
	<td>Email*:</td><td><input type="text" name="email" length="20" /></td></tr></table>
	<br><br>
	<table>
	<tr><th>Committee Preferences:</th><th>My Personal Role is:</th></tr>
	<tr>
	<td>
	<input type="checkbox" name="cPref1" value="Business Planning/Development">Business Planning/Development<br>
	<input type="checkbox" name="cPref2" value="Communication">Communication<br>
	<input type="checkbox" name="cPref3" value="Membership">Membership<br>
	<input type="checkbox" name="cPref4" value="Faith Based Initiatives">Faith Based Initiatives<br>
	<input type="checkbox" name="cPref5" value="Education">Education<br>
	<input type="checkbox" name="cPref6" value="Annual Meeting">Annual Meeting<br>
	<input type="checkbox" name="cPref7" value="Legislative">Legislative<br>
	<input type="checkbox" name="cPref8" value="Public Relations">Public Relations<br>
	<input type="checkbox" name="cPref9" value="Awards">Awards<br>
	</td>
	<td>
	<input type="checkbox" name="personalRole1" value="Healthcare Provider">Healthcare Provider<br>
	<input type="checkbox" name="personalRole2" value="Hospital Administrator">Hospital Administrator<br>
	<input type="checkbox" name="personalRole3" value="Faith Community Leader">Faith Community Leader<br>
	<input type="checkbox" name="personalRole4" value="Concerned Citizen">Concerned Citizen<br>
	<input type="checkbox" name="personalRole5" value="State Policy Maker">State Policy Maker<br>
	<input type="checkbox" name="personalRole6" value="County or Local Government">County or Local Government<br>
	<input type="checkbox" name="personalRole7" value="Public Health Employee">Public Health Employee<br>
	<input type="checkbox" name="personalRole8" value="AHEC Employee">AHEC Employee<br>
	<input type="checkbox" name="personalRole9" value="Chamber Executive">Chamber Executive<br>
	<input type="checkbox" name="personalRole10" value="Educator">Educator<br>
	<input type="checkbox" name="personalRole11" value="Other">Other<br>
	</td></tr>
	</table>
	
	<h5>Payment Information</h5>
	<p>In order to control costs, the Georgia Rural Health Association accepts payments through Paypal. You do not have to join Paypal. Credit cards may be used.</p>
	<p>When you click on the Submit button, below, you will be taken to a page to confirm your membership application information and process your payment.</p>
	<input name="submit" type="submit" id="button" value="Register" />
	
	</p>
</form>


<h2>Organizatinal Membership Form</h2>
<form name="organizationForm" id="corporateForm" method="post" action="processMembership.php">
	<h5>Organizational Membership Fee - $350</h5>
	<p>Organizational members may add up to 10 contacts to our member list serve. These 10 people may also access our member only pages on the GRHA web site. Organizational members may register one additional attendee at member discounted rates for the GRHA Annual Meeting.
An organizational membership includes three votes along with:</p>
	<ul><li>Membership in the Georgia Rural Health Association</li>
	<li>Free website advertisement for any event or job posting that may need marketing</li>
	<li>An advocate for rural healthcare as it relates to health policy at the State Capitol</li>
	<li>State legislative tracking and weekly reports from the General Assembly on healthcare bills and National Rural Health Association policy alerts from Washington</li>
	<li>1 free workshop registration</li>
	<li>Membership discounts at GRHA events</li>
	<li>Participation in a statewide network of rural health providers</li>
	</ul>
	<p>* - indicates required fields</p>
	<p>
	<table>
	<tr>
	<td>First Name*:</td><td><input type="text" name="firstName" length="20" /></td>
	<td>Last Name*:</td><td> <input type="text" name="lastName" length="20" /></td></tr>
	<tr>
	<td>Address*:</td><td> <input type="text" name="address" length="30" /></td>
	<td>City*:</td><td><input type="text" name="city" length="20" /></td></tr>
	<tr>
	<td>State*:</td><td><input type="text" name="state" length="20" /></td>
	<td>Zip*:</td><td><input type="text" name="zip" length="20" /></td></tr>
	<tr>
	<td>County:</td><td><input type="text" name="county" length="20" /></td>
	<td>Employer:</td><td><input type="text" name="employer" length="20" /></td></tr>
	<tr>
	<td>Title/Position:</td><td><input type="text" name="title" length="20" /></td>
	<td>Work Phone*:</td><td><input type="text" name="workPhone length="20" /></td></tr>
	<tr>
	<td>Fax:</td><td><input type="text" name="fax" length="20" /></td>
	<td>Email*:</td><td><input type="text" name="email" length="20" /></td></tr></table>
	<br><br>
	<table>
	<tr><th>My Personal Role is:</th></tr>
	<tr>
	<td>
	<input type="checkbox" name="personalRole1" value="Healthcare Provider">Healthcare Provider<br>
	<input type="checkbox" name="personalRole2" value="Hospital Administrator">Hospital Administrator<br>
	<input type="checkbox" name="personalRole3" value="Faith Community Leader">Faith Community Leader<br>
	<input type="checkbox" name="personalRole4" value="Concerned Citizen">Concerned Citizen<br>
	<input type="checkbox" name="personalRole5" value="State Policy Maker">State Policy Maker<br>
	<input type="checkbox" name="personalRole6" value="County or Local Government">County or Local Government<br>
	<input type="checkbox" name="personalRole7" value="Public Health Employee">Public Health Employee<br>
	<input type="checkbox" name="personalRole8" value="AHEC Employee">AHEC Employee<br>
	<input type="checkbox" name="personalRole9" value="Chamber Executive">Chamber Executive<br>
	<input type="checkbox" name="personalRole10" value="Educator">Educator<br>
	<input type="checkbox" name="personalRole11" value="Other">Other<br>
	</td></tr>
	</table>
	
	<h5>Payment Information</h5>
	<p>In order to control costs, the Georgia Rural Health Association accepts payments through Paypal. You do not have to join Paypal. Credit cards may be used.</p>
	<p>When you click on the Submit button, below, you will be taken to a page to confirm your membership application information and process your payment.</p>
	<input name="submit" type="submit" id="button" value="Register" />
	
	</p>
</form>

<h2>Individual, Elected Officials, Student Membership Application Form</h2>
<ul><li>Membership in the Georgia Rural Health Association</li>
<li>An advocate for rural healthcare as it relates to health policy at the State Capitol</li>
<li>State legislative tracking and weekly reports from the General Assembly on healthcare bills and National Rural Health Association policy alerts from Washington</li>
<li>Membership discounts at GRHA events</li>
<li>Access to our member only pages on the GRHA web site</li>
<li>Participation in a statewide network of rural health providers </li>
</ul>

<form name="individualForm" id="corporateForm" method="post" action="processMembership.php">
	
	<h4>Choose your Membership Level</h4>
		<input type="radio" name="memberLevel" value="individual">Individual -- $150<br>
		<input type="radio" name="memberLevel" value="electedofficial">Elected Official  -- $50<br>
		<input type="radio" name="memberLevel" value="student">Student -- $20<br>
		
	<br>
	<p>* - indicates required fields</p>
	<p>
	<table>
	<tr>
	<td>First Name*:</td><td><input type="text" name="firstName" length="20" /></td>
	<td>Last Name*:</td><td> <input type="text" name="lastName" length="20" /></td></tr>
	<tr>
	<td>Address*:</td><td> <input type="text" name="address" length="30" /></td>
	<td>City*:</td><td><input type="text" name="city" length="20" /></td></tr>
	<tr>
	<td>State*:</td><td><input type="text" name="state" length="20" /></td>
	<td>Zip*:</td><td><input type="text" name="zip" length="20" /></td></tr>
	<tr>
	<td>County:</td><td><input type="text" name="county" length="20" /></td>
	<td>Employer:</td><td><input type="text" name="employer" length="20" /></td></tr>
	<tr>
	<td>Title/Position:</td><td><input type="text" name="title" length="20" /></td>
	<td>Work Phone*:</td><td><input type="text" name="workPhone length="20" /></td></tr>
	<tr>
	<td>Fax:</td><td><input type="text" name="fax" length="20" /></td>
	<td>Email*:</td><td><input type="text" name="email" length="20" /></td></tr></table>
	<br><br>
	<table>
	<tr><th>My Personal Role is:</th></tr>
	<tr>
	<td>
	<input type="checkbox" name="personalRole1" value="Healthcare Provider">Healthcare Provider<br>
	<input type="checkbox" name="personalRole2" value="Hospital Administrator">Hospital Administrator<br>
	<input type="checkbox" name="personalRole3" value="Faith Community Leader">Faith Community Leader<br>
	<input type="checkbox" name="personalRole4" value="Concerned Citizen">Concerned Citizen<br>
	<input type="checkbox" name="personalRole5" value="State Policy Maker">State Policy Maker<br>
	<input type="checkbox" name="personalRole6" value="County or Local Government">County or Local Government<br>
	<input type="checkbox" name="personalRole7" value="Public Health Employee">Public Health Employee<br>
	<input type="checkbox" name="personalRole8" value="AHEC Employee">AHEC Employee<br>
	<input type="checkbox" name="personalRole9" value="Chamber Executive">Chamber Executive<br>
	<input type="checkbox" name="personalRole10" value="Educator">Educator<br>
	<input type="checkbox" name="personalRole11" value="Other">Other<br>
	</td></tr>
	</table>
	
	<h5>Payment Information</h5>
	<p>In order to control costs, the Georgia Rural Health Association accepts payments through Paypal. You do not have to join Paypal. Credit cards may be used.</p>
	<p>When you click on the Submit button, below, you will be taken to a page to confirm your membership application information and process your payment.</p>
	<input name="submit" type="submit" id="button" value="Register" />
	
	</p>
</form>
_END;

echo "</form>";
echo "</body></html>";