<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main id="top">
		<div class="topKvContainer">
			<div class="topKvPanel">
				<div class="topKvTitleBox">
					<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/top/kv_logo.png" alt=""></div>
					<h1>ご自分のくつろぎの空間<br>ご一緒に作りませんか？</h1>
				</div>
				<div class="topKvScroll">
					<div class="dotsContainer">
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
					</div>
					<p>SCROLL</p>
				</div>
			</div>
		</div>
		<div class="topSection">
			<div class="secWrap01">
				<div class="secBox">
					<h2>忙しいあなたの代わりに<br>家事を代行します</h2>
					<div class="txt">
						<p>現代では女性の社会進出が当たり前となり、仕事を頑張っている女性も多く見受けられます。<br>また、結婚したあとも働く方が多く殆どのご家庭が共働きです。<br>一方で家事は女性がやるものという風潮は昔とほぼ変わらずに<br class="pcBreak">仕事と家事の両立に苦労なさってる方が多くいます。<br>家事代行サービス「お掃除プロ」はそのような方をサポートします。</p>
					</div>
				</div>
			</div>
		</div>
		<div class="worrySection">
			<div class="photoBox">
				<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/worry_img.png" alt=""></div>
			</div>
			<div class="secWrap01">
				<div class="checkPanel">
					<div class="inner">
						<h2>こんなお悩みありませんか？</h2>
						<ul>
							<li>いつも帰りが遅くて散らかったまま …</li>
							<li>掃除をする時間がなくて、部屋の隅や棚の上にほこりがたまっている …</li>
							<li>子供が小さくて面倒を見ながらだと家事がはかどらない …</li>
							<li>洗濯物をたたむのが面倒でいつも出しっぱなし …</li>
							<li>掃除のモチベーションが上がらない …</li>
							<li>家事を他人に任せていることに罪悪感を感じる …</li>
							<li>単身赴任だから誰かに手伝ってほしい</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="messageContainer">
			<div class="messagePanel">
				<p>そんなあなたに<br class="spBreak">家事代行サービス<br class="spBreak">「お掃除プロ」</p>
			</div>
		</div>
		<div class="serviceSection">
			<div class="secWrap02">
				<div class="secTitleBox">
					<h2>サービスプラン</h2>
					<p>Service</p>
				</div>
				<div class="topTxt">
					<div class="txt">
						<p>必要な家事の種類、時間によって費用が異なります。<br>家事代行は高いというイメージがありますが、当社のサービスは好きな時に好きなだけ頼めるので予算に応じた依頼が可能です。<br>はじめてご利用いただく方に向けたお試しプランもございますので、お気軽にご依頼ください。</p>
					</div>
				</div>
				<div class="planPanel">
					<h3>家事代行お試しプラン</h3>
					<?php
						$page_id = 33;
						$home_cleaning_trial = get_field('home_cleaning_trial', $page_id);
						$home_cleaning_trial_price = $home_cleaning_trial['home_cleaning_trial_price'] ?? '料金情報が設定されていません';
					?>
					<div class="txt">
						<p>初回のお客様に限り、2時間まで<?php echo esc_html($home_cleaning_trial_price); ?>円（交通費込）で家事代行サービスをお試しいただけます。</p>
					</div>
					<div class="setPanel">
						<h4>家事代行お試し 水回り4点セット</h4>
						<div class="setBox">
							<dl>
								<dt>水回り4点</dt>
								<dd>2時間～</dd>
								<dd><?php echo esc_html($home_cleaning_trial_price); ?>円（税込 / 交通費込）</dd>
							</dl>
						</div>
					</div>
					<aside>
						<p>汚れの状態により2時間ではきれいにならない場合がございます。</p>
						<p>すでにサービスをご利用中のお客様は本キャンペーンはご利用になれません。</p>
						<p><em>対応エリア</em>外の方はお問い合わせください。</p>
					</aside>
					<div class="btnMore"><a href="<?php echo home_url(); ?>/service/">詳しくみる</a></div>
				</div>
				<div class="planList">
					<ul>
						<li><a href="<?php echo home_url(); ?>/service/#plan01">
								<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/service_plan_list_01.png" alt=""></div>
								<div class="ttl">
									<p>家事代行お試しプラン</p>
								</div>
							</a></li>
						<li><a href="<?php echo home_url(); ?>/service/#plan01">
								<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/service_plan_list_02.png" alt=""></div>
								<div class="ttl">
									<p>お掃除プラン</p>
								</div>
							</a></li>
						<li><a href="<?php echo home_url(); ?>/service/#plan01">
								<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/service_plan_list_03.png" alt=""></div>
								<div class="ttl">
									<p>整理収納プラン</p>
								</div>
							</a></li>
					</ul>
				</div>
				<div class="timeContainer accord">
					<div class="accordHead">
						<h3>サービス時間の目安</h3>
					</div>
					<div class="accordBody">
						<div class="planBox">
							<h4>お掃除プラン</h4>
							<div class="timeBox">
								<div class="box">
									<dl>
										<dt>お風呂</dt>
										<dd>60分～</dd>
									</dl>
									<dl>
										<dt>キッチン</dt>
										<dd>30分～60分</dd>
									</dl>
									<dl>
										<dt>トイレ1箇所</dt>
										<dd>15分～</dd>
									</dl>
									<dl>
										<dt>洗面台、洗面所</dt>
										<dd>20分～</dd>
									</dl>
								</div>
								<div class="box">
									<dl>
										<dt>リビング</dt>
										<dd>20分～40分</dd>
									</dl>
									<dl>
										<dt>お部屋（1箇所）</dt>
										<dd>20分～</dd>
									</dl>
									<dl>
										<dt>アイロンがけ（ハンカチ10枚）</dt>
										<dd>30分～</dd>
									</dl>
									<dl>
										<dt>お庭の草むしり<br>（夏場は作業は出来ません）</dt>
										<dd>1時間～</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="planBox">
							<h4>整理収納プラン</h4>
							<div class="timeBox">
								<div class="box">
									<dl>
										<dt>子供部屋</dt>
										<dd>2時間半～</dd>
									</dl>
									<dl>
										<dt>書類整理</dt>
										<dd>2時間半～</dd>
									</dl>
								</div>
								<div class="box">
									<dl>
										<dt>リビング</dt>
										<dd>2時間～</dd>
									</dl>
									<dl>
										<dt>お部屋（1箇所）</dt>
										<dd>2時間～</dd>
									</dl>
								</div>
							</div>
						</div>
						<aside>
							<p>お掃除プランのお勧めは2時間半～3時間です。</p>
							<p>整理収納プランは3時間～4時間位がお勧めです。</p>
						</aside>
					</div>
				</div>
			</div>
		</div>
		<div class="newSection">
			<div class="secWrap01">
				<div class="secTitleBox">
					<h2>新サービス</h2>
					<p>NEW</p>
				</div>
				<div class="newServiceList">
					<div class="newServiceItem"><a href="<?php echo home_url(); ?>/office/">
							<div class="photoBox">
								<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/new_img_01.png" alt=""></div>
								<div class="band blue">
									<p>中、小規模オフィス</p>
								</div>
							</div>
							<div class="txtBox">
								<h3>オフィス清掃（中、小規模オフィス）</h3>
								<div class="price">
									<p>￥3,300～（税込み）</p>
								</div>
								<aside>
									<p>価格は最低価格にて表示しています。汚れの度合いなどにより価格はご相談致します。</p>
									<p>お掃除プロのオフィス清掃は簡単な作業のみとなりますので価格もお安くご提供しております。詳しい詳細はお問い合わせ下さい。</p>
								</aside>
							</div>
						</a></div>
					<div class="newServiceItem"><a href="<?php echo home_url(); ?>/baby/">
							<div class="photoBox">
								<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/new_img_02.png" alt=""></div>
								<div class="band pink">
									<p>ママを最大限に甘やかすサービス</p>
								</div>
							</div>
							<div class="txtBox">
								<h3>産前産後ケア</h3>
								<div class="price">
									<p>1時間　￥3,300～（税込み）</p>
								</div>
								<div class="txt">
									<p>サービス内容<br>簡単な身の回りのお掃除、ママと赤ちゃんのサーポート<br>上のお子様お預かりサービス、作り置き</p>
								</div>
							</div>
						</a></div>
				</div>
			</div>
		</div>
		<?php
		$the_query = new WP_Query( array(
			'paged'          => get_query_var('paged') ? intval(get_query_var('paged')) : 1,
			'post_type'      => 'news',
			'posts_per_page' => 8,
		));
		if ($the_query->have_posts()) : ?>
			<div class="infoSection">
				<div class="secWrap02">
					<div class="secTitleBox">
						<h2>お知らせ</h2>
						<p>News</p>
					</div>

					<ul>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
									<span><?php the_title(); ?></span>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
					<div class="btnMore">
						<a href="<?php echo home_url(); ?>/newslist/"><span>お知らせ一覧</span></a>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		<div class="voiceSection">
			<div class="secWrap02">
				<div class="secTitleBox">
					<h2>お客様の声</h2>
					<p>Voice</p>
				</div>
				<div class="voicePanelList">
					<div class="voicePanel">
						<div class="voiceBox01">
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_person.png" alt=""></div>
							<dl>
								<dt>楽になりました。</dt>
								<dd>Aさん</dd>
							</dl>
						</div>
						<div class="voiceBox02">
							<div class="txt">
								<p>毎日仕事で忙しくお掃除をする時間がなかったときに、思い切って家事代行サービスを利用してみました。利用して以来、家事が楽になり、今では整理収納、断捨離なども合わせて利用して、快適な暮らしを手に入れています。</p>
							</div>
						</div>
					</div>
					<div class="voicePanel">
						<div class="voiceBox01">
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_person.png" alt=""></div>
							<dl>
								<dt>子どもとの時間を持てるようになりました。</dt>
								<dd>Iさん</dd>
							</dl>
						</div>
						<div class="voiceBox02">
							<div class="txt">
								<p>以前は仕事前と帰ってから家事をやっていましたが、今は1歳と3歳の子どもがいて、子育てをしながらの家事がキツく、じっとしていない子どもにイライラすることもよくありました。そんなとき小川さんと出会い家事代行を以来してから、子どもとの時間も持てるようになりました。ほんとに頼んで良かったです。</p>
							</div>
						</div>
					</div>
					<div class="voicePanel">
						<div class="voiceBox01">
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/voice_person.png" alt=""></div>
							<dl>
								<dt>整理収納で子ども部屋作り</dt>
								<dd>Yさん</dd>
							</dl>
						</div>
						<div class="voiceBox02">
							<div class="txt">
								<p>あらかた片付けて頂いたおかげで、自分でもメンテナンスしていく気力がわいてきました。娘とも相談しながら部屋づくりを楽しみたいと思います。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="faqSection" class="faqSection">
			<div class="secWrap02">
				<div class="secTitleBox">
					<h2>よくあるご質問</h2>
					<p>FAQ</p>
				</div>
				<div class="faqPanelList">
					<div class="faqPanel">
						<dl>
							<dt>Q.</dt>
							<dd>どんな家事をやってくれますか？</dd>
						</dl>
						<dl>
							<dt>A.</dt>
							<dd>掃除、洗濯、お庭の手入れまで幅広く対応しております。<br>掃除はお部屋のお掃除から、キッチン・バス・トイレ・洗面所など水回り部分まで至る所の掃除を代わりに行います。お庭の手入れはスタッフさんによって対応できないことがございます。どのようなサービスが対応可能かはご相談下さい。</dd>
						</dl>
					</div>
					<div class="faqPanel">
						<dl>
							<dt>Q.</dt>
							<dd>お掃除道具はどんな物が必要ですか？</dd>
						</dl>
						<dl>
							<dt>A.</dt>
							<dd>お掃除プロでは、普段お使いのお掃除道具、洗剤でお掃除致します。<br>ナチュラル洗剤も対応可能です、細かな道具は持参して参りますのでご安心下さい。<br>※スタッフの持ち物に抵抗のある方はご用意下さい。</dd>
						</dl>
					</div>
					<div class="faqPanel">
						<dl>
							<dt>Q.</dt>
							<dd>ハウスクリーニングのように綺麗になりますか？</dd>
						</dl>
						<dl>
							<dt>A.</dt>
							<dd>家事代行サービスは、ハウスクリーニングとは違い普段お使いの洗剤、道具を使用しますので汚れを落とすにも限界があります。落ちない事も沢山ありますのでご了承下さい。もちろん、ハウスクリーニングで綺麗にならなかった所を綺麗にした経験も御座いますのでお試し下さい。</dd>
						</dl>
					</div>
					<div class="faqPanel">
						<dl>
							<dt>Q.</dt>
							<dd>整理収納・断捨離プランとは？</dd>
						</dl>
						<dl>
							<dt>A.</dt>
							<dd>整理収納・断捨離とは整理収納だけでは収まるはずの物も収まりません。そこで、断捨離をしながら選別をして、収まるべき所に整理収納致します。お客様の動線確認をしながらリバウンドしない整理収納を目指します！</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<div class="cautionSection">
			<div class="secWrap02">
				<div class="secTitleBox">
					<h2>ご利用上の注意</h2>
				</div>
				<div class="cautionPanel">
					<ul>
						<li>定期契約のお客様は月末にご請求書をお送り致します。<br>お振込みは5日以内でよろしくお願い致します。</li>
						<li>万が一ご自宅の破損などをした場合はあいおいニッセイ同和損害賠償保険に加入しております。</li>
						<li>軌道にのるまで一人で回りますのでお客様のご要望にお応え出来ない場合が御座います。</li>
						<li>我が家にも子供達がおりますので急な体調不良等でお伺い出来ない事がありますのでご理解下さい。（日程変更なども承りますのでご相談下さい）</li>
						<li>キャンセル料について今の所は頂かないようにしておりますが、何度もキャンセルを繰り返すお客様に関してはご利用をご遠慮頂きます。</li>
						<li>定期利用のお客様は口座番引き落としかオンライン決済か現金をお選び頂けます。</li>
						<li>ハウスクリーニングのような機材を持ち込んでのお掃除は出来ません。</li>
						<li>小さなお子様をお持ちのお客様にお願いです。作業中はお子様から目を離さないようお願い致します。万が一事故等起きても責任は負いかねません。</li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>