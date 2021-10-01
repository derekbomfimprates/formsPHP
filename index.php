<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
	<link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>
	<section class="section">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-half">
					<h1 class="title has-text-centered">Contact Form</h1>
 
					<form action="send.php" method="POST">
						<div class="field">
							<label class="label">Name</label>
							<div class="control">
								<input name="name" class="input" type="text" placeholder="Your name">
							</div>
						</div>
 
						<div class="field">
							<label class="label">Email *</label>
							<div class="control">
								<input name="email" class="input" type="email" placeholder="Your Email">
							</div>
						</div>
 
						<div class="field">
							<label class="label">Subject</label>
							<div class="control">
								<div class="select is-fullwidth">
									<select name="subject">
										<option>Hire</option>
										<option>Questions</option>
										<option>Projects</option>
										<option>Others</option>
									</select>
								</div>
							</div>
						</div>
 
						<div class="field">
							<label class="label">Message *</label>
							<div class="control">
								<textarea name="message" class="textarea" placeholder="Your message" maxlength="2000"></textarea>
							</div>
						</div>
 
						<div class="field is-grouped">
							<div class="control">
								<button class="button is-link is-medium">Send</button>
							</div>
						</div>
					</form>
 
				</div>
			</div>
		</div>
	</section>
</body>
</html>