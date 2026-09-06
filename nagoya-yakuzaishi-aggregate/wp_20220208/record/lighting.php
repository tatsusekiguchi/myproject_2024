<main class="registRecordMain registPostMain" id="registLighting">
	<?php
	$category = get_the_category();
	$cat_slug = $category[0]->category_nicename;
	$cat_name = $category[0]->cat_name;?>
	<h2><?php echo $cat_name;?></h2>
	<div class="formBox">
		<div class="wardBox">
			<dl class="inputItem">
				<dt>区選択</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('lighting_ward'); ?>
					</div>
					<span class="inputSubTxt">区</span>
				</dd>
			</dl>
		</div>
		<div class="schoolInfoBox">
			<div class="inputItemList">
				<dl class="inputItem">
					<dt>学校名</dt>
					<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('lighting_school_name'); ?>
					</div>
				</dd>
				</dl>
				<dl class="inputItem">
					<dt>校長名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_school_headmaster'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>学校薬剤師名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_pharmacist'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査日時</dt>
					<dd class="selectDate txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_date_year'); ?>
						</div>
						<span class="inputSubTxt">年</span>
						<div class="txtField">
							<?php the_field('lighting_date_month'); ?>
						</div>
						<span class="inputSubTxt">月</span>
						<div class="txtField">
							<?php the_field('lighting_date_day'); ?>
						</div>
						<span class="inputSubTxt">日</span>
						<div class="txtField">
							<?php the_field('lighting_date_yobi'); ?>
						</div>
						<span class="inputSubTxt">曜日</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>時刻</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php $radiofiled_lighting_ampm = get_field('lighting_ampm'); echo($radiofiled_lighting_ampm); ?>
						</div>
						<div class="txtField">
							<?php the_field('lighting_time_text'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>天候</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_weather'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>気温</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_temperature'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>照度計</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_illuminometer'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>測定範囲</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_range'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>照度計は</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php $radiofiled_lighting_illuminometer_type = get_field('lighting_illuminometer_type'); echo($radiofiled_lighting_illuminometer_type); ?>
						</div>
					</dd>
				</dl>
			</div>
		</div>
		<div class="lightingBox">
			<div class="inputItemBox">
				<div class="leftBox">
					<dl class="inputItem">
						<dt>教室名</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php the_field('lighting_grade'); ?>
							</div>
							<span class="inputSubTxt">年</span>
							<div class="txtField">
								<?php the_field('lighting_class'); ?>
							</div>
							<span class="inputSubTxt">組</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>黒板に向かっての廊下</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_lighting_corridor = get_field('lighting_corridor'); echo($radiofiled_lighting_corridor); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>カーテンの有・無、色</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_lighting_is_curtain = get_field('lighting_is_curtain'); echo($radiofiled_lighting_is_curtain); ?>
							</div>
							<div class="txtField">
								&nbsp;<?php the_field('lighting_curtain_color'); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>黒板照明具</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_lighting_light_blackboard = get_field('lighting_light_blackboard'); echo($radiofiled_lighting_light_blackboard); ?>
							</div>
							<div class="lightItemBox">
								<div>
									<span class="inputSubTxt"><?php the_field('lighting_light_blackboard_w'); ?></span>
									<span class="inputSubTxt">W</span>
								</div>
								<div>
									<span class="inputSubTxt"><?php the_field('lighting_light_blackboard_num'); ?></span>
									<span class="inputSubTxt">本</span>
								</div>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>教室照明具</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_lighting_light_classroom = get_field('lighting_light_classroom'); echo($radiofiled_lighting_light_classroom); ?>
							</div>
							<div class="lightItemBox">
								<div>
									<span class="inputSubTxt"><?php the_field('lighting_light_classroom_w'); ?></span>
									<span class="inputSubTxt">W</span>
								</div>
								<div>
									<span class="inputSubTxt"><?php the_field('lighting_light_classroom_num'); ?></span>
									<span class="inputSubTxt">本</span>
								</div>
							</div>
						</dd>
					</dl>
				</div>
				<div class="rightBox">
					<dl class="inputItem">
						<dt>黒板照度</dt>
						<dd class="txtFieldBox">
							<ul class="lightList">
								<li>
									<span class="inputSubTxt">最大</span>
									<div class="txtField">
										<?php the_field('lighting_light_blackboard_max'); ?>
									</div>
									<span class="inputSubTxt">LX</span>
								</li>
								<li>
									<span class="inputSubTxt">最小</span>
									<div class="txtField">
										<?php the_field('lighting_light_blackboard_min'); ?>
									</div>
									<span class="inputSubTxt">LX</span>
								</li>
								<li>
									<span class="inputSubTxt">最大・最小</span>
									<div class="txtField">
										<?php the_field('lighting_light_blackboard_minmax'); ?>
									</div>
									<span class="inputSubTxt">:1</span>
								</li>
							</ul>

						</dd>
					</dl>
					<dl class="inputItem">
						<dt>教室照度</dt>
						<dd class="txtFieldBox">
							<ul class="lightList">
								<li>
									<span class="inputSubTxt">最大</span>
									<div class="txtField">
										<?php the_field('lighting_light_classroom_max'); ?>
									</div>
									<span class="inputSubTxt">LX</span>
								</li>
								<li>
									<span class="inputSubTxt">最小</span>
									<div class="txtField">
										<?php the_field('lighting_light_classroom_min'); ?>
									</div>
									<span class="inputSubTxt">LX</span>
								</li>
								<li>
									<span class="inputSubTxt">最大・最小</span>
									<div class="txtField">
										<?php the_field('lighting_light_classroom_minmax'); ?>
									</div>
									<span class="inputSubTxt">:1</span>
								</li>
							</ul>

						</dd>
					</dl>
					<dl class="inputItem">
						<dt>まぶしさ</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_lighting_glare = get_field('lighting_glare'); echo($radiofiled_lighting_glare); ?>
							</div>
						</dd>
					</dl>
				</div>
			</div>
			<aside>
				<p>1.10月と2月の実施の内、1回は曇り又は雨の日に測定することが望ましい。</p>
				<p>2.測定する教室は学校が希望する教室とする。</p>
				<div class="reasonBox">
					<p>3. その教室を選んだ理由：<?php the_field('lighting_reason'); ?></p>
				</div>
			</aside>
		</div>
		<div class="figureBox"><img src="../image/common/record_lighting_figure.png" alt=""></div>
		<div class="attentionBox">
			<h3>基準及び記入上の注意</h3>
			<ul>
				<li>測定は、雨天又は曇天に照明器を全て点灯して測定し、最大照度と最小照度のみ記入すること。教室の照度は、上記図に示す9ヶ所に最も近い児童・生徒の机上で測定し、又黒板の照度は図の9ヶ所の垂直面照度を測定すること。</li>
				<li>最前列及び最後列の四隅の児童・生徒の椅子に腰掛けて、黒板を見て窓や光源がまぶしくないか黒板面が光っていないか注意すること。</li>
				<li>教室及びそれに準ずる場所の照度の下限値は 300LX とする。教室及び黒板の照度は 500LX以上が望ましい。</li>
				<li>スイッチを入れて点灯までに 3 秒以上かかる時はグローランプの取替えを、又蛍光灯直下1mの照度が500LX(蛍光灯40W2連の時は750Ⅸ)以下の場合は蛍光管の清掃又は取替えを指導すること。</li>
				<li>指導・助言したことを下記に記入すること。1部は本人の控、1部は学校の控、1部は集計用に支部長まで提出すること。</li>
			</ul>
		</div>
		<textarea placeholder="指導・助言" disabled><?php the_field('lighting_coaching'); ?></textarea>
	</div>
	<div class="btnListBox">
		<button class="btnPrint">印刷する</button>
	</div>
</main>