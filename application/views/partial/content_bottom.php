<?php if (isset($content_page)) { ?>
 	<?php if ($content_page == "index_content") { ?>
		<div id="post-10" class="container content-main clearfix post-10 page type-page status-publish hentry">
		    <div class="grid">
		        <article class="column span-9">
		        	<header class="section-title large post-header">
		        		<h1 class="heading">Home Page</h1>
					</header>
					<div class="story post-story">
						<div class="div-blue">
							<?php 

							include "config.php";
							header('Content-Type: text/html; charset=utf-8');
                            mysqli_set_charset($koneksi,"utf8");
							$sql = 'SELECT * FROM siteinfo LIMIT 0,1';
							$qsql = $koneksi->query($sql);
							$rsql = $qsql->fetch_assoc();
							

							?>
							<h5 class="title-blue">
								<?php echo $rsql['siteinfo_heading']; ?>
						</div>
						<div class="div-darkblue">
							<h5 class="title-darkblue">How To Purchase / كيفية الشراء</h5>
								<ul class="htp">
									<?php echo $rsql['siteinfo_how_to']; ?>
								</ul>
						</div>

						
						<div class="div-notice">
							<h5 class="title-notice">Notice / تنويه</h5>
							<ul class="ul-notice">
								<?php echo $rsql['siteinfo_notice']; ?>
							</ul>
						</div>
					</div>
				</article>
<?php }
else{ ?>
	
						<div class="div-notice">
							<h5 class="title-notice">Notice / تنويه</h5>
							<ul class="ul-notice">
								<li>Dubai Islamic Bank only receive inquiry from WhatsApp, lottery ticket winning number can now be made from https://www.dibpak.com<br />
									<span class="yellow-arabic">يتلقى بنك دبي الإسلامي فقط طلبًا من WhatsApp ، ويمكن الآن الحصول على رقم الفوز بتذكرة يانصيب من https://www.dibpak.com</span>
								</li>
								<li>Please be aware of the &#8220;fraud&#8221; over lottery aging ticket payment.<br />
									<span class="yellow-arabic">يرجى أن تكون على علم &#8220;الاحتيال&#8221; على دفع تذكرة اليانصيب الشيخوخة.</span>
								</li>
								<li>One touch access from virtual account to lottery service! is now available for Abu Dhabi Commercial Bank Customer.<br />
									<span class="yellow-arabic">الوصول بلمسة واحدة من الحساب الافتراضي إلى خدمة اليانصيب! متاح الآن لعملاء بنك أبوظبي التجاري.</span>
								</li>
								<li>[ Important! ] Attention to the phishing lottery notification e-mail and the cash payment guidance of winning money.<br />
									<span class="yellow-arabic">مهم! ] الانتباه إلى البريد الإلكتروني إشعار اليانصيب الخداع وإرشادات الدفع النقدي للفوز بالمال ]</span>
								</li>
								<li>Release on Friday, September 21 at each prizes of &#8220;Dubai World Cup&#8221;, &#8220;PSA Dubai World Series Final&#8221;, &#8220;Dubai Summer Surprises&#8221; and &#8220;Eid Al Adha&#8221;.<br />
									<span class="yellow-arabic">إطلاق يوم الجمعة 21 سبتمبر في كل من جوائز &#8220;كأس دبي العالمي&#8221; و &#8220;بطولة دبي العالمية لسلسلة النهائي&#8221; و &#8220;مفاجآت صيف دبي&#8221; و &#8220;عيد الأضحى.</span>
								</li>
								<li>Notice of constant renewal of each partners Bank on Dubai Pools Today.<br />
									<span class="yellow-arabic">إخطار بالتجديد المستمر لكل شريك بنك على مجمعات دبي اليوم.</span>
								</li>
								<li>Worldwide Lottery Agents of Dubai Pools are available during National UAE Days.<br />
									<span class="yellow-arabic">وكلاء اليانصيب في جميع أنحاء العالم من حمامات دبي متوفرة خلال أيام الإمارات الوطنية.</span>
								</li>
								<li>About the handling of personal information when using this website is governed in privacy policy.<br />
									<span class="yellow-arabic">حول التعامل مع المعلومات الشخصية عند استخدام هذا الموقع محكوم بسياسة الخصوصية.</span>
								</li>
							</ul>
						</div>
					</div>
				</article>
				

<?php } ?>
<?php } ?>