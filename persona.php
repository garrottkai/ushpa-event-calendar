<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Kai Garrott" />
		<meta name="description" content="persona and use cases" />
		<title>Persona</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div class="container">
		<header>
			<h1>Persona</h1>
		</header>
		<h3>General user profile</h3>
		<p>
			The intended purpose of this site is twofold: to provide a public listing of upcoming events in the U.S. paragliding community, and to offer the opportunity for USHPA members to submit new event listings for display.<br><br>
		Potential users of this resource can be generalized as having many of the following characteristics:<br></p>
			<ul>
				<li>Age: Ranging from 20 to 70; majority 30 - 60; average 40</li>
				<li>Gender: Largely male</li>
				<li>Education level: Typically, some college</li>
				<li>Work: Established in a professional career, with 10+ years of experience</li>
				<li>Income: Typical professional salary, $40k-$100k</li>
				<li>Reason for using this site:
					<ul>
						<li>To find upcoming events</li>
						<li>To post an event announcement</li>
					</ul>
				</li>
				<li>User needs to be able to:
					<ul>
						<li>View a list of events</li>
						<li>Easily access detailed information about each event</li>
						<li>Submit event information using an uncomplicated interface</li>
					</ul>
				</li>
				<li>Referred to page by: Magazine article</li>
				<li>Viewing circumstances: On desktop computer, after work</li>
				<li>Technological experience: Casual computer user - little beyond browsing, email, and spreadsheets</li>
			</ul>
		<h3>Example</h3>
		<p>Dave is a 43-year-old office manager at a local auto parts chain in Spokane. He holds a Bachelor's degree in business administration from the University of Washington, and has gradually worked his way up in the company since being hired out of college. At work, Dave uses elements of the Microsoft Office suite, including Word, PowerPoint, and Excel, to organize and communicate data within the corporate structure. He has been married for 15 years and has two children in elementary and middle school.<br>
		Dave is a recreational paraglider pilot. He started flying early in his professional career, before he was married. Having children forced him to quit flying for a few years, but as his kids got older, he's had a bit more free time on the weekends, and he returned to the sky two years ago.<br>
		Dave's skill level could be classified as intermediate. He has a P-4 rating, but his busy schedule prevents him from engaging with the sport at the level he did 20 years ago. Nevertheless, Dave belongs to a club, members of which he flies with at a number of sites in the area, and he enjoys regularly participating in fly-ins around the Northwest.<br>
		</p>
		<br><br>
		<h4>Use Case 1</h4>
		<p>Having recently received the latest issue of <em>Hang Gliding and Paragliding</em> magazine in the mail, Dave decides to visit the USHPA site to find more information on upcoming fly-ins taking place in the region over the summer.</p>
		<ol>
			<li>Dave types in ushpa.org</li>
			<li>The browser returns the main page</li>
			<li>Dave clicks on the "Events" link</li>
			<li>The browser returns the Event Calendar page</li>
			<li>Dave selects a date range of June 01 to August 30</li>
			<li>The browser returns a list of items meeting the criteria</li>
			<li>Dave clicks on the Search box and enters "Washington"</li>
			<li>The browser returns a list of items which meet the additional criterion</li>
			<li>Dave clicks on the first item returned</li>
			<li>The browser displays a page of detailed information regarding the selected event</li>
		</ol><br>
		<h4>Use Case 2</h4>
		<p>Dave's flying club decides to hold a fly-in at a local site. Dave volunteers to help publicise the event by posting a notice on the USHPA website.</p>
		<ol>
			<li>Dave types ushpa.org into the address bar of his browser</li>
			<li>The browser returns the main page</li>
			<li>Dave clicks on the "Events" link</li>
			<li>The browser returns the Event Calendar page</li>
			<li>Dave clicks on the "Submit an Event" link</li>
			<li>The browser displays a form containing the following fields:
				<ul>
					<li>USHPA Number</li>
					<li>Name (First & Last)</li>
					<li>Email Address</li>
					<li>Phone Number</li>
					<li>Event Name</li>
					<li>Location of Event</li>
					<li>More Info</li>
					<li>Wing Type</li>
					<li>Event Type</li>
					<li>Event Description</li>
					<li>Recurring Event? Y/N</li>
					<li>Start Date</li>
					<li>End Date</li>
					<li>Notes to USHPA</li>
				</ul>
			</li>
			<li>Dave fills out the form and clicks "Submit"</li>
			<li>The browser submits the form to the server and returns a confirmation page</li>
			<li>An administrator uses the event information to create an event posting</li>
			<li>The page displays the event in the list</li>
		</ol>
		</div>
	</body>
</html>