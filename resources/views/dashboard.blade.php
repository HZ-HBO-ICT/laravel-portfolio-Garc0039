<?php require "style\head-1.php"; ?>

<title>

    Dashboard

</title>

<meta name="description" content="David Garcia's Website Home Page">

</head>

<?php require "style\head-2.php"; ?>

<h2>

    Dashboard Page

</h2>

<?php require "style\head-3.php"; ?>
		<main>

			<div id="div-table">

				<table>

					<thead>

						<tr>

							<th/> Quartile

							<th/> Course

							<th/> EC

							<th/> Exam

							<th/> Grade

						</tr>

					</thead>

					<tbody>

						<tr>

							<td/ rowspan="3"> 1

							<td/> Program and Career Orientation

							<td/> 2,5

							<td/> Assessment

							<td/> -

						</tr>

						<tr>

							<td/> Computer Science Basics

							<td/> 5

							<td/> Written Exam

							<td/> -

						</tr>

						<tr>

							<td/> Programming Basics

							<td/> 5

							<td/> Case study

							<td/> -


						</tr>

						<tr>

							<td/ rowspan="2"> 2

							<td/ rowspan="2"> Object Oriented Programming

							<td/ rowspan="2"> 10

							<td/> Case study

							<td/> -

						</tr>

						<tr>
							<td/> Project

							<td/> -

						</tr>

						<tr>

							<td/ rowspan="4"> 3

							<td/> Framework Development

							<td/> 5

							<td/> Case study

							<td/> -

						</tr>

						<tr>

							<td/ rowspan="3"> Framework Project 1

							<td/ rowspan="3"> 7,5

							<td/> Project

							<td/> -

						</tr>

						<tr>

							<td/> Assessment

							<td/> -

						</tr>

						<tr>

							<td/> Report

							<td/> -

						</tr>

						<tr>

							<td/ rowspan="3"> 4

							<td/ rowspan="3"> Framework Project 2

							<td/ rowspan="3"> 10

							<td/> Portfolio

							<td/> -

						</tr>

						<tr>

							<td/> Project

							<td/> -

						</tr>

						<tr>

							<td/> Assessment

							<td/> -

						</tr>

						<tr>

							<td/> Quartile "the entire year"

							<td/> PCO

							<td/> 12,5

							<td/> Portfolio

							<td/> -

						</tr>

						<tr>

							<td/ rowspan="2"> Quartile Whenever

							<td/> Personality 1

							<td/> 1,25

							<td/> Report

							<td/> -
						</tr>

						<tr>

							<td/> Personality 2

							<td/> 1,25

							<td/> Report

							<td/> -

						</tr>

					</tbody>

				</table>

			</div>

			<div id="div-processbar">

				<label>

					EC Progressbar:

				</label>

				<progress value="22.5" max="60">

				</progress>

				<br>

				<label id="dashboard-progress-label">

					EC Progressbar:

				</label>

				<progress value="45" max="60">

				</progress>

				<p>

					You need 45 ECS to pass, I got 0 ECS so far!

				</p>

			</div>

		</main>

		<footer>

			<aside class="footer-aside">

				<ul class="footer-ul-1">

					<li> <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf" target="_blank" rel="noopener noreferrer"> The HZ HBO-ICT Course and Examination Regulations (CER) </li>

					<li> <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf" target="_blank" rel="noopener noreferrer"> The Implementation Regulations (IR) of the HBO-ICT programme </li>

					<li> <a href="https://github.com/HZ-HBO-ICT" target="_blank" rel="noopener noreferrer"> Github environment of the HBO-ICT Course </li>

				</ul>

				<ul class="footer-ul-2">

					<li> <a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="_blank" rel="noopener noreferrer"> Teams environment of the HBO-ICT Course </li>

					<li> <a href="https://learn.hz.nl/" target="_blank" rel="noopener noreferrer"> Learn environment </li>

					<li> <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank" rel="noopener noreferrer"> MyHZ </li>

				</ul>

				<a href="https://hz.nl/" target="_blank" rel="noopener noreferrer"> <img alt="HZ Logo" src="/img/hz-pic.png" title="HZ Logo" class="img"> </a>

			</aside>

		</footer>

	</body>

</html>
