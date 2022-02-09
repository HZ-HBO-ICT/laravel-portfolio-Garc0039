<?php require "style\head-1.php"; ?>

<title>

    Blog

</title>

<meta name="description" content="David Garcia's Website Home Page">

</head>

<?php require "style\head-2.php"; ?>

<h2>

    Blog Page

</h2>

<?php require "style\head-3.php"; ?>
		<main>

			<article class="post-p">

				<p>

					<span class="post-p-header"> Section Article - Discussion/Opinion </span>

					<br>
					<br>

					It is not clear if you should nest the section tag into the article tag or the other way around. However in my point of view you should nest the article tag
					in the section tag. If you want to understand my reasoning then have a quick look at this chart:

					<img id="section-article-img" src="/img/blog-post-section-article-img.png"  alt="Image of div and section example" title="Image of div and section example">

					<br>
					<br>

					As you can see this screenshot (provided by this german site: <a href="https://developer.mozilla.org/de/docs/Web/HTML/Element/section" target="_blank" rel="noopener noreferrer"> MDN Web Docs </a>)
					shows two examples one being shown with a div tag and one with a section tag. Furthermore the div tag is known as the division tag which is used to
					divide your code for it to look better for instance or to make it easier to work with CSS. The first example shows how you can divide your code with a div tag
					which can also be done by replacing div with section as proven in the second example. Therefor the section tag provides the same usage as the div tag
					and should be used that way. In conclusion the article tag should be nested in the section tag since the section tag divides code just like the div tag where
					your code gets nested to.

				</p>

			</article>

			<ul class="back-ul">

				<li/ class="back-li"> <a href="/blog" class="back-a"> Back </a>

			</ul>

		</main>

		<footer>

			<aside>

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
