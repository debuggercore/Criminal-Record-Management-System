<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>New Criminal</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>New Criminal</a></h1>
		<form id="form_999150" class="appnitro" enctype="multipart/form-data" method="post" action="newrecord.php">
					<div class="form_description">
						<h2>New Criminal</h2>
						<p>Please enter valid details and click submit to enter</p>
					</div>						
			<ul >
			
				<li id="li_1" >
					<label class="description" for="element_1">Criminal_ID </label>
					<div>
						<input id="element_1" name="suspect_id" class="element text medium" type="text" maxlength="255" value=""/> 
					</div><p class="guidelines" id="guide_1"><small>OF THE FORM 10001/10002/10003</small></p> 
				</li>		
				<li id="li_5" >
					<label class="description" for="">Criminal_Name </label>
					<div>
						<input id="element_5" name="suspect_name" class="element text large" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_2" >
					<label class="description" for="element_2">Upload a Picture </label>
					<div>
						<input id="element_2" name="Picture" class="element file" type="file"/> 
					</div>  
				</li>		
				<li id="li_3" >
					<label class="description" for="element_3">Upload a File for Fingerprint Details </label>
					<div>
						<input id="element_3" name="fingerprint" class="element file" type="file"/> 
					</div>  
				</li>		
				<li id="li_4" >
					<label class="description" for="element_4">Address </label>
					<div>
						<input id="element_4" name="address" class="element text large" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_6" >
					<label class="description" for="element_6">Eye Color </label>
					<div>
						<input id="element_6" name="eye_colour" class="element text medium" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_7" >
					<label class="description" for="element_7">Weight </label>
					<div>
						<input id="element_7" name="weight" class="element text small" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_21" >
					<label class="description" for="element_21">Height </label>
					<div>
						<input id="element_21" name="height" class="element text small" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_22" >
					<label class="description" for="element_22">Plead Type </label>
					<div>
						<select class="element select medium" id="element_22" name="plead_type"> 
							
							<option value="Guilty" >Guilty</option>
							<option value="Not Guilty" >Not Guilty</option>

						</select>
					</div> 
				</li>		
				<li id="li_8" >
					<label class="description" for="element_8">Hair Color </label>
					<div>
						<input id="element_8" name="hair_colour" class="element text medium" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_9" >
					<label class="description" for="element_9">Blood Group </label>
					<div>
						<input id="element_9" name="blood_group" class="element text small" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
					<li id="li_23" >
					<label class="description" for="element_23">Gender </label>
					<div>
					<select class="element select small" id="element_23" name="gender"> 
						
						<option value="M" >M</option>
						<option value="F" >F</option>

					</select>
					</div> 
				</li>		
				<li id="li_10" >
					<label class="description" for="element_10">Date Of Birth </label>
					<span>
						<input id="element_10_1" name="dob_month" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_10_1">MM</label>
					</span>
					<span>
						<input id="element_10_2" name="dob_date" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_10_2">DD</label>
					</span>
					<span>
						<input id="element_10_3" name="dob_year" class="element text" size="4" maxlength="4" value="" type="text">
						<label for="element_10_3">YYYY</label>
					</span>
				
					<span id="calendar_10">
						<img id="cal_img_10" class="datepicker" src="calendar.gif" alt="Pick a date.">	
					</span>
					<script type="text/javascript">
						Calendar.setup({
						inputField	 : "element_10_3",
						baseField    : "element_10",
						displayArea  : "calendar_10",
						button		 : "cal_img_10",
						ifFormat	 : "%B %e, %Y",
						onSelect	 : selectDate
						});
					</script>
					 
				</li>		
				<li id="li_24" >
					<label class="description" for="element_24">Jail_ID </label>
					<div>
					<select class="element select medium" id="element_24" name="jail_id"> 
						
						<option value="11111" >11111</option>
						<option value="11112" >11112</option>
						<option  value="11113">11113</option>
						<option  value="11114">11114</option>
						<option value="11115">11115</option>

					</select>
					</div><p class="guidelines" id="guide_24"><small>11114 is jail type-Juvenille</small></p> 
				</li>		
				<li id="li_11" >
					<label class="description" for="element_11">Release_Date </label>
					<span>
						<input id="element_11_1" name="release_month" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_11_1">MM</label>
					</span>
					<span>
						<input id="element_11_2" name="release_date" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_11_2">DD</label>
					</span>
					<span>
						<input id="element_11_3" name="release_year" class="element text" size="4" maxlength="4" value="" type="text">
						<label for="element_11_3">YYYY</label>
					</span>
				
					<span id="calendar_11">
						<img id="cal_img_11" class="datepicker" src="calendar.gif" alt="Pick a date.">	
					</span>
					<script type="text/javascript">
						Calendar.setup({
						inputField	 : "element_11_3",
						baseField    : "element_11",
						displayArea  : "calendar_11",
						button		 : "cal_img_11",
						ifFormat	 : "%B %e, %Y",
						onSelect	 : selectDate
						});
					</script>
					 
				</li>		
				<li id="li_12" >
					<label class="description" for="element_12">Admission_Date </label>
					<span>
						<input id="element_12_1" name="admission_month" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_12_1">MM</label>
					</span>
					<span>
						<input id="element_12_2" name="admission_date" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_12_2">DD</label>
					</span>
					<span>
						<input id="element_12_3" name="admission_year" class="element text" size="4" maxlength="4" value="" type="text">
						<label for="element_12_3">YYYY</label>
					</span>
				
					<span id="calendar_12">
						<img id="cal_img_12" class="datepicker" src="calendar.gif" alt="Pick a date.">	
					</span>
					<script type="text/javascript">
						Calendar.setup({
						inputField	 : "element_12_3",
						baseField    : "element_12",
						displayArea  : "calendar_12",
						button		 : "cal_img_12",
						ifFormat	 : "%B %e, %Y",
						onSelect	 : selectDate
						});
					</script>
				 
				</li>		
				<li id="li_25" >
					<label class="description" for="element_25">Lawyer_ID </label>
					<div>
					<select class="element select medium" id="element_25" name="lawyer_id"> 
						
						<option value="1010" >1010</option>
						<option value="1011" >1011</option>
						<option value="1012" >1012</option>
						<option value="1013" >1013</option>
						<option value="1014" >1014</option>

					</select>
					</div> 
				</li>		
				<li id="li_26" >
					<label class="description" for="element_26">Hire Type </label>
					<div>
					<select class="element select medium" id="element_26" name="hire_type"> 
						
						<option value="Private" >Private</option>
						<option value="Government" >Government</option>

					</select>
					</div> 
				</li>		
				<li id="li_13" >
					<label class="description" for="element_13">Victim_ID </label>
					<div>
						<input id="element_13" name="victim_id" class="element text medium" type="text" maxlength="255" value=""/> 
					</div><p class="guidelines" id="guide_13"><small>Of the form 120/121/122</small></p> 
				</li>		
				<li id="li_14" >
					<label class="description" for="element_14">Victim Name </label>
					<div>
						<input id="element_14" name="name" class="element text large" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_27" >
					<label class="description" for="element_27">Damage Done </label>
					<div>
					<select class="element select medium" id="element_27" name="damage_done"> 
						
						<option value="1" >Injured</option>
						<option value="2" >Murdered</option>
						<option value="3" >Robbed</option>

					</select>
					</div> 
				</li>		
				<li id="li_15" >
					<label class="description" for="element_15">Relation Type </label>
					<div>
						<input id="element_15" name="relation_type" class="element text medium" type="text" maxlength="255" value=""/> 
					</div><p class="guidelines" id="guide_15"><small>Relation between victim and suspect (Brother/Sister/Father/...)</small></p> 
				</li>		
				<li id="li_16" >
					<label class="description" for="element_16">Family Members of Victim </label>
					<div>
						<input id="element_16" name="family_name" class="element text medium" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_17" >
					<label class="description" for="element_17">Contact Number </label>
					<div>
						<input id="element_17" name="contact" class="element text large" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_28" >
					<label class="description" for="element_28">Punishment Type </label>
					<div>
					<select class="element select medium" id="element_28" name="punishment_type"> 
						
						<option value="Community Service" >Community Service</option>
						<option value="Death Penalty" >Death Penalty</option>
						<option value="Fines" >Fines</option>
						<option value="Probation" >Probation</option>

					</select>
					</div> 
				</li>		
				<li id="li_18" >
					<label class="description" for="element_18">Offence_ID </label>
					<div>
						<input id="element_18" name="offence_id" class="element text medium" type="text" maxlength="255" value=""/> 
					</div><p class="guidelines" id="guide_18"><small>Of the type 1234/1235/1236</small></p> 
				</li>		
				<li id="li_19" >
					<label class="description" for="element_19">Location Of Crime </label>
					<div>
						<input id="element_19" name="location" class="element text large" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_29" >
					<label class="description" for="element_29">Crime Types </label>
					<div>
					<select class="element select medium" id="element_29" name="crime_type"> 
						
						<option value="Murder" >Murder</option>
						<option value="Sexual Assault" >Sexual Assault</option>
						<option value="Robbery" >Robbery</option>

					</select>
					</div> 
				</li>		
				<li id="li_20" >
					<label class="description" for="element_20">Date of Crime </label>
					<span>
						<input id="element_20_1" name="crime_month" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_20_1">MM</label>
					</span>
					<span>
						<input id="element_20_2" name="crime_date" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_20_2">DD</label>
					</span>
					<span>
						<input id="element_20_3" name="crime_year" class="element text" size="4" maxlength="4" value="" type="text">
						<label for="element_20_3">YYYY</label>
					</span>
				
					<span id="calendar_20">
						<img id="cal_img_20" class="datepicker" src="calendar.gif" alt="Pick a date.">	
					</span>
					<script type="text/javascript">
						Calendar.setup({
						inputField	 : "element_20_3",
						baseField    : "element_20",
						displayArea  : "calendar_20",
						button		 : "cal_img_20",
						ifFormat	 : "%B %e, %Y",
						onSelect	 : selectDate
						});
					</script>
				 
				</li>
					
				<li class="buttons">
					<input type="hidden" name="form_id" value="999150" />
					
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				</li>
			</ul>
		</form>	
		
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>