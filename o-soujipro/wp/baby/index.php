<?php
/*
Template Name: 産前産後ケア
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main id="baby">
		<div class="pageKvContainer">
			<div class="pageKvPanel">
				<div class="pageKvTitle">
					<h1>産前産後ケア<br />Baby.pro</h1>
				</div>
			</div>
		</div>
		<div class="sec01">
			<div class="secWrap01">
				<div class="pageSecTitleBox">
					<div class="pageSecTitle">
						<h2>産前産後の不安</h2>
					</div>
				</div>
				<div class="secBox">
					<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/baby/baby_sec01_photo.png" alt=""></div>
					<div class="txtBox">
						<h3>こんなお悩みありませんか？</h3>
						<ul>
							<li>ちゃんと子育て出来るか不安？</li>
							<li>色々な情報がありすぎてどれが本当なの？</li>
							<li>産後手伝いに両親が来れないけどやっていけるのか？</li>
							<li>ゆっくり寝たい‼</li>
							<li>赤ちゃんてこんなに泣くの？</li>
							<li>ゆっくりご飯を食べたい‼</li>
							<li>誰かと話したい‼</li>
							<li>上の子の赤ちゃん返りが大変！</li>
							<li>上の子のイヤイヤ期が始まって大変</li>
							<li>パパの仕事が忙しくワンオペ育児！</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sec02">
			<div class="secWrap02">
				<div class="secTitleBox">
					<h2>Baby.proの役割</h2>
					<p>Role</p>
				</div>
				<div class="topTxt">
					<div class="txt">
						<p>核家族世帯が増え人と人の関わり助け合いが減り情報の場がネット社会になり色々な情報が溢れる時代にどれが本当なのか？<br>不安になると思います！</p>
						<p>産後想像より大変でした！とおしゃる方もいれば、育児書道りです！とおしゃる方もいらっしゃいます。<br>子育ては一人一人違います。<br>子育てに悩まず、迷った時は一緒に解決していけたら理想だなと思います。</p>
						<p>Baby.proの役割はママの心に寄り添い無理に話さなくてもその空間に癒しを与えていけたらと思います。</p>
					</div>
				</div>
				<div class="planPanel">
					<h3>Baby.proのサービス内容</h3>
					<ul>
						<li>美容室、お買い物に行きたい場合お子さんとお留守番致しますのでゆっくりとしてきて下さい。<br>お子さんから目を離さずお守り致します。</li>
						<li>ママの要望に出来る限りお応え致します。</li>
						<li>家事はお任せ下さい。（簡単な水回り清掃、洗濯など）</li>
						<li>何かあった場合の賠償責任保険に加入しております。</li>
						<li>産後ケア終了でも引き続き家事代行に移行出来る。（次のステップは頑張るママをサポート）</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="sec03">
			<div class="secWrap02">
				<div class="secTitleBox">
					<h2>ここが違う！<br>Baby.proサービスの特徴</h2>
				</div>
				<div class="listBox">
					<ul>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/baby/baby_sec03_photo_01.png" alt=""></div>
							<dl>
								<dt>作り置きサービス</dt>
								<dd>数日分の作り置き（4～6品程）を2時間30分～承ります。お味噌汁1杯でもO.K</dd>
							</dl>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/baby/baby_sec03_photo_02.png" alt=""></div>
							<dl>
								<dt>家事代行だからこそ念入りにお掃除致します。</dt>
								<dd>土台は家事代行サービスなのでお掃除に関してはご安心ください。</dd>
							</dl>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/baby/baby_sec03_photo_03.png" alt=""></div>
							<dl>
								<dt>子育て経験から</dt>
								<dd>私自身が子育てに苦労しました（まだまだ苦労途中ですが）その経験と今まで多くのママと関わってきたので経験からお話しをしたいと思います。</dd>
							</dl>
						</li>
					</ul>
				</div>
				<div class="planPanel">
					<h3>新規ご契約キャンペーン</h3>
					<div class="setPanel">
						<h4>お試し産前産後ケア</h4>
						<div class="setBox">
							<?php
								$baby_cleaning_trial = get_field('baby_cleaning_trial');
								$baby_cleaning_trial_price = $baby_cleaning_trial['baby_cleaning_trial_price'] ?? '料金情報が設定されていません';
							?>
							<dl>
								<dt>2時間</dt>
								<dd><?php echo esc_html($baby_cleaning_trial_price); ?>円（税込、交通費込み）</dd>
								<dd>通常価格 6，000円</dd>
							</dl>
						</div>
					</div>
					<aside>
						<p>初回のみのお得なサービスです。<br>（一例　1時間掃除、洗濯、1時間ママの補助）</p>
					</aside>
				</div>
			</div>
		</div>
		<div class="sec04">
			<div class="secWrap02">
				<div class="secTitleBox">
					<h2>料金</h2>
					<p>Price</p>
				</div>
				<div class="planPanel">
					<?php
						$regular_baby = get_field('regular_baby');
					?>
					<div class="infoBox">
						<dl>
							<dt>対応範囲</dt>
							<dd>
								<p>家事全般、お子さんの預かり、上のお子さんの補助など</p>
							</dd>
						</dl>
						<dl>
							<dt>時間</dt>
							<dd>
								<p>1時間3,300円（税込）</p>
								<p>最低1．5時間～承ります</p>
							</dd>
						</dl>
						<dl>
							<dt>料金</dt>
							<dd>
								<?php if ($regular_baby && isset($regular_baby['regular_baby_fee'])): ?>
									<?php foreach ($regular_baby['regular_baby_fee'] as $fee): ?>
										<div class="box">
											<p><?php echo esc_html($fee['regular_baby_fee_frequency']); ?></p>
											<p><em><?php echo esc_html($fee['regular_baby_fee_price']); ?>円（税込）</em></p>
											<p>掃除・洗濯含む</p>
										</div>
									<?php endforeach; ?>
								<?php else: ?>
									<p>料金情報が設定されていません。</p>
								<?php endif; ?>
								<!-- <div class="box">
									<p>1週間に1回</p>
									<p><em>1時間2,750円（税込）</em></p>
									<p>掃除・洗濯含む</p>
								</div>
								<div class="box">
									<p>2週間に1回</p>
									<p><em>1時間2,860円（税込）</em></p>
									<p>掃除・洗濯含む</p>
								</div>
								<div class="box">
									<p>4週間に1回</p>
									<p><em>1時間2,970円（税込）</em></p>
									<p>掃除・洗濯含む</p>
								</div> -->
							</dd>
						</dl>
					</div>
					<aside>
						<p>川口市内のお客様で駐車場お持ちの方は無料となります。</p>
						<p>無い場合コインパーキング代のご負担をお願い致します。</p>
						<p>川口市内以外のお客様は交通費500円いただきます。</p>
					</aside>
				</div>
			</div>
		</div>
		<div class="faqSection">
			<div class="secWrap02">
				<div class="secTitleBox">
					<h2>よくあるご質問</h2>
					<p>FAQ</p>
				</div>
				<div class="faqPanelList">
					<div class="faqPanel">
						<dl>
							<dt>Q.</dt>
							<dd>赤ちゃんが泣き止まない</dd>
						</dl>
						<dl>
							<dt>A.</dt>
							<dd>赤ちゃんにも個人差はあります。3ヶ月頃からまとまって寝てくれるようになると昼、夜の区別がつき子育ても楽になります。1人1人個人差があって当然なので焦らずに行きましょう！</dd>
						</dl>
					</div>
					<div class="faqPanel">
						<dl>
							<dt>Q.</dt>
							<dd>ワンオペ育児どうしたらいい？</dd>
						</dl>
						<dl>
							<dt>A.</dt>
							<dd>無理に家事などやらなくて良い！産後は自分を最大限に甘やかす事です。<br>周りに頼る事、行政の支援なども利用してみて下さい。<br>産後は自分が思っているよりダメージが大きいです。無理すると産後の回復もおくれます。</dd>
						</dl>
					</div>
					<div class="faqPanel">
						<dl>
							<dt>Q.</dt>
							<dd>離乳食を食べなくなったどうしよう？</dd>
						</dl>
						<dl>
							<dt>A.</dt>
							<dd>順調に進んでいた離乳食が急に食べなくなる事は良くあります。<br>そんな、時は味を変える、少し硬さを変えてみるなど工夫する事で食べてくれる事良くあります。</dd>
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