<?php
$errors = [];
$missing = [];
$suspect = [];
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments', 'os'];
    $required = ['name', 'comments', 'os'];
    $to = 'David Powers <david@example.com>';
    $subject = 'Feedback from online form';
    $headers = [];
    $headers[] = 'From: webmaster@example.com';
    $headers[] = 'Cc: another@example.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = null;
    require './includes/process_mail.php';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<title>When off-the-shelf won’t do, create a custom sign</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="https://www.usabluebook.com/App_Themes/Skin_1/js/ec.js"></script>
<link href="https://www.usabluebook.com/App_Themes/Skin_1/hpstyle.css" type="text/css" rel="stylesheet" />
<link href="https://www.usabluebook.com/App_Themes/Skin_1/newstyle.css" type="text/css" rel="stylesheet" />
<link href="https://www.usabluebook.com/App_Themes/Skin_1/style.css" type="text/css" rel="stylesheet" />
<link href="https://www.usabluebook.com/App_Themes/Skin_1/StyleSheet.css" type="text/css" rel="stylesheet" />

<!--
<style type="text/css"> 
a {color: #d23030;}
a:hover {color: #690000;}
</style> 
-->

</head>

<body bgcolor="#ffffff">
<!-- t-customSignRequest.aspx -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 -->

<div class="container-fluid" align="center" style="padding: 25px; max-width: 950px;">
	<?php if ($_POST && $suspect) : ?>
	<p class="warning">Sorry, your mail couldn't be sent.</p>
	<?php endif; ?>
	<?php if ($errors || $missing) : ?>
	<p class="waring">Please fix the item(s) indicated</p>
	<?php endif; ?>
	<form class="" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
<!-- 
		<div class="alert alert-danger" role="alert" style="display: none;">
			Oops, looks like you didn't enter something that we'll need.
		</div>
 -->

		<div class="form-row">
			<div class="form-group col-md-12" style="text-align: left;">
				<h1>Custom Sign Quote Request Form</h1>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12" style="text-align: left;">
				<h4>Contact &amp; Shipping Info</h4>
			</div>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="usabbSalesRep" name="usabbSalesRep" placeholder="Sales Representative">
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="firstName">
				<?php if ($missing && in_array('firstName', $missing)) : ?>
					<span class="warning">Please enter your first name</span>
				<?php endif; ?>
				</label>
				<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
			</div>
			<div class="form-group col-md-6">
				<label for="lastName">
				<?php if ($missing && in_array('lastName', $missing)) : ?>
					<span class="warning">Please enter your last name</span>
				<?php endif; ?>
				</label>
				<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="phone">
				<?php if ($missing && in_array('phone', $missing)) : ?>
					<span class="warning">Please enter your phone</span>
				<?php endif; ?>
				</label>
				<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
			</div>
			<div class="form-group col-md-8">
				<label for="email">
				<?php if ($missing && in_array('email', $missing)) : ?>
					<span class="warning">Please enter your email address</span>
				<?php endif; ?>
				</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<input type="text" class="form-control" id="usabbAccountNum" name="usabbAccountNum" placeholder="Account Number">
			</div>
			<div class="form-group col-md-8">
				<input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company Name">
			</div>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="Address1" name="Address1" placeholder="Address 1">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="Address2" name="Address2" placeholder="Address 2">
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="text" class="form-control" id="City" name="City" placeholder="City">
			</div>
			<div class="form-group col-md-4">
				<input type="text" class="form-control" id="State" name="State" placeholder="State">
			</div>
			<div class="form-group col-md-2">
				<input type="text" class="form-control" id="Zip" name="Zip" placeholder="Zip">
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-12" style="text-align: left;">
				<h4>OSHA Sign Header </h4><h6>(Danger/Warning/Caution/Notice)</h6>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<select class="custom-select" id="oshasigns" name="oshasigns">
							<option value="">Options</option>
							<option value="DANGER">DANGER</option>
							<option value="WARNING">WARNING</option>
							<option value="CAUTION">CAUTION</option>
							<option value="NOTICE">NOTICE</option>
						</select>
					</div>
					<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Message/Legend" name="oshamessagelegend">
				</div>
			</div>
			<div class="form-group col-md-4">
				<input type="text" class="form-control" id="size" name="oshasize" placeholder="Size (H&quot; x W&quot;)">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12" style="text-align: left;">
				<h4>Custom Sign Header </h4><h6>(No Header/Other)</h6>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-7">
				<input type="text" class="form-control" id="headerText" placeholder="Header Text" name="headerText">
			</div>
			<div class="form-group col-md-5">
				<input type="text" class="form-control" id="headerColor" placeholder="Header Text Color" name="headerColor">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-7">
				<input type="text" class="form-control" id="messageText" placeholder="Message/Legend Text" name="messageText">
			</div>
			<div class="form-group col-md-5">
				<input type="text" class="form-control" id="messageColor" placeholder="Message/Legend Text Color" name="messageColor">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-7">
				<input type="text" class="form-control" id="size" placeholder="Size (H&quot; x W&quot;)" name="customsize">
			</div>
			<div class="form-group col-md-5">
				<input type="text" class="form-control" id="backColor" placeholder="Background Color" name="backColor">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12" style="text-align: left;">
				<h4>Material/Shape</h4>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-7">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<select class="custom-select" id="material" name="material">
							<option value="">Material</option>
							<option value="DANGER">Pressure Sensitive Vinyl Adhesive</option>
							<option value="WARNING">Rigid Plastic</option>
							<option value="CAUTION">.040 Aluminum</option>
							<option value="NOTICE">Magnetic</option>
							<option value="NOTICE">Other</option>
						</select>
					</div>
					<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Specify other" name="materialother">
				</div>
			</div>
			<div class="form-group col-md-5">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<select class="custom-select" id="shape" name="shape">
							<option value="">Shape</option>
							<option value="DANGER">Rectangle</option>
							<option value="WARNING">Square</option>
							<option value="CAUTION">Diamond</option>
							<option value="NOTICE">Circle</option>
							<option value="NOTICE">Oval</option>
							<option value="NOTICE">Octagon</option>
							<option value="NOTICE">Triangle</option>
							<option value="NOTICE">Other</option>
						</select>
					</div>
					<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Specify other" name="shapeother">
				</div>
			</div>
		</div>
		
		
		<div class="form-row">
			<div class="form-group" style="text-align: left;">
				<h4>Custom Graphics</h4>
			</div>
		</div>		
		<div class="form-row">
			<div class="form-group col-md-4" style="text-align: left;"><h6>Do you want to add your logo?*</h6></div>
			<div class="form-group col-md-8">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customLogo" name="customLogo">
					<label class="custom-file-label" for="customLogo">Choose file</label>
				</div>
			</div>
		</div>		
		<div class="form-row">
			<div class="form-group col-md-4" style="text-align: left;"><h6>Do you need to add a graphic?**</h6></div>
			<div class="form-group col-md-8">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customGraphic" name="customGraphic">
					<label class="custom-file-label" for="customGraphic">Choose file</label>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12" style="text-align: left;">
				<label for="exampleFormControlTextarea1">Notes</label>
				<textarea class="form-control" name="notes" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12" style="padding: 25px 0;">
				<button type="submit" name="submit" class="btn btn-primary btn-lg" style="">Submit Request</button>
			</div>
		</div>

		<div class="form-row" style="padding-top: 25px;">
			<div class="form-group col-md-12" style="">
				<p style="font-size: 9pt; line-height: 10pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">* If you want us to add your logo, please upload the artwork here. Acceptable file formats are xxxxxx<br/>** If you want us to add a graphic, please upload the artwork here. Acceptable file formats are xxxxxx</p>

				<p style="font-size: 9pt; line-height: 10pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">All Custom Signs will include <a href="" target="_blank">Sign Muscle</a> coating except for custom Visi-Signs or Flanged 2-Vue signs</p>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12" style="">
				<table border="0" cellpadding="0" cellspacing="0">
					<tbody>
						<tr><td style="" align="left" colspan="4"><span style="font-size: 14pt; line-height: 16pt; font-weight: bold; color: #226ab3; font-family: Verdana, Arial, Helvetica, sans-serif;">Common sign dimensions:</span></td></tr>
						<tr>
							<td style="width: 25%; padding-top: 3px; " align="left"><span style="font-size: 10pt; line-height: 12pt; font-weight: bold; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">Facility signs</span></td>
							<td style="width: 25%; padding-top: 3px; " align="left"><span style="font-size: 10pt; line-height: 12pt; font-weight: bold; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">Traffic signs</span></td>
							<td style="width: 25%; padding-top: 3px; " align="left"><span style="font-size: 10pt; line-height: 12pt; font-weight: bold; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">Visi-signs</span></td>
							<td style="width: 25%; padding-top: 3px; " align="left"><span style="font-size: 10pt; line-height: 12pt; font-weight: bold; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">Flanged 2-Vue signs</span></td>
						</tr>
						<tr>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">7&quot;H x 10&quot;W</span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">18&quot;H x 12&quot;W</span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">6&quot;H x 9&quot;W</span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">10&quot;H x 8&quot;W</span></td>
						</tr>
						<tr>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">10&quot;H x 14&quot;W</span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">18&quot;H x 18&quot;W</span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">16&quot;H x 9&quot;W</span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">12&quot;H x 9&quot;W</span></td>
						</tr>
						<tr>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">14&quot;H x 10&quot;W</span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">24&quot;H x 24&quot;W</span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;"></span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">18&quot;H x 4&quot;W</span></td>
						</tr>
						<tr>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">14&quot;H x 20&quot;W</span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;"></span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;"></span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;"></span></td>
						</tr>
						<tr>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;">18&quot;H x 4&quot;W</span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;"></span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;"></span></td>
							<td style="width: 25%; " align="left"><span style="font-size: 10pt; line-height: 12pt; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;"></span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</form>
	
	<pre>
		<?php
		if ($_GET) {
			echo 'Content of the $_GET array:<br/>';
			print_r($_GET);
		} elseif ($_POST) {
			echo 'Content of the $_POST array:<br/>';
			print_r($_POST);
		}
		?>
	</pre>
</div>



</body>
</html>