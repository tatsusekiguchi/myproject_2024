	<!-- ▽footer▽-->
	<footer class="footer">
		<div class="footContact">
			<div class="secWrap01">
				<div class="secTtl">
					<h2>お問い合わせ</h2>
					<p>Contact</p>
				</div>
				<div class="txt">
					<p>チヨダ工業株式会社へのお問い合わせはこちら</p>
				</div>
				<div class="contactItem">
					<div class="itemBox">
						<dl>
							<dt>電話でお問い合わせ</dt>
							<dd>
								<div class="tel"><a href="tel:0561380005">0561-38-0005</a>
									<p>【受付時間】9：00～17:00</p>
								</div>
							</dd>
						</dl>
					</div>
					<div class="itemBox">
						<dl>
							<dt>WEBからのお問い合わせ</dt>
							<dd>
								<div class="mail"><a href="<?php echo home_url(); ?>/contact/"><span>MAILFORM</span></a></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<div class="footPanel">
			<div class="secWrap01">
				<div class="footBox">
					<div class="leftBox">
						<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_logo.png" alt=""></div>
						<div class="txt">
							<p>〒470-0162　愛知県愛知郡東郷町大字春木字岩ケ根一番地</p>
							<div class="telFax">
								<div class="tel"><a href="tel:0561380005">TEL 0561-38-0005</a></div>
								<div class="fax"><a href="#"> FAX 0561-38-5191</a></div>
							</div>
						</div>
						<div class="bnr"><a href="https://www.jdmia.or.jp/" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_bnr_01.png" alt=""></a></div>
					</div>
					<div class="rightBox">
						<div class="footNav">
							<ul>
								<li><a href="<?php echo home_url(); ?>">HOME</a></li>
								<li><a href="<?php echo home_url(); ?>/feature/">選ばれる理由</a></li>
								<li><a href="<?php echo home_url(); ?>/service/">業務紹介</a></li>
								<li><a href="<?php echo home_url(); ?>/flow/">ご依頼の流れ</a></li>
							</ul>
							<ul>
								<li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
								<li><a href="<?php echo home_url(); ?>/recruit/">採用情報</a></li>
								<li><a href="<?php echo home_url(); ?>?sec01">最新情報</a></li>
								<li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footBtm">
					<div class="bnrList">
						<ul>
							<li><a href="https://www.aichi-brand.jp/" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/common/footer_bnr_02.png" alt=""></a></li>
							<li><img src="<?php bloginfo('template_url'); ?>/image/common/footer_bnr_03.png" alt=""></li>
						</ul>
					</div>
					<div class="copy">
						<p>&copy;2023 チヨダ工業株式会社.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- △footer△-->
	<?php wp_footer(); ?>
</body>

</html>