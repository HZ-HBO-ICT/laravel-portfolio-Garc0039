<?php require "style\head-1.php"; ?>

<title>

    Dashboard

</title>

<meta name="description" content="David Garcia's Website Dashboard Page">

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

<hr>

<?php require 'style/footer.php'; ?>

	</body>

</html>
